<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('carts')->insert([
            'user_id'=>random_int(1,100),
            'product_id'=>random_int(1,10000),
            'product_quantity'=>random_int(1,1000),
            
        ]);
    }
}
