@extends('website.master')

@section('body')

    <!-- breadcrumb__start -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__title">
                        <h1>Cart</h1>
                        <ul>
                            <li>
                                <a href="{{route('website.home')}}">Home</a>
                            </li>
                            <li class="color__blue">
                                Cart
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb__end -->

    <!-- cart__section__start -->
    <div class="cartarea sp_bottom_100 sp_top_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cartarea__table__content table-responsive">
                        <h5 class="text-center text-success">{{session('message')}}</h5>
                        <table>
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            <form id="cart-update-form" action="{{ route('cart.update.all') }}" method="POST">
                                @csrf
                                @php($sum = 0)
                                @foreach($cart_products as $cart_product)
                                    <tr>
                                        <td class="cartarea__product__thumbnail">
                                            <a href="#">
                                                <img src="{{ asset($cart_product->options->image) }}" alt="cart">
                                            </a>
                                        </td>
                                        <td class="cartarea__product__name"><a href="#">{{ $cart_product->name }}</a></td>
                                        <td class="cartarea__product__price__cart" style="text-align: right"><span class="amount">৳ {{ number_format($cart_product->price, 2) }}</span></td>
                                        <td class="cartarea__product__quantity">
                                            <div class="featurearea__quantity">
                                                <div class="qty-container">
                                                    <button class="qty-btn-minus btn-qty" type="button"><i class="fa fa-minus"></i></button>
                                                    <input type="hidden" name="rowId[]" value="{{ $cart_product->rowId }}">
                                                    <input type="number" name="qty[]" value="{{ $cart_product->qty }}" class="input-qty">
                                                    <button class="qty-btn-plus btn-qty" type="button"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cartarea__product__subtotal" style="text-align: right">৳ {{ number_format($cart_product->price * $cart_product->qty, 2) }}</td>
                                        <td class="cartarea__product__remove">
                                            <a href="{{ route('cart.remove', ['rowId' => $cart_product->rowId]) }}" onclick="return confirm('Are you sure you want to remove this item?');">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Trash</title>
                                                    <path d="M112 112l20 320c.95 18.49 14.4 32 32 32h184c17.67 0 30.87-13.51 32-32l20-320" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 112h352"/>
                                                    <path d="M192 112V72h0a23.93 23.93 0 0124-24h80a23.93 23.93 0 0124 24h0v40M256 176v224M184 176l8 224M328 176l-8 224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    @php($sum += ($cart_product->price * $cart_product->qty))
                                @endforeach
                            </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cartarea__shiping__update__wrapper">
                        <div class="cartarea__shiping__update">
                            <a class='default__button' href="{{route('website.category')}}">Continue Shopping</a>
                        </div>
                        <div class="cartarea__clear">
                            <button type="button" class="default__button" onclick="document.getElementById('cart-update-form').submit();">Update Cart</button>
                            <a class="default__button" href="{{route('cart.destroy')}}" onclick="confirm('Are You sure to clear items?');">Clear Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-6 col-md-8 col-12">
                </div>
                <div class="col-lg-6 col-lg-6 col-md-8 col-12">
                    <div class="cartarea__grand__totall cartarea__tax">
                        <div class="cartarea__title">
                            <h4>Cart Total</h4>
                        </div>
                        <h5>Cart Sub-Total<span>BDT. {{$sum}}/-</span>
                        <h5>Tax Total (15%)<span>BDT. {{$tax = round( ($sum * 0.15) )}}/-</span>
                        <h5>Shipping Charge <span>BDT. {{$shipping = 100}}/-</span>
                        <h5>Total Payable <span>BDT. {{$total = round( ($sum + $tax + $shipping) )}}/-</span>
                        </h5>
                        <a class="default__button" href="{{route('website.checkout')}}">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart__section__end-->

@endsection
