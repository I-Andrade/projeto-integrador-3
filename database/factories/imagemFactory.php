<?php

namespace Database\Factories;

use App\Models\portifolio;
use Illuminate\Database\Eloquent\Factories\Factory;

class imagemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {      
        return [
            'id_portifolio' => portifolio::all()->random()->id,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
