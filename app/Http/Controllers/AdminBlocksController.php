<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBlocksController extends Controller
{
    //
    function index(){
        return view('admin.blocks.blocks');
    }
}
