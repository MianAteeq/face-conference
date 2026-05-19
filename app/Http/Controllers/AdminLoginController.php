<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{



    /**************** Login Route ***************/


    public function showLoginForm(){


        return view('auth.login',get_defined_vars());

    }
    /**************** Login Route ***************/


    public function loginSubmit(Request $request){

        $user_auth = Auth::attempt(
            [
                'email' => $request->email,
                'password' => $request->password
            ],
            $request->remember
        );

        if ($user_auth) {
                return redirect('admin/dashboard');
            }

        else {
                $errors = 'Please Enter Valid Email ID or Password.';
                return redirect('/login')->withErrors($errors);
            }

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }


    }

    public function logout(Request $request)  {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
