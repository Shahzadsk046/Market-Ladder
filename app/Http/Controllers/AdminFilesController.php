<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminFilesController extends Controller
{
    //
    function index(){
        return view('admin.files');
    }
}
