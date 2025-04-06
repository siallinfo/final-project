<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerAuthController extends Controller
{
    public function login()
    {
        return view('customer.auth.login');
    }
    public function loginCheck(Request $request)
    {
        $this->customer = Customer::where('email', $request->email)->first();
        if ($this->customer)
        {
            if (password_verify($request->password, $this->customer->password))
            {
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->name);

                return redirect('/customer/dashboard');
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
    public function register()
    {
        return view('customer.auth.register');
    }
    public function registerCheck(Request $request)
    {
        $this->customer = Customer::newCustomer($request);

        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->name);

        return redirect('/customer/dashboard');
    }
    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');
        return redirect('/');
    }
}
