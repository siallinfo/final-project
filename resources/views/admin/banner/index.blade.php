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
                            <h4 class="page-title">Banner Module</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title">All Banner Information</h4>
                                <div>
                                    <a href="{{route('banner.create')}}" class="btn btn-sm btn-success" title="Add">
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
                                            <th>Banner Status</th>
                                            <th>Banner Description</th>
                                            <th>Banner Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($banners as $banner)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$banner->category->name}}</td>
                                                <td>
                                                    @if($banner->banner_status == 1)
                                                        Hero Slider
                                                    @elseif($banner->banner_status == 2)
                                                        New Arrival
                                                    @elseif($banner->banner_status == 3)
                                                        Add Banner
                                                    @elseif($banner->banner_status == 4)
                                                        Special Banner
                                                    @endif
                                                </td>
                                                <td>{{$banner->description}}</td>
                                                <td><img src="{{asset($banner->image)}}" alt="" height="50"></td>
                                                <td>{{$banner->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                                <td>
                                                    <a href="{{route('banner.edit', ['id' => $banner->id])}}" class="btn btn-sm btn-success">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{route('banner.delete', ['id' => $banner->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this category?')">
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
