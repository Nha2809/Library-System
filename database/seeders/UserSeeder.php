<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'test@example.com'], // Find user by email or create new
            [
                'name' => 'Test User',
                'password' => bcrypt('password123'),  // Always hash passwords
                'phone' => '0123456789',
                'address' => '123 Laravel St',
            ]
        );
    }
}
