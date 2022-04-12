<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class VouchersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vouchers')->insert([
            
            'voucher_code'=>Str::random(100),
            'voucher_value'=>random_int(1,100),
            'voucher_name'=>Str::random(10),
        ]);
    }
}
