<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceiptDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receipt_details')->insert([
            //1
            [
                'receipt_id' => 1,
                'product_id' => 2,
                'product_quantity' => 5,
            ],
            //2
            [
                'receipt_id' => 2,
                'product_id' => 1,
                'product_quantity' => 3,
            ],
            //3
            [
                'receipt_id' => 3,
                'product_id' => 5,
                'product_quantity' => 3,
            ],

        ]);
    }
}
