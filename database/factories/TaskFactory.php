<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{

    protected $model = \App\Models\Task::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(0, 10),
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(3, true),
            'status' => fake()->randomElement(['in progress', 'for review', 'completed', 'expired']),
            'deadline' => fake()->dateTimeBetween('+1 week', '+1 month'),
        ];
    }
}
