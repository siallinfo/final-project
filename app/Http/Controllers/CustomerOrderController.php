<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Auth;
use PDF;
use App\Models\Customer;
use Session;

class CustomerOrderController extends Controller
{
    public function index()
    {
        $customerId = Session::get('customer_id');
        $customer = Customer::find($customerId);
        $orders = Order::where('customer_id', $customerId)->latest()->paginate(10);

        return view('customer.order.index', compact('orders', 'customer'));
    }
    public function orderDetail($id)
    {
        $customerId = Session::get('customer_id');
        $customer = Customer::find($customerId);
        $order = Order::where('id', $id)->where('customer_id', $customerId)->first();

        if (!$order) {
            abort(404, "Order not found or does not belong to you.");
        }

        return view('customer.order.detail', compact('order', 'customer'));
    }
    public function invoice($id)
    {
        $customerId = Session::get('customer_id');
        $customer = Customer::find($customerId);
        $order = Order::where('id', $id)->where('customer_id', $customerId)->firstOrFail();
        return view('customer.order.invoice', compact('order', 'customer'));
    }

    public function downloadInvoice($id)
    {
        $customerId = Session::get('customer_id');
        $order = Order::where('id', $id)->where('customer_id', $customerId)->firstOrFail();

        $pdf = PDF::loadView('customer.order.download-invoice', compact('order'));

        return $pdf->stream();
    }
}
