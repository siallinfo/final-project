<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\Customer;
use Session;
use App\Models\CountdownBanner;

class WebsiteController extends Controller
{
    public function index()
    {
        $customer = Customer::find(Session::get('customer_id'));
        $banner = CountdownBanner::latest()->first();

        return view('website.home.index', [
//            'categories'          => Category::with('subCategories')->latest()->get(),
            'categories'            => Category::all(),
            'category_products'     => Category::with('products')->take(3)->get(),
//            'shop_categories'     => Category::limit(4)->get(),
            'sub_categories'        => SubCategory::latest()->get(),
            'hero_sliders'          => Banner::where(['banner_status' => 1, 'status' => 1])->latest()->get(),
            'new_arrivals'          => Banner::where(['banner_status' => 2, 'status' => 1])->latest()->get(),
            'featured_collections'  => Product::all(),
            'products'              => Product::latest()->get(),
            'customer'              => $customer,
            'countdown_banner'      => $banner,
        ]);
    }

    public function category()
    {
        $perPage = 15;
        return view('website.category.index', [
            'categories'        => Category::latest()->get(),
            'brands'            => Brand::all(),
            'products'          => Product::latest()->paginate($perPage),
            'sub_categories'    => SubCategory::latest()->get(),
        ]);
    }
    public function subCategory($id)
    {
        return view('website.sub-category.index', [
            'category'            => Category::find($id),
            'sub_categories'      => SubCategory::where('category_id', $id)->get(),
        ]);
    }
    public function collection()
    {
        return view('website.collection.index', [
            'categories'        => Category::latest()->get(),
            'shop_categories'   => Category::all(),
        ]);
    }
    public function productDetail($id)
    {
        return view('website.product-detail.index', [
            'product'           => Product::find($id),
            'categories'        => Category::latest()->get(),
            'sub_categories'    => SubCategory::latest()->get(),
        ]);
    }
    public function about()
    {
        return view('website.about.index');
    }
    public function contact()
    {
        return view('website.contact.index');
    }
    public function service()
    {
        return view('website.service.index');
    }
    public function faq()
    {
        return view('website.faq.index');
    }
    public function wishlist()
    {
        return view('website.wishlist.index');
    }
}
