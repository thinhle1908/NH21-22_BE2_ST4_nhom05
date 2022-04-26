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
            'name'=>"Laptop Acer Nitro 5 Gaming AN515 57 5831 i5 11400H/8GB/512GB/6GB RTX3060/144Hz/Win10 (NH.QDGSV.003)",
            'manu_id'=>1,
            'type_id'=>1,
            'price'=>26390000,
            'image'=>Str::random(20),
            'description'=>"Acer Nitro 5 Gaming AN515 57 5831 i5 (NH.QDGSV.003) chuẩn gaming từ thiết kế đến cấu hình, mạnh mẽ, cá tính đầy ấn tượng, là lựa chọn hoàn hảo để cho bạn giải trí chiến game cực đã, đồng thời giải quyết tốt các tác vụ công việc.
            Phong cách ấn tượng, cá tính
            Acer Nitro 5 Gaming AN515 57 5831 i5 (NH.QDGSV.003) sở hữu tông màu đen đỏ chủ đạo, các đường cắt táo bạo lôi cuốn người nhìn, tạo phong thái cực kỳ mạnh mẽ, hiện đại và ấn tượng, chuẩn laptop gaming đáng để bạn lựa chọn.
            
            Trọng lượng máy 2.2 kg, dày 23.9 mm khá phù hợp cho một chiếc laptop dòng gaming, không quá khó để mang theo trong balo, túi xách để sử dụng khi cần mà không lo quá nặng hay cồng kềnh.",
            'feature'=>random_int(0,1),
        ]);
    }
}
