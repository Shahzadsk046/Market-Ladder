<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNavigationsController extends Controller
{
    //
    function index(){
        return view('admin.navigations.navigations');
    }
}
