<?php

use App\Genre;
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
        factory(Store::class, 10)->create();
        factory(Product::class, 200)->create();
        factory(Review::class, 100)->create();
        $this->call(StatusTableSeeder::class);
        $this->call(GenreTableSeeder::class);
    }
}
