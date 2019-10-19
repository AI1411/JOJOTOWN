<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Product;
use App\Store;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Product $product)
    {
        $genres = Genre::all();
        return view('home', compact('genres', 'store'));
    }
}
