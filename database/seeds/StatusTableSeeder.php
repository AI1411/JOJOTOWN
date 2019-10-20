<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->delete();
        DB::table('statuses')->insert([
            0 => [
                'id' => 1,
                'name' => '通常会員'
            ],
            1 => [
                'id' => 2,
                'name' => 'シルバー会員',
            ],
            2 => [
                'id' => 3,
                'name' => 'ゴールド会員'
            ],
            3 => [
                'id' => 4,
                'name' => 'プラチナ会員'
            ],
            4 => [
                'id' => 5,
                'name' => '店舗管理者'
            ]
        ]);
    }
}
