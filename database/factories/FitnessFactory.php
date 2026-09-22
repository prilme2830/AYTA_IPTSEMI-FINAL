<?php

namespace Database\Factories;

use App\Models\Fitness;
use Illuminate\Database\Eloquent\Factories\Factory;

class FitnessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'workouts' => fake()->name(),
            'exercises' => fake()->randomElement(['Push up', 'Sit-ups', 'Pull-ups']),
            'workout_logs'=>fake()->text(),
        ];
    }
}
