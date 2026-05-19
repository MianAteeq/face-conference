<?php

namespace App\Http\Controllers;

use App\Models\ConferenceRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    /* =========================
    LOGIN PAGE
    ========================= */



    /* =========================
    LOGIN FUNCTION
    ========================= */

    public function loginPost(Request $request)
    {

        /* VALIDATION */

        $request->validate([

            'email' => 'required|email',
            'password' => 'required'

        ]);

        /* LOGIN ATTEMPT */

        $credentials = [

            'email' => $request->email,
            'password' => $request->password,
            'role' => 'user'

        ];

        if (Auth::guard('web')->attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->route('user.dashboard')
                ->with('success', 'Login successful');
        }

        /* LOGIN FAILED */

        return back()->withErrors([

            'email' => 'Invalid email or password'

        ])->withInput();
    }

    /* =========================
    DASHBOARD
    ========================= */

    public function dashboard()
    {

        $user = Auth::guard('web')->user();

       $conference = ConferenceRegister::with('cat')
            ->where('id', Auth::user()->conference_id)
            ->latest()
            ->first();

        /* =========================
        SPONSORED CATEGORY CHECK
        ========================= */

        $isSponsored = false;

        if($conference && $conference->cat){

            $categoryName = strtolower($conference->cat->name);

            if(str_contains($categoryName, 'sponsor') || 
               str_contains($categoryName, 'sponsored')){

                $isSponsored = true;

            }

        }

        return view('user-panel.dashboard', get_defined_vars());
    }

    /* =========================
    LOGOUT
    ========================= */

    public function logout(Request $request)
    {

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('user.login')
            ->with('success', 'Logout successful');
    }
}
