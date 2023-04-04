<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNavigationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.navigations.navigations');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         // get the shark
        //  $nav = Navigations::find($id);

         // show the edit form and pass the nav
        //  return View::make('admin.navigations.edit-nav')
        //      ->with('nav', $nav);
        //
        // $nav = Navigations::findOrFail($id);
        // return ("<h1>Hello World</h1>");
        return view('admin.navigations.edit-nav');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
