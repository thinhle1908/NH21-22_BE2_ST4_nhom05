<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders_items')->insert([
            //1
            [
                'order_id'=>'1',
                'product_id'=>'21',
                'qty'=>'2',
                'price'=>'$168',
                'total'=>'$336',
            ],
            //2
            [
                'order_id'=>'2',
                'product_id'=>'11',
                'qty'=>'2',
                'price'=>'$680',
                'total'=>'$1360',
            ],
            //3
            [
                'order_id'=>'3',
                'product_id'=>'4',
                'qty'=>'5',
                'price'=>'$336',
                'total'=>'$1680',
            ],
        ]);
    }
}
