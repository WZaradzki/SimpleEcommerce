<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10000) ,
            'created_at'=> $this->faker->dateTimeBetween($startDate = '-20 day', $endDate = 'now'),
        ];
    }
}
