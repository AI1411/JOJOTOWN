<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function show($slug)
    {
        $store = Store::where('slug', $slug)->first();
        $products = $store->products;

        return view('stores.show', compact('store', 'products'));
    }
}
