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
            ['type_name'=> "Hair Dryer"],
            ['type_name'=> "Bicycle"],
            ['type_name'=> "Watch"],
            ['type_name'=> "Laptop"],
            ['type_name'=> "Loudspeaker"]
        ]);
    }
}
