<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternalPageTypeController extends Controller
{
    //
    function index(){
        return view('admin.pages.internal_page');
    }
}
