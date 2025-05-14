<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestResSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
    {
        DB::table('test_results')->insert([
            [
                'fullname' => 'Alice Johnson',
                'study_program' => 'Computer Science',
                'test_date' => '2025-05-01',
                'test_score' => 85,
                'status' => 'Active',
                'notes' => 'Great performance in tests',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Bob Smith',
                'study_program' => 'Information Systems',
                'test_date' => '2025-05-05',
                'test_score' => 92,
                'status' => 'Active',
                'notes' => 'Outstanding test results',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Charlie Brown',
                'study_program' => 'Software Engineering',
                'test_date' => '2025-05-10',
                'test_score' => 70,
                'status' => 'Inactive',
                'notes' => 'Needs improvement in theory',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Diana Prince',
                'study_program' => 'Data Science',
                'test_date' => '2025-05-12',
                'test_score' => 95,
                'status' => 'Active',
                'notes' => 'Excellent analytical skills',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Ethan Hunt',
                'study_program' => 'Artificial Intelligence',
                'test_date' => '2025-05-14',
                'test_score' => 60,
                'status' => 'Inactive',
                'notes' => 'Focus needed on practical tasks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
