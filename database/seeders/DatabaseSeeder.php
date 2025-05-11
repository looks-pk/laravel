<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        // Create an admin user
        User::create([
            'name' => 'Super Admin',
            'email' => 'digitalpartnerabdullah@gmail.com',
            'password' => Hash::make('digitalpartnerabdullah@gmail.com'),
            'is_admin' => true,
        ]);

        $this->call([
            ServiceSeeder::class,
            // Add other seeders here
        ]);
    }
}
