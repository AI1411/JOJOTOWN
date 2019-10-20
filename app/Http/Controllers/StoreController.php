<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStoreRequest;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class StoreController extends Controller
{

    public function index()
    {
        $stores = Store::all();
        return view('stores.index', compact('stores'));
    }
    public function show($slug)
    {
        $store = Store::where('slug', $slug)->first();
        $products = $store->products;

        return view('stores.show', compact('store', 'products'));
    }

    public function create()
    {
        return view('stores.create');
    }

    public function store(CreateStoreRequest $request)
    {
        $store = new Store();
        $store->name = $request->name;
        $store->slug = Str::slug($store->name);
        $store->save();

        session()->flash('success', '店舗が作成されました');
        return redirect()->route('home');
    }
}
