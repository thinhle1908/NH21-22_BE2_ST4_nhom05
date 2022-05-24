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
        //cho 3 rating mac dinh vao san pham so 1, 2 va 3 de test
        DB::table('rating')->insert([
            ['product_id'=>1,
            'rating'=>3], 
            
            ['product_id'=>2,
            'rating'=>3], //cho 3 rating mac dinh de test

            ['product_id'=>1,
            'rating'=>4],

            ['product_id'=>1,
            'rating'=>5],

            ['product_id'=>2,
            'rating'=>1], 

            ['product_id'=>2,
            'rating'=>2],

            ['product_id'=>2,
            'rating'=>1],

            ['product_id'=>3,
            'rating'=>5], 

            ['product_id'=>3,
            'rating'=>4],

            ['product_id'=>3,
            [  
                'product_id'=>3,
            'rating'=>5],
            [  
                'product_id'=>5,
            'rating'=>3],
            [  
                'product_id'=>7,
            'rating'=>4],
            [  
                'product_id'=>8,
            'rating'=>2],
            [  
                'product_id'=>10,
            'rating'=>3],
            [  
                'product_id'=>11,
            'rating'=>5],
            [  
                'product_id'=>15,
            'rating'=>4],
            [  
                'product_id'=>20,
            'rating'=>5],
            [  
                'product_id'=>22,
            'rating'=>3],
            [  
                'product_id'=>6,
            'rating'=>4],
        ]);
    }
}
