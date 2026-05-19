<?php

namespace App\Http\Controllers;

use App\Models\ConferenceRegister;
use App\Models\SupportTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function conferenceData()
    {

        return ConferenceRegister::with('cat')
            ->where('id', Auth::user()->conference_id)
            ->latest()
            ->first();
    }

    /* =========================================
    DASHBOARD
    ========================================= */

    public function dashboard()
    {

        $conference = $this->conferenceData();

        return view('user-panel.dashboard', compact('conference'));
    }

    /* =========================================
    MY REGISTRATION
    ========================================= */

    public function myRegistration()
    {

        $conference = $this->conferenceData();
        $user = Auth::guard('web')->user();

        return view('user-panel.my-registration', compact('conference', 'user'));
    }

    /* =========================================
    PAYMENT STATUS
    ========================================= */

    public function paymentStatus()
    {

        $conference = $this->conferenceData();
        $user = Auth::guard('web')->user();

        return view('user-panel.payment-status', compact('conference', 'user'));
    }

    /* =========================================
    UPLOAD RECEIPT
    ========================================= */

    public function uploadReceipt()
    {

        $conference = $this->conferenceData();
         $user = Auth::guard('web')->user();

        return view('user-panel.upload-receipt', compact('conference', 'user'));
    }

    /* =========================================
    UPLOAD RECEIPT POST
    ========================================= */

    public function uploadReceiptPost(Request $request)
    {

        $request->validate([

            'payment_proof' => 'required|mimes:jpg,jpeg,png,pdf|max:5000'

        ]);

        $conference = $this->conferenceData();

        $file = $request->file('payment_proof');

        $filename = time() . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('uploads/receipts'), $filename);

        $conference->update([

            'payment_proof' => 'uploads/receipts/' . $filename,
            'is_submit_again' => 1,
            'receipt_status' => 'PENDING'

        ]);

        return back()->with('success', 'Receipt uploaded successfully');
    }

    /* =========================================
    CERTIFICATE
    ========================================= */

    public function certificate()
    {

        $conference = $this->conferenceData();
        $user = Auth::guard('web')->user();

        return view('user-panel.certificate', compact('conference', 'user'));
    }

    /* =========================================
    PROFILE
    ========================================= */

    public function profile()
    {

        $conference = $this->conferenceData();
        $user = Auth::guard('web')->user();

        return view('user-panel.profile', compact('conference', 'user'));
    }

    /* =========================================
    SUPPORT
    ========================================= */

    public function support()
    {
        $user = Auth::guard('web')->user();

        return view('user-panel.support', compact('user'));
    }

    public function previewCertificate()
    {
        $certificateData = ConferenceRegister::where('id', auth()->user()->conference_id)
            ->first();

        $html = view('certificate.pdf', compact('certificateData'))->render();

        return response($html);
    }

    public function submit(Request $request)
    {

        /* VALIDATION */

        $request->validate([

            'subject' => 'required|max:255',
            'message' => 'required'

        ]);

        /* CONFERENCE DATA */

        $conference = ConferenceRegister::where(
            'email',
            Auth::user()->email
        )->latest()->first();

        /* SAVE SUPPORT */

        SupportTicket::create([

            'user_id' => Auth::id(),

            'conference_register_id' => $conference->id ?? null,

            'name' => $conference->name ?? Auth::user()->name,

            'email' => $conference->email ?? Auth::user()->email,

            'registration_no' => $conference->registration_no ?? null,

            'subject' => $request->subject,

            'message' => $request->message,

            'status' => 'OPEN'

        ]);

        return back()->with(
            'success',
            'Support request submitted successfully.'
        );

    }

   

/* =========================================
EDIT PROFILE
========================================= */

public function editProfile()
{

    $conference = ConferenceRegister::where(
        'id',
        auth()->user()->conference_id
    )->latest()->first();
    $user = Auth::guard('web')->user();

    return view(
        'user-panel.edit-profile',
        compact('conference', 'user')
    );

}

/* =========================================
UPDATE PROFILE
========================================= */

public function updateProfile(Request $request)
{

    $conference = ConferenceRegister::findOrFail($request->id);

    $request->validate([

        'phone_number' => 'required',
        'institution' => 'required',
        'qualifications' => 'required',
        'city' => 'required',
        'address' => 'required'

    ]);

    /* PROFILE IMAGE */

    if($request->hasFile('profile_pic')){

        $file = $request->file('profile_pic');

        $filename = time().'.'.$file->getClientOriginalExtension();

        $file->move(
            public_path('uploads/profile'),
            $filename
        );

        $conference->profile_pic =
            'uploads/profile/'.$filename;

    }

    /* UPDATE */

    $conference->phone_number = $request->phone_number;

    $conference->institution = $request->institution;

    $conference->qualifications = $request->qualifications;

    $conference->city = $request->city;

    $conference->address = $request->address;

    $conference->describe_you = $request->describe_you;

    $conference->save();

    return redirect()
        ->route('profile')
        ->with(
            'success',
            'Profile updated successfully.'
        );

}
}
