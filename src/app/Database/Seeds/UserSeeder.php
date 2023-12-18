<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'email' => 'aaronsohn8@webeden.co.uk',
                'name' => 'Aurelia Aronsohn',
                'password' => hash('sha256', 'aurelia'),
                'phone_number' => '+54 831 381 4836',
            ],
            [
                'id' => 2,
                'email' => 'abambi@rediff.com',
                'name' => 'Arvie Bamb',
                'password' => hash('sha256', 'arvie'),
                'phone_number' => '+967 685 785 5741',
            ],
            [
                'id' => 3,
                'email' => 'abourtoumieux13@reuters.com',
                'name' => 'Abelard Bourtoumieux',
                'password' => hash('sha256', 'abelard'),
                'phone_number' => '5225442606',
            ],
            [
                'id' => 4,
                'email' => 'abromont2@princeton.edu',
                'name' => 'Arturo Bromont',
                'password' => hash('sha256', 'arturo'),
                'phone_number' => '+249 275 996 4989',
            ],
            [
                'id' => 5,
                'email' => 'acurlingf@is.gd',
                'name' => 'Aliza Curling',
                'password' => hash('sha256', 'aliza'),
                'phone_number' => '+48 342 862 3959',
            ],
            [
                'id' => 6,
                'email' => 'afultonu@wired.com',
                'name' => 'Alexandr Fulton',
                'password' => hash('sha256', 'alexandr'),
                'phone_number' => '3061973969',
            ],
            [
                'id' => 7,
                'email' => 'agoldsmitho@netlog.com',
                'name' => 'Alexandros Goldsmith',
                'password' => hash('sha256', 'alexandros'),
                'phone_number' => '2601236703',
            ],
            [
                'id' => 8,
                'email' => 'astickings0@webnode.com',
                'name' => 'Andie Stickings',
                'password' => hash('sha256', 'andie'),
                'phone_number' => '3526885578',
            ],
            [
                'id' => 9,
                'email' => 'bpycockc@dot.gov',
                'name' => 'Bernie Pycock',
                'password' => hash('sha256', 'bernie'),
                'phone_number' => '+62 957 966 0489',
            ],
            [
                'id' => 10,
                'email' => 'btamsettg@surveymonkey.com',
                'name' => 'Barbe Tamsett',
                'password' => hash('sha256', 'barbe'),
                'phone_number' => '+62 266 527 0004',
            ],
        ];
    
            

        // Insert data into the 'user' table
        $this->db->table('user')->insertBatch($data);
    }
}