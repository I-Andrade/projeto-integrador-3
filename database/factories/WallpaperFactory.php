<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class WallpaperFactory extends Factory
{
     /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->imageUrl(),
            'id_category' => $this->faker->numberBetween(1, 10),
            'author' => $this->faker->name(),
            'description' => $this->faker->text(),
        ];
    }
}
