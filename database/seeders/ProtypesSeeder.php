<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class ProtypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('protypes')->insert([
            //1
            ['type_name'=> "Hair Dryer"],
            //2
            ['type_name'=> "Bicycle"],
            //3
            ['type_name'=> "Watch"],
            //4
            ['type_name'=> "Laptop"],
            //5
            ['type_name'=> "Loudspeaker"],
             //6
            ['type_name'=> "Tivi"],
             //7
            ['type_name'=> "Fridge"],
             //8
            ['type_name'=> "Air-conditioner"],
             //9
            ['type_name'=> "Washing machine"],
             //10
            ['type_name'=> "Air conditioner fan"],

            //11 minh
            ['type_name'=> "Air Fryer"],

            //12 minh
            ['type_name'=> "Earphone"],
        ]);
    }
}
