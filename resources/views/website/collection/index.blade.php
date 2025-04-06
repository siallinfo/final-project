@extends('website.master')

@section('body')

    <!-- breadcrumb__start -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__title">
                        <h1>Categories</h1>
                        <ul>
                            <li>
                                <a href="{{route('website.home')}}">Home</a>
                            </li>
                            <li class="color__blue">
                                Categories
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb__end -->

    <!-- categori__section__start -->
    <div class="category sp_bottom_50 sp_top_80">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="category__single category__single__2">
                            <div class="category__img__2">
                                <a href="{{ route('website.sub-category', ['id' => $category->id])}}"><img src="{{asset($category->image)}}" alt=""></a>
                            </div>
                            <div class="category__text category__text__2">
                                <h5><a href="{{ route('website.sub-category', ['id' => $category->id])}}">{{$category->name}}</a></h5>
                                <h6>(22 items)</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- categori__section__end -->

@endsection
