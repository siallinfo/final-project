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
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title">Add Banner form</h4>
                                <div>
                                    <a href="{{route('banner.index')}}" class="btn btn-sm btn-success" title="Manage">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                </div>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <h5 class="text-success text-center">{{session('message')}}</h5>
                                <div class="general-label">
                                    <form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Category Name</label>
                                            <div class="col-sm-10">
                                                <select name="category_id" class="form-control" id="">
                                                    <option value="">-- Select Category -- </option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}"> {{$category->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput2" class="col-md-2 form-label">Banner Status</label>
                                            <div class="col-md-10">
                                                <label for=""><input type="radio" name="banner_status" value="1">  Hero Slider </label>
                                                <label for=""><input type="radio" name="banner_status" value="2">  New Arrival </label>
                                                <label for=""><input type="radio" name="banner_status" value="3">  Add Banner </label>
                                                <label for=""><input type="radio" name="banner_status" value="4">  Special Banner </label>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Banner Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput2" class="col-sm-2 col-form-label">Banner Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="image" id="horizontalInput2">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput2" class="col-md-2 form-label">Publication Status</label>
                                            <div class="col-md-10">
                                                <label for=""><input type="radio" name="status" value="1">  Published </label>
                                                <label for=""><input type="radio" name="status" value="0">  Unpublished </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 ms-auto">
                                                <button type="submit" class="btn btn-de-primary">Add New Banner</button>
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
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

@endsection
