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
    public function show()
    {
        //
        return view('admin.blocks.view-blocks');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blocks = Block::where('id',$id)->get();
        return view('admin.blocks.edit-blocks', ['blocks' => $blocks]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $block = Block::find($request->id);
        // $block = new Block;
        $block->name = $request->blockName;
        $block->slug = $request->blockSlug;
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
        // DB::table("blocks")->delete($id);
        // return response()->json(['success'=>"Block Deleted successfully.", 'tr'=>'tr_'.$id]);
    }

    public function destroyMany(array $ids)
    {
        Block::destroy($ids);
        return redirect('blocks');
        // redirect or whatever...
    }

    // public function deleteAll(Request $request)
    // {
    //     $ids = $request->ids;
    //     DB::table("blocks")->whereIn('id',explode(",",$ids))->delete();
    //     return response()->json(['success'=>"Blocks Deleted successfully."]);
    // }
}
