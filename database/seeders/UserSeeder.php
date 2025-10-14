<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create dummy users
        User::factory()
            ->has(Profile::factory())
            ->count(5)
            ->create();

        // Create example user
        User::create([
            'email' => 'pm@luna.id',
            'password' => 'luna',
        ]);
    }
}
