@extends('admin.master')

@section('body')
    <div class="page-wrapper">
        <div class="page-content-tab">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title-box">
                            <h4 class="page-title">Sub-Category Module</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Sub-Category form</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="general-label">
                                    <form action="{{route('sub-category.update', ['id' => $sub_category->id])}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Category Name</label>
                                            <div class="col-sm-10">
                                                <select name="category_id" class="form-control" id="">
                                                    <option value="">-- Select Category -- </option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" @selected($category->id == $sub_category->category_id)> {{$category->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Sub-Category Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="{{$sub_category->name}}" name="name" id="horizontalInput1" placeholder="Enter Sub-Category Name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Sub-Category Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="description" class="form-control" id="" cols="30" rows="5">{{$sub_category->description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput2" class="col-sm-2 col-form-label">Sub-Category Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="image" id="horizontalInput2">
                                                <img src="{{asset($sub_category->image)}}" alt="" height="50">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput2" class="col-md-2 form-label">Publication Status</label>
                                            <div class="col-md-10">
                                                <label for=""><input type="radio" name="status" {{$sub_category->status == 1 ? 'checked' : ''}} value="1">  Published </label>
                                                <label for=""><input type="radio" name="status" {{$sub_category->status == 0 ? 'checked' : ''}} value="0">  Unpublished </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 ms-auto">
                                                <button type="submit" class="btn btn-de-primary">Update Sub-Category Info</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div>
                </div>
            </div>
        </div>
@endsection
