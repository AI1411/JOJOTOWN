<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use function GuzzleHttp\Psr7\str;

$factory->define(Store::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'name' => $word,
        'slug' => Str::slug($word),
        'logo' => $faker->randomElement([
            'fashion.jpeg',
            'gap.png',
            'gu.png',
            'stussy.jpeg',
            'uniqlo.png',
            'gorilla.png'
        ])
    ];
});
