<?php

namespace Database\Seeders;

use App\Models\RamMemory;
use Illuminate\Database\Seeder;

class RamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RamMemory::create(['ram_capacity' => '2 GB']);
        RamMemory::create(['ram_capacity' => '3 GB']);
        RamMemory::create(['ram_capacity' => '4 GB']);
        RamMemory::create(['ram_capacity' => '6 GB']);
        RamMemory::create(['ram_capacity' => '8 GB']);
    }
}