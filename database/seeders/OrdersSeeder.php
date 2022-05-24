<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            //1
            [
                'order_name'=>'Tivi',
                'order_address'=>'123 Hàm Yên Đống Đa Hà Nội',
                'order_phone'=>'0987654321',
                'order_email'=>'mail1@gmail.com',
                'order_notes'=>'Hàng dễ vỡ',
            ],
            //2
            [
                'order_name'=>'Laptop',
                'order_address'=>'456 Trần Hưng Đạo Quận 1 Thành Phố HCM',
                'order_phone'=>'0123456789',
                'order_email'=>'mail2@gmail.com',
                'order_notes'=>'Chú ý hàng dễ vỡ',
            ],
            //3
            [
                'order_name'=>'Bicycle',
                'order_address'=>'789 Ngô Quyền Đà Nẵng',
                'order_phone'=>'0987123456  ',
                'order_email'=>'mail3@gmail.com',
                'order_notes'=>'Giao Nhanh Gấp',
            ],
        ]);
    }
}
