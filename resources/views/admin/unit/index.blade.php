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
                            <h4 class="page-title">Unit Module</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <div class="card-header">
                                <h4 class="card-title">All Unit Information</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <h5 class="text-center text-success">{{session('message')}}</h5>
                                <div class="table-responsive">
                                    <table class="table" id="datatable_1">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>SL No.</th>
                                            <th>Unit Name</th>
                                            <th>Unit Description</th>
                                            <th>Publication Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($units as $unit)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$unit->name}}</td>
                                                <td>{{$unit->description}}</td>
                                                <td>{{$unit->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                                <td>
                                                    <a href="{{route('unit.create')}}" class="btn btn-sm btn-success">
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                    <a href="{{route('unit.edit', ['id' => $unit->id])}}" class="btn btn-sm btn-success">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{route('unit.delete', ['id' => $unit->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this category?')">
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
