<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{

    public function definition(): array
    {
        return [
            'answer' => $this->faker->randomElement(['yes', 'no']),
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'email' => $this->faker->email,
            'session_id' => '',
            'event_id' => $this->faker->numberBetween(1, 50)
        ];
    }
}
