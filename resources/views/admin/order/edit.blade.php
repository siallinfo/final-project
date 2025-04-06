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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title">Order Edit Form</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <h5 class="text-center text-success">{{session('message')}}</h5>
                                <div class="table-responsive">
                                    <form action="{{route('admin.order-update', ['id' => $order->id])}}" method="POST">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="" class="col-md-3">Order Total</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" value="৳ {{number_format($order->order_total, 2)}}" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-3">Customer Info</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" value="{{$order->customer->name. '('.$order->customer->mobile.')'}}" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-3">Delivery Address</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="delivery_address" id="" cols="30" rows="5">{{$order->delivery_address}}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-3">Order Status</label>
                                            <div class="col-md-9">
                                                <select name="order_status" class="form-control" id="">
                                                    <option value=""> -- Select Order Status -- </option>
                                                    <option value="Pending" @selected($order->order_status == 'Pending')> Pending </option>
                                                    <option value="Processing" @selected($order->order_status == 'Processing')> Processing </option>
                                                    <option value="Complete" @selected($order->order_status == 'Complete')> Complete </option>
                                                    <option value="Cancel" @selected($order->order_status == 'Cancel')> Cancel </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-3">Courier Info</label>
                                            <div class="col-md-9">
                                                <select name="courier_id" class="form-control" id="">
                                                    <option value=""> -- Select Courier Info -- </option>
                                                    @foreach($couriers as $courier)
                                                        <option value="{{$courier->id}}" @selected($order->courier_id == $courier->id)> {{$courier->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-3"></label>
                                            <div class="col-md-9">
                                                <button type="submit" class="btn btn-success">Update Order Info</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div><!-- container -->
        </div>
    </div>

@endsection
