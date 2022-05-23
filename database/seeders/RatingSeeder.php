<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            [
                
            'product_id'=>1,
            'rating'=>3], //cho 3 rating mac dinh de test

            [ 
                'product_id'=>1,
            'rating'=>4],

            [  
                'product_id'=>1,
            'rating'=>5],
          
        ]);
    }
}
