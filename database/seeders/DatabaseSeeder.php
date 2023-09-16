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
            'name' => 'Administrator',
            'email' => 'administrator@cuea.edu',
            'password' => '$2a$12$CQgXt8PsCtg51Y5L2d/bgugHs3GUEWG9DTnIhdheIFCU975/JYqoW' //cuea@2023-graduation
        ]);

        //GraduantsResults::factory(5000)->create();
    }
}
