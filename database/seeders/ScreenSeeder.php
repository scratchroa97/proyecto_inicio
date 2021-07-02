<?php

namespace Database\Seeders;

use App\Models\Screen;
use Illuminate\Database\Seeder;

class ScreenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Screen::create([
            'inches' => '3,2"'
        ]);
        Screen::create([
            'inches' => '3,3"'
        ]);
        Screen::create([
            'inches' => '3,9"'
        ]);
        Screen::create([
            'inches' => '4,4"'
        ]);
        Screen::create([
            'inches' => '4,7"'
        ]);
        Screen::create([
            'inches' => '5,0"'
        ]);
        Screen::create([
            'inches' => '5,1"'
        ]);
        Screen::create([
            'inches' => '5,3"'
        ]);
        Screen::create([
            'inches' => '5,5"'
        ]);
        Screen::create([
            'inches' => '6,0"'
        ]);
    }
}