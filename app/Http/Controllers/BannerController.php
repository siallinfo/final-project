<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        return view('admin.banner.index', ['banners' => Banner::all()]);
    }
    public function create()
    {
        return view('admin.banner.create', ['categories' => Category::latest()->get()]);
    }
    public function store(Request $request)
    {
        Banner::newBanner($request);
        return back()->with('message', 'New Banner Created Successfully.');
    }
    public function edit($id)
    {
        return view('admin.banner.edit', [
            'categories' => Category::all(),
            'banner'     => Banner::find($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        Banner::updateBanner($request, $id);
        return redirect('/banner/index/')->with('message', 'Banner Info Updated Successfully.');
    }
    public function delete($id)
    {
        Banner::deleteBanner($id);
        return back()->with('message', 'Banner Deleted Successfully.');
    }
}
