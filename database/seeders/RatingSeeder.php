<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rating')->insert([
            'product_id'=>random_int(1,10000),
            'rating_id'=>random_int(1,10000),
            'user_id'=>random_int(1,100000),
            'rating_number'=>random_int(1,5),
        ]);
    }
}
