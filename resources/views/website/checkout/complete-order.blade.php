@extends('website.master')

@section('body')

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__title">
                        <h1>Order Complete</h1>
                        <ul>
                            <li>
                                <a href="{{ route('website.home') }}">Home</a>
                            </li>
                            <li class="color__blue">
                                Order Complete
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Order Details -->
    <div class="checkoutarea sp_bottom_100 sp_top_100">
        <div class="container">
            <div class="row">
                <h4 class="text-center text-success">{{ session('message') }}</h4>
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Order Details</h3>
                        </div>
                        <div class="card-body">
                            <p><strong>Order ID:</strong> #000{{ $order->id }}</p>
                            <p><strong>Total Amount:</strong> ৳ {{ number_format($order->total_amount, 2) }}</p>
                            <p><strong>Payment Method:</strong> {{$order->payment_method}}</p>
                            <p><strong>Order Status:</strong> {{$order->status}}</p>

                            <div class="text-center mt-4">
                                <a href="{{ route('customer.order') }}" class="btn btn-primary">Go to My Orders</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Order Details End -->

@endsection
