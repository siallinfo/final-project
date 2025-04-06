@extends('admin.master')

@section('body')

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Product Module</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title">All Product Information</h4>
                                <div>
                                    <a href="{{route('product.create')}}" class="btn btn-sm btn-success" title="Add">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <h5 class="text-center text-success">{{session('message')}}</h5>
                                <div class="table-responsive">
                                    <table class="table" id="datatable_1">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>SL No.</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Stock</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->code}}</td>
                                                <td>{{$product->stock}}</td>
                                                <td><img src="{{asset($product->image)}}" alt="" height="50"></td>
                                                <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                                <td>
                                                    <a href="{{route('product.detail', ['id' => $product->id])}}" class="btn btn-sm btn-success" title="Detail">
                                                        <i class="fa fa-book"></i>
                                                    </a>
                                                    <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-sm btn-success" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-sm btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this category?')">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div><!-- container -->
        </div>
    </div>

@endsection
