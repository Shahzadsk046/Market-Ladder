<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrentETFTradesController extends Controller
{
    //
    function index(){
        return view('current-etf-trades');
    }
}
