<?php

namespace App\Http\Controllers;

use App\Models\ConferenceRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ConferenceController extends Controller
{
     public function createUser()
    {

        $conferences = ConferenceRegister::where('status', 'APPROVE')
            ->get();

        /* =====================================
        CHECK USER EXISTS
        ===================================== */

        foreach ($conferences as $conference) {

        $checkUser = User::where(
            'email',
            $conference->email
        )->first();

        if($checkUser){

            return back()->with(
                'error',
                'User already exists.'
            );

        }

        /* =====================================
        PASSWORD
        ===================================== */

        $password = rand(100000,999999);

        /* =====================================
        CREATE USER
        ===================================== */

        $user = User::create([

            'name' => $conference->name,

            'email' => $conference->email,

            'password' => Hash::make($password),
            'string_password' => $password,
            'conference_id' => $conference->id,

            'role' => 'user'

        ]);

        /* =====================================
        OPTIONAL SAVE USER ID
        ===================================== */

       

        /* =====================================
        RETURN
        ===================================== */

        }

        return back()->with(
            'success',
            'User created successfully. Password: '
        );

    }
}
