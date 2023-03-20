<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => $this->faker->words(5, true),
            'description' => $this->faker->paragraph,
            'date' => $this->faker->dateTimeThisMonth()->format('d.m.Y'),
        ];
    }
}
