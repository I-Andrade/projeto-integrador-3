<?php

namespace Database\Factories;

use App\Models\categoria;
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
            'id_category' => categoria::whereType(2)->get()->random()->id,
            'author' => $this->faker->name(),
            'description' => $this->faker->text(),
        ];
    }
}
