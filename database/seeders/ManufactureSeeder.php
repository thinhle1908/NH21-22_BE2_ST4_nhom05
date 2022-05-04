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
            ['manu_name'=>"Tivi"],
            ['manu_name'=>"Tủ lạnh"],
            ['manu_name'=>"Máy Giặt"],
            ['manu_name'=>"Máy lạnh"]
        ]);
    }
}
