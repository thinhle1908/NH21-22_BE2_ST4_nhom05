<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Date;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>Str::random(10),
            'manu_id'=>random_int(1,10000),
            'type_id'=>random_int(1,10000),
            'price'=>random_int(1,10000),
            'image'=>Str::random(20),
            'description'=>Str::random(10),
            'feature'=>random_int(0,1),
        ]);
    }
}
