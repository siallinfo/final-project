<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\CountdownBanner;
use App\Models\Product;
use Illuminate\Http\Request;

class CountdownBannerController extends Controller
{
    public function index()
    {
        return view('admin.countdown-banner.index', ['countdown_banners' => CountdownBanner::all()]);
    }
    public function create()
    {
        return view('admin.countdown-banner.create', ['products' => Product::latest()->get()]);
    }
    public function store(Request $request)
    {
        CountdownBanner::createNewCountdownBanner($request);
        return back()->with('message', 'New Countdown Banner Created Successfully.');
    }
    public function edit($id)
    {
        return view('admin.countdown-banner.edit', [
            'products'            => Product::all(),
            'countdown_banner'    => CountdownBanner::find($id),
        ]);
    }
    public function update(Request $request, $id)
    {
        CountdownBanner::updateCountdownBanner($request, $id);
        return redirect('/countdown-banner/index/')->with('message', 'Countdown Banner Info Updated Successfully.');
    }
    public function delete($id)
    {
        CountdownBanner::deleteCountdownBanner($id);
        return back()->with('message', 'Countdown Banner Deleted Successfully.');
    }
}
