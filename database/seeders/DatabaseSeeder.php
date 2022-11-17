<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
//         \App\Models\assetType::factory(5)->create();
//         \App\Models\asset::factory(50)->create();
//         \App\Models\exchange::factory(20)->create();
//         \App\Models\assetPrice::factory(500)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'test@example.com',
        ]);
    }
}
