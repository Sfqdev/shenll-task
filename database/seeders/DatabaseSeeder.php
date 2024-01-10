<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => '12345',
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'user',
            'email' => 'user@mail.com',
            'password' => '12345',
            'role' => 'user'
        ]);
    }
}
