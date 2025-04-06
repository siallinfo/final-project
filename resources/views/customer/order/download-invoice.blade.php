<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Invoice #000{{$order->id}}.pdf</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="5">
                <table>
                    <tr>
                        <td class="title">
                            <img
                                src="website/assets/img/logo.png"
                                style="width: 35%; max-width: 300px"
                            />
                        </td>

                        <td>
                            Invoice #: 000{{$order->id}}<br />
                            Order Date: {{$order->order_date}}<br />
                            Invoice Date: {{date('Y-m-d')}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="5">
                <table>
                    <tr>
                        <td>
                            <h4><U>Company Information</U></h4>
                            Grakok Shop<br />
                            5/13, Road-01, Lalmatia<br />
                            Mohammadpur<br />
                            Dhaka-1207.
                        </td>
                        <td>
                            <h4><U>Customer Information</U></h4>
                            {{$order->customer->name}}<br />
                            {{$order->delivery_address}}<br />
                            {{$order->customer->email}}<br />
                            {{$order->customer->mobile}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td colspan="4">Payment Method</td>
            <td>Total Amount</td>
        </tr>

        <tr class="details">
            <td colspan="4">{{$order->payment_method}}</td>
            <td>BDT. {{number_format($order->order_total, 2)}}</td>
        </tr>

        <tr class="heading">
            <td>SL No</td>
            <td style="text-align: left;">Item Info</td>
            <td style="text-align: center;">Qty</td>
            <td style="text-align: center;">Price</td>
            <td style="text-align: right;">Item Total</td>
        </tr>
        @php($sum=0)
        @foreach($order->orderDetail as $orderDetail)
            <tr class="item" style="text-align: left;">
                <td>{{$loop->iteration}}</td>
                <td style="text-align: left;">{{$orderDetail->product_name}}</td>
                <td style="text-align: center;">{{$orderDetail->product_qty}}</td>
                <td style="text-align: center;">BDT. {{number_format($orderDetail->product_price, 2)}}</td>
                <td style="text-align: right;">BDT. {{number_format($orderDetail->product_price * $orderDetail->product_qty, 2)}}</td>
            </tr>
            @php($sum= $sum + ($orderDetail->product_price * $orderDetail->product_qty))
        @endforeach

        <tr class="">
            <td colspan="4"></td>
            <td>Sub-Total: <B>BDT. {{number_format($sum, 2)}}</B></td>
        </tr>
        <tr class="">
            <td colspan="4"></td>
            <td>Tax (15%): <B>BDT. {{number_format($tax = round( $sum * 0.15 ), 2)}}</B></td>
        </tr>
        <tr class="">
            <td colspan="4"></td>
            <td>Shipping : <B>BDT. {{number_format($shipping = 100, 2)}}</B></td>
        </tr>
        <tr class="total">
            <td colspan="4"></td>
            <td>Total Payable: BDT. {{number_format($totalPayable = $sum + $tax + $shipping, 2)}}</td>
        </tr>
    </table>

    <div class="py-0 text-center text-primary pt-5">
        <h5>Thank you for your purchase!</h5>
    </div>
</div>
</body>
</html>
