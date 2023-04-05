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
        return view('admin.pages.pages', ['pages' => $page]);
    }

    public function defaultIndex()
    {
        //
        $page = DefaultPage::all();
        return view('admin.pages.default_page', ['defaultpage' => $page]);
    }

    public function internalIndex()
    {
        //
        $page = InternalPage::all();
        return view('admin.pages.internal_page', ['page' => $page]);
    }
    public function staticIndex()
    {
        //
        $page = StaticPage::all();
        return view('admin.pages.static_page', ['page' => $page]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        //
    }

    public function createDefault(Request $req)
    {
        //
        $page = new Page;
        $default_page = new DefaultPage;
        $page->title = $req->defaultPageTitle;
        $page->slug = $req->defaultPageSlug;
        $page->page_type = ($req->page_type == "internal_page" ? "Internal Page Type" : ($req->page_type == "static_page" ? "Static Page Type" : "Default Page Type") );
        $page->meta_title = $req->defaultPageMetaTitle;
        $page->meta_desc = $req->defaultPageMetaDesc;
        $page->status = ($req->optionEnabled == "on" ? 1 : 0);
        $page->publish_time = \Carbon\Carbon::parse($req->optionPublishTime)->format('Y-m-d H:i:s') ;
        $page->homepage = ($req->optionHomepage == "on" ? 1 : 0);
        $page->navigation = ($req->optionNavigation == "on" ? 1 : 0);
        $page->exact_url = ($req->optionExacturl == "on" ? 1 : 0);
        $page->rules = $req->optionAllowedRules;
        $page->theme = ($req->optionThemeLayout  == "Dark" ? 1 : 0);
        $page->parent_page = ($req->optionParentPage == "on" ? 1 : 0);
        $default_page->block_id = $req->block_id;
        $page->save();
        $default_page->save();
        return redirect('pages');
    }

    public function createInternal(Request $req)
    {
        //
        $page = new Page;
        $internal_page = new InternalPage;
        $page->title = $req->internalPageTitle;
        $page->slug = $req->internalPageSlug;
        $page->page_type = ($req->page_type == "internal_page" ? "Internal Page Type" : ($req->page_type == "static_page" ? "Static Page Type" : "Default Page Type") );
        $page->meta_title = $req->internalPageMetaTitle;
        $page->meta_desc = $req->internalPageMetaDesc;
        $page->status = ($req->optionEnabled == "on" ? 1 : 0);
        $page->publish_time = \Carbon\Carbon::parse($req->optionPublishTime)->format('Y-m-d H:i:s') ;
        $page->homepage = ($req->optionHomepage == "on" ? 1 : 0);
        $page->navigation = ($req->optionNavigation == "on" ? 1 : 0);
        $page->exact_url = ($req->optionExacturl == "on" ? 1 : 0);
        $page->rules = $req->optionAllowedRules;
        $page->theme = ($req->optionThemeLayout  == "Dark" ? 1 : 0);
        $page->parent_page = ($req->optionParentPage == "on" ? 1 : 0);
        $internal_page->block_id = $req->block_id;
        $internal_page->visibility = ($req->displayHeader == "on" ? 1 : 0);
        $internal_page->file_path = $req->header_bg_image;
        $internal_page->heading_text = $req->headerHeading;
        $internal_page->paragraph_text = $req->headerPara;
        $internal_page->banner = $req->banner;
        $page->save();
        $internal_page->save();
        return redirect('pages');
    }

    public function createStatic(Request $req)
    {
        //
        $page = new Page;
        $static_page = new StaticPage;
        $page->title = $req->staticPageTitle;
        $page->slug = $req->staticPageSlug;
        $page->page_type = ($req->page_type == "internal_page" ? "Internal Page Type" : ($req->page_type == "static_page" ? "Static Page Type" : "Default Page Type") );
        $page->meta_title = $req->staticPageMetaTitle;
        $page->meta_desc = $req->staticPageMetaDesc;
        $page->status = ($req->optionEnabled == "on" ? 1 : 0);
        $page->publish_time = \Carbon\Carbon::parse($req->optionPublishTime)->format('Y-m-d H:i:s') ;
        $page->homepage = ($req->optionHomepage == "on" ? 1 : 0);
        $page->navigation = ($req->optionNavigation == "on" ? 1 : 0);
        $page->exact_url = ($req->optionExacturl == "on" ? 1 : 0);
        $page->rules = $req->optionAllowedRules;
        $page->theme = ($req->optionThemeLayout  == "Dark" ? 1 : 0);
        $page->parent_page = ($req->optionParentPage == "on" ? 1 : 0);
        $static_page->block_id = $req->block_id;
        $static_page->visibility = ($req->displayHeader == "on" ? 1 : 0);
        $static_page->file_path = $req->header_bg_image;
        $static_page->heading_text = $req->headerHeading;
        $static_page->paragraph_text = $req->headerPara;
        $static_page->banner = $req->banner;
        $page->save();
        $static_page->save();
        return redirect('pages');
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
