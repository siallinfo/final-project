<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Storage;

class Customer extends Model
{
    private static $customer, $image, $imageName, $imageUrl, $directory;

    public static function newCustomer($request)
    {
        self::$customer = new Customer();
        self::$customer->name       = $request->name;
        self::$customer->email      = $request->email;
        self::$customer->password   = bcrypt($request->password);
        self::$customer->mobile     = $request->mobile;
        self::$customer->save();
        return self::$customer;
    }
    public static function updateProfile($request, $id)
    {
        $customer = Customer::find($id);

        if ($request->hasFile('image')) {
            $oldImagePath = $customer->image;
            if (file_exists($oldImagePath))
            {
                unlink($oldImagePath);
            }
            $image              = $request->file('image');
            $imageName          = $image->getClientOriginalName();
            $directory          = 'image/customer-image/';
            $image->move($directory, $imageName);
            $imageUrl           = $directory.$imageName;
            $customer->image    = $imageUrl;
//            $oldImagePath = public_path('storage/' . $customer->image);
//            if (file_exists($oldImagePath) && is_file($oldImagePath)) {
//                unlink($oldImagePath);
//            }
//
//            $imagePath = $request->file('image')->store('customers', 'public');
//            $customer->image = 'storage/' . $imagePath;
        }

        $customer->name          = $request->name;
        $customer->email         = $request->email;
        $customer->mobile        = $request->mobile;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->address       = $request->address;
        $customer->nid           = $request->nid;
        $customer->blood_group   = $request->blood_group;
        $customer->save();
    }
}
