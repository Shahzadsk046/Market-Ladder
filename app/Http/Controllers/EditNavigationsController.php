<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditNavigationsController extends Controller
{
    //
    function index(){
        return view('admin.navigations.edit-nav');
    }
}
