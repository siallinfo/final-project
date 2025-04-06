<!doctype html>
<html class="no-js" lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Grahok Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/assets/img/favicon.png">
    <link href="{{asset('/')}}admin/assets/libs/simple-datatables/style.css" rel="stylesheet" type="text/css" />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/futura-std-4">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/slick.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/main.css">




</head>


<body>


<main class="main_wrapper body__overlay">

    <!-- header__topbar__start -->
    <div class="header__topbar desktop__menu__wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="header__topbar__left">
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                    <rect x="48" y="96" width="416" height="320" rx="40" ry="40" fill="none"
                                          stroke="darkorange" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="32" />
                                    <path fill="none" stroke="darkorange" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="32" d="M112 160l144 112 144-112" />
                                </svg>info@grahokshop.com
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                    <path
                                        d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z"
                                        fill="none" stroke="darkorange" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32" />
                                    <circle cx="256" cy="192" r="48" fill="none" stroke="darkorange"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                </svg>5/13, Block-C, Lalmatia, Dhaka-1207.
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="header__topbar__right">

                        <div class="header__topbar__language__wraper">
                            <div class="header__topbar__language">
                                English <i class="fa fa-angle-down"></i>
                                <div class="header__topbar__language__inner">
                                    <ul>
                                        <li class="active">
                                            <a href="#"> English
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Bangla

                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="header__topbar__social__icon">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://x.com/">
                                        <i class="fab fa-x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.tiktok.com/">
                                        <i class="fab fa-tiktok"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header__topbar__end -->

    <!-- header section start -->
    <header>
        <div class="headerarea header__sticky">
            <div class="container desktop__menu__wrapper">
                <div class="row common__row position-relative">
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="headerarea__logo">
                            <a href="{{route('website.home')}}"><img src="{{asset('/')}}website/assets/img/logo/logo__1.png" alt="" height="100"></a>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-7 col-md-6 main_menu_wrap">

                        <div class="headerarea__main__menu ">
                            <nav>
                                <ul>
                                    <li><a class='' href="{{route('website.home')}}">Home</a></li>
                                    <li><a class='' href="{{route('website.category')}}">Shop</a></li>
                                    <li class="position-static">
                                        <a class='headerarea__has__dropdown' href='{{route('website.collection')}}'>Categories</a>

                                        <ul class="headerarea__submenu headerarea__megamenu">
                                            @foreach($categories as $category)
                                                <li class="mega__menu__li mega__menu__image">
                                                    <a class='menu__title' href='{{ route('website.sub-category', ['id' => $category->id]) }}'>
                                                        {{isset($category->name) ? $category->name : ' '}}
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a href='{{ route('website.sub-category', ['id' => $category->id])}}'>
                                                                <img class="img-fluid" src="{{ asset($category->image) }}" alt="Collection">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>

                                    </li>

                                    <li><a href="{{route('website.about')}}">About</a> </li>


                                    <li><a class='headerarea__has__dropdown' href='blog.html'>Blog

                                        </a>
                                        <ul class="headerarea__submenu">
                                            <li><a href='blog-details.html'>Blog-Details</a></li>
                                        </ul>


                                    </li>


                                    <li><a class="headerarea__has__dropdown" href="#">Pages
                                        </a>

                                        <ul class="headerarea__submenu">
                                            <li><a href="{{route('website.category')}}">Shop</a></li>
                                            <li><a href="{{route('website.collection')}}">Category</a></li>
                                            <li><a href="{{route('website.wishlist')}}">Wishlist</a></li>
                                            <li><a href="{{route('website.about')}}">About</a></li>
                                            <li><a href="{{route('website.contact')}}">Contact</a></li>
                                            <li><a href="{{route('website.service')}}">Service</a></li>
                                            <li><a href="{{route('website.faq')}}">FAQ</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>


                    <div class="col-xl-3 col-lg-3 col-md-6">

                        <div class="headerarea__right">

                            <ul class="headerarea__right__nav">
                                <li class="disclosure__button">
                                </li>
                                <li>
                                    <div class="headerarea__search cursor__pointer">

                                        <svg role="presentation" stroke-width="2" focusable="false" width="22" height="22"
                                             class="icon icon-search" viewBox="0 0 22 22">
                                            <circle cx="11" cy="10" r="7" fill="none" stroke="darkorange"></circle>
                                            <path d="m16 15 3 3" stroke="darkorange" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </li>


                                <li>
                                    @if(Session::get('customer_id'))
                                        <div class="setting__wrap cursor__pointer">
                                            <div class="setting__wrap__active">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                                    <path
                                                        d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                                        fill="darkorange" stroke="darkorange" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32" />
                                                    <path
                                                        d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                                        fill="darkorange" stroke="darkorange" stroke-miterlimit="10"
                                                        stroke-width="32" />
                                                </svg>

                                            </div>
                                        </div>
                                    @else
                                        <div class="setting__wrap cursor__pointer">
                                            <div class="setting__wrap__active">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                                    <path
                                                        d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                                        fill="none" stroke="darkorange" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32" />
                                                    <path
                                                        d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                                        fill="none" stroke="darkorange" stroke-miterlimit="10"
                                                        stroke-width="32" />
                                                </svg>

                                            </div>
                                        </div>
                                    @endif
                                </li>

                                <li>
                                    <div class="headermiddle__bar cursor__pointer">
                                        <div class="headermiddle__account">
                                            <div class="headermiddle__account__img">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                     viewBox="0 0 512 512">
                                                    <circle cx="176" cy="416" r="16" fill="darkorange" stroke="darkorange"
                                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    <circle cx="400" cy="416" r="16" fill="darkorange" stroke="darkorange"
                                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    <path fill="none" stroke="darkorange" stroke-linecap="round"
                                                          stroke-linejoin="round" stroke-width="32"
                                                          d="M48 80h64l48 272h256" />
                                                    <path
                                                        d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128"
                                                        fill="none" stroke="darkorange" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32" />
                                                </svg>
                                                <span class=" bigcounter"> {{ count(Cart::content()) }} </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- setting__wrap__list__start -->
        <div class="setting__wrap__list">

            @if(Session::get('customer_id'))
                <button class="setting__wrap__close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon icon1" viewBox="0 0 512 512">
                        <title>Close</title>
                        <path fill="none" stroke="darkorange" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                              d="M368 368L144 144M368 144L144 368"></path>
                    </svg></button>
                <div class="customer-profile">
                    <div class="profile-photo">
                        <img src="{{ asset($customer->image ?? 'website/assets/img/default-avatar.png') }}" alt="Customer Photo">
                    </div>
                    <div class="customer-name">
                        <h6>Hello, {{ Session::get('customer_name') }}</h6>
                    </div>
                    <div class="setting__wrap__list__inner">
                        <ul>
                            <li><a href="{{route('customer.dashboard')}}">My Dashboard</a></li>
                            <li><a href="{{ route('customer.logout') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            @else
                <button class="setting__wrap__close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                        <title>Close</title>
                        <path fill="none" stroke="darkorange" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                              d="M368 368L144 144M368 144L144 368"></path>
                    </svg></button>
                <div class="customer-profile">
                    <div class="profile-photo">
                        <img src="{{ asset('website/assets/img/default-avatar.png') }}" alt="Customer Photo">
                    </div>
                    <div class="customer-name">
                        <h6>Hello</h6>
                    </div>
                    <div class="setting__wrap__list__inner">
                        <ul>
                            <li><a href='{{route('customer.login')}}'>Login</a></li>
                            <li><a href='{{route('customer.register')}}'>Register</a></li>
                        </ul>
                    </div>
                </div>
            @endif
        </div>
        <!-- setting__wrap__list__end -->

        <!-- header__search -->
        <div class="headersearch__active">
            <div class="headersearch__active__icon">
                <button class="headersearch__active__close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                        <title>Close</title>
                        <path fill="none" stroke="darkorange" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
                    </svg></button>
            </div>
            <div class="headersearch__active__input">
                <form action="https://minimalin-html.netlify.app/search" method="get" role="search" style="position: relative;">
                    <div class="header__form__search">
                        <input type="search" name="q" value="" placeholder="Search our store" class="input-text"
                               autocomplete="off">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- header__search -->

        <!-- minicart__section__start -->
        <section class="minicart">
            <div class="minicart__inner">
                <div class="minicart__wrapper">
                    <div class="minicart__close__icon">
                        <div class="minicart__cart__text ">
                            <strong>Cart</strong>
                        </div>
                        <button class="minicart__close__btn">
                            <i class="fa fa-close"></i>
                        </button>

                    </div>

                    <div class="minicart__single__wraper">
                        @php($sum=0)
                        @foreach(Cart::content() as $item)
                            <div class="minicart__single">

                                <div class="minicart__single__img">
                                    <a href='single-product.html'>
                                        <img src="{{asset($item->options->image)}}" alt="product">
                                    </a>
                                    <div class="minicart__single__close">
                                        <a href="{{ route('cart.remove', ['rowId' => $item->rowId])}}" title="Remove"><i class="fa fa-close"></i></a>
                                    </div>
                                </div>
                                <div class="minicart__single__content">
                                    <h4><a href='#'>{{$item->name}}</a></h4>
                                    <span>{{$item->qty}} x <span class="money">৳ {{number_format($item->price, 2)}} <span> = ৳ {{number_format($item->qty * $item->price, 2)}}</span></span></span>
                                </div>
                            </div>
                        @php($sum= $sum + ($item->qty * $item->price))
                        @endforeach
                    </div>

                    <div class="minicart__footer">
                        <div class="minicart__subtotal">
                            <span class="subtotal__title">Subtotal:</span>
                            <span class="subtotal__amount">৳ {{number_format($sum, 2)}}</span>
                        </div>
                        <div class="minicart__button">
                            <a class='default__button' href='{{route('website.cart')}}'>View Cart</a>
                            <a class='default__button' href='{{route('website.checkout')}}'>Checkout</a>
                        </div>
                        <div class="cart__note__text">
                            <p style="font-size: 16px; text-align: center;">Free Shipping on All Orders Over <B class="blinking-text">৳1500!</B></p>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- minicart__section__end -->

    </header>
    <!-- header section end -->

    @yield('body')

    <!-- footer__section__start -->
    <div class="footer ">
        <div class="footer__inner sp_top_80">
            <div class="container sp_bottom_60">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="footer__widget">
                            <h4 class="footer__title">About Us.</h4>
                            <div class="footer__content">
                                <p><strong>Grahok Shop</strong> E-Commerce is a dynamic and innovative online retail platform that offers a wide range of products to customers worldwide.</p>
                            </div>
                            <div class="footer__social__icon">
                                <ul>
                                    <li><a target="_blank" title="Facebook-f" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>


                                    <li><a target="_blank" title="Twitter" href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>



                                    <li><a target="_blank" title="Youtube" href="https://www.youtube.com/user/"><i class="fab fa-youtube"></i></a></li>


                                    <li><a target="_blank" title="Instagram" href="https://www.instagram.com//"><i class="fab fa-instagram"></i></a></li>


                                    <li><a target="_blank" title="Tiktok" href="https://www.tiktok.com/"><i class="fab fa-tiktok"></i></a></li>


                                </ul>
                            </div>
                            <div class="footer__bottom">
                                <h5>Guaranteed safe checkout</h5>
                                <div class="footer__img">
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
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-4 col-6">
                        <div class="footer__widget">
                            <h4 class="footer__title">Quick Link</h4>
                            <div class="footer__menu">
                                <ul>
                                    <li><a href="https://minimalin-html.netlify.app/account">My Account</a></li>
                                    <li><a href="https://minimalin-html.netlify.app/cart">My Cart</a></li>
                                    <li><a href="https://minimalin-html.netlify.app/pages/wishlist">Wishlist</a></li>
                                    <li><a href="https://minimalin-html.netlify.app/">Gift Card</a></li>
                                    <li><a href="https://minimalin-html.netlify.app/pages/contact">Need Help?</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-4 col-6">
                        <div class="footer__widget">
                            <h4 class="footer__title">Information</h4>
                            <div class="footer__menu">
                                <ul>
                                    <li><a href="https://minimalin-html.netlify.app/account">About us</a></li>
                                    <li><a href="https://minimalin-html.netlify.app/cart">Contact</a></li>
                                    <li><a href="https://minimalin-html.netlify.app/pages/wishlist">Blogs</a></li>
                                    <li><a href="https://minimalin-html.netlify.app/">Gift Card</a></li>
                                    <li><a href="https://minimalin-html.netlify.app/pages/contact">Size Chart</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-4 col-6">
                        <div class="footer__widget">
                            <h4 class="footer__title">Policies</h4>
                            <div class="footer__menu">
                                <ul>
                                    <li><a href="https://minimalin-html.netlify.app/account">Privacy Policy</a></li>
                                    <li><a href="https://minimalin-html.netlify.app/cart">Refund Policy</a></li>
                                    <li><a href="https://minimalin-html.netlify.app/pages/wishlist">Terms of Service</a></li>
                                    <li><a href="https://minimalin-html.netlify.app/">Gift Card</a></li>
                                    <li><a href="https://minimalin-html.netlify.app/pages/contact">Shipping Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="copyright__text">
                            <p>© 2025 <strong>Grahok Shop</strong>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- footer__section__end -->
