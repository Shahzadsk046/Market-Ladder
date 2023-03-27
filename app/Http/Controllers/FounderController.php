<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FounderController extends Controller
{
    //
    function index(){
        return view('about-founder');
    }
}
