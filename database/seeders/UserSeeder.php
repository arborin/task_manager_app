<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'email' => 'admin@gmail.com',
                'name' => 'Admin User',         // Admin's name
                'password' => Hash::make('password'), // Change this to your desired password
                'is_admin' => true,            // Assuming `is_admin` column exists in your `users` table
            ]
        );
    }
}
