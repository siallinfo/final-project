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
                            <h4 class="page-title">Countdown Banner Module</h4>
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
                                <h4 class="card-title">All Countdown Banner Information</h4>
                                <div>
                                    <a href="{{route('countdown-banner.create')}}" class="btn btn-sm btn-success">
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
                                            <th>Product Name</th>
                                            <th>Title</th>
                                            <th>Discount Text</th>
                                            <th>Image</th>
                                            <th>End Date</th>
                                            <th>Publication Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($countdown_banners as $countdown_banner)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$countdown_banner->product->name}}</td>
                                                <td>{{$countdown_banner->title}}</td>
                                                <td>{{$countdown_banner->discount_text}}</td>
                                                <td><img src="{{asset($countdown_banner->image)}}" alt="" height="50"></td>
                                                <td>{{$countdown_banner->end_date}}</td>
                                                <td>{{$countdown_banner->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                                <td>
                                                    <a href="{{route('countdown-banner.edit', ['id' => $countdown_banner->id])}}" class="btn btn-sm btn-success">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{route('countdown-banner.delete', ['id' => $countdown_banner->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this Banner?')">
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
