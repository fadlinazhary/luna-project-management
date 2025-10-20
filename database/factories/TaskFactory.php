<?php

namespace Database\Factories;

use Faker\Provider\Lorem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Task name
        $prefixes = ['Project', 'Quest', 'Mission', 'Objective'];
        $themes = ['Star Rail', 'Mugen', 'Impact', 'Terminator', 'Genshin', 'Honkai'];

        $status = ['to do', 'in progress', 'finished'];
        $priorities = [null, 'low', 'medium', 'high'];

        $startDate = fake()->dateTimeBetween('now', '+1 week');
        $dueDate = fake()->dateTimeBetween($startDate, '+1 week');

        return [
            'name' => fake()->randomElement($prefixes) . ' ' . fake()->randomElement($themes),
            'description' => fake()->realText(),
            'status' => fake()->randomElement($status),
            'priority' => fake()->randomElement($priorities),
            'start_date' => $startDate,
            'due_date' => $dueDate,
        ];        
    }
}
