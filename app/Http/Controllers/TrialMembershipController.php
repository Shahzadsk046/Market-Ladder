<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrialMembershipController extends Controller
{
    //
    function index(){
        return view('trial-signup');
    }
}
