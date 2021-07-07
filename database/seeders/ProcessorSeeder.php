<?php

namespace Database\Seeders;

use App\Models\Processor;
use Illuminate\Database\Seeder;

class ProcessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Processor::create(['processor_name' => 'Apple 10', 'description' => 'Procesador de gran calidad para iOS']);
        Processor::create(['processor_name' => 'Snapdragon 821', 'description' => 'Procesador de gran calidad con 160856 puntos']);
        Processor::create(['processor_name' => 'Snapdragon 820', 'description' => 'Procesador de gran calidad con 138026 puntos']);
        Processor::create(['processor_name' => 'Apple A9', 'description' => 'Procesador de gran calidad con 133781 puntos']);
        Processor::create(['processor_name' => 'Samsung Exynos 8890', 'description' => 'Procesador de gran calidad con 129865 puntos']);
        Processor::create(['processor_name' => 'MTK Helio x25', 'description' => 'Procesador de gran calidad con 97383 puntos']);
        Processor::create(['processor_name' => 'Kirin 955', 'description' => 'Procesador de gran calidad con 96043 puntos']);
        Processor::create(['processor_name' => 'Kirin 950', 'description' => 'Procesador de gran calidad con 92746 puntos']);
        Processor::create(['processor_name' => 'MTK Helio x20', 'description' => 'Procesador de gran calidad con 92033 puntos']);
        Processor::create(['processor_name' => 'Samsung Exynos 7420', 'description' => 'Procesador de gran calidad con 86652 puntos']);
    }
}