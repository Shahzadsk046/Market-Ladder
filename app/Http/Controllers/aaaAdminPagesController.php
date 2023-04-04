<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class AdminPagesController extends Controller
{
    //
    function index(){
        $page = Page::all();
        return view('admin.pages.pages', ['defaultpage'=>$page]);
        // return view('admin.pages.pages');
    }
}
