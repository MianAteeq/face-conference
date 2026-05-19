<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ConferenceImage;
use App\Models\ConferenceRegister;
use App\Models\ConferenceWorkshop;
use App\Models\Subscriber;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use App\Models\Contact;
use App\Models\RegisterType;
use App\Models\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Hash;

class ConferenceRegisterController extends Controller
{
    //


    public function contactStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'phone'      => 'required|string|max:20',
            'message'    => 'required|string',
        ]);

        // Optional: save to DB
        Contact::create($request->all());

        // Optional: send email
        // Mail::raw("New contact form submission:\n\n{$request->message}", function ($mail) use ($request) {
        //     $mail->to('your@email.com')
        //          ->subject('New Contact Form Submission from ' . $request->first_name);
        // });

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }

    public function submit(Request $request)
    {

        $registrationType = $request->has('workshop_id') && !empty($request->workshop_id)
            ? 'workshop'
            : 'conference';

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            // 'father_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            // 'cnic_passport' => ['required', 'string', 'max:255','unique:'.ConferenceRegister::class],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique('conference_registers', 'email')
                    ->where(function ($query) use ($registrationType) {
                        $query->where('status', '!=', 'REJECTED')
                            ->where('registration_type', $registrationType);
                    }),
            ],
            'file.*' => ['required', 'image', 'max:10048'],


        ]);







        $file_path = null;


        $data = $request->except('file', 'workshop_id', 'wpforms', 'payment_proof');
        $data['payment_proof'] = $file_path;

        $filepath = null;

        if (isset($request['picture'])) {

            $image = $request['picture'];

            $filename = time() . Str::random(10) . '.' . $image->getClientOriginalExtension();


            $path = public_path('uploads/' . $filename);

            $filepath = 'uploads/' . $filename;

            Image::make($image->getRealPath())->save($path);
        }

        $accompanyingPersons = [];
        if ($request->accompanying_count > 0) {
            for ($i = 1; $i <= $request->accompanying_count; $i++) {
                $person = $request->input("accompanying_person_$i");
                if ($person) {
                    $accompanyingPersons[] = $person;
                }
            }
        }

        $register_type = RegisterType::find($request->category)->price;

        // Default discount
        $discount = 0;

        // return $request->all();

        // Check promo code (case insensitive)
        $discount = (!empty($request->promoCode) && strcasecmp(trim($request->promoCode), 'PADS') === 0) ? $register_type * 0.10 : 0;






        $conference = ConferenceRegister::create([
            'prefix' => $request['prefix'],
            'name' => $request['first_name'],
            'father_name' => $request['last_name'],
            'age_group' => $request['age_group'],
            'gender' => $request['gender'],
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            'whatsapp_number' => $request['whatsapp_number'],
            'registration_no' => $request['registration_no'],
            'address' => $request['address'],
            'city' => $request['city'],
            'country' => $request['country'],
            'qualifications' => $request['qualification'],
            'institution' => $request['institute_name'],
            'accompanying_count' => $request['accompanying_count'],
            'describe_you' => $request['description'],
            'payment_method' => $request['payment_method'],
            'category' => $request['category'],
            'registration_type' => $registrationType,
            'profile_pic' => $filepath,
            'accompanying' => json_encode($accompanyingPersons),
            'discount' => $discount,

        ]);

        // foreach ($request['file'] as $key => $file) {
        if (isset($request['file'])) {
            $image = $request['file'];

            $filename = time() . Str::random(10) . '.' . $image->getClientOriginalExtension();


            $path = public_path('uploads/' . $filename);

            $file_path = 'uploads/' . $filename;

            Image::make($image->getRealPath())->save($path);

            ConferenceImage::create([

                'conference_id' => $conference['id'],
                'image' => $file_path
            ]);
        }
        // }

        if (isset($request['workshop_id'])) {
            foreach ($request['workshop_id'] as $key => $workshop_id) {


                ConferenceWorkshop::create([

                    'conference_id' => $conference['id'],
                    'workshop_id' => $workshop_id
                ]);
            }
        }

         $mailData = [
            'first_name'    => $conference->name,
            'father_name'    => $conference->father_name,
             'email'         => $conference->email,
             'phone_number'  => $conference->phone_number,
         ];

       

        // $phone =  $conference['phone_number'];
        // // $phone =  "+923302345699";
        // $text = "Dear {$conference['name']},\n\n"
        //     . "Thank you for registering for the Pakistan Dental Association 14th International & 34th National Dental Conference.\n\n"
        //     . "Your registration has been successfully received and is currently under review by our verification team."
        //     . "You will receive a confirmation message once your registration and payment (if applicable) have been verified.\n\n"

        //     . "Best regards,\nPakistan Dental Association";

        // $response = $this->sendMessage($phone, $text);



        session()->flash('success', 'Conference Register  Successfully !');

        return redirect()->route('success.page')
            ->with('success', 'Registration Successful!')
            ->with('user', [
                'registration_no' => 'PDA-2025-' . rand(1000, 9999),
                'name' => $conference->name . ' ' . $conference->father_name,
                'email' => $conference->email,
                'phone' => $conference->phone_number,
                'cat' => $conference['cat'],
                'workshops' => $conference['workshops'],
                'payment_method' => 'Bank Transfer',
                'images' => $conference['images']
            ]);
    }


    public function our_backup_database()
    {

        $mysqlHostName      = env('DB_HOST');
        $mysqlUserName      = env('DB_USERNAME');
        $mysqlPassword      = env('DB_PASSWORD');
        $DbName             = env('DB_DATABASE');
        $backup_name        = "backup.sql";
        $tables             = array("users"); //here your tables...

        $connect = new \PDO("mysql:host=$mysqlHostName;dbname=$DbName;charset=utf8", "$mysqlUserName", "$mysqlPassword", array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        $get_all_table_query = "SHOW TABLES";
        $statement = $connect->prepare($get_all_table_query);
        $statement->execute();
        $result = $statement->fetchAll();

        $output = '';
        foreach ($tables as $table) {
            $show_table_query = "SHOW CREATE TABLE " . $table . "";
            $statement = $connect->prepare($show_table_query);
            $statement->execute();
            $show_table_result = $statement->fetchAll();

            foreach ($show_table_result as $show_table_row) {
                $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
            }
            $select_query = "SELECT * FROM " . $table . "";
            $statement = $connect->prepare($select_query);
            $statement->execute();
            $total_row = $statement->rowCount();

            for ($count = 0; $count < $total_row; $count++) {
                $single_result = $statement->fetch(\PDO::FETCH_ASSOC);
                $table_column_array = array_keys($single_result);
                $table_value_array = array_values($single_result);
                $output .= "\nINSERT INTO $table (";
                $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
                $output .= "'" . implode("','", $table_value_array) . "');\n";
            }
        }
        $file_name = 'database_backup_on_' . date('y-m-d') . '.sql';
        $file_handle = fopen($file_name, 'w+');
        fwrite($file_handle, $output);
        fclose($file_handle);
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file_name));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_name));
        ob_clean();
        flush();
        readfile($file_name);
        unlink($file_name);
    }

    public function store(Request $request)
    {
        // return $request;
        // $request->validate([
        //     'email' => 'required|email|unique:subscribers,email',
        // ]);

        Subscriber::create([
            'email' => $request->email,
        ]);
        session()->flash('message', 'Thank you for subscribing!');

        return back()->with('message', 'Thank you for subscribing!');
    }

    public function sendMessage($to, $message)
    {
        $apiKey = env('WA_KEY');
        $url = 'https://www.wasenderapi.com/api/send-message';

        $client = new Client();

        try {
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type'  => 'application/json',
                    'Accept'        => 'application/json',
                ],
                'json' => [
                    'to'   => $to,
                    'text' => $message,
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (RequestException $e) {
            return [
                'error' => true,
                'message' => $e->getMessage(),
            ];
        }
    }

   
}
