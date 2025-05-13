<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            [
                'fullname' => 'John Doe',
                'amount' => '1000',
                'status' => 'pending',
                'notes' => 'First user data',
                'image_path' => 'images/user1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Jane Smith',
                'amount' => '2000',
                'status' => 'completed',
                'notes' => 'Second user data',
                'image_path' => 'images/user2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Alice Johnson',
                'amount' => '1500',
                'status' => 'cancelled',
                'notes' => 'Third user data',
                'image_path' => 'images/user3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
