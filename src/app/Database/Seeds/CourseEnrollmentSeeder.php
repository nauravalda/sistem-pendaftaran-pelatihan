<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'course_id' => 1,
            ],
            [
                'user_id' => 1,
                'course_id' => 2,
            ],
            [
                'user_id' => 2,
                'course_id' => 3,
            ],
            [
                'user_id' => 2,
                'course_id' => 4,
            ],
            [
                'user_id' => 3,
                'course_id' => 1,
            ],
            [
                'user_id' => 3,
                'course_id' => 3,
            ],
            [
                'user_id' => 4,
                'course_id' => 2,
            ],
            [
                'user_id' => 4,
                'course_id' => 4,
            ],
            [
                'user_id' => 5,
                'course_id' => 1,
            ],
            [
                'user_id' => 5,
                'course_id' => 2,
            ],
            // Add more enrollment data as needed
        ];

        // Insert data into the 'course_enrollment' table
        $this->db->table('course_enrollment')->insertBatch($data);
    }
}
