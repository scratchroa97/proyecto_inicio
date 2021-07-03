<?php

namespace Database\Seeders;

use App\Models\RomMemory;
use Illuminate\Database\Seeder;

class RomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RomMemory::create(['rom_capacity' => '16 GB']);
        RomMemory::create(['rom_capacity' => '32 GB']);
        RomMemory::create(['rom_capacity' => '64 GB']);
        RomMemory::create(['rom_capacity' => '128 GB']);
        RomMemory::create(['rom_capacity' => '256 GB']);
        RomMemory::create(['rom_capacity' => '512 GB']);
    }
}