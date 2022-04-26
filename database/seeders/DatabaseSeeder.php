<?php

namespace Database\Seeders;

use App\Models\Manufacture;
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
            ProductsSeeder::class
        ]);
        $this->call([
            ProtypesSeeder::class
        ]);
        $this->call([
            ManufactureSeeder::class
        ]);
       
    }
}