</main>

<!-- JS here -->
<script src="{{asset('/')}}website/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{asset('/')}}website/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}website/assets/js/popper.min.js"></script>
<script src="{{asset('/')}}website/assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}website/assets/js/isotope.pkgd.min.js"></script>
<script src="{{asset('/')}}website/assets/js/one-page-nav-min.js"></script>
<script src="{{asset('/')}}website/assets/js/slick.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.meanmenu.min.js"></script>
<script src="{{asset('/')}}website/assets/js/ajax-form.js"></script>
<script src="{{asset('/')}}website/assets/js/wow.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.scrollUp.min.js"></script>
<script src="{{asset('/')}}website/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/')}}website/assets/js/waypoints.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.counterup.min.js"></script>
<script src="{{asset('/')}}website/assets/js/fontawesome.min.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins.js"></script>
<script src="{{asset('/')}}website/assets/js/main.js"></script>

<!-- Datatable js -->
<script src="{{asset('/')}}admin/assets/libs/simple-datatables/umd/simple-datatables.js"></script>
<script src="{{asset('/')}}admin/assets/js/pages/datatable.init.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        function startCountdown(endTime) {
            function updateCountdown() {
                const now = new Date().getTime();
                const distance = new Date(endTime).getTime() - now;

                if (distance < 0) {
                    document.querySelector(".cowndown__banner__cowndown").innerHTML = "<p>Offer Expired</p>";
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("days").innerText = days;
                document.getElementById("hours").innerText = hours;
                document.getElementById("minutes").innerText = minutes;
                document.getElementById("seconds").innerText = seconds;
            }

            updateCountdown();
            setInterval(updateCountdown, 1000);
        }

        const countdownElement = document.querySelector(".cowndown__banner__cowndown");
        if (countdownElement) {
            const countdownEnd = countdownElement.getAttribute("data-countdown");
            startCountdown(countdownEnd);
        }
    });
</script>

<script>
    $(document).ready(function(){
        $('.submenu a').on('click', function(e){
            e.preventDefault();
            var subCategoryId = $(this).data('subcategory-id');

            $.ajax({
                url: '/products/filter/' + subCategoryId,
                method: 'GET',
                success: function(response) {
                    $('#product-grid').html(response);
                }
            });
        });
    });

</script>

</body>


</html>
