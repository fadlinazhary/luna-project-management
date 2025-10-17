<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Faker\Provider\Lorem;
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
        $user = User::create([
            'username' => 'luna',
            'email' => 'pm@luna.id',
            'password' => 'luna',
        ]);

        $user->profile()->create([
            'name' => 'Luna',
            'bio' => Lorem::sentence(),
        ]);
    }
}
