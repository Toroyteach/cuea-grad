<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\GraduantsResults;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'user@gmail.com',
            'password' => '$2y$10$o6JeB4aHkyDwWYvhq7Ojdua88vKdhgT2nyB7clyy8girIH4jPfXLG' //12345678
        ]);

        //GraduantsResults::factory(5000)->create();
    }
}
