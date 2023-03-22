<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrentStockTradesController extends Controller
{
    //
    function index(){
        return view('current-stock-trades');
    }
}
