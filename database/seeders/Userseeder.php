<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
        // user #1
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

        // user #2

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
        // user #3

        DB::table('users')->insert([
            'user_id'=> random_int(1,999),
            'user_username'=> 'ChuaTeLuaGa',
            'user_email'=> 'luagavuong@email.com',
            'user_password'=> 'muaTwitter',
            'user_phone' => '0987577772',
            'user_firstname' =>'Elom',
            'user_lastname' => "Musk",
            'user_dateofbirth'=> 14/2/2001,
            'user_roleid' => 3,

        ]);

        // user #4

        DB::table('users')->insert([
            'user_id'=> random_int(1,999),
            'user_username'=> 'coadmin1',
            'user_email'=> 'coadmin@email.com',
            'user_password'=> 'Pazzworth666',
            'user_phone' => '0934512376',
            'user_firstname' =>'Tan Minh',
            'user_lastname' => 'Bui',
            'user_dateofbirth'=> 12/2/1991,
            'user_roleid' => 4,

        ]);

        // user #5

        DB::table('users')->insert([
            'user_id'=> random_int(1,999),
            'user_username'=> 'username5',
            'user_email'=> 'email5@email.com',
            'user_password'=> 'password5',
            'user_phone' => '0987000005',
            'user_firstname' =>'Nguoi5',
            'user_lastname' => "Dung 5",
            'user_dateofbirth'=> 12/1/2003,
            'user_roleid' => 2,

        ]);

        // user #6

        DB::table('users')->insert([
            'user_id'=> random_int(1,999),
            'user_username'=> 'username6',
            'user_email'=> 'email6@email.com',
            'user_password'=> 'password6',
            'user_phone' => '0987000006',
            'user_firstname' =>'Nguoi',
            'user_lastname' => "Dung 6 ",
            'user_dateofbirth'=> 12/1/2003,
            'user_roleid' => 2,

        ]);

        // user #7

        DB::table('users')->insert([
            'user_id'=> random_int(1,999),
            'user_username'=> 'username7',
            'user_email'=> 'email7@email.com',
            'user_password'=> 'password7',
            'user_phone' => '0987000007',
            'user_firstname' =>'Nguoi',
            'user_lastname' => "Dung 7",
            'user_dateofbirth'=> 12/1/2003,
            'user_roleid' => 2,

        ]);

        // user #8

        DB::table('users')->insert([
            'user_id'=> random_int(1,999),
            'user_username'=> 'username8',
            'user_email'=> 'email8@email.com',
            'user_password'=> 'password8',
            'user_phone' => '0987000008',
            'user_firstname' =>'Nguoi',
            'user_lastname' => "Dung 8",
            'user_dateofbirth'=> 12/1/2003,
            'user_roleid' => 2,

        ]);

       // user #9
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email9@email.com',
    'user_password'=> 'password9',
    'user_phone' => '0987000009',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 9',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #10
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email10@email.com',
    'user_password'=> 'password10',
    'user_phone' => '09870000010',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 10',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #11
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email11@email.com',
    'user_password'=> 'password11',
    'user_phone' => '09870000011',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 11',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #12
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email12@email.com',
    'user_password'=> 'password12',
    'user_phone' => '09870000012',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 12',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #13
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email13@email.com',
    'user_password'=> 'password13',
    'user_phone' => '09870000013',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 13',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #14
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email14@email.com',
    'user_password'=> 'password14',
    'user_phone' => '09870000014',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 14',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #15
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email15@email.com',
    'user_password'=> 'password15',
    'user_phone' => '09870000015',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 15',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #16
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email16@email.com',
    'user_password'=> 'password16',
    'user_phone' => '09870000016',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 16',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #17
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email17@email.com',
    'user_password'=> 'password17',
    'user_phone' => '09870000017',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 17',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #18
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email18@email.com',
    'user_password'=> 'password18',
    'user_phone' => '09870000018',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 18',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #19
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email19@email.com',
    'user_password'=> 'password19',
    'user_phone' => '09870000019',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 19',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #20
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email20@email.com',
    'user_password'=> 'password20',
    'user_phone' => '09870000020',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 20',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #21
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email21@email.com',
    'user_password'=> 'password21',
    'user_phone' => '09870000021',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 21',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #22
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email22@email.com',
    'user_password'=> 'password22',
    'user_phone' => '09870000022',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 22',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #23
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email23@email.com',
    'user_password'=> 'password23',
    'user_phone' => '09870000023',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 23',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #24
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email24@email.com',
    'user_password'=> 'password24',
    'user_phone' => '09870000024',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 24',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    // user #25
    DB::table('users')->insert([
    'user_id'=> random_int(1, 999),
    'user_username'=> 'username',
    'user_email'=> 'email25@email.com',
    'user_password'=> 'password25',
    'user_phone' => '09870000025',
    'user_firstname' =>'Nguoi',
    'user_lastname' => 'Dung 25',
    'user_dateofbirth'=> 12 / 1 / 2003,
    'user_roleid' => 2,]);
    


    }
}
