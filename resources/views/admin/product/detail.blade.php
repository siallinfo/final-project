@extends('admin.master')

@section('body')

    <div class="page-wrapper">
        <div class="page-content-tab">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title-box">
                            <h4 class="page-title">Product Module</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Product Detail Information</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <table class="table table-hover table-bordered">
                                    <tr>
                                        <th><B>Product Id</B></th>
                                        <td>{{$product->id}}</td>
                                        <th><B>Product Code</B></th>
                                        <td>{{$product->code}}</td>
                                        <th><B>Regular Price</B></th>
                                        <td>BDT. {{$product->regular_price}}/-</td>
                                        <th><B>Selling Price</B></th>
                                        <td>BDT. {{$product->selling_price}}/-</td>
                                    </tr>
                                    <tr>
                                        <th><B>Category</B></th>
                                        <td>{{$product->category->name}}</td>
                                        <th><B>Sub-Category</B></th>
                                        <td>{{$product->subCategory->name}}</td>
                                        <th><B>Brand</B></th>
                                        <td>{{$product->brand->name}}</td>
                                        <th><B>Unit</B></th>
                                        <td>{{$product->unit->name}}</td>
                                    </tr>
                                    <tr>
                                        <th><B>Product Name</B></th>
                                        <td>{{$product->name}}</td>
                                        <th><B>Stock Amount</B></th>
                                        <td>{{$product->stock}}</td>
                                        <th><B>Short Description</B></th>
                                        <td>{{$product->short_description}}</td>
                                        <th><B>Long Description</B></th>
                                        <td>{{$product->long_description}}</td>
                                    </tr>
                                </table>
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
