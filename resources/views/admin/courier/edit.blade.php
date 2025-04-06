@extends('admin.master')

@section('body')

    <div class="page-wrapper">
        <div class="page-content-tab">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title-box">
                            <h4 class="page-title">Courier Module</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Courier form</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <h5 class="text-success text-center">{{session('message')}}</h5>
                                <div class="general-label">
                                    <form action="{{route('courier.update', ['id' => $courier->id])}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Courier Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="{{$courier->name}}" name="name" id="horizontalInput1" placeholder="Enter Category Name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Courier Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="{{$courier->address}}" name="address" id="horizontalInput2">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Courier Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="{{$courier->mobile}}" name="mobile" id="horizontalInput2">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Courier Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="{{$courier->email}}" name="email" id="horizontalInput2">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput2" class="col-sm-2 col-form-label">Courier Logo</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="image" id="horizontalInput2">
                                                <img src="{{asset($courier->image)}}" alt="" height="50">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput2" class="col-md-2 form-label">Publication Status</label>
                                            <div class="col-md-10">
                                                <label for=""><input type="radio" name="status" {{$courier->status == 1 ? 'checked' : ''}} value="1">  Published </label>
                                                <label for=""><input type="radio" name="status" {{$courier->status == 0 ? 'checked' : ''}} value="0">  Unpublished </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 ms-auto">
                                                <button type="submit" class="btn btn-de-primary">Update Courier Info</button>
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
