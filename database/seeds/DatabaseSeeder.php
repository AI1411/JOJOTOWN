<?php

use App\Product;
use App\Review;
use App\Store;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create();
        factory(Store::class, 50)->create();
        factory(Product::class, 100)->create();
        factory(Review::class, 100)->create();
    }
}
