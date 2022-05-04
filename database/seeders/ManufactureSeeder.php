<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufactures')->insert([
            ['manu_name'=>"REVLON COS"],
            ['manu_name'=>"HOT TOOLS"],
            ['manu_name'=>"Dynacraft"],
            ['manu_name'=>"SAMSUNG"],
            ['manu_name'=>"Garmin"],
            ['manu_name'=>"Fossil"],
            ['manu_name'=>"Acer"],
            ['manu_name'=>"Newel"],
            ['manu_name'=>"Electro-Voice"],
            ['manu_name'=>"Mackie"]   
        ]);
    }
}
