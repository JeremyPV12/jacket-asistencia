<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Asistencia;
use App\Models\Empleado;
use App\Models\Producto;
use App\Models\Servicio;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'jeremy',
            'email' => 'jeremy@gmail.com',
            'password' => bcrypt('123456789')
        ])/* ->assignRole('admin') */;

        /* User::factory(20)->create(); */
        Empleado::factory(3)->create();
        Asistencia::factory(10)->create();
        Producto::factory(30)->create();
        Servicio::factory(6)->create();
    }
}
