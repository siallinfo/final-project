@extends('website.master')

@section('body')
    <div class="container-fluid ps-0">
        <div class="row">
            @include('website.partials.customer-sidebar')

            <main class="col-md-8 ms-sm-auto col-lg-9">
                <div class="card card-body shadow-lg border-0 p-4">
                    <h3 class="text-center">Edit Profile</h3>

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('customer.profile.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name:</label>
                                <input type="text" class="form-control" name="name" value="{{ $customer->name }}" required>
                            </div>
                            <div class="col-md-6">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email" value="{{ $customer->email }}" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Mobile:</label>
                                <input type="text" class="form-control" name="mobile" value="{{ $customer->mobile }}">
                            </div>
                            <div class="col-md-6">
                                <label>Date of Birth:</label>
                                <input type="date" class="form-control" name="date_of_birth" value="{{ $customer->date_of_birth }}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Address:</label>
                                <input type="text" class="form-control" name="address" value="{{ $customer->address }}">
                            </div>
                            <div class="col-md-6">
                                <label>Blood Group:</label>
                                <select class="form-control" name="blood_group">
                                    <option value="" disabled>Select Blood Group</option>
                                    <option value="A+" {{ $customer->blood_group == 'A+' ? 'selected' : '' }}>A+</option>
                                    <option value="A-" {{ $customer->blood_group == 'A-' ? 'selected' : '' }}>A-</option>
                                    <option value="B+" {{ $customer->blood_group == 'B+' ? 'selected' : '' }}>B+</option>
                                    <option value="B-" {{ $customer->blood_group == 'B-' ? 'selected' : '' }}>B-</option>
                                    <option value="O+" {{ $customer->blood_group == 'O+' ? 'selected' : '' }}>O+</option>
                                    <option value="O-" {{ $customer->blood_group == 'O-' ? 'selected' : '' }}>O-</option>
                                    <option value="AB+" {{ $customer->blood_group == 'AB+' ? 'selected' : '' }}>AB+</option>
                                    <option value="AB-" {{ $customer->blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-3">
                            <label>Profile Image:</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <button type="submit" class="btn btn-success mt-3">Update Profile</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection
