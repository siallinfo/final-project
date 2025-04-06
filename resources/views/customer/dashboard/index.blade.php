@extends('website.master')

@section('body')
    <div class="py-4 px-3 bg-warning-subtle shadow-lg text-center">
        <h2 class="fw-bold text-warning-emphasis" style="letter-spacing: 1px;">Customer Dashboard</h2>
        <p class="mb-0 text-dark opacity-75">Manage your orders, invoices, and account with ease</p>
    </div>
    <div class="container-fluid ps-0" style="padding-bottom: 0">
        <div class="row">
            <!-- Include Sidebar -->
        @include('website.partials.customer-sidebar')

            <!-- Main Content -->
            <main class="col-md-8 ms-sm-auto col-lg-9" style="padding-left: 0; padding-right: 0;">
                <div>
                    <div class="" style="height: 60px">
                        <p class="text-center py-3 font-16">Welcome, <B style="color: darkorange">{{ $customer->name }}</B></p>
                    </div>

                    <div class="row" style="padding: 15px; padding-left: 15px; padding-top: 20px";>
                        <!-- Recent Orders -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h5>Recent Orders</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">Order #12345 - <span class="text-success">Shipped</span></li>
                                        <li class="list-group-item">Order #12346 - <span class="text-warning">Processing</span></li>
                                        <li class="list-group-item">Order #12347 - <span class="text-danger">Pending</span></li>
                                        <li class="list-group-item">Order #12347 - <span class="text-danger">Canceled</span></li>
                                        <li class="list-group-item">Order #12347 - <span class="text-danger">Return</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Account Information -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h5>Account Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="profile-photo" align="center">
                                        <img src="{{ asset($customer->image ?? 'website/assets/img/default-avatar.png') }}" alt="Customer Photo">
                                    </div>
                                    <p><strong>Name:</strong> {{ $customer->name }} </p>
                                    <p><strong>Email:</strong> {{ $customer->email }}</p>
                                    <p><strong>Joined:</strong> {{ $customer->created_at->format('Y-m-d') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
