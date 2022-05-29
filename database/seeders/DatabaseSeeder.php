<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProtypesSeeder::class
        ]);
        $this->call([
            ManufactureSeeder::class
        ]);
        $this->call([
            ProductsSeeder::class
        ]);
        $this->call([
            VouchersSeeder::class
        ]);
        $this->call([
            CommentSeeder::class
        ]);
    }
}
