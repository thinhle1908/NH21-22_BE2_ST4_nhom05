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
['comment_product_id'=>1,
'comment_name'=>'anonymous',
'comment_date'=>'null',
'comment'=>'Good'],
//2
['comment_product_id'=>2,
'comment_name'=>'anonymous',
'comment_date'=>'null',
'comment'=>'Good'],
//3
['comment_product_id'=>3,
'comment_name'=>'anonymous',
'comment_date'=>'null',
'comment'=>'Good'],
//4
['comment_product_id'=>4,
'comment_name'=>'anonymous',
'comment_date'=>'null',
'comment'=>'Good'],
//5
['comment_product_id'=>5,
'comment_name'=>'anonymous',
'comment_date'=>'null',
'comment'=>'Good'],
//6
['comment_product_id'=>6,
'comment_name'=>'anonymous',
'comment_date'=>'null',
'comment'=>'Good'],
//7
['comment_product_id'=>7,
'comment_name'=>'anonymous',
'comment_date'=>'null',
'comment'=>'Good'],
//8
['comment_product_id'=>8,
'comment_name'=>'anonymous',
'comment_date'=>'null',
'comment'=>'Good'],
//9
['comment_product_id'=>9,
'comment_name'=>'anonymous',
'comment_date'=>'null',
'comment'=>'Good'],
//10
['comment_product_id'=>10,
'comment_name'=>'anonymous',
'comment_date'=>'null',
'comment'=>'Good'],
//11
['comment_product_id'=>11,
'comment_name'=>'anonymous',
'comment_date'=>'null',
'comment'=>'Good']

           
            
        ]);

    
    
    }
}
