<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function show($slug)
    {
        $genre = Genre::where('slug', $slug)->first();
        $products = $genre->products;

        return view('genres.show', compact('genre','products'));
    }
}
