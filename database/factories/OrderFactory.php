<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first(),
            'status' => $this->faker->randomElement(['open' ,'closed']),
            'value' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10000) ,
            'created_at'=> $this->faker->dateTimeBetween($startDate = '-20 day', $endDate = 'now'),
        ];
    }
}
