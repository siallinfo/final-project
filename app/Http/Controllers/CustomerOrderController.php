<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Auth;
use PDF;
use App\Models\Customer;

class CustomerOrderController extends Controller
{
    public function index()
    {
        $customerId = auth()->id();
        $customer = Customer::find($customerId);
        $orders = Order::where('customer_id', $customerId)->latest()->paginate(10);
        return view('customer.order.index', compact('orders', 'customer'));
    }
    public function orderDetail($id)
    {
        $customerId = auth()->id();
        $customer = Customer::find($customerId);
        $order = Order::where('id', $id)->where('customer_id', Auth::id())->first();

        if (!$order) {
            abort(404, "Order not found or does not belong to you.");
        }

        return view('customer.order.detail', compact('order', 'customer'));
    }
    public function invoice($id)
    {
        $customerId = auth()->id();
        $customer = Customer::find($customerId);
        $order = Order::where('id', $id)->where('customer_id', auth()->id())->firstOrFail();
        return view('customer.order.invoice', compact('order', 'customer')); // Ensure this is returning a view
    }

    public function downloadInvoice($id)
    {
        $order = Order::where('id', $id)->where('customer_id', Auth::id())->firstOrFail();

        $pdf = PDF::loadView('customer.order.download-invoice', compact('order'));

        return $pdf->stream(); // Change to ->download() if needed
    }
}
