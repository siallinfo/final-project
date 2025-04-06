<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Session;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerDashboardController extends Controller
{
    public function index()
    {
        $customer = Customer::find(Session::get('customer_id'));
        return view('customer.dashboard.index', compact('customer'));
    }
    public function profile()
    {
        $customer = Customer::find(Session::get('customer_id'));
        return view('customer.profile.index', compact('customer'));
    }
    public function order()
    {
        $customerId = Session::get('customer_id');

        $customer = Customer::find($customerId);
        $orders = Order::where('customer_id', $customerId)->latest()->get();

        return view('customer.order.index', [
            'orders'   => $orders,
            'customer' => $customer,
        ]);
    }

    public function orderDetail()
    {
        $customer = Customer::find(Session::get('customer_id'));
        return view('customer.order.detail', compact('customer'));
    }
    public function editProfile($id)
    {
        $customer = Customer::find($id);
        return view('customer.profile.edit', compact('customer'));
    }

    public static function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->updateProfile($request, $id);
        return redirect()->route('customer.profile')->with('success', 'Profile Updated Successfully');
    }

    public function changePassword()
    {
        $customer = Customer::find(Session::get('customer_id'));
        return view('customer.profile.change-password', compact('customer'));
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        $customer = Customer::find(Session::get('customer_id'));

        if (!Hash::check($request->current_password, $customer->password)) {
            return back()->with('error', 'Current password is incorrect.');
        }

        $customer->password = bcrypt($request->new_password);
        $customer->save();

        return redirect()->route('customer.profile')->with('success', 'Password updated successfully.');
    }

}
