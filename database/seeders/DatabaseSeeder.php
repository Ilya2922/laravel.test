<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Store;
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
        Brand::factory(1)->create();
        Store::factory(1)->create();
        // \App\Models\User::factory(10)->create();
    }
}
