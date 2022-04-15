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
            'user_id'=>random_int(1,100000),
            'rating_star'=>random_int(1,5),
            'rating_image'=> Str::random(10),
            'rating_content'=> Str::random(10),
        ]);
    }
}
