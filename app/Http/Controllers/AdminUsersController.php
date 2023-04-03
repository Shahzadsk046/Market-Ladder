<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    //
    function index(){
        return view('admin.users.users');
    }
}
