<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    //
    function index(){
        return view('admin.pages');
    }
}
