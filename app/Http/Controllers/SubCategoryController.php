<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.sub-category.index', ['sub_categories' => SubCategory::all()]);
    }
    public function create()
    {
        return view('admin.sub-category.create', ['categories' => Category::all()]);
    }
    public function store(Request $request)
    {
        SubCategory::newSubCategory($request);
        return back()->with('message', 'Sub-Category Added Successfully.');
    }
    public function edit($id)
    {
        return view('admin.sub-category.edit', [
            'sub_category'  => SubCategory::find($id),
            'categories'    => Category::all()
        ]);
    }
    public function update(Request $request, $id)
    {
        SubCategory::updateSubCategory($request, $id);
        return redirect('/sub-category/index/')->with('message', 'Sub-category Info updated Successfully.');
    }
    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return back()->with('message', 'Sub-category Deleted Successfully.');
    }
}
