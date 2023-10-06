<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create 4 default permanent users to help login
        User::factory()->create([
            'name' => 'Emmanuel',
            'email' => 'emmanuel@example.com'
        ]);

        User::factory()->create([
            'name' => 'Taylor',
            'email' => 'taylor@example.com'
        ]);

        User::factory()->create([
            'name' => 'John',
            'email' => 'john@example.com',
            'role' => 'instructor'
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 'admin'
        ]);

        // create 10 random users
        User::factory()->count(10)->create();

        // create 10 random instructors
        User::factory()->count(10)->create([
            'role' => 'instructor'
        ]);

    }
}
