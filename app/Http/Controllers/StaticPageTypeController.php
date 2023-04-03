<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageTypeController extends Controller
{
    //
    function index(){
        return view('admin.pages.static_page');
    }
}
