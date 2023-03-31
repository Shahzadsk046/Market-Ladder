<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewAreaBlocksController extends Controller
{
    //
    function index(){
        return view('admin.new-area-block');
    }
}
