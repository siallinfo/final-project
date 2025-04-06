@extends('admin.master')

@section('body')

    <div class="page-wrapper">
        <div class="page-content-tab">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title-box">
                            <h4 class="page-title">Unit Module</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Unit form</h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="general-label">
                                <form action="{{route('unit.update', ['id' => $unit->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label for="horizontalInput1" class="col-sm-2 col-form-label">Unit Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{$unit->name}}" name="name" id="horizontalInput1" placeholder="Enter Brand Name">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="horizontalInput1" class="col-sm-2 col-form-label">Unit Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control" id="" cols="30" rows="5">{{$unit->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="horizontalInput2" class="col-md-2 form-label">Publication Status</label>
                                        <div class="col-md-10">
                                            <label for=""><input type="radio" name="status" {{$unit->status == 1 ? 'checked' : ''}} value="1">  Published </label>
                                            <label for=""><input type="radio" name="status" {{$unit->status == 0 ? 'checked' : ''}} value="0">  Unpublished </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 ms-auto">
                                            <button type="submit" class="btn btn-de-primary">Update Unit Info</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div>
            </div>
        </div>

    </div>
    <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

@endsection
