<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConferenceRegister;

class AdminController extends Controller
{


    /**************** Admin Dashboard ***************/


    public function dashboard() {


        $all_candidates=ConferenceRegister::where('registration_type','Conference')->count();
        $approve_candidates=ConferenceRegister::where('registration_type','Conference')->where('status','APPROVE')->count();
        $pending_candidates=ConferenceRegister::where('registration_type','Conference')->where('status','PENDING')->count();
        $reject_candidates=ConferenceRegister::where('registration_type','Conference')->where('status','REJECT')->count();

        $all_w_candidates=ConferenceRegister::where('registration_type','Workshop')->count();
        $approve_w_candidates=ConferenceRegister::where('registration_type','Workshop')->where('status','APPROVE')->count();
        $pending_w_candidates=ConferenceRegister::where('registration_type','Workshop')->where('status','PENDING')->count();
        $reject_w_candidates=ConferenceRegister::where('registration_type','Workshop')->where('status','REJECT')->count();
        
        $institutes=ConferenceRegister::where('registration_type','Conference')->get()->groupBy('institution');
        
        $chartData = [];

foreach ($institutes as $institution => $records) {
    $chartData[] = [
        'label' => $institution,
        'y' => $records->count(),
    ];
}

// return $chartData;
        
        
        
        

        return view('admin.dashboard',get_defined_vars());

    }
}
