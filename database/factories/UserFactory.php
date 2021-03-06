<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'order_count' => $this->faker->randomDigit(),
            'created_at'=> $this->faker->dateTimeBetween($startDate = '-20 day', $endDate = 'now'),
        ];
    }

}
