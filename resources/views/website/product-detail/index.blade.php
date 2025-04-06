@extends('website.master')

@section('body')
    <!-- breadcrumb__start -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__title">
                        <h1>Product</h1>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li class="color__blue">
                                Product Details
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb__end -->

    <!-- single__product__start -->
    <div class="single__product sp_top_50 sp_bottom_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="featurearea__details__img">

                        <div class="featurearea__big__img">
                            <div class="featurearea__single__big__img">
                                <img src="{{asset($product->image)}}" alt="Product Big Img">
                            </div>
                            @foreach($product->otherImage as $otherImage)
                                <div class="featurearea__single__big__img">
                                    <img src="{{asset($otherImage->image)}}" alt="Product Big Img">
                                </div>
                            @endforeach
                        </div>
                        <div class=" featurearea__thumb__img featurearea__thumb__img__slider__active slider__default__arrow">
                            <div class="featurearea__single__thumb__img">
                                <img src="{{asset($product->image)}}" alt="Product Big Img">
                            </div>
                            @foreach($product->otherImage as $otherImage)
                                <div class="featurearea__single__thumb__img">
                                    <img src="{{asset($otherImage->image)}}" alt="Product Big Img">
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="single__product__wrap">
                        <div class="single__product__heding">
                            <h2>{{isset($product->name) ? $product->name : ' '}}</h2>
                        </div>
                        <div class="single__product__price">
                            <span>৳ {{number_format($product->selling_price, 2)}}</span>
                            <del>৳ {{number_format($product->regular_price, 2)}}</del>
                            <label>Save
                                {{ number_format((($product->regular_price - $product->selling_price) / $product->regular_price) * 100) }}%
                            </label>


                        </div>

                        <hr>


                        <div class="single__product__description">
                            <p>{!! isset($product->short_description) ? $product->short_description : ' ' !!}</p>

                        </div>

                        <div class="single__product__eye">
                            <div onload="startTime()">
                                <img src="{{asset('/')}}website/assets/img/eye/eye__1.webp" alt="live beacon" style="height:30px; margin-right:5px; padding-bottom: 0px;">
                                <span id="txt"><strong>14</strong> people are viewing this right now.</span>
                            </div>
                        </div>

                        <div class="single__product__special__feature">


                            <ul>
                                <li class="product__variant__inventory">
                                    <strong class="inventory__title">Availability:</strong>
                                    <span class="variant__inventory">{{isset($product->stock) ? $product->stock : ' '}} Pcs</span>
                                </li>

                                <li>
                                    <strong>SKU:</strong>
                                    <span class="variant__sku">{{isset($product->code) ? $product->code : ' '}}</span>
                                </li>
                                <li>
                                    <strong>Brand:</strong>
                                    <span>
                                  <a href="#">{{isset($product->brand->name) ? $product->brand->name : ' '}}</a>
                                </span>
                                </li>
                                <li>
                                    <strong>Type:</strong>
                                    <span>
                                  <a href="#">Type B</a>
                                </span>
                                </li>
                            </ul>

                        </div>

                        <hr>
                        <div class="single__product__swatch single__product__size">
                            <span class="header">Size : </span>
                            <ul>
                                <li><a href="#">x</a></li>
                                <li><a href="#">xl</a></li>
                                <li><a href="#">m</a></li>
                                <li><a href="#">s</a></li>
                            </ul>
                        </div>


                        <div class="single__product__swatch d-flex flex-wrap align-items-center" data-option-index="1">
                            <span class="header">Color : </span>

                            <div data-value="gold" class="swatch-element color gold available">

                                <button class="label_bg_img" style="background-color: gold; ">

                                </button>

                            </div>
                            <div data-value="gray" class="swatch-element color gray available">

                                <button class="label_bg_img" style="background-color: gray; ">

                                </button>

                            </div>
                            <div data-value="magenta" class="swatch-element color magenta available">

                                <button class="label_bg_img" style="background-color: magenta; ">

                                </button>

                            </div>
                            <div data-value="maroon" class="swatch-element color maroon available">

                                <button class="label_bg_img"  style="background-color: maroon; ">

                                </button>

                            </div>
                            <div data-value="navy" class="swatch-element color navy available">

                                <button class="label_bg_img" style="background-color: navy; ">

                                </button>

                            </div>

                        </div>

                        <form action="{{route('cart.add', ['id' => $product->id])}}" method="POST">
                            @csrf
                            <div class="single__product__quantity">
                                <div class="qty-container">
                                    <button class="qty-btn-minus btn-qty" type="button">-</button>
                                    <input type="text" name="qty" value="1" class="input-qty">
                                    <button class="qty-btn-plus btn-qty" type="button">+</button>
                                </div>
                                <button type="submit" class="default__button"><i class="fas fa-shopping-cart"></i> Add to cart</button>

                                <a class="default__button black__button" href="#">Buy it now</a>
                            </div>
                        </form>


                        <div class="single__product__bottom__menu">
                            <ul>
                                <li>
                                    <a href="#" title="Add to wishlist">
                                        <span class="add__wishlist"><i class="far fa-heart"></i>  Add to wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a title="Add to compare" data-toggle="modal" href="#" class="compare" data-pid="b-n-badge-product">
                                        <i class="fas fa-exchange-alt"></i><span> Compare</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Ask a Question" data-toggle="modal">
                                        <i class="far fa-envelope"></i> Ask a Question
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Size Chart" data-toggle="modal">
                                        <i class="far fa-chart-bar"></i> Size Chart
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <hr>

                        <p class="single__product__car">
                            <img src="{{asset('/')}}website/assets/img/car/car.webp" height="25" alt="Delivery Date">
                            Estimated Delivery Date : <strong>09-  12 August, 2024.</strong>
                        </p>
                        <div class="single__return__menu">
                            <h6>Return rules summary</h6>
                            <ul>
                                <li>Returns accepted for 30 days</li>
                                <li>Free return shipping</li>
                                <li>No restocking fee</li>
                                <li>No final sale items</li>
                            </ul>
                        </div>
                        <hr>

                        <div class="single__return__checkout">
                            <h5>Guaranteed safe checkout</h5>
                        </div>

                        <div class="single__product__small__img">
                            <ul>
                                <li>
                                    <img src="{{asset('/')}}website/assets/img/footer/footer__1.svg" alt="">
                                </li>
                                <li>
                                    <img src="{{asset('/')}}website/assets/img/footer/footer__2.svg" alt="">
                                </li>
                                <li>
                                    <img src="{{asset('/')}}website/assets/img/footer/footer__3.svg" alt="">
                                </li>
                                <li>
                                    <img src="{{asset('/')}}website/assets/img/footer/footer__4.svg" alt="">
                                </li>
                                <li>
                                    <img src="{{asset('/')}}website/assets/img/footer/footer__5.svg" alt="">
                                </li>
                                <li>
                                    <img src="{{asset('/')}}website/assets/img/footer/footer__6.svg" alt="">
                                </li>
                            </ul>
                        </div>
                        <hr>

                        <div class="single__product__pairs">
                            <h6>Pairs well with</h6>
                        </div>

                        <div class="single__product__grid">
                            <div class="row grid__responsive">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="grid__wraper">
                                        <div class="grid__wraper__img">
                                            <div class="grid__wraper__img__inner">
                                                <a href='single-product.html'>
                                                    <img class="primary__image" src="{{asset('/')}}website/assets/img/grid/grid__1.png" alt="Primary Image">
                                                </a>
                                            </div>
                                            <div class="grid__wraper__quickview">
                                                <a class="" title="Quickview" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('e-s-product-detail')" tabindex="0">Quickview
                                                </a>
                                            </div>

                                        </div>
                                        <div class="grid__wraper__info">
                                            <h3 class="grid__wraper__tittle">
                                                <a href='single-product.html' tabindex='0'>E. Casual Comf..</a>
                                            </h3>
                                            <div class="grid__wraper__price">
                                                <del>$72.00</del>
                                                <span>$47.00</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="grid__wraper">
                                        <div class="grid__wraper__img">
                                            <div class="grid__wraper__img__inner">
                                                <a href='single-product.html'>
                                                    <img class="primary__image" src="{{asset('/')}}website/assets/img/grid/grid__2.png" alt="Primary Image">
                                                </a>
                                            </div>
                                            <div class="grid__wraper__quickview">
                                                <a class="" title="Quickview" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('e-s-product-detail')" tabindex="0">Quickview
                                                </a>
                                            </div>

                                        </div>
                                        <div class="grid__wraper__info">
                                            <h3 class="grid__wraper__tittle">
                                                <a href='single-product.html' tabindex='0'>E. Casual Comf..</a>
                                            </h3>
                                            <div class="grid__wraper__price">

                                                <span>$47.00</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="grid__wraper">
                                        <div class="grid__wraper__img">
                                            <div class="grid__wraper__img__inner">
                                                <a href='single-product.html'>
                                                    <img class="primary__image" src="{{asset('/')}}website/assets/img/grid/grid__3.png" alt="Primary Image">
                                                </a>
                                            </div>
                                            <div class="grid__wraper__quickview">
                                                <a class="" title="Quickview" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('e-s-product-detail')" tabindex="0">Quickview
                                                </a>
                                            </div>

                                        </div>
                                        <div class="grid__wraper__info">
                                            <h3 class="grid__wraper__tittle">
                                                <a href='single-product.html' tabindex='0'>E. Casual Comf..</a>
                                            </h3>
                                            <div class="grid__wraper__price">
                                                <del>$72.00</del>
                                                <span>$47.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="single__social__media">
                            <ul>
                                <li>Share:</li>
                                <li><a href="#" title="Share on Facebook" target="_blank"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                </li>
                                <li>
                                    <a href="#" title="Share on Twitter" target="_blank"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                </li>

                                <li>
                                    <a href="#" title="Share on Pinterest" target="_blank"><i class="fab fa-pinterest"></i><span>Pinterest</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single__product__end -->

    <!-- discription__section__start -->

    <div class="descriptionarea sp_bottom_80 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 descriptionarea__tab__wrapper">
                    <ul class="nav  descriptionarea__tab__button" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="descriptionarea__link active" data-bs-toggle="tab" data-bs-target="#description" type="button" aria-selected="false" role="tab" tabindex="-1">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="descriptionarea__link" data-bs-toggle="tab" data-bs-target="#video" type="button" aria-selected="false" role="tab" tabindex="-1">Video</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="descriptionarea__link" data-bs-toggle="tab" data-bs-target="#product__Type" type="button" aria-selected="true" role="tab" tabindex="-1">Product Type</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="descriptionarea__link" data-bs-toggle="tab" data-bs-target="#delivery__system" type="button" aria-selected="false" role="tab">Delivery system</button>
                        </li>
                    </ul>
                    <div class="tab-content tab__content__wrapper" id="myTabContent1">
                        <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="description">

                            <p>{!! isset($product->short_description) ? $product->short_description : ' ' !!}</p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nobis provident eius. Tenetur facilis, illo nesciunt numquam non, odit iure, quia recusandae deleniti nihil excepturi?
                            </p>


                        </div>
                        <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video">

                            <p>
                                As opposed to using 'Content here, content here', making it look like readable
                                English. Many desktop publishing packages and web page editors now use Lorem
                                Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                                many web sites still in their infancy. Various versions have evolved over the
                                years, sometimes by accident, sometimes on purpose injected humour and the
                                like. It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem
                                Ipsum is that it has a more-or-less normal distribution of letters
                            </p>
                            <p>
                                If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                generators on the Internet tend to repeat predefined chunks as necessary, making
                                this the first true generator on the Internet. It uses a dictionary of over 200
                                Latin words, combined with a handful of model sentence structures, to generate
                                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
                                always free from repetition, injected humour, or non-characteristic words etc
                            </p>

                        </div>
                        <div class="tab-pane fade " id="product__Type" role="tabpanel" aria-labelledby="product__Type">

                            <p>
                                As opposed to using 'Content here, content here', making it look like readable
                                English. Many desktop publishing packages and web page editors now use Lorem
                                Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                                many web sites still in their infancy. Various versions have evolved over the
                                years, sometimes by accident, sometimes on purpose injected humour and the
                                like. It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem
                                Ipsum is that it has a more-or-less normal distribution of letters
                            </p>
                            <p>
                                If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                generators on the Internet tend to repeat predefined chunks as necessary, making
                                this the first true generator on the Internet. It uses a dictionary of over 200
                                Latin words, combined with a handful of model sentence structures, to generate
                                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
                                always free from repetition, injected humour, or non-characteristic words etc
                            </p>


                        </div>
                        <div class="tab-pane fade" id="delivery__system" role="tabpanel" aria-labelledby="delivery__system">

                            <p>
                                As opposed to using 'Content here, content here', making it look like readable
                                English. Many desktop publishing packages and web page editors now use Lorem
                                Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                                many web sites still in their infancy. Various versions have evolved over the
                                years, sometimes by accident, sometimes on purpose injected humour and the
                                like. It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem
                                Ipsum is that it has a more-or-less normal distribution of letters
                            </p>
                            <p>
                                If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                generators on the Internet tend to repeat predefined chunks as necessary, making
                                this the first true generator on the Internet. It uses a dictionary of over 200
                                Latin words, combined with a handful of model sentence structures, to generate
                                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
                                always free from repetition, injected humour, or non-characteristic words etc
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- discription__section__end -->

    <!-- related__section__start -->
    <div class="related__section sp_bottom_50">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__title text-center">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>

            <div class="row grid__responsive row__custom__class feature__slider__active slider__default__arrow">
                <div class="col-xl-3 column__custom__class">
                    <div class="grid__wraper">
                        <div class="grid__wraper__img">
                            <div class="grid__wraper__img__inner">
                                <a href='single-product.html'>
                                    <img class="primary__image" src="{{asset('/')}}website/assets/img/grid/grid__1.png" alt="Primary Image">
                                    <img class="secondary__image" src="{{asset('/')}}website/assets/img/grid/grid__2.png" alt="Secondary Image">
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
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
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

                            <div class="grid__wraper__badge">
                                <span class="new__badge">New</span>
                                <span class="sale__badge">-15%</span>
                            </div>

                            <div class="grid__wraper__countdown" data-countdown="2026/06/01">
                                <div class="count">
                                    <p>422</p><span>Days</span>
                                </div>
                                <div class="count">
                                    <p>23</p> <span>Hrs</span>
                                </div>
                                <div class="count">
                                    <p>25</p> <span>Min</span>
                                </div>
                                <div class="count">
                                    <p>01</p> <span>Sec</span>
                                </div>
                            </div>

                        </div>
                        <div class="grid__wraper__info">
                            <h3 class="grid__wraper__tittle">
                                <a href='single-product.html' tabindex='0'>W. Men Formal T-shirt</a>
                            </h3>
                            <div class="grid__wraper__price">
                                <del>$72.00</del>
                                <span>$47.00</span>
                            </div>
                            <div class="grid__wraper__color">
                                <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                    <li class="red color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__1.png);">
                                        </label>
                                    </li>
                                    <li class="green color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__2.png);">
                                        </label>
                                    </li>
                                    <li class="blue color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__3.png);">
                                        </label>
                                    </li>
                                    <li class="black color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__4.png);">
                                        </label>
                                    </li>
                                    <li class="vaiant-plus-one">
                                        <a href='single-product.html' tabindex='0'>
                                            <span>+5</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 column__custom__class">
                    <div class="grid__wraper">
                        <div class="grid__wraper__img">
                            <div class="grid__wraper__img__inner">
                                <a href='single-product.html'>
                                    <img class="primary__image" src="{{asset('/')}}website/assets/img/grid/grid__3.png" alt="Primary Image">
                                    <img class="secondary__image" src="{{asset('/')}}website/assets/img/grid/grid__4.png" alt="Secondary Image">
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
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
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
                                <a href='single-product.html' tabindex='0'>B. Pair of Blue Shoes</a>
                            </h3>
                            <div class="grid__wraper__price">
                                <span>$47.00</span>
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

                <div class="col-xl-3 column__custom__class">
                    <div class="grid__wraper">
                        <div class="grid__wraper__img">
                            <div class="grid__wraper__img__inner">
                                <a href='single-product.html'>
                                    <img class="primary__image" src="{{asset('/')}}website/assets/img/grid/grid__5.png" alt="Primary Image">
                                    <img class="secondary__image" src="{{asset('/')}}website/assets/img/grid/grid__6.png" alt="Secondary Image">
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
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
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

                            <div class="grid__wraper__badge">
                                <span class="new__badge">New</span>
                            </div>


                        </div>
                        <div class="grid__wraper__info">
                            <h3 class="grid__wraper__tittle">
                                <a href='single-product.html' tabindex='0'>F. Ultimate Smart Watch</a>
                            </h3>
                            <div class="grid__wraper__price">
                                <span>$47.00</span>
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
                                            <span>+3</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-3 column__custom__class">
                    <div class="grid__wraper">
                        <div class="grid__wraper__img">
                            <div class="grid__wraper__img__inner">
                                <a href='single-product.html'>
                                    <img class="primary__image" src="{{asset('/')}}website/assets/img/grid/grid__7.png" alt="Primary Image">
                                    <img class="secondary__image" src="{{asset('/')}}website/assets/img/grid/grid__8.png" alt="Secondary Image">
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
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
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

                            <div class="grid__wraper__badge">
                                <span class="sale__badge">-15%</span>
                            </div>

                            <div class="grid__wraper__countdown" data-countdown="2027/02/01">
                                <div class="count">
                                    <p>422</p><span>Days</span>
                                </div>
                                <div class="count">
                                    <p>23</p> <span>Hrs</span>
                                </div>
                                <div class="count">
                                    <p>25</p> <span>Min</span>
                                </div>
                                <div class="count">
                                    <p>01</p> <span>Sec</span>
                                </div>
                            </div>

                        </div>
                        <div class="grid__wraper__info">
                            <h3 class="grid__wraper__tittle">
                                <a href='single-product.html' tabindex='0'>S. Mokmol Jacket</a>
                            </h3>
                            <div class="grid__wraper__price">
                                <del>$72.00</del>
                                <span>$47.00</span>
                            </div>
                            <div class="grid__wraper__color">
                                <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                    <li class="red color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__1.png);">
                                        </label>
                                    </li>
                                    <li class="green color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__2.png);">
                                        </label>
                                    </li>
                                    <li class="blue color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__3.png);">
                                        </label>
                                    </li>
                                    <li class="black color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__4.png);">
                                        </label>
                                    </li>
                                    <li class="vaiant-plus-one">
                                        <a href='single-product.html' tabindex='0'>
                                            <span>+2</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 column__custom__class">
                    <div class="grid__wraper">
                        <div class="grid__wraper__img">
                            <div class="grid__wraper__img__inner">
                                <a href='single-product.html'>
                                    <img class="primary__image" src="{{asset('/')}}website/assets/img/grid/grid__1.png" alt="Primary Image">
                                    <img class="secondary__image" src="{{asset('/')}}website/assets/img/grid/grid__2.png" alt="Secondary Image">
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
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
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

                            <div class="grid__wraper__badge">
                                <span class="new__badge">New</span>
                                <span class="sale__badge">-15%</span>
                            </div>

                            <div class="grid__wraper__countdown" data-countdown="2026/06/01">
                                <div class="count">
                                    <p>422</p><span>Days</span>
                                </div>
                                <div class="count">
                                    <p>23</p> <span>Hrs</span>
                                </div>
                                <div class="count">
                                    <p>25</p> <span>Min</span>
                                </div>
                                <div class="count">
                                    <p>01</p> <span>Sec</span>
                                </div>
                            </div>

                        </div>
                        <div class="grid__wraper__info">
                            <h3 class="grid__wraper__tittle">
                                <a href='single-product.html' tabindex='0'>W. Men Formal T-shirt</a>
                            </h3>
                            <div class="grid__wraper__price">
                                <del>$72.00</del>
                                <span>$47.00</span>
                            </div>
                            <div class="grid__wraper__color">
                                <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                    <li class="red color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__1.png);">
                                        </label>
                                    </li>
                                    <li class="green color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__2.png);">
                                        </label>
                                    </li>
                                    <li class="blue color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__3.png);">
                                        </label>
                                    </li>
                                    <li class="black color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__4.png);">
                                        </label>
                                    </li>
                                    <li class="vaiant-plus-one">
                                        <a href='single-product.html' tabindex='0'>
                                            <span>+5</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>






                    </div>
                </div>

                <div class="col-xl-3 column__custom__class">
                    <div class="grid__wraper">
                        <div class="grid__wraper__img">
                            <div class="grid__wraper__img__inner">
                                <a href='single-product.html'>
                                    <img class="primary__image" src="{{asset('/')}}website/assets/img/grid/grid__3.png" alt="Primary Image">
                                    <img class="secondary__image" src="{{asset('/')}}website/assets/img/grid/grid__4.png" alt="Secondary Image">
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
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
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
                                <a href='single-product.html' tabindex='0'>B. Pair of Blue Shoes</a>
                            </h3>
                            <div class="grid__wraper__price">
                                <span>$47.00</span>
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

                <div class="col-xl-3 column__custom__class">
                    <div class="grid__wraper">
                        <div class="grid__wraper__img">
                            <div class="grid__wraper__img__inner">
                                <a href='single-product.html'>
                                    <img class="primary__image" src="{{asset('/')}}website/assets/img/grid/grid__5.png" alt="Primary Image">
                                    <img class="secondary__image" src="{{asset('/')}}website/assets/img/grid/grid__6.png" alt="Secondary Image">
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
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
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

                            <div class="grid__wraper__badge">
                                <span class="new__badge">New</span>
                            </div>


                        </div>
                        <div class="grid__wraper__info">
                            <h3 class="grid__wraper__tittle">
                                <a href='single-product.html' tabindex='0'>F. Ultimate Smart Watch</a>
                            </h3>
                            <div class="grid__wraper__price">
                                <span>$47.00</span>
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
                                            <span>+3</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-3 column__custom__class">
                    <div class="grid__wraper">
                        <div class="grid__wraper__img">
                            <div class="grid__wraper__img__inner">
                                <a href='single-product.html'>
                                    <img class="primary__image" src="{{asset('/')}}website/assets/img/grid/grid__7.png" alt="Primary Image">
                                    <img class="secondary__image" src="{{asset('/')}}website/assets/img/grid/grid__8.png" alt="Secondary Image">
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
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
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

                            <div class="grid__wraper__badge">
                                <span class="sale__badge">-15%</span>
                            </div>

                            <div class="grid__wraper__countdown" data-countdown="2027/02/01">
                                <div class="count">
                                    <p>422</p><span>Days</span>
                                </div>
                                <div class="count">
                                    <p>23</p> <span>Hrs</span>
                                </div>
                                <div class="count">
                                    <p>25</p> <span>Min</span>
                                </div>
                                <div class="count">
                                    <p>01</p> <span>Sec</span>
                                </div>
                            </div>

                        </div>
                        <div class="grid__wraper__info">
                            <h3 class="grid__wraper__tittle">
                                <a href='single-product.html' tabindex='0'>S. Mokmol Jacket</a>
                            </h3>
                            <div class="grid__wraper__price">
                                <del>$72.00</del>
                                <span>$47.00</span>
                            </div>
                            <div class="grid__wraper__color">
                                <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                    <li class="red color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__1.png);">
                                        </label>
                                    </li>
                                    <li class="green color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__2.png);">
                                        </label>
                                    </li>
                                    <li class="blue color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__3.png);">
                                        </label>
                                    </li>
                                    <li class="black color_img_variant">
                                        <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url({{asset('/')}}website/assets/img/grid/swatch__thumb__4.png);">
                                        </label>
                                    </li>
                                    <li class="vaiant-plus-one">
                                        <a href='single-product.html' tabindex='0'>
                                            <span>+2</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>
    </div>
    <!-- related__section__start -->

@endsection
