<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_id'=> random_int(1,999),
            'user_username'=> 'JonnyDangLoveBoiz',
            'user_email'=> 'thanh.bu.liem@email.com',
            'user_password'=> 'boiz888999',
            'user_phone' => '0982311630',
            'user_firstname' =>'Jonny',
            'user_lastname' => "Dang",
            'user_dateofbirth'=> 12/12/2002,
            'user_roleid' => 2,

        ]);

        DB::table('users')->insert([
            'user_id'=> random_int(1,999),
            'user_username'=> 'KhoaMatSe',
            'user_email'=> 'khoa.cho@email.com',
            'user_password'=> 'contomhum999',
            'user_phone' => '0982235009',
            'user_firstname' =>'Khoa',
            'user_lastname' => "Pug",
            'user_dateofbirth'=> 12/1/2003,
            'user_roleid' => 2,

        ]);
    }
}
