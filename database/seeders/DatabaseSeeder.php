<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Rol;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamar al seeder de roles para asegurarnos de que existan
        $this->call(RolSeeder::class);

        // Obtener el ID del rol de administrador
        $adminRol = Rol::where('nombre', 'administrador')->first();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'telefono' => '63461908',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'licencia' => '789456',
            'licencia_exp' => date("Y-m-d"), //date("Y-m-d H:i:s")
            'tipo' => 'administrador', // Puedes mantener el tipo si aún lo usas
            'rol_id' => $adminRol->id, // Asignar el ID del rol
        ]);
    }
}
