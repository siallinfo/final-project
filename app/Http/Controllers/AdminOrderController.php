<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use PDF;

class AdminOrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index', ['orders' => Order::latest()->get()]);
    }
    public function orderDetail($id)
    {
        return view('admin.order.detail', ['order' => Order::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view('admin.order.edit', [
            'order'     => Order::find($id),
            'couriers'  => Courier::all(),
        ]);
    }

    private $order;

    public function update(Request $request, $id)
    {
        $this->order = Order::find($id);
        if ($request->order_status == 'Pending')
        {
            $this->order->order_status      = $request->order_status;
            $this->order->delivery_status   = $request->order_status;
            $this->order->payment_status    = $request->order_status;
        }
        elseif ($request->order_status == 'Processing')
        {
            $this->order->order_status      = $request->order_status;
            $this->order->delivery_status   = $request->order_status;
            $this->order->payment_status    = $request->order_status;
            $this->order->delivery_address  = $request->delivery_address;
            $this->order->courier_id        = $request->courier_id;
        }
        elseif ($request->order_status == 'Complete')
        {
            $this->order->order_status      = $request->order_status;
            $this->order->delivery_status   = $request->order_status;
            $this->order->payment_status    = $request->order_status;
            $this->order->delivery_date     = date('Y-m-d');
            $this->order->delivery_timestamp= strtotime(date('Y-m-d'));
            $this->order->payment_date      = date('Y-m-d');
            $this->order->payment_timestamp = strtotime(date('Y-m-d'));
        }
        elseif ($request->order_status == 'Cancel')
        {
            $this->order->order_status      = $request->order_status;
            $this->order->delivery_status   = $request->order_status;
            $this->order->payment_status    = $request->order_status;
        }
        $this->order->save();
        return redirect('/admin/all-order')->with('message', 'Order info updated successfully.');
    }
    public function invoice($id)
    {
        return view('admin.order.invoice', ['order' => Order::find($id)]);
    }
    public function downloadInvoice($id)
    {
        $order = Order::findOrFail($id);
        $pdf = PDF::loadView('admin.order.download-invoice', compact('order'));

        return $pdf->stream('invoice-' . $order->order_number . '.pdf');
    }
    public function deleteOrder($id)
    {
        Order::deleteOrder($id);
        OrderDetail::deleteOrderDetail($id);
        return back()->with('message', 'Order info deleted successfully.');
    }
}
