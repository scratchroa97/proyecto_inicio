<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create(['brand_name' => 'Apple', 'type' => 'ambos']);
        Brand::create(['brand_name' => 'Samsung', 'type' => 'ambos']);
        Brand::create(['brand_name' => 'Nokia', 'type' => 'ambos']);
        Brand::create(['brand_name' => 'Motorola', 'type' => 'ambos']);
    }
}