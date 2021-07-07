<?php

namespace Database\Seeders;

use App\Models\GraphicCard;
use Illuminate\Database\Seeder;

class GraphicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GraphicCard::create(['graphic_name' => 'Apple M1 8-Core GPU', 'description' => 'Algo de info']);
        GraphicCard::create(['graphic_name' => 'Qualcomm Adreno 660', 'description' => 'Algo de info']);
        GraphicCard::create(['graphic_name' => 'ARM Mali-G78 MP24', 'description' => 'Algo de info']);
        GraphicCard::create(['graphic_name' => 'Qualcomm Adreno 650', 'description' => 'Algo de info']);
        GraphicCard::create(['graphic_name' => 'ARM Mali-G78 MP14', 'description' => 'Algo de info']);
        GraphicCard::create(['graphic_name' => 'Qualcomm Adreno 642', 'description' => 'Algo de info']);
        GraphicCard::create(['graphic_name' => 'Qualcomm Adreno 630', 'description' => 'Algo de info']);
        GraphicCard::create(['graphic_name' => 'ARM Mali-G76 MP12', 'description' => 'Algo de info']);
        GraphicCard::create(['graphic_name' => 'NVIDIA Tegra K1 Kepler GPU', 'description' => 'Algo de info']);
        GraphicCard::create(['graphic_name' => 'ARM Mali-G71 MP2', 'description' => 'Algo de info']);
    }
}