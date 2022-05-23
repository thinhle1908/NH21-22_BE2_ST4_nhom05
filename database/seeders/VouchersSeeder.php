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
            //1
            ['voucher_code'=>"VOUCHERGIAM50",
            'voucher_value'=>50,
            'voucher_name'=>"Voucher giảm 50%"],
            ['voucher_code'=>"VOUCHERGIAM30",
            'voucher_value'=>30,
            'voucher_name'=>"Voucher giảm 30%"],
            ['voucher_code'=>"NOVOUCHER",
            'voucher_value'=>0,
            'voucher_name'=>"Không có vocher"],
            
        ]);
    }
}
