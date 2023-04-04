<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\DefaultPage;
use App\Models\InternalPage;
use App\Models\StaticPage;

class AdminPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $page = Page::all();
        return view('admin.pages.pages', ['page'=>$page]);
    }

        public function defaultIndex()
        {
            //
            $page = DefaultPage::all();
            return view('admin.pages.default_page', ['defaultpage'=>$page]);
        }

    public function internalIndex()
    {
        //
        $page = InternalPage::all();
        return view('admin.pages.internal_page', ['page'=>$page]);
    }
    public function staticIndex()
    {
        //
        $page = StaticPage::all();
        return view('admin.pages.static_page', ['page'=>$page]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        //
        $page = new Page;
        $default_page = new DefaultPage;
        $page->title = $req->defaultPageTitle;
        $page->slug = $req->defaultPageSlug;
        $page->page_type = $req->page_type;
        $page->meta_title = $req->defaultPageMetaTitle;
        $page->meta_desc = $req->defaultPageMetaDesc;
        $page->status = $req->optionEnabled;
        $page->publish_time = $req->optionPublishTime;
        $page->homepage = $req->optionHomepage;
        $page->navigation = $req->optionNavigation;
        $page->exact_url = $req->optionExacturl;
        $page->rules = $req->optionAllowedRules;
        $page->theme = $req->optionThemeLayout;
        $page->parent_page = $req->optionParentPage;
        $default_page->block_id = $req->block_id;
        $page->save();
        $default_page->save();
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
        //
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
