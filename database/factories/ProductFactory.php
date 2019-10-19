<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $word = $faker->word;
    $sentence = $faker->sentence;
    return [
        'name' => $word,
        'slug' => Str::slug($word),
        'description' => $sentence,
        'price' => random_int(100, 10000),
        'genre_id' => rand(1, 3),
        'store_id' => rand(1,10),
        'status' => 1,
        'cover_image' => $faker->randomElement([
            'alexi-romano-CCx6Fz_CmOI-unsplash.jpg',
            'ian-dooley-TT-ROxWj9nA-unsplash.jpg',
            'sharon-garcia-pkUH647RogQ-unsplash.jpg',
            'tamara-bellis-68csPWTnafo-unsplash.jpg',
            'tamara-bellis-pONwcn4IcVU-unsplash.jpg',
            'tamara-bellis-pONwcn4IcVU-unsplash.jpg',
            'tamara-bellis-68csPWTnafo-unsplash.jpg',
            'sharon-garcia-pkUH647RogQ-unsplash.jpg',
            'mubariz-mehdizadeh-o-wlIFT4zE4-unsplash.jpg',
            'monica-silva-VlMMBxSZuSI-unsplash.jpg'
        ])
    ];
});
