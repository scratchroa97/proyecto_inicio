<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['rol_name' => 'usuario']);
        Role::create(['rol_name' => 'administrador']);
        Role::create(['rol_name' => 'empleado']);
    }
}