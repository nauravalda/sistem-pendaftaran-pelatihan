<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PaymentSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'user_id' => 1,
                'course_id' => 3,
                'datetime' => '2023-12-15 14:35:40',
                'status' => 0,
                'total' => 120000,
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'course_id' => 2,
                'datetime' => '2023-12-15 14:38:57',
                'status' => 1,
                'total' => 50000,
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'course_id' => 1,
                'datetime' => '2023-12-15 14:39:51',
                'status' => 1,
                'total' => 10000,
            ],
            // Add more payment data as needed
        ];

        // Insert data into the 'payment' table
        $this->db->table('payment')->insertBatch($data);
    }
}
