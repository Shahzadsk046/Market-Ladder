<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultPageTypeController extends Controller
{
    //
    function index(){
        return view('admin.pages.default_page');
    }
}
