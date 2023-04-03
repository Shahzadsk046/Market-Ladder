<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewUserController extends Controller
{
    //
    function index(){
        return view('admin.users.new_user');
    }
}
