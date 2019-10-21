<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
//use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show()
    {
        $carts = Cart::all();

        return view('carts.show', compact('carts'));
    }

    public function store(Request $request)
    {
        $carts = new Cart();
        $carts->name = $request->name;
        $carts->price = $request->price;
        $carts->cover_image = $request->cover_image;
        $carts->save();

        return redirect()->route('cart');
    }
}
