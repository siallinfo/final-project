@extends('website.master')

@section('body')
    <div class="page-wrapper">
        <div class="page-content-tab">
            <div class="py-4 px-3 bg-warning-subtle shadow-lg text-center">
                <h2 class="fw-bold text-warning-emphasis" style="letter-spacing: 1px;">Customer Dashboard</h2>
                <p class="mb-0 text-dark opacity-75">Manage your orders, invoices, and account with ease</p>
            </div>
            <div class="container-fluid ps-0" style="padding-bottom: 0">
                <div class="row">
                    @include('website.partials.customer-sidebar')

                    <main class="col-md-8 ms-sm-auto col-lg-9">
                        <div>
                            <div class="" style="height: 60px">

                            </div>

                            <div class="row p-3">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <h5 class="card-title">Order Information</h5>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="text-center text-success">{{ session('message') }}</h5>
                                            <div class="table-responsive">
                                                <table class="table" id="datatable_1">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>SL No.</th>
                                                        <th>Order Id</th>
                                                        <th>Order Date</th>
                                                        <th>Order Total</th>
                                                        <th>Order Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($orders as $order)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>#000{{ $order->id }}</td>
                                                            <td>{{ $order->order_date }}</td>
                                                            <td>৳ {{ number_format($order->order_total, 2) }}</td>
                                                            <td>{{ $order->order_status }}</td>
                                                            <td>
                                                                <a href="{{ route('customer.order.detail', ['id' => $order->id]) }}" class="btn btn-sm btn-success">
                                                                    <i class="fa fa-bookmark"></i>
                                                                </a>
                                                                <a href="{{route('customer.order.invoice', ['id' => $order->id])}}" class="btn btn-sm btn-primary">
                                                                    <i class="fa fa-book"></i>
                                                                </a>
                                                                <a href="{{ route('customer.order.download-invoice', ['id' => $order->id]) }}" class="btn btn-sm btn-warning">
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
