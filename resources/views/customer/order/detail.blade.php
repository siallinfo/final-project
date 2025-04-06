@extends('website.master')

@section('body')
    <div class="py-4 px-3 bg-warning-subtle shadow-lg text-center">
        <h2 class="fw-bold text-warning-emphasis" style="letter-spacing: 1px;">Customer Dashboard</h2>
        <p class="mb-0 text-dark opacity-75">Manage your orders, invoices, and account with ease</p>
    </div>
    <div class="container-fluid py-5 ps-0">
        <div class="row">
            <!-- Include Sidebar -->
        @include('website.partials.customer-sidebar')

            <!-- Main Content -->
            <main class="col-md-8 ms-sm-auto col-lg-9" style="padding-left: 0; padding-right: 0;">
                <div>
                    <div class="" style="height: 60px">
                        <p class="text-center py-3 font-16">Welcome, <B style="color: darkorange">{{$customer->name}}</B></p>
                    </div>

                    <div class="row" style="padding: 15px; padding-left: 15px; padding-top: 20px";>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 class="text-primary">Order Information</h5>
                                            <p><strong>Order ID:</strong> #000{{$order->id}}</p>
                                            <p><strong>Order Date:</strong> {{$order->order_date}}</p>
                                            <p><strong>Order Total:</strong> ৳ {{number_format($order->order_total, 2)}}</p>
                                            <p><strong>Tax Total:</strong> ৳ {{number_format($order->tax_total, 2)}}</p>
                                            <p><strong>Shipping Total:</strong> ৳ {{number_format($order->shipping_total, 2)}}</p>
                                            <p><strong>Delivery Address:</strong> {{$order->delivery_address}}</p>
                                            <p><strong>Courier Name:</strong> {{isset($order->courier->name) ? $order->courier->name : ' '}}</p>
                                            <p><strong>Delivery Date:</strong> {{$order->delivery_date}}</p>
                                            <p><strong>Payment Method:</strong> {{$order->payment_method}}</p>
                                            <p><strong>Payment Date:</strong> {{$order->payment_date}}</p>
                                            <p><strong>Order Status:</strong> <span class="badge bg-success">{{$order->order_status}}</span></p>
                                            <p><strong>Delivery Status:</strong> <span class="badge bg-success">{{$order->delivery_status}}</span></p>
                                            <p><strong>Payment Status:</strong> <span class="badge bg-success">{{$order->payment_status}}</span></p>
                                            <p><strong>Transaction ID:</strong> {{$order->transaction_id}}</p>
                                            <p><strong>Currency:</strong> {{$order->currency}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="text-primary">Customer Details</h5>
                                            <p><strong>Name:</strong> {{$order->customer->name}}</p>
                                            <p><strong>Email:</strong> {{$order->customer->email}}</p>
                                            <p><strong>Phone:</strong> {{$order->customer->mobile}}</p>
                                        </div>
                                    </div>
                                    <h5 class="text-primary mt-4">Ordered Items</h5>
                                    <table class="table table-striped mt-3">
                                        <thead class="table-group-divider text-white">
                                        <tr>
                                            <th>SL No</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order->orderDetail as $orderDetail)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$orderDetail->product_name}}</td>
                                                <td>{{$orderDetail->product_qty}}</td>
                                                <td>৳ {{number_format($orderDetail->product_price, 2)}}</td>
                                                <td>৳ {{number_format($orderDetail->product_qty * $orderDetail->product_price, 2)}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
