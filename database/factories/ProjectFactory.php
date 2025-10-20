<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Task;
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
        // $priorities = [null, 'low', 'medium', 'high'];

        $startDate = fake()->dateTimeBetween('now', '+1 month');
        $dueDate = fake()->dateTimeBetween($startDate, '+1 month');

        return [
            'name' => fake()->randomElement($prefixes) . ' ' . fake()->randomElement($themes),
            'description' => fake()->text(),
            'status' => fake()->randomElement($status),
            // 'priority' => fake()->randomElement($priorities),
            'start_date' => $startDate,
            'due_date' => $dueDate,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function  (Project $project) {
            Task::factory()
                ->count(3)
                ->for($project)
                ->create();
        });
    }
}
