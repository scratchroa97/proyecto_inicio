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
        \App\Models\User::factory()->create();
        $this->call(BrandSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(ScreenSeeder::class);
    }
}