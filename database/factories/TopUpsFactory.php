<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TopUpsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $amount = $this->faker->randomFloat(2, 10, 1000);

        $date = $this->faker->dateTimeBetween('-3 days');

        return [
            'amount' => $amount,
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}