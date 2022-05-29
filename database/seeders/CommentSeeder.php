<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments')->insert([
            //1
            ['product_id'=>1,
            'user_id'=>1,
            'comment_comment'=>"Good"],
            ['product_id'=>2,
            'user_id'=>1,
            'comment_comment'=>"Good"],
            ['product_id'=>3,
            'user_id'=>1,
            'comment_comment'=>"Good"],
            ['product_id'=>4,
            'user_id'=>1,
            'comment_comment'=>"Good"],
            ['product_id'=>5,
            'user_id'=>1,
            'comment_comment'=>"Good"],
            ['product_id'=>6,
            'user_id'=>1,
            'comment_comment'=>"Good"],
            ['product_id'=>7,
            'user_id'=>1,
            'comment_comment'=>"Good"],
            ['product_id'=>8,
            'user_id'=>1,
            'comment_comment'=>"Good"],
            ['product_id'=>9,
            'user_id'=>1,
            'comment_comment'=>"Good"],
        ]);
    
    }
}
