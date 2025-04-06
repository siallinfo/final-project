@extends('admin.master')

@section('body')

    <div class="page-wrapper">
        <div class="page-content-tab">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title-box">
                            <h4 class="page-title">Countdown Banner Module</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title">Edit Countdown Banner form</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="general-label">
                                    <form action="{{route('countdown-banner.update', ['id' => $countdown_banner->id])}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Product Name</label>
                                            <div class="col-sm-10">
                                                <select name="product_id" class="form-control" id="">
                                                    <option value="">-- Select Product -- </option>
                                                    @foreach($products as $product)
                                                        <option value="{{$product->id}}" @selected($product->id == $countdown_banner->product_id)> {{$product->name}} - ৳ {{number_format($product->selling_price, 2)}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="{{$countdown_banner->title}}" name="title" id="horizontalInput1" placeholder="Enter Countdown Banner Title">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Discount Text</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="discount_text" value="{{$countdown_banner->discount_text}}" class="form-control" placeholder="Enter Discount Text">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="description" class="form-control" id="" cols="30" rows="5">{{$countdown_banner->description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput2" class="col-sm-2 col-form-label">Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="image" id="horizontalInput2">
                                                <img src="{{asset($countdown_banner->image)}}" alt="" height="100">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput2" class="col-sm-2 col-form-label">End Date</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" value="{{ \Carbon\Carbon::parse($countdown_banner->end_date)->format('Y-m-d') }}" name="end_date" id="horizontalInput2">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput2" class="col-md-2 form-label">Publication Status</label>
                                            <div class="col-md-10">
                                                <label for=""><input type="radio" name="status" value="1" {{$countdown_banner->status == 1 ? 'checked' : ' '}}>  Published </label>
                                                <label for=""><input type="radio" name="status" value="0" {{$countdown_banner->status == 0 ? 'checked' : ' '}}>  Unpublished </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 ms-auto">
                                                <button type="submit" class="btn btn-de-primary">Update Countdown Banner Info</button>
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
