@extends('admin.master')

@section('body')
    <div class="page-wrapper">
        <div class="page-content-tab">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title-box">
                            <h4 class="page-title">Banner Module</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Banner form</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="general-label">
                                    <form action="{{route('banner.update', ['id' => $banner->id])}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Category Name</label>
                                            <div class="col-sm-10">
                                                <select name="category_id" class="form-control" id="">
                                                    <option value="">-- Select Category -- </option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" @selected($category->id == $banner->category_id)> {{$category->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput2" class="col-md-2 form-label">Banner Status</label>
                                            <div class="col-md-10">
                                                <label for=""><input type="radio" name="banner_status" {{$banner->banner_status == 1 ? 'checked' : '' }} value="1">  Hero Slider </label>
                                                <label for=""><input type="radio" name="banner_status" {{$banner->banner_status == 2 ? 'checked' : '' }} value="2">  New Arrival </label>
                                                <label for=""><input type="radio" name="banner_status" {{$banner->banner_status == 3 ? 'checked' : '' }} value="3">  Add Banner </label>
                                                <label for=""><input type="radio" name="banner_status" {{$banner->banner_status == 4 ? 'checked' : '' }} value="4">  Special Banner </label>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Banner Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="description" class="form-control" id="" cols="30" rows="5">{{$banner->description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput2" class="col-sm-2 col-form-label">Banner Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="image" id="horizontalInput2">
                                                <img src="{{asset($banner->image)}}" alt="" height="50">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput2" class="col-md-2 form-label">Publication Status</label>
                                            <div class="col-md-10">
                                                <label for=""><input type="radio" name="status" {{$banner->status == 1 ? 'checked' : ''}} value="1">  Published </label>
                                                <label for=""><input type="radio" name="status" {{$banner->status == 0 ? 'checked' : ''}} value="0">  Unpublished </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 ms-auto">
                                                <button type="submit" class="btn btn-de-primary">Update Banner Info</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
