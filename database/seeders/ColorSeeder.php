<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create(['color_name' => 'Amarillo']);
        Color::create(['color_name' => 'Azul']);
        Color::create(['color_name' => 'Rojo']);
        Color::create(['color_name' => 'Verde']);
        Color::create(['color_name' => 'Negro']);
        Color::create(['color_name' => 'Blanco']);
        Color::create(['color_name' => 'Gris']);
    }
}