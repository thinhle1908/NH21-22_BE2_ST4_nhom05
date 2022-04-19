<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
    }
}
