<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Project name
        $prefixes = ['Project', 'Quest', 'Mission', 'Objective'];
        $themes = ['Star Rail', 'Mugen', 'Impact', 'Terminator', 'Genshin', 'Honkai'];

        // Status
        $status = ['planned', 'in progress', 'completed', 'on hold'];
        $priorities = [null, 'low', 'medium', 'high'];

        $startDate = fake()->dateTimeBetween('now', '+1 month');
        $endDate = fake()->dateTimeBetween($startDate, '+1 month');

        return [
            'name' => fake()->randomElement($prefixes) . ' ' . fake()->randomElement($themes),
            'description' => fake()->text(),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'status' => fake()->randomElement($status),
            'priority' => fake()->randomElement($priorities),
        ];
    }
}
