<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->delete();
        DB::table('genres')->insert([
            0 => [
                'id' => 1,
                'name' => 'メンズ',
                'slug' => 'mens'
            ],
            1 => [
                'id' => 2,
                'name' => 'レディース',
                'slug' => 'ledies'
            ],
            2 => [
                'id' => 3,
                'name' => 'キッズ',
                'slug' => 'kids'
            ]
        ]);
    }
}
