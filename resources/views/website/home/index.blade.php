@extends('website.master')

@section('body')

    <!-- herobanner__start -->
    <div class="herobanner">
        <div class="container-fluid hero__fullwidth__spacing">
            <div class="herobanner__inner">
                <div class="container herobannerarea__slider slider__default__arrow slider__default__dot">
                    @foreach($hero_sliders as $hero_slider)
                        <div class="herobannerarea__slider__single">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12 herobanner__text__side">
                                    <div class="herobanner__text__wraper ltn__slide-animation">
                                        <h1 class="herobanner__title herobanner__title__color animated">{{$hero_slider->category->name}}</h1>
                                        <div class="herobanner__text herobanner__text__color  animated">
                                            <p>{{$hero_slider->description}}</p>
                                        </div>
                                        <div class="herobanner__button herobanner__button__color animated">
                                            <a href="{{route('website.category')}}" class="default__button" tabindex="0">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-12 herobanner__img__side">
                                    <div class="herobanner__img">
                                        <img src="{{asset($hero_slider->image)}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- herobanner__end -->

    <!-- banner__section__start -->
    <div class="banner sp_top_80 sp_bottom_80">
        <div class="container">
            <div class="row">
                @foreach($new_arrivals as $new_arrival)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="banner__img">
                            <img src="{{asset($new_arrival->image)}}" alt="">
                            <div class="banner__info">
                                <h2><a href='shop.html'>{{$new_arrival->description}}</a></h2>
                                <div class="banner__button">
                                    <a class='default__button btn__black' href='shop.html'>Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- banner__section__end -->

    <!-- best__selling__start -->
    <div class="best__selling sp_bottom_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="section__title">
                        <h2>Best Selling</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="best__selling__tab">
                        <ul class="nav  best__selling__tab__wrap" id="myTab" role="tablist">
                            @foreach($category_products as $index => $category)
                                <li class="nav-item" role="presentation">
                                    <button class="product__tap__link {{ $index == 0 ?'active':''}}" data-bs-toggle="tab" data-bs-target="#category_{{ $category->id }}"  type="button">{{$category->name}}</button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content " id="myTabContent">
                @foreach($category_products as $index => $category)
                    <div class="tab-pane fade {{ $index == 0 ? 'show active':''}}" id="category_{{ $category->id }}" role="tabpanel">
                        <div class="row grid__responsive">
                            @foreach($category->products as $men_collection)
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                    <div class="grid__wraper">
                                        <div class="grid__wraper__img">
                                            <div class="grid__wraper__img__inner">
                                                <a href='{{route('website.product-detail', ['id' => $men_collection->id])}}'>
                                                    <img class="primary__image" src="{{asset($men_collection->image)}}" alt="Primary Image">
                                                    <img class="secondary__image" src="{{asset($men_collection->image)}}" alt="Secondary Image">
                                                </a>
                                            </div>
                                            <div class="grid__wraper__icon">
                                                <ul>
                                                    <li>
                                                        <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </span>
                                                    </li>

                                                    <li>
                                                        <form action="{{route('cart.add-two', ['id' => $men_collection->id])}}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="qty" value="1">
                                                            <button style="border: none" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </button>
                                                        </form>
                                                    </li>

                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                            <i class="fas fa-exchange-alt"></i>

                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>


                                        </div>
                                        <div class="grid__wraper__info">
                                            <h3 class="grid__wraper__tittle">
                                                <a href='{{route('website.product-detail', ['id' => $men_collection->id])}}' tabindex='0'>{{$men_collection->name}}</a>
                                            </h3>
                                            <div class="grid__wraper__price">
                                                <del>৳ {{number_format($men_collection->regular_price, 2)}}</del>
                                                <span>৳ {{number_format($men_collection->selling_price, 2)}}</span>
                                            </div>
                                            <div class="grid__wraper__color">
                                                <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                                    <li class="red color_img_variant">
                                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                                        </label>
                                                    </li>
                                                    <li class="green color_img_variant">
                                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                                        </label>
                                                    </li>
                                                    <li class="blue color_img_variant">
                                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                                        </label>
                                                    </li>
                                                    <li class="black color_img_variant">
                                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                                        </label>
                                                    </li>
                                                    <li class="vaiant-plus-one">
                                                        <a href='single-product.html' tabindex='0'>
                                                            <span>+8</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="best__selling__button">
                        <a class="default__button active" href="#">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- best__selling__start -->

    @if($countdown_banner)
        <div class="cowndown__banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                        <div class="cowndown__banner__inner">
                            <div class="cowndown__banner__title">
                                <h2>{{ $countdown_banner->title }} <span>{{ $countdown_banner->discount_text }}</span></h2>
                            </div>
                            <p>{{ $countdown_banner->description }}</p>

                            <div class="cowndown__banner__cowndown" data-countdown="{{ $countdown_banner->end_date }}">
                                <div class="count"><p id="days">00</p><span>Days</span></div>
                                <div class="count"><p id="hours">00</p><span>Hours</span></div>
                                <div class="count"><p id="minutes">00</p><span>Min</span></div>
                                <div class="count"><p id="seconds">00</p><span>Sec</span></div>
                            </div>

                            <div class="cowndown__banner__button">
                                <a class="default__button" href="{{route('website.product-detail', ['id' => $countdown_banner->product_id])}}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                        <div class="cowndown__banner__img">
                            <img src="{{ asset($countdown_banner->image) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- feature__section__start -->
    <div class="feture__section sp_top_80 sp_bottom_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__title text-center">
                        <h2>Featured Collection</h2>
                    </div>
                </div>
            </div>

            <div class="row grid__responsive row__custom__class feature__slider__active slider__default__arrow">
                @foreach($featured_collections as $featured_collection)
                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='{{route('website.product-detail', ['id' => $featured_collection->id])}}'>
                                        <img class="primary__image" src="{{asset($featured_collection->image)}}" alt="Primary Image">
                                        <img class="secondary__image" src="{{asset($featured_collection->image)}}" alt="Secondary Image">
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">
                                    <ul>
                                        <li>
                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </span>
                                        </li>

                                        <li>
                                            <form action="{{route('cart.add-two', ['id' => $featured_collection->id])}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="qty" value="1">
                                                <button style="border: none" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </button>
                                            </form>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>

                                            </a>
                                        </li>

                                    </ul>
                                </div>


                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='{{route('website.product-detail', ['id' => $featured_collection->id])}}' tabindex='0'>{{$featured_collection->name}}</a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <del>৳ {{number_format($featured_collection->regular_price, 2)}}</del>
                                    <span>৳ {{number_format($featured_collection->selling_price, 2)}}</span>
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='{{route('website.product-detail', ['id' => $featured_collection->id])}}' tabindex='0'>
                                                <span>+8</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-xl-12">
                <div class="feture__section__button text-center">
                    <a class="default__button" href="#">View All</a>
                </div>
            </div>



        </div>

    </div>
    <!-- feature__section__start -->

    <!-- feature__section__start -->
    <div class="feture__section sp_bottom_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__title text-center">
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>

            <div class="row grid__responsive row__custom__class feature__slider__active slider__default__arrow">
                @foreach($products as $product)
                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='{{route('website.product-detail', ['id' => $product->id])}}'>
                                        <img class="primary__image" src="{{asset($product->image)}}" alt="Primary Image">
                                        <img class="secondary__image" src="{{asset($product->image)}}" alt="Secondary Image">
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <form action="{{route('cart.add-two', ['id' => $product->id])}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="qty" value="1">
                                                <button style="border: none" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </button>
                                            </form>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>

                                            </a>
                                        </li>

                                    </ul>
                                </div>


                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='{{route('website.product-detail', ['id' => $product->id])}}' tabindex='0'>{{$product->name}}</a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <del>৳ {{number_format($product->regular_price, 2)}}</del>
                                    <span>৳ {{number_format($product->selling_price, 2)}}</span>
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='{{route('website.product-detail', ['id' => $product->id])}}' tabindex='0'>
                                                <span>+8</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-xl-12">
                <div class="feture__section__button text-center">
                    <a class="default__button" href="#">View All</a>
                </div>
            </div>
        </div>

    </div>
    <!-- feature__section__start -->

    <!-- animate__content__start -->
    <div class="animate__content sp_bottom_100">
        <div class="container-fluid full__width__padding">
            <div class="animate__content__wrap">
                <div class="animate__content__single">
                    <span> Returns accepted for 30 days</span>
                </div>
                <div class="animate__content__single animate__content__single--2">
                    <span>  Free return shipping</span>
                </div>
                <div class="animate__content__single">
                    <span> No restocking fee</span>
                </div>
                <div class="animate__content__single animate__content__single--2">
                    <span> No final sale items</span>
                </div>
                <div class="animate__content__single">
                    <span>  100% Payment Secure </span>
                </div>
                <div class="animate__content__single animate__content__single--2">
                    <span>Online Support</span>
                </div>
                <div class="animate__content__single">
                    <span> Returns accepted for 30 days</span>
                </div>
                <div class="animate__content__single animate__content__single--2">
                    <span>  Free return shipping</span>
                </div>
                <div class="animate__content__single">
                    <span> No restocking fee</span>
                </div>
                <div class="animate__content__single animate__content__single--2">
                    <span> No final sale items</span>
                </div>
                <div class="animate__content__single">
                    <span>  100% Payment Secure </span>
                </div>
                <div class="animate__content__single animate__content__single--2">
                    <span>Online Support</span>
                </div>
            </div>
        </div>
    </div>
    <!-- animate__content__start -->

    <!-- blog__section__start -->
    <div class="blog sp_top_80 sp_bottom_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__title text-center">
                        <h2>Latest Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row row__custom__class blog__slider__active slider__default__arrow">
                <div class="col-xl-4 column__custom__class">
                    <div class="blog__single__wrap">
                        <div class="blog__img">
                            <a href='blog-details.html'> <img src="{{asset('/')}}website/assets/img/blog/blog-1.jpg" alt=""></a>
                        </div>

                        <div class="blog__meta">
                            <ul>
                                <li class="blog__date"><i class="far fa-calendar-alt"></i> August 01, 2024</li>
                            </ul>
                        </div>

                        <div class="blog__title">
                            <h2><a href='blog-details.html' tabindex='0'>A Glimpse into Men's Fashion Trends: What's Hot and What's Not</a></h2>
                        </div>

                        <div class="blog__button">
                            <a href='blog-details.html' tabindex='0'>Read More</a>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 column__custom__class">
                    <div class="blog__single__wrap">
                        <div class="blog__img">
                            <a href='blog-details.html'> <img src="{{asset('/')}}website/assets/img/blog/blog-2.jpg" alt=""></a>
                        </div>

                        <div class="blog__meta">
                            <ul>
                                <li class="blog__date"><i class="far fa-calendar-alt"></i> August 01, 2024</li>
                            </ul>
                        </div>

                        <div class="blog__title">
                            <h2><a href='blog-details.html' tabindex='0'>A Glimpse into Men's Fashion Trends: What's Hot and What's Not</a></h2>
                        </div>

                        <div class="blog__button">
                            <a href='blog-details.html' tabindex='0'>Read More</a>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 column__custom__class">
                    <div class="blog__single__wrap">
                        <div class="blog__img">
                            <a href='blog-details.html'> <img src="{{asset('/')}}website/assets/img/blog/blog-3.jpg" alt=""></a>
                        </div>

                        <div class="blog__meta">
                            <ul>
                                <li class="blog__date"><i class="far fa-calendar-alt"></i> August 01, 2024</li>
                            </ul>
                        </div>

                        <div class="blog__title">
                            <h2><a href='blog-details.html' tabindex='0'>Fashion Dos and Don'ts Every Woman Should Know That</a></h2>
                        </div>

                        <div class="blog__button">
                            <a href='blog-details.html' tabindex='0'>Read More</a>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 column__custom__class">
                    <div class="blog__single__wrap">
                        <div class="blog__img">
                            <a href='blog-details.html'> <img src="{{asset('/')}}website/assets/img/blog/blog-4.jpg" alt=""></a>
                        </div>

                        <div class="blog__meta">
                            <ul>
                                <li class="blog__date"><i class="far fa-calendar-alt"></i> August 01, 2024</li>
                            </ul>
                        </div>

                        <div class="blog__title">
                            <h2><a href='blog-details.html' tabindex='0'>A Glimpse into Men's Fashion Trends: What's Hot and What's Not</a></h2>
                        </div>

                        <div class="blog__button">
                            <a href='blog-details.html' tabindex='0'>Read More</a>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 column__custom__class">
                    <div class="blog__single__wrap">
                        <div class="blog__img">
                            <a href='blog-details.html'> <img src="{{asset('/')}}website/assets/img/blog/blog-5.jpg" alt=""></a>
                        </div>

                        <div class="blog__meta">
                            <ul>
                                <li class="blog__date"><i class="far fa-calendar-alt"></i> August 01, 2024</li>
                            </ul>
                        </div>

                        <div class="blog__title">
                            <h2><a href='blog-details.html' tabindex='0'>A Glimpse into Men's Fashion Trends: What's Hot and What's Not</a></h2>
                        </div>

                        <div class="blog__button">
                            <a href='blog-details.html' tabindex='0'>Read More</a>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 column__custom__class">
                    <div class="blog__single__wrap">
                        <div class="blog__img">
                            <a href='blog-details.html'> <img src="{{asset('/')}}website/assets/img/blog/blog-6.jpg" alt=""></a>
                        </div>

                        <div class="blog__meta">
                            <ul>
                                <li class="blog__date"><i class="far fa-calendar-alt"></i> August 01, 2024</li>
                            </ul>
                        </div>

                        <div class="blog__title">
                            <h2><a href='blog-details.html' tabindex='0'>Fashion Dos and Don'ts Every Woman Should Know That</a></h2>
                        </div>

                        <div class="blog__button">
                            <a href='blog-details.html' tabindex='0'>Read More</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog__section__start -->

    <!-- fetaure__section__start -->
    <div class="feature__2 sp_bottom_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="feature__2__single">
                        <div class="feature__2__icon">
                            <img src="{{asset('/')}}website/assets/img/feature/feature__1.svg" alt="">
                        </div>
                        <div class="feature__2__text">
                            <h4>Free Shipping</h4>
                            <p>On orders over <strong>$99.</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="feature__2__single">
                        <div class="feature__2__icon">
                            <img src="{{asset('/')}}website/assets/img/feature/feature__2.svg" alt="">
                        </div>
                        <div class="feature__2__text">
                            <h4>Money Back</h4>
                            <p>Money back in 15 days..</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="feature__2__single">
                        <div class="feature__2__icon">
                            <img src="{{asset('/')}}website/assets/img/feature/feature__3.svg" alt="">
                        </div>
                        <div class="feature__2__text">
                            <h4>Secure Checkout</h4>
                            <p>100% Payment Secure.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="feature__2__single">
                        <div class="feature__2__icon">
                            <img src="{{asset('/')}}website/assets/img/feature/feature__4.svg" alt="">
                        </div>
                        <div class="feature__2__text">
                            <h4>Online Support</h4>
                            <p>Ensure the product quality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fetaure__section__end -->

    <!-- instagram__start -->
    <div class="instagram">
        <div class="container">
            <div class="row">
                <div class="section__title text-center">
                    <h2>Follow on Instagram</h2>
                    <p><a href="#" target="_blank" title="https://www.instagram.com/">@marino-themes</a></p>
                </div>
            </div>
        </div>
        <div class="instagram__img__wraper">
            <div class="row row__custom__class instagram__slider__active slider__default__arrow slider__default__arrow slider__default__arrow--2">

                <div class="col-sm-12 column__custom__class">
                    <div class="instagram__img">
                        <a class="popup__img" href="{{asset('/')}}website/assets/img/instagram/gallery-1.jpg"> <img src="{{asset('/')}}website/assets/img/instagram/gallery-1.jpg" alt="Instagram Gallery Image"></a>
                    </div>
                </div>

                <div class="col-sm-12 column__custom__class">
                    <div class="instagram__img">
                        <a class="popup__img" href="{{asset('/')}}website/assets/img/instagram/gallery-2.jpg"> <img src="{{asset('/')}}website/assets/img/instagram/gallery-2.jpg" alt="Instagram Gallery Image"></a>
                    </div>
                </div>

                <div class="col-sm-12 column__custom__class">
                    <div class="instagram__img">
                        <a class="popup__img" href="{{asset('/')}}website/assets/img/instagram/gallery-3.jpg"> <img src="{{asset('/')}}website/assets/img/instagram/gallery-3.jpg" alt="Instagram Gallery Image"></a>
                    </div>
                </div>

                <div class="col-sm-12 column__custom__class">
                    <div class="instagram__img">
                        <a class="popup__img" href="{{asset('/')}}website/assets/img/instagram/gallery-4.jpg"> <img src="{{asset('/')}}website/assets/img/instagram/gallery-4.jpg" alt="Instagram Gallery Image"></a>
                    </div>
                </div>

                <div class="col-sm-12 column__custom__class">
                    <div class="instagram__img">
                        <a class="popup__img" href="{{asset('/')}}website/assets/img/instagram/gallery-6.jpg"> <img src="{{asset('/')}}website/assets/img/instagram/gallery-6.jpg" alt="Instagram Gallery Image"></a>
                    </div>
                </div>

                <div class="col-sm-12 column__custom__class">
                    <div class="instagram__img">
                        <a class="popup__img" href="{{asset('/')}}website/assets/img/instagram/gallery-7.jpg"> <img src="{{asset('/')}}website/assets/img/instagram/gallery-7.jpg" alt="Instagram Gallery Image"></a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- instagram__end -->

@endsection
