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
        'price' => rand(100, 1000),
        'status' => 1,
        'cover_image' => '1.jpeg'
    ];
});
