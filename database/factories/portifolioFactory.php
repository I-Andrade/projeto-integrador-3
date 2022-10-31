<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class portifolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->name(),
            'category'=>$this->faker->randomElement(['sites','identidade','embalagem','midia','campanha']),
            'image'=>$this->faker->imageUrl(),
            'description'=>$this->faker->text(),
        ];
    }
}