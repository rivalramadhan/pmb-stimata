<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create sample users
        User::create([
            'fullname' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '2025-02-08 17:17:10',
            'password' => Hash::make('password123'),
            'role' => 'user'
        ]);

        User::create([
            'fullname' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'phone' => '2025-02-08 17:17:10',
            'password' => Hash::make('password123'),
            'role' => 'user'
        ]);

    }
}