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
                            <h4 class="page-title">Sub-Category Module</h4>
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
                                <h4 class="card-title">All Sub-Category Information</h4>
                                <div>
                                    <a href="{{route('sub-category.create')}}" class="btn btn-sm btn-success">
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
                                            <th>Category Name</th>
                                            <th>Sub-Category Name</th>
                                            <th>Category Description</th>
                                            <th>Category Image</th>
                                            <th>Publication Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sub_categories as $sub_category)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{isset($sub_category->category->name) ? $sub_category->category->name : ''}}</td>
                                                <td>{{$sub_category->name}}</td>
                                                <td>{{$sub_category->description}}</td>
                                                <td><img src="{{asset($sub_category->image)}}" alt="" height="50"></td>
                                                <td>{{$sub_category->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                                <td>
                                                    <a href="{{route('sub-category.edit', ['id' => $sub_category->id])}}" class="btn btn-sm btn-success">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{route('sub-category.delete', ['id' => $sub_category->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this sub-category?')">
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
