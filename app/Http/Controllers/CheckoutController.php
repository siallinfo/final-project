<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\SslCommerzPaymentController;

class CheckoutController extends Controller
{
    private $order, $customer;

    public function index()
    {
        if (Session::get('customer_id'))
        {
            return redirect('/checkout/billing-info');
        }
        return view('website.checkout.index');
    }
    public function newCustomer(Request $request)
    {
        $this->customer = Customer::newCustomer($request);

        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->name);

        return redirect('/checkout/billing-info');
    }
    public function customerLogin(Request $request)
    {
        $this->customer = Customer::where('email', $request->email)->first();
        if ($this->customer)
        {
            if (password_verify($request->password, $this->customer->password))
            {
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->name);

                return redirect('/checkout/billing-info');
            }
            else
            {
                return back()->with('message', 'Invalid Password');
            }
        }
        else
        {
            return back()->with('message', 'Invalid Email');
        }
    }
    public function billingInfo(Request $request)
    {
        return view('website.checkout.billing-info');
    }
    private $orderId;

    public function newOrder(Request $request)
    {
        if ($request->payment_method == 'Cash On Delivery')
        {
            $this->orderId = Order::newOrder($request);
            OrderDetail::newOrderDetail($this->orderId);
            return redirect('/checkout/complete-order')->with('message', 'Your Order place successfully.');
        }
        elseif ($request->payment_method == 'Online Payment')
        {
            $sslCommerzPaymentController = new SslCommerzPaymentController();
            $sslCommerzPaymentController->index($request);
        }
    }
    public function completeOrder(Order $order)
    {
        return view('website.checkout.complete-order', compact('order'));
    }

}
