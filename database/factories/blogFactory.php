<?php

namespace Database\Factories;

use App\Models\categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class blogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {      
        return [
            'title' => $this->faker->name(),
            'id_category' => categoria::whereType(1)->get()->random()->id,
            'image' => $this->faker->imageUrl(),
            'image_name' => $this->faker->name(),
            'link_text' => $this->faker->name(),
            'link_url' => $this->faker->url(),
            'text' => $this->faker->text(),
        ];
    }
}
