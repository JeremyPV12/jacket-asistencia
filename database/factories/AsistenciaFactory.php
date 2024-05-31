<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            
            'fecha' => $this->faker->date(),
            'ingreso' => $this->faker->dateTimeThisMonth(),
            'salida' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
