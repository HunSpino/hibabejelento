<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hiba>
 */
class HibaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'felhasznalo' => $this->faker->name(),
            'hiba'=> $this->faker->text(),
            'terem_id' => $this->faker->numberBetween(1,15)
        ];
    }
}
