<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwingTradingETFController extends Controller
{
    //
    function index(){
        return view('swing-trading-with-etf');
    }
}
