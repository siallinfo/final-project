<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        return view('admin.unit.index', ['units' => Unit::all()]);
    }
    public function create()
    {
        return view('admin.unit.create');
    }
    public function store(Request $request)
    {
        Unit::newUnit($request);
        return back()->with('message', 'New Unit Added Successfully.');
    }
    public function edit($id)
    {
        return view('admin.unit.index', ['unit' => Unit::find()]);
    }
    public function update(Request $request, $id)
    {
        Unit::updateUnit($request, $id);
        return redirect('/unit/index/')->wuth('message', 'Unit Updated Successfully.');
    }
    public function delete($id)
    {
        Unit::deleteUnit($id);
        return back()->with('message', 'Unit Deleted Successfully.');
    }
}
