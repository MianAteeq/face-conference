<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\RegisterType;
use Illuminate\Http\Request;
use App\Models\ConferenceImage;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ConferenceRegister;
use App\Models\ConferenceWorkshop;
use App\Models\SupportTicket;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image as Image;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Psr7\Request as LaravelRequest;

class CandidateController extends Controller
{
    //


    public function allCandidate(Request $request)
    {


        $candidates = ConferenceRegister::where('registration_type', '!=', 'Workshop')->with('cat')->orderBy('id', 'asc')->get();

        return view('admin.customer.list', get_defined_vars());
    }
    public function allWorkshopCandidate(Request $request)
    {


        $candidates = ConferenceRegister::where('registration_type', 'Workshop')->orderBy('id', 'desc')->get();
        $candidate_groups = ConferenceRegister::where('registration_type', 'Workshop')->orderBy('id', 'desc')->get()->groupBy('type.name');

        return view('admin.customer.w_list', get_defined_vars());
    }
    public function allCandidateEdit($id)
    {


        $candidate = ConferenceRegister::with('type')->find($id);

        //   return Carbon::parse($candidate['created_at'])->format('Y-m-d');

        if (Carbon::parse($candidate['created_at'])->format('Y-m-d') < "2024-03-16") {

            $types = RegisterType::whereDate('start_date', '>=', '2024-02-01')->whereDate('end_date', '<=', '2024-03-14')->where('type', 'Conference')->get();
            $types_shops = RegisterType::whereDate('start_date', '>=', '2024-02-01')->whereDate('end_date', '<=', '2024-03-14')->where('type', 'Workshop')->get();
        } else {

            $types = RegisterType::whereDate('start_date', '>=', '2024-03-15')->whereDate('end_date', '<=', '2024-03-31')->where('type', 'Conference')->get();
            $types_shops = RegisterType::whereDate('start_date', '>=', '2024-03-15')->whereDate('end_date', '<=', '2024-03-31')->where('type', 'Workshop')->get();
        }

        return view('admin.customer.edit', get_defined_vars());
    }
    public function create()
    {






        return view('admin.customer.create', get_defined_vars());
    }
    public function allCandidateView($id)
    {


        $candidate = ConferenceRegister::with('type')->find($id);

        if (Carbon::now()->format('Y-m-d') < "2024-03-15") {

            $types = RegisterType::whereDate('start_date', '>=', '2024-02-01')->whereDate('end_date', '<=', '2024-03-14')->where('type', 'Conference')->get();
            $types_shops = RegisterType::whereDate('start_date', '>=', '2024-02-01')->whereDate('end_date', '<=', '2024-03-14')->where('type', 'Workshop')->get();
        } else {

            $types = RegisterType::whereDate('start_date', '>=', '2024-03-15')->whereDate('end_date', '<=', '2024-03-31')->where('type', 'Conference')->get();
            $types_shops = RegisterType::whereDate('start_date', '>=', '2024-03-15')->whereDate('end_date', '<=', '2024-03-31')->where('type', 'Workshop')->get();
        }

        return view('admin.customer.view', get_defined_vars());
    }
    public function allCandidatedelete($id)
    {


        $candidate = ConferenceRegister::with('type')->find($id);

        $candidate->delete();

        return response()->json([
            'success' => true,
            'message' => 'Category Delete'
        ]);
    }
    public function allCandidateUpdate(Request $request)
    {


        // return $request;

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'father_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'cnic_passport' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],

        ]);


        $file_path = ConferenceRegister::find($request['id'])->payment_proof;

        $qualifications = $request['qualifications'];

        if ($request['registration_type'] == "Workshop") {
            $qualifications = $request['qualification'][0];
        }

        $data = $request->except('file', 'qualification');
        $data['payment_proof'] = $file_path;
        $data['qualifications'] = $qualifications;
        $data['prefix'] = $qualifications == 4 ? $request['prefix'] : "null";

        ConferenceRegister::find($request['id'])->update($data);

        if (isset($request['file'])) {
            foreach ($request['file'] as $key => $file) {
                $image = $file;

                $filename = time() . Str::random(10) . '.' . $image->getClientOriginalExtension();


                $path = public_path('uploads/' . $filename);

                $file_path = 'uploads/' . $filename;

                Image::make($image->getRealPath())->save($path);

                ConferenceImage::create([

                    'conference_id' => $request['id'],
                    'image' => $file_path
                ]);
            }
        }
        if ($request['registration_type'] == "Workshop") {
            ConferenceWorkshop::where('conference_id', $request['id'])->delete();
            foreach ($request['qualification'] as $key => $workshop_id) {


                ConferenceWorkshop::create([

                    'conference_id' => $request['id'],
                    'workshop_id' => $workshop_id
                ]);
            }
        }

        session()->flash('success', 'Update Successfully !');

        return redirect()->back();
    }
    public function pendingCandidate(Request $request)
    {


        $candidates = ConferenceRegister::where('registration_type', '!=', 'Workshop')->orderBy('id', 'asc')->where('status', 'PENDING')->get();


        return view('admin.customer.pending', get_defined_vars());
    }
    public function receiptPendingCandidate(Request $request)
    {


        $candidates = ConferenceRegister::where('registration_type', '!=', 'Workshop')->orderBy('id', 'asc')->where('is_submit_again', '1')->get();


        return view('admin.customer.receipt_pending', get_defined_vars());
    }


    public function pendingWorkshopCandidate(Request $request)
    {


        $candidates = ConferenceRegister::orderBy('id', 'desc')->where('registration_type', 'Workshop')->where('status', 'PENDING')->get();
        $candidate_groups = ConferenceRegister::orderBy('id', 'desc')->where('registration_type', 'Workshop')->where('status', 'PENDING')->get()->groupBy('type.name');

        return view('admin.customer.w_pending', get_defined_vars());
    }
    public function approveCandidate(Request $request)
    {


        // $candidates = ConferenceRegister::where('registration_type', '!=', 'Workshop')->orderBy('cn_register_no', 'asc')->where('status', 'APPROVE')->get();

        $lastFriday = Carbon::now()->previous(Carbon::FRIDAY)->startOfDay();

        $candidates = ConferenceRegister::where('registration_type', '!=', 'Workshop')
            ->where('status', 'APPROVE')

            ->orderBy('cn_register_no', 'asc')
            ->get();

        $institutes = ConferenceRegister::where('registration_type', 'Conference')->where('status', 'APPROVE')->get()->groupBy('institution');

        $chartData = [];

        foreach ($institutes as $institution => $records) {
            $chartData[] = [
                'label' => $institution,
                'y' => $records->count(),
            ];
        }
        $total = 0;
        $total_discount = 0;

        foreach ($candidates as $candidate) {

            $candidateTotal = getTotalValue($candidate['workshops'], $candidate);

            if ($candidate['accompanying_count'] > 0) {
                $candidateTotal += $candidate['accompanying_count'] * 5000;
            }

            // deduct candidate discount
            $candidateTotal -= ($candidate['discount'] ?? 0);
            $total_discount += ($candidate['discount'] ?? 0);

            $total += $candidateTotal;
        }


        // return $total;

        return view('admin.customer.approve', get_defined_vars());
    }
    public function approveWorkshopCandidate(Request $request)
    {


        $candidates = ConferenceRegister::orderBy('cn_register_no', 'asc')->where('registration_type', 'Workshop')->where('status', 'APPROVE')->get();
        $candidate_groups = ConferenceRegister::orderBy('cn_register_no', 'asc')->where('registration_type', 'Workshop')->where('status', 'APPROVE')->get()->groupBy('type.name');
        $total = 0;
        foreach ($candidates as $key => $candidate) {


            if (count($candidate['workshops']) > 1) {
                foreach ($candidate['workshops'] as $key => $candidat_e) {
                    $total += $candidat_e->work->price - (($candidat_e->work->price * 15) / 100);
                }
            } else if (count($candidate['workshops']) == 1) {
                foreach ($candidate['workshops'] as $key => $candidat_e) {
                    $total += $candidat_e->work->price;
                }
            } else {
                $total += $candidate->type->price;
            }
        }

        return view('admin.customer.w_approve', get_defined_vars());
    }

    public function rejectedCandidate(Request $request)
    {


        $candidates = ConferenceRegister::where('registration_type', '!=', 'Workshop')->orderBy('id', 'desc')->where('status', 'REJECT')->get();

        return view('admin.customer.reject', get_defined_vars());
    }
    public function rejectedWorkShopCandidate(Request $request)
    {


        $candidates = ConferenceRegister::orderBy('id', 'desc')->where('registration_type', 'Workshop')->where('status', 'REJECT')->get();
        $candidate_groups = ConferenceRegister::orderBy('id', 'desc')->where('registration_type', 'Workshop')->where('status', 'REJECT')->get()->groupBy('type.name');

        return view('admin.customer.w_reject', get_defined_vars());
    }

    protected function registerUserInPDA($user)
    {
        header('Content-Type: application/json');

        $client = new \GuzzleHttp\Client();
        $url = 'https://n10n.fissionmonster.com/webhook/16a19ec2-7edd-4a28-bbe8-9b1eeedabda3';

        $payload = [
            "title"           => $user['prefix'],
            "firstname"       => $user['name'],
            "lastname"        => $user['father_name'],
            "email"           => $user['email'],
            "password"        => "password123",
            "gender"          => $user['gender'],
            "contactNumber"   => $user['phone_number'],
            "whatsappNumber"  => $user['phone_number'],
            "address"         => $user['address'],
            "country"         => 'Pakistan',
            "city"            => $user['city'],
            "qualification"   => $user['qualifications'],
            "specialty"       => $user['describe_you'],
            "PMDC"            => $user['registration_no'] ?? ' ',
            "clinicName"      => $user['institution'],
            "eventId"         => 1
        ];

        try {
            $response = $client->post($url, ['json' => $payload]);
            $data = json_decode($response->getBody(), true);

            return  $data;
            json_encode([
                'success' => $data['success'] ?? true,
                'status'  => $response->getStatusCode(),
                'message' => $data['message'] ?? 'User registered successfully',
                'data'    => $data
            ], JSON_PRETTY_PRINT);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $statusCode = $e->getResponse()->getStatusCode();
            $responseBody = $e->getResponse()->getBody()->getContents();
            $error = json_decode($responseBody, true);

            // Specific handling for 409 Conflict
            if ($statusCode === 409) {
                return json_encode([
                    'success' => false,
                    'status'  => 409,
                    'message' => $error['message'] ?? 'User already exists',
                    'error'   => $error
                ], JSON_PRETTY_PRINT);
            }

            // Generic error response
            return json_encode([
                'success' => false,
                'status'  => $statusCode,
                'message' => $error['message'] ?? 'An error occurred while creating the user',
                'error'   => $error
            ], JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            // Handle non-HTTP errors
            return json_encode([
                'success' => false,
                'status'  => 500,
                'message' => 'Unexpected error: ' . $e->getMessage()
            ], JSON_PRETTY_PRINT);
        }
    }


    function approveCandidatePayment($id)
    {


        $candidate = ConferenceRegister::find($id);

        $response = Http::withHeaders([
            'X-API-Key' => 'pdaxatk',
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $candidate['token']
        ])->post('https://n10n.fissionmonster.com/webhook/44029bbe-10c3-493c-baae-fc207c63af05', [
            'uniqueCode' => $candidate['code'],
        ]);
        $data = $response->json();

        if ($data['success'] === false) {
            session()->flash('error', 'Payment Approve UnSuccessfully !');
            return redirect()->back();
        } else {


            $user = ConferenceRegister::find($id);
            $user['is_paymnet'] = 1;
            $user->update();
            session()->flash('success', 'Payment Approve Successfully !');
            return redirect()->back();
        }
    }



    function approveCandidates($id)
    {




        $candidate = ConferenceRegister::find($id);
        if (count($candidate['workshops']) == 0) {
            $latestOrder = ConferenceRegister::where('status', 'APPROVE')->where('registration_type', 'conference')->orderBy('cn_id', 'desc')->first();
            if ($candidate['cn_register_no'] == null) {
                $candidate->cn_register_no = 'C-' . str_pad($latestOrder ? $latestOrder->cn_id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
                // $candidate->cn_register_no='C-'. str_pad(4, 5, "0", STR_PAD_LEFT);
                // $candidate->cn_id=4;
                $candidate->cn_id = $latestOrder ? $latestOrder->cn_id + 1 : 0 + 1;
                $candidate->status = "APPROVE";
                $candidate->update();
            }
            $customPaper = array(0, 0, 500.00, 300.80);
            $data = ConferenceRegister::with('type')->find($id);
            $total = 0;
            $total = $data['cat']['price'];

            if ($candidate['accompanying_count'] > 0) {

                $total += $candidate['accompanying_count'] * 5000;
            }

            $pdf = Pdf::loadView('pdf.invoice', get_defined_vars())->setPaper($customPaper, 'landscape');
            $content = $pdf->download('invoice.pdf');
            file_put_contents('pdf/' . time()  . ".pdf", $content);
            $fileName = time() . '.pdf';

            $pdfPath = public_path('pdf/' . $fileName);

            $imagePath = public_path('conference schedule.jpeg');

            file_put_contents($pdfPath, $content);

            Mail::send('mail.email', get_defined_vars(), function ($message) use (
                $candidate,
                $pdfPath,
                $imagePath
            ) {

                $message->to($candidate['email'])
                    ->subject('Register');

                // PDF
                if (file_exists($pdfPath)) {
                    $message->attach($pdfPath);
                }

                // Image
                if (file_exists($imagePath)) {
                    $message->attach($imagePath);
                }
            });

            $phone = $candidate['phone_number'];
            $text = "Dear {$candidate['name']},\n\n"
                . "We are delighted to confirm your registration for the Pakistan Dental Association 14th International & 34th National Dental Conference.\n"
                . "Your participation adds great value, and we look forward to welcoming you.\n\n"
                . "Conference: Pakistan Dental Association 14th International & 34th National Dental Conference\n"
                . "Date: 26–28 Dec 2025\n"
                . "Venue: Expo Center Lahore\n"
                . "Registration ID: {$candidate['cn_register_no']}\n\n"
                . "Thank you,\nPakistan Dental Association";
            $response = $this->sendMessage($phone, $text);
        } else {
            $latestOrder = ConferenceRegister::where('status', 'APPROVE')->where('registration_type', 'workshop')->orderBy('w_id', 'desc')->first();

            $candidate->cn_register_no = 'W-' . str_pad($latestOrder ? $latestOrder->w_id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
            $candidate->w_register_no = 'W-' . str_pad($latestOrder ? $latestOrder->w_id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
            $candidate->w_id = $latestOrder ? $latestOrder->w_id + 1 : 0 + 1;
            $candidate->status = "APPROVE";
            $candidate->update();
            $customPaper = array(0, 0, 500.00, 300.80);

            $data = ConferenceRegister::with('type')->find($id);
            $total = 0;
            $total = $data['cat']['price'];

            if ($candidate['accompanying_count'] > 0) {

                $total += $candidate['accompanying_count'] * 5000;
            }

            $pdf = Pdf::loadView('pdf.invoice', get_defined_vars())->setPaper($customPaper, 'landscape');
            $content = $pdf->download('invoice.pdf');
            file_put_contents('pdf/' . time()  . ".pdf", $content);

            $fileName = time() . '.pdf';

            $pdfPath = public_path('pdf/' . $fileName);

            $imagePath = public_path('conference schedule.jpeg');

            file_put_contents($pdfPath, $content);

            Mail::send('mail.email', get_defined_vars(), function ($message) use (
                $candidate,
                $pdfPath,
                $imagePath
            ) {

                $message->to($candidate['email'])
                    ->subject('Register');

                // PDF
                if (file_exists($pdfPath)) {
                    $message->attach($pdfPath);
                }

                // Image
                if (file_exists($imagePath)) {
                    $message->attach($imagePath);
                }
            });
        }
        session()->flash('success', 'Conference Approve Successfully !');
        return redirect()->back();
    }
    function rejectCandidates($id)
    {
        $candidate = ConferenceRegister::findOrFail($id);

        $candidate->status = 'REJECT';
        $candidate->save();

        $mailData = [
            'candidate' => $candidate
        ];

        Mail::send('mail.reject', $mailData, function ($message) use ($candidate) {
            $message->to($candidate->email)
                ->subject('Conference Registration Update – Face By Surgeons');
        });

        session()->flash('success', 'Conference Rejected Successfully!');

        return redirect()->back();
    }
    function moveToPending($id)
    {

        $candidate = ConferenceRegister::find($id);

        $candidate->status = "PENDING";

        $candidate->update();


        session()->flash('success', 'Conference Move to Pending Successfully !');

        return redirect()->back();
    }


    public function conferenceType()
    {
        $conferences = RegisterType::all();


        return view('admin.customer.conference', get_defined_vars());
    }
    public function conferenceEdit($id)
    {


        $conference = RegisterType::find($id);

        return view('admin.customer.conference_edit', get_defined_vars());
    }
    public function conferenceUpdate(Request $request)
    {




        RegisterType::find($request['id'])->update([
            "name" => $request['name'],
            "order_no" => $request['order_no'],
            "type" => $request['type'],
            "price" => $request['price'],
            'start_date' => Carbon::parse($request['start_date'])->format('Y-m-d H:i:s'),
            'end_date' => Carbon::parse($request['end_date'])->format('Y-m-d H:i:s')

        ]);

        session()->flash('success', 'Conference Type Update Successfully !');

        return redirect()->back();
    }
    public function conferenceStore(Request $request)
    {




        RegisterType::create([
            "name" => $request['name'],
            "order_no" => $request['order_no'],
            "type" => $request['type'],
            "price" => $request['price'],
            'start_date' => Carbon::parse($request['start_date'])->format('Y-m-d H:i:s'),
            'end_date' => Carbon::parse($request['end_date'])->format('Y-m-d H:i:s')

        ]);

        session()->flash('success', 'Conference Type Create Successfully !');

        return redirect()->route('admin.conference.type');
    }

    public function sendEmail()
    {


        $candidates = ConferenceRegister::orderBy('cn_register_no', 'asc')->where('status', 'APPROVE')->where('email', '!=', '')->where('is_email', 0)->get();


        return view('admin.send_mail', get_defined_vars());
    }
    public function sendEmailSubmit(Request $request)
    {

        // return $request;

        foreach ($request['emails'] as $key => $email) {

            $data = [
                'body' => $request->body
            ];
            $file =  public_path('schedule.pdf');
            Mail::send('mail.email_2', ['data' => $data], function ($m) use ($email, $request, $file) {
                $m->to($email)->subject($request['subject']);
                $m->attach($file);
            });

            ConferenceRegister::whereIn('email', $request['emails'])->update([
                'is_email' => 1
            ]);
        }


        return redirect()->back();
    }


    public function download($id)
    {

        // $candidate=ConferenceRegister::find($id);
        $candidate = ConferenceRegister::find($id);

        // $customPaper = array(0,0,500.00,300.80);

        //  $data=ConferenceRegister::with('type')->find($id);

        // $pdf = Pdf::loadView('pdf.invoice',get_defined_vars())->setPaper($customPaper, 'landscape');
        // $content=$pdf->download('invoice.pdf');
        //  file_put_contents('pdf/' .time()  . ".pdf", $content);
        //     $files = [

        //         public_path('pdf/' .  time() . ".pdf"),
        //     ];


        //         Mail::send('mail.email', get_defined_vars(), function ($send) use ($candidate,$files)  {
        //             $send->to($candidate['email'])->subject("Register");
        //             foreach ($files as $file) {
        //                 $send->attach($file);
        //             }
        //         });

        $customPaper = array(0, 0, 500.00, 300.80);

        $data = ConferenceRegister::with('type')->find($id);
        $total = 0;

        $total = $data['cat']['price'];

        if ($candidate['accompanying_count'] > 0) {

            $total += $candidate['accompanying_count'] * 5000;
        }


        $total -= ($candidate['discount'] ?? 0);

        $pdf = Pdf::loadView('pdf.invoice', get_defined_vars())->setPaper($customPaper, 'landscape');
        return $content = $pdf->download('C' . sprintf("%04d", $data['cn_id']) . '.pdf');
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
    public function approveReceipt($id)
    {

        $conference = ConferenceRegister::findOrFail($id);

        $conference->update([

            'receipt_status' => 'APPROVE'

        ]);

        return back()->with('success', 'Receipt approved');
    }

    public function rejectReceipt($id)
    {

        $conference = ConferenceRegister::findOrFail($id);

        $conference->update([

            'receipt_status' => 'REJECT'

        ]);

        return back()->with('success', 'Receipt rejected');
    }


    public function adminSupportTickets()
{

    $tickets = SupportTicket::latest()->paginate(20);

    return view(
        'admin.customer.support',
        compact('tickets')
    );

}

 public function supportShow($id)
    {

        $ticket = SupportTicket::findOrFail($id);

        return view(
            'admin.customer.show',
            compact('ticket')
        );

    }

    /* =========================================
    PENDING
    ========================================= */

    public function supportPending($id)
    {

        $ticket = SupportTicket::findOrFail($id);

        $ticket->update([

            'status' => 'PENDING'

        ]);

        return back()->with(
            'success',
            'Ticket marked as pending.'
        );

    }

    /* =========================================
    CLOSE
    ========================================= */

    public function supportClose($id)
    {

        $ticket = SupportTicket::findOrFail($id);

        $ticket->update([

            'status' => 'CLOSED'

        ]);

        return back()->with(
            'success',
            'Ticket closed successfully.'
        );

    }
}
