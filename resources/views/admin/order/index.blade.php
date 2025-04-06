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
                            <h4 class="page-title">Order Module</h4>
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
                                <h4 class="card-title">All Order Information</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <h5 class="text-center text-success">{{session('message')}}</h5>
                                <div class="table-responsive">
                                    <table class="table" id="datatable_1">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>SL No.</th>
                                            <th>Order Id</th>
                                            <th>Order Date</th>
                                            <th>Customer Info</th>
                                            <th>Order Total</th>
                                            <th>Order Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->order_date}}</td>
                                                <td>{{isset($order->customer->name) ? $order->customer->name : ' '}} <br/> {{isset($order->customer->mobile) ? $order->customer->mobile : ' '}} </td>
                                                <td>৳ {{number_format($order->order_total, 2)}}</td>
                                                <td>{{$order->order_status}}</td>
                                                <td>
                                                    <a href="{{route('admin.order-detail', ['id' => $order->id])}}" class="btn btn-sm btn-success">
                                                        <i class="fa fa-bookmark"></i>
                                                    </a>
                                                    <a href="{{route('admin.order-edit', ['id' => $order->id])}}" class="btn btn-sm btn-info {{$order->order_status == 'Complete' ? 'disabled' : ' '}}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{route('admin.order-invoice', ['id' => $order->id])}}" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-book"></i>
                                                    </a>
                                                    <a href="{{route('admin.download-invoice', ['id' => $order->id])}}" class="btn btn-sm btn-warning">
                                                        <i class="fa fa-print"></i>
                                                    </a>
                                                    <a href="{{route('admin.order-delete', ['id' => $order->id])}}" class="btn btn-sm btn-danger {{$order->order_status == 'Cancel' ? ' ' : 'disabled'}}" onclick="return confirm('Are you sure to delete this Order info?')">
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
