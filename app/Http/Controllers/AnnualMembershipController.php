<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnualMembershipController extends Controller
{
    //
    function index(){
        return view('annual-signup');
    }
}
