<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'reviewer_name' => $faker->name,
        'points' => rand(1,5),
        'body' => $faker->sentence,
        'product_id' => rand(1,50),
    ];
});
