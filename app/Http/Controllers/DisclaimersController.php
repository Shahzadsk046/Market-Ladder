<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisclaimersController extends Controller
{
    //
    function index(){
        return view('disclaimers');
    }
}
