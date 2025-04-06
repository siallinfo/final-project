@extends('website.master')

@section('body')
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
                                            <h5 class="card-title text-center">Change Password</h5>
                                        </div>
                                        <div class="card-body">
                                            @if(session('success'))
                                                <div class="alert alert-success">{{ session('success') }}</div>
                                            @endif
                                            @if(session('error'))
                                                <div class="alert alert-danger">{{ session('error') }}</div>
                                            @endif

                                            <form action="{{ route('customer.password.update') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Current Password:</label>
                                                    <input type="password" class="form-control" name="current_password" required>
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label>New Password:</label>
                                                    <input type="password" class="form-control" name="new_password" required>
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label>Confirm New Password:</label>
                                                    <input type="password" class="form-control" name="new_password_confirmation" required>
                                                </div>

                                                <button type="submit" class="btn btn-primary mt-3">Update Password</button>
                                            </form>
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
