<?php

namespace App\Http\Controllers;

use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminBlocksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public $isDisabled = true;
    public function index()
    {
        $blocks = Block::all();
        //
        return view('admin.blocks.blocks', ['blocks' => $blocks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        //
        $block = new Block;
        $block->name = $req->blockname;
        $block->slug = $req->blockslug;
        $block->blockdata = $req->blockblockdata;
        $block->description = $req->blockdesc;
        $block->save();
        return redirect('blocks');
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
    // public function show(string $id)
    public function show($id)
    {
        //
        $blocks = Block::where('id', $id)->get();
        return view('admin.blocks.view-blocks', ['blocks' => $blocks]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blocks = Block::where('id', $id)->get();
        return view('admin.blocks.edit-blocks', ['blocks' => $blocks]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $block = Block::find($request->id);
        $block->name = $request->blockName;
        $block->slug = $request->blockSlug;
        $block->blockdata = $request->blockBlockdata;
        $block->description = $request->blockDesc;
        $block->save();
        return redirect('blocks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req)
    {
        //
        $ids = $req->ids;

        Block::whereIn('id', $ids)->delete();
        return redirect('blocks');
    }
}
