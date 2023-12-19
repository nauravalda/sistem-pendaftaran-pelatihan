<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CourseEnrollmentSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'course_id' => 1,
                'enrolled_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 1,
                'course_id' => 2,
                'enrolled_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 2,
                'course_id' => 3,
                'enrolled_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 2,
                'course_id' => 4,
                'enrolled_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 3,
                'course_id' => 1,
                'enrolled_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 3,
                'course_id' => 3,
                'enrolled_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 4,
                'course_id' => 2,
                'enrolled_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 4,
                'course_id' => 4,
                'enrolled_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 5,
                'course_id' => 1,
                'enrolled_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 5,
                'course_id' => 2,
                'enrolled_at' => date('Y-m-d H:i:s'),
            ],
            // Add more enrollment data as needed
        ];

        // Insert data into the 'course_enrollment' table
        $this->db->table('course_enrollment')->insertBatch($data);
    }
}
