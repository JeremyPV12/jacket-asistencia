<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
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
            'nombre' => $this->faker->text(20),
            'descripcion' => $this->faker->text(),
            'tamaños' => $this->faker->randomElement(['1kg', '5kg', 'X', 'L', 'M']),
            'categoria' => $this->faker->randomElement(['perro', 'gato']),
            'precio' => $this->faker->numberBetween(10, 10000) / 100,
            'cantidad' => $this->faker->numberBetween(0, 100),
            'descuento' => $this->faker->boolean(30) ? $this->faker->numberBetween(10, 10000) / 100 : null,
            'image' => '',
        ];
    }
}
