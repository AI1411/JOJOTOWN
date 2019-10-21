<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
//use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $price = [];
        foreach ($carts as $cart) {
            array_push($price, $cart->price);
        }
        $totalPrice = array_sum($price);

        return view('carts.show', compact('carts', 'totalPrice', 'user'));
    }

    public function store(Request $request)
    {
        $carts = new Cart();
        $carts->name = $request->name;
        $carts->user_id = Auth::user()->id;
        $carts->price = $request->price;
        $carts->cover_image = $request->cover_image;
        $carts->save();

        return redirect()->route('cart');
    }

    public function confirm(Request $request)
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $price = [];
        foreach ($carts as $cart) {
            array_push($price, $cart->price);
        }
        $totalPrice = array_sum($price);

        $resultMoney = $user->decrement('money', $totalPrice);


        foreach ($carts as $cart) {
            $cart->where('user_id', $user->id)->delete();
        }

        return view('carts.confirm', compact('carts', 'totalPrice', 'resultMoney', 'user'));
    }

    public function thanks()
    {
        return view('carts.thanks');
    }
}
