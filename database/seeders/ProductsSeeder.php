<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Date;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name'=> "Smart Tivi QLED 4K 55 inch Samsung QA55Q65A",'manu_id'=>1,'type_id'=>1,'price'=>25900000,'image'=>"1-1020x571.jpg",'description'=>"Smart Tivi QLED 4K 55 inch Samsung QA55Q65A với thiết kế với màn hình tràn viền 4 cạnh, cho người dùng trải nghiệm khung hình giải trí trên tivi chân thực như thực tế đang xảy ra trước mắt.

            Tivi Samsung 55 inch có chân đế được thiết kế gọn gàng, vững chắc. Mang lại sự thanh lịch, sang trọng cho chiếc tivi, phù hợp trưng bày ở phòng khách, phòng ngủ,...",'feature'=> 0],
            ['name'=> "Smart Tivi Samsung 4K 55 inch UA55TU6900",'manu_id'=>1,'type_id'=>1,'price'=>17900000,'image'=>"qled-4k-samsung-qa55q65a-2.jpg",'description'=>"Smart Tivi Samsung 4K 55 inch 55TU6900 được thiết kế màn hình không viền 3 cạnh tinh tế, màu đen thanh lịch. Kiểu dáng thanh mảnh, hứa hẹn sẽ làm nổi bật không gian nội thất nhà bạn.

            Tivi Samsung 55 inch phù hợp trưng bày những không gian vừa như: phòng khách, phòng ngủ,..",'feature'=> 1],
            ['name'=> "Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100",'manu_id'=>1,'type_id'=>1,'price'=>18900000,'image'=>"led-4k-samsung-ua50au8100-1.jpg",'description'=>"Smart Tivi QLED 4K 55 inch Samsung QA55Q65A với thiết kế với màn hình tràn viền 4 cạnh, cho người dùng trải nghiệm khung hình giải trí trên tivi chân thực như thực tế đang xảy ra trước mắt.

            Tivi Samsung 55 inch có chân đế được thiết kế gọn gàng, vững chắc. Mang lại sự thanh lịch, sang trọng cho chiếc tivi, phù hợp trưng bày ở phòng khách, phòng ngủ,...",'feature'=> 0],
            ['name'=> "Android Tivi Sony 4K 43 inch KD-43X75",'manu_id'=>1,'type_id'=>2,'price'=>13400000,'image'=>"vi-vn-led-sony-kd-43x75.jpg",'description'=>"Smart Tivi QLED 4K 55 inch Samsung QA55Q65A với thiết kế với màn hình tràn viền 4 cạnh, cho người dùng trải nghiệm khung hình giải trí trên tivi chân thực như thực tế đang xảy ra trước mắt.

            Tivi Samsung 55 inch có chân đế được thiết kế gọn gàng, vững chắc. Mang lại sự thanh lịch, sang trọng cho chiếc tivi, phù hợp trưng bày ở phòng khách, phòng ngủ,...",'feature'=> 0],
            ['name'=> "Android Tivi TCL 43 inch L43S5200",'manu_id'=>1,'type_id'=>2,'price'=>13400000,'image'=>"led-tcl-l43s5200-2-org.jpg",'description'=>"Smart Tivi QLED 4K 55 inch Samsung QA55Q65A với thiết kế với màn hình tràn viền 4 cạnh, cho người dùng trải nghiệm khung hình giải trí trên tivi chân thực như thực tế đang xảy ra trước mắt.

            Tivi Samsung 55 inch có chân đế được thiết kế gọn gàng, vững chắc. Mang lại sự thanh lịch, sang trọng cho chiếc tivi, phù hợp trưng bày ở phòng khách, phòng ngủ,...",'feature'=> 0],
            ['name'=> "Smart Tivi LG 4K 55 inch 55UP7750PTB",'manu_id'=>1,'type_id'=>4,'price'=>21900000,'image'=>"1-1-org-org.jpg",'description'=>"Smart Tivi QLED 4K 55 inch Samsung QA55Q65A với thiết kế với màn hình tràn viền 4 cạnh, cho người dùng trải nghiệm khung hình giải trí trên tivi chân thực như thực tế đang xảy ra trước mắt.

            Tivi Samsung 55 inch có chân đế được thiết kế gọn gàng, vững chắc. Mang lại sự thanh lịch, sang trọng cho chiếc tivi, phù hợp trưng bày ở phòng khách, phòng ngủ,...",'feature'=> 1],
            ['name'=> "Smart Tivi Casper 32 inch 32HX6200",'manu_id'=>1,'type_id'=>5,'price'=>4990000,'image'=>"casper-32hx6200-1-1-org.jpg",'description'=>"Smart Tivi QLED 4K 55 inch Samsung QA55Q65A với thiết kế với màn hình tràn viền 4 cạnh, cho người dùng trải nghiệm khung hình giải trí trên tivi chân thực như thực tế đang xảy ra trước mắt.

            Tivi Samsung 55 inch có chân đế được thiết kế gọn gàng, vững chắc. Mang lại sự thanh lịch, sang trọng cho chiếc tivi, phù hợp trưng bày ở phòng khách, phòng ngủ,...",'feature'=> 0]
        ]);
    }
}
