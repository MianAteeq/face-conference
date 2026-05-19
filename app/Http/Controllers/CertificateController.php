<?php

namespace App\Http\Controllers;

use App\Models\ConferenceRegister;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class CertificateController extends Controller
{
    public function download()
    {
        $certificateData = ConferenceRegister::where('id', auth()->user()->conference_id)
            ->first();
        $html = view('certificate.pdf', compact('certificateData'))->render();

        $path = storage_path('app/certificate.pdf');

        Browsershot::html($html)

    ->setChromePath('/usr/bin/google-chrome')

    ->noSandbox()

    ->showBackground()

    ->landscape()

    ->format('A4')

    ->margins(0,0,0,0)

    ->save($path);

        return response()->download($path);
    }
}
