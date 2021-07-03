<?php

namespace Database\Seeders;

use App\Models\Battery;
use Illuminate\Database\Seeder;

class BatterySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Battery::create(['capacity' => '1000mAh']);
        Battery::create(['capacity' => '2000mAh']);
        Battery::create(['capacity' => '3000mAh']);
        Battery::create(['capacity' => '4000mAh']);
        Battery::create(['capacity' => '5000mAh']);
        Battery::create(['capacity' => '6000mAh']);
        Battery::create(['capacity' => '7000mAh']);
        Battery::create(['capacity' => '8000mAh']);
        Battery::create(['capacity' => '9000mAh']);
    }
}