<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthlyMembershipController extends Controller
{
    //
    function index(){
        return view('monthly-signup');
    }
}
