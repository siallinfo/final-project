@extends('website.master')

@section('body')
    <div class="py-4 px-3 bg-warning-subtle shadow-lg text-center">
        <h2 class="fw-bold text-warning-emphasis" style="letter-spacing: 1px;">Customer Dashboard</h2>
        <p class="mb-0 text-dark opacity-75">Manage your orders, invoices, and account with ease</p>
    </div>
    <div class="container-fluid ps-0">
        <div class="row">
            @include('website.partials.customer-sidebar')

            <main class="py-5 col-md-8 ms-sm-auto col-lg-9" style="padding-left: 0; padding-right: 0;">
                <div>
                    <div class="row p-4">
                        <div class="col-md-12">
                            <div class="card card-body shadow-lg border-0 p-4">
                                <div class="text-center">
                                    <!-- Profile Image -->
                                    <img src="{{ asset($customer->image ?? 'website/assets/img/default-avatar.png') }}"
                                         alt="Customer Photo"
                                         class="rounded-circle shadow"
                                         style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #f8b400;">

                                    <!-- Name & Email -->
                                    <h4 class="mt-3 text-dark"><b>{{ $customer->name }}</b></h4>
                                    <p><strong></strong> {{ $customer->address ?? 'Not Provided' }}</p>
                                </div>

                                <!-- Profile Details -->
                                <div class="col-md-12 mt-3 d-flex justify-content-between">
                                    <div>
                                        <p><strong>📅 Joined:</strong> {{ $customer->created_at->format('Y-m-d') }}</p>
                                        <p><strong>📞 Mobile:</strong> {{ $customer->mobile ?? 'Not Provided' }}</p>
                                    </div>
                                    <div>
                                        <p><i class="fas fa-envelope"></i> <strong>Email:</strong> {{ $customer->email }}</p>
                                        <p><strong>💳 Membership:</strong> Gold Member</p>
                                    </div>
                                </div>

                                <hr>

                                <!-- Additional Profile Information -->
                                <div class="col-md-12 mt-3">
                                    <h5 class="text-center text-dark"><b>Additional Information</b></h5>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <p><strong>🎂 Date of Birth:</strong> {{ $customer->date_of_birth ?? 'Not Provided' }}</p>
                                            <p><strong>🩸 Blood Group:</strong> {{ $customer->blood_group ?? 'Not Provided' }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>🆔 NID Number:</strong> {{ $customer->nid ?? 'Not Provided' }}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="text-center mt-3">
                                    <a href="{{ route('customer.profile.edit', $customer->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i> Edit Profile
                                    </a>
                                    <a href="{{ route('customer.password.change') }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-lock"></i> Change Password
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
