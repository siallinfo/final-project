@extends('admin.master')

@section('body')

    <div class="page-wrapper">
        <div class="page-content-tab">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title-box">
                            <h4 class="page-title">Product Module</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Product form</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="general-label">
                                    <form action="{{route('product.update', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Category</label>
                                            <div class="col-sm-10">
                                                <select name="category_id" class="form-control" onchange="getSubCategoryByCategory(this.value);">
                                                    <option value="">-- Select Category -- </option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" @selected($category->id == $product->category_id)> {{$category->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Sub-Category</label>
                                            <div class="col-sm-10">
                                                <select name="sub_category_id" id="subCategory" class="form-control">
                                                    <option value="">-- Select Sub Category -- </option>
                                                    @foreach($sub_categories as $sub_category)
                                                        <option value="{{$sub_category->id}}" @selected($sub_category->id == $product->sub_category_id)> {{$sub_category->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Brand</label>
                                            <div class="col-sm-10">
                                                <select name="brand_id" class="form-control" id="">
                                                    <option value="">-- Select Brand -- </option>
                                                    @foreach($brands as $brand)
                                                        <option value="{{$brand->id}}" @selected($brand->id == $product->brand_id)> {{$brand->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Unit</label>
                                            <div class="col-sm-10">
                                                <select name="unit_id" class="form-control" id="">
                                                    <option value="">-- Select Unit -- </option>
                                                    @foreach($units as $unit)
                                                        <option value="{{$unit->id}}" @selected($unit->id == $product->unit_id)> {{$unit->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Product Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" value="{{$product->name}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Product Code</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="code" value="{{$product->code}}"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Product Price</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <input type="text" name="regular_price" value="{{$product->regular_price}}" class="form-control">
                                                    <input type="text" name="selling_price" value="{{$product->selling_price}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Stock Amount</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="stock" value="{{$product->stock}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Short Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="short_description" id="summernote" class="form-control" placeholder="Enter Short Description" id="" cols="30" rows="4">{{$product->short_description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Long Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="long_description" id="summernote" class="form-control" placeholder="Enter Long Description" id="" cols="30" rows="4">{{$product->long_description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Meta Title</label>
                                            <div class="col-sm-10">
                                                <textarea name="meta_title" class="form-control" placeholder="Enter Meta Title" id="" cols="30" rows="4">{{$product->meta_title}}</textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Meta Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="meta_description" class="form-control" placeholder="Enter Meta Description" id="" cols="30" rows="4">{{$product->meta_description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Product Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="image" class="form-control">
                                                <img src="{{asset($product->image)}}" alt="" height="50">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput1" class="col-sm-2 col-form-label">Product Other Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" multiple name="other_image[]" class="form-control">
                                                @foreach($product->otherImage as $otherImage)
                                                    <img src="{{asset($otherImage->image)}}" alt="" height="50">
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontalInput2" class="col-md-2 form-label">Publication Status</label>
                                            <div class="col-md-10">
                                                <label for=""><input type="radio" name="status" {{$product->status == 1 ? 'checked' : ''}} value="1">  Published </label>
                                                <label for=""><input type="radio" name="status" {{$product->status == 0 ? 'checked' : ''}} value="0">  Unpublished </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 ms-auto">
                                                <button type="submit" class="btn btn-de-primary">Update Product Info</button>
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
