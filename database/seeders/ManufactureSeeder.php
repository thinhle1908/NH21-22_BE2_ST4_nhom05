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
            //1
            ['manu_name'=>"REVLON COS"],
            //2
            ['manu_name'=>"HOT TOOLS"],
            //3
            ['manu_name'=>"Dynacraft"],
            //4
            ['manu_name'=>"SAMSUNG"],
            //5
            ['manu_name'=>"Garmin"],
            //6
            ['manu_name'=>"Fossil"],
            //7
            ['manu_name'=>"Acer"],
            //8
            ['manu_name'=>"Newel"],
            //9
            ['manu_name'=>"Electro-Voice"],
            //10
            ['manu_name'=>"Mackie"],
            //11
            ['manu_name'=>"TCL"],
            //12
            ['manu_name'=>"LG"],
            //13
            ['manu_name'=>"Koolatron"],
            //14
            ['manu_name'=>"COMFEE"],
            //15
            ['manu_name'=>"Dreo"],
            //16
            ['manu_name'=>"Whynter"]


        ]);
    }
}
