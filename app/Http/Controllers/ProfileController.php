<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class ProfileController extends Controller
{
    // Show Profile Edit Page
    public function edit()
    {
        $user = Auth::user();
        return view('website.customer-profile', compact('user'));
    }

    // Handle Profile Update
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validate the request
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|numeric',
            'password' => 'nullable|min:6|confirmed',
        ]);

        // Update user data
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
