<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $roles = [
            ['nombre' => 'administrador', 'descripcion' => 'Usuario con todos los permisos, puede gestionar la aplicación.'],
            ['nombre' => 'chofer', 'descripcion' => 'Usuario encargado de realizar entregas y transportes.'],
            ['nombre' => 'cliente', 'descripcion' => 'Usuario que contratan nuestros servicios.'],
            ['nombre' => 'proveedor', 'descripcion' => 'Usuario que provee productos o servicios a la aplicación.'],
        ];

        foreach ($roles as $role) {
            Rol::create($role);
        }
    }
}
