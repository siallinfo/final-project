<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    public function index()
    {
        return view('website.cart.index', ['cart_products' => Cart::content()]);
    }

    private $product;

    public function addToCart(Request $request, $id)
    {
        $this->product = Product::find($id);
        Cart::add([
            'id'    => $this->product->id,
            'name'  => $this->product->name,
            'price' => $this->product->selling_price,
            'qty'   => $request->qty,
            'options' => [
                'image' => $this->product->image,
                'code'  => $this->product->code,
            ]
        ]);
        return redirect('/cart');
    }
    public function addToCartTwo(Request $request, $id)
    {
        $this->product = Product::find($id);
        Cart::add([
            'id'    => $this->product->id,
            'name'  => $this->product->name,
            'price' => $this->product->selling_price,
            'qty'   => $request->qty,
            'options' => [
                'image' => $this->product->image,
                'code'  => $this->product->code,
            ]
        ]);

        return redirect()->back()->with('message', 'Product successfully added.');
    }
    public function update(Request $request)
    {
        foreach ($request->rowId as $index => $rowId) {
            Cart::update($rowId, $request->qty[$index]);
        }
        return redirect()->back()->with('message', 'Cart updated successfully!');
    }
    public function remove($rowId)
    {
        Cart::remove($rowId);
        return back()->with('message', 'Cart item removed successfully.');
    }
    public function destroy()
    {
        Cart::destroy();
        return back()->with('message', 'Cart items clear successfully.');
    }
}
