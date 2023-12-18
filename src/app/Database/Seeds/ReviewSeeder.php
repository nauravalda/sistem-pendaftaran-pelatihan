<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'course_id' => 1,
                'content' => 'Sangat keren, alur materi mudah dipahami',
                'rating' => 5,
            ],
            [
                'user_id' => 2,
                'course_id' => 2,
                'content' => 'Tidak worth',
                'rating' => 4,
            ],
            [
                'user_id' => 3,
                'course_id' => 3,
                'content' => 'Materi lengkap, sangat bermanfaat!',
                'rating' => 5,
            ],
            [
                'user_id' => 4,
                'course_id' => 1,
                'content' => 'Bagus sekali, saya sangat suka!',
                'rating' => 5,
            ],
        ];

        // Insert data ke dalam tabel 'review'
        $this->db->table('review')->insertBatch($data);
    }
}