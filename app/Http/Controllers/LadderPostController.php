<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LadderPostController extends Controller
{
    //
    function index(){
        return view('ladder-post');
    }
}
