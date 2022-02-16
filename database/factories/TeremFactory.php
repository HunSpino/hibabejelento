<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Terem>
 */
class TeremFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'epulet' => $this->faker->randomElement(['A','B']),
            'emelet' => $this->faker->numberBetween(0,3),
            'terem' => $this->faker->numberBetween(1,23),
            'gep' => $this->faker->numberBetween(1,50)
        ];
    }
}

