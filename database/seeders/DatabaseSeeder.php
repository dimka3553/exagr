<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         \App\Models\assetType::factory(5)->create();
         \App\Models\asset::factory(50)->create();
         \App\Models\exchange::factory(20)->create();
         \App\Models\assetPrice::factory(500)->create();
    }
}
