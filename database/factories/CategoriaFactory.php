<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class CategoriaFactory extends Factory
{
     /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'type' => $this->faker->randomElement(['wallpaper','blog']),
            'description' => $this->faker->name()
        ];
    }
}
