<?php

namespace Database\Seeders;

use App\Models\OperatingSystem;
use Illuminate\Database\Seeder;

class OperatingSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OperatingSystem::create(['os_name' => 'Android 8']);
        OperatingSystem::create(['os_name' => 'Android 9']);
        OperatingSystem::create(['os_name' => 'Android 10']);
        OperatingSystem::create(['os_name' => 'Android 11']);
        OperatingSystem::create(['os_name' => 'iOS 6']);
        OperatingSystem::create(['os_name' => 'iOS 7']);
        OperatingSystem::create(['os_name' => 'iOS 8']);
        OperatingSystem::create(['os_name' => 'iOS 9']);
        OperatingSystem::create(['os_name' => 'iOS 10']);
        OperatingSystem::create(['os_name' => 'iOS 11']);
        OperatingSystem::create(['os_name' => 'Windows Phone']);
    }
}