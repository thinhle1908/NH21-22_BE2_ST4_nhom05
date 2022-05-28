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
            ['voucher_code'=>"VOUCHERGIAM70",
            'voucher_value'=>30,
            'voucher_name'=>"Voucher giảm 70%"],
            ['voucher_code'=>"VOUCHERGIAM60",
            'voucher_value'=>60,
            'voucher_name'=>"Voucher giảm 60%"],
            ['voucher_code'=>"VOUCHERGIAM40",
            'voucher_value'=>40,
            'voucher_name'=>"Voucher giảm 40%"],
            ['voucher_code'=>"VOUCHERGIAM30",
            'voucher_value'=>30,
            'voucher_name'=>"Voucher giảm 30%"],
            ['voucher_code'=>"VOUCHERGIAM20",
            'voucher_value'=>20,
            'voucher_name'=>"Voucher giảm 20%"],
            ['voucher_code'=>"VOUCHERGIAM15",
            'voucher_value'=>15,
            'voucher_name'=>"Voucher giảm 15%"],
            ['voucher_code'=>"VOUCHERGIAM10",
            'voucher_value'=>10,
            'voucher_name'=>"Voucher giảm 10%"],
            ['voucher_code'=>"NOVOUCHER",
            'voucher_value'=>0,
            'voucher_name'=>"Không có vocher"],

        ]);
    }
}
