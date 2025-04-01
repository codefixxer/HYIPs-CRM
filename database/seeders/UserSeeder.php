<?php

// database/seeders/UserSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create a regular user
        User::create([
            'name' => 'John Doe',
            'email' => 'u@u',
            'password' => Hash::make('a'),
            'role' => 'user', 
        ]);

        // Create an admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'a@a',
            'password' => Hash::make('a'),  // Admin password
            'role' => 'admin',  // Admin role
        ]);
    }
}
