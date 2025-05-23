<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\OtherImage;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index', ['products' => Product::all()]);
    }
    public function create()
    {
        return view('admin.product.create',[
            'categories'        => Category::all(),
            'sub_categories'    => SubCategory::all(),
            'brands'            => Brand::all(),
            'units'             => Unit::all()
        ]);
    }
    public function getSubCategoryByCategory()
    {
        $categoryId     = $_GET['id'];
        $subCategories  = SubCategory::where('category_id', $categoryId)->get();
        return response()->json($subCategories);
    }
    public function store(Request $request)
    {
        $id = Product::newProduct($request);
        OtherImage::newOtherImage($id, $request->file('other_image'));
        return back()->with('message', 'New Product Added Successfully.');
    }
    public function detail($id)
    {
        return view('admin.product.detail', ['product' => Product::find($id)]);
    }
    public function edit($id)
    {
        return view('admin.product.edit', [
            'product'           => Product::find($id),
            'categories'        => Category::all(),
            'sub_categories'    => SubCategory::all(),
            'brands'            => Brand::all(),
            'units'             => Unit::all()
        ]);
    }
    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        if ($request->file('other_image'))
        {
            OtherImage::updateOtherImage($id, $request->file('other_image'));
        }
        return redirect('/product/index/')->with('message', 'Product Info Updated Successfully.');
    }
    public function delete($id)
    {
        Product::deleteProduct($id);
        OtherImage::deleteOtherImage($id);
        return back()->with('message', 'Product Deleted Successfully.');
    }
    public function filterBySubCategory($subcategory_id)
    {
        // Get the sub-category with the related products
        $subcategory = SubCategory::with('products')->find($subcategory_id);

        if (!$subcategory) {
            // If no sub-category found, return an empty array or show an error
            return view('website.products.index', ['products' => []]);
        }

        // Get the products for the selected sub-category
        $products = $subcategory->products;

        // Return the products to the view
        return view('website.products.index', [
            'products' => $products,
            'subcategory' => $subcategory
        ]);
    }
}
