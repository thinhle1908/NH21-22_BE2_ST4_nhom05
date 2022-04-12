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
            'product_id'=>random_int(1,10000),
            'rating_id'=>random_int(1,10000),
            'user_id'=>random_int(1,100000),
            'comment_comment'=>Str::random(100),
        ]);
    
    }
}
