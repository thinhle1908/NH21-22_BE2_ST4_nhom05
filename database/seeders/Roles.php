<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'role_name' => 'admin' ,        
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'role_name' => 'user' ,        
        ]);
        DB::table('users')->insert([
            'role_id' => '3',
            'role_name' => 'premium_user' ,        
        ]);
        DB::table('users')->insert([
            'role_id' => '4',
            'role_name' => 'co-admin' ,        
        ]);
        DB::table('users')->insert([
            'role_id' => '5',
            'role_name' => 'VIP' ,        
        ]);
    }
}
