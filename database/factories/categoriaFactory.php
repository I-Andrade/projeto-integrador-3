<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class categoriaFactory extends Factory
{
     /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['1', '2']),
            'description' => $this->faker->name()
        ];
    }
}
