@extends('website.master')

@section('body')

    <!-- breadcrumb__start -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__title">
                        <h1>Checkout</h1>
                        <ul>
                            <li>
                                <a href="{{route('website.home')}}">Home</a>
                            </li>
                            <li class="color__blue">
                                Checkout
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb__end -->

    <!-- checkout__section__start -->
    <div class="checkoutarea sp_bottom_100 sp_top_100">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="checkoutarea__payment__wraper">
                        <div class="checkoutarea__total">
                            <h3>Your Cart Summery</h3>
                            <form action="#" method="post">
                                <div class="checkoutarea__table__wraper"  style="overflow-x:auto;">
                                    <table class="checkoutarea__table">
                                        <thead>
                                        <tr class="checkoutarea__item">
                                            <td class="checkoutarea__ctg__type" align="center"> Product</td>
                                            <td class="checkoutarea__cgt__des" align="right"> Total</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="checkoutarea__item prd-name">
                                        @php ($sum = 0)
                                        @foreach(Cart::content() as $index => $item)
                                            <tr>
                                                <td class="checkoutarea__ctg__type" align="left">{{ $item->name }} × <span>{{ $item->qty }}</span></td>
                                                <td class="checkoutarea__cgt__des" align="right">৳ {{ number_format($item->price * $item->qty, 2)}}</td>
                                            </tr>
                                        @php ($sum = $sum + ($item->price * $item->qty))
                                        @endforeach

                                        <tr class="checkoutarea__item prd-name">
                                            <td class="checkoutarea__ctg__type" align="left">Sub-total</td>
                                            <td class="checkoutarea__cgt__des" align="right">৳ {{ number_format($sum, 2)}}</td>
                                        </tr>
                                        <tr class="checkoutarea__item">
                                            <td class="checkoutarea__ctg__type" align="left">Tax (15%)</td>
                                            <td class="checkoutarea__cgt__des" align="right">৳ {{ number_format($tax = round( ($sum * 0.15) ), 2)}}</td>
                                        </tr>
                                        <tr class="checkoutarea__item">
                                            <td class="checkoutarea__ctg__type" align="left">Shipping Cost (Flat)</td>
                                            <td class="checkoutarea__cgt__des" align="right">৳ {{ number_format($shipping = 100, 2)}}</td>
                                        </tr>
                                        <tr class="checkoutarea__item">
                                            <td class="checkoutarea__ctg__type" align="left"><B>Total Payable</B></td>
                                            <td class="checkoutarea__cgt__des" align="right"><B>৳ {{ number_format($totalPayable = round( ($sum + $tax + $shipping) ), 2)}}</B></td>
                                        </tr>
                                        <?php
                                            Session::put('order_total', $totalPayable);
                                            Session::put('tax_total', $tax);
                                            Session::put('shipping_total', $shipping);
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkoutarea__billing">
                        <div class="checkoutarea__billing__heading">
                            <h2>Billing Details</h2>
                        </div>
                        <form action="{{route('checkout.new-order')}}" method="POST">
                            @csrf
                            <div>
                                <div class="checkoutarea__billing__form">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="checkoutarea__inputbox">
                                                <label for="address__info"><B>Delivery Address *</B></label>
                                                <textarea class="form-control" name="delivery_address" id="" placeholder="Delivery Address Here" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkoutarea__billing__form">
                                    <div class="row">
                                        <div class="col-xl-12 pt-3">
                                            <div class="checkoutarea__inputbox">
                                                <label for="address__info"><B>Order Notes *</B></label>
                                                <input class="form-control" name="order_note" id="" placeholder="Order Notes Here">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkoutarea__billing__form">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <label for="address__info"><B>Payment Method *</B></label>
                                            <div class="d-flex">
                                                <div class="checkoutarea__payment__type">
                                                    <input type="radio" id="pay-toggle01" name="payment_method" value="Online Payment">
                                                    <label for="pay-toggle01">Online Payment</label>
                                                </div>
                                                <div class="checkoutarea__payment__type ps-3">
                                                    <input type="radio" id="pay-toggle03" name="payment_method" value="Cash On Delivery">
                                                    <label for="pay-toggle03">Cash on Delivery</label>
                                                </div>
                                            </div>
                                            <div class="checkoutarea__payment__input__box">
                                                <button type="submit" class="default__button">Place order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout__section__end-->

@endsection
