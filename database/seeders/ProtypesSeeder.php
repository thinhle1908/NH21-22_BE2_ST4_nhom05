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
            ['type_name'=> "SamSung"],
            ['type_name'=> "Sony"],
            ['type_name'=> "TCL"],
            ['type_name'=> "LG"],
            ['type_name'=> "Casper"]
        ]);
    }
}
