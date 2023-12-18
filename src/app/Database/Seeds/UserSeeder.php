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
                'full_name' => 'Aurelia Aronsohn',
                'password' => password_hash('aurelia', PASSWORD_DEFAULT),
                'phone_number' => '+54 831 381 4836',
            ],
            [
                'id' => 2,
                'email' => 'abambi@rediff.com',
                'full_name' => 'Arvie Bamb',
                'password' => password_hash('arvie', PASSWORD_DEFAULT),
                'phone_number' => '+967 685 785 5741',
            ],
            [
                'id' => 3,
                'email' => 'abourtoumieux13@reuters.com',
                'full_name' => 'Abelard Bourtoumieux',
                'password' => password_hash('abelard', PASSWORD_DEFAULT),
                'phone_number' => '5225442606',
            ],
            [
                'id' => 4,
                'email' => 'abromont2@princeton.edu',
                'full_name' => 'Arturo Bromont',
                'password' => password_hash('arturo', PASSWORD_DEFAULT),
                'phone_number' => '+249 275 996 4989',
            ],
            [
                'id' => 5,
                'email' => 'acurlingf@is.gd',
                'full_name' => 'Aliza Curling',
                'password' => password_hash('aliza', PASSWORD_DEFAULT),
                'phone_number' => '+48 342 862 3959',
            ],
            [
                'id' => 6,
                'email' => 'afultonu@wired.com',
                'full_name' => 'Alexandr Fulton',
                'password' => password_hash('alexandr', PASSWORD_DEFAULT),
                'phone_number' => '3061973969',
            ],
            [
                'id' => 7,
                'email' => 'agoldsmitho@netlog.com',
                'full_name' => 'Alexandros Goldsmith',
                'password' => password_hash('alexandros', PASSWORD_DEFAULT),
                'phone_number' => '2601236703',
            ],
            [
                'id' => 8,
                'email' => 'astickings0@webnode.com',
                'full_name' => 'Andie Stickings',
                'password' => password_hash('andie', PASSWORD_DEFAULT),
                'phone_number' => '3526885578',
            ],
            [
                'id' => 9,
                'email' => 'bpycockc@dot.gov',
                'full_name' => 'Bernie Pycock',
                'password' => password_hash('bernie', PASSWORD_DEFAULT),
                'phone_number' => '+62 957 966 0489',
            ],
            [
                'id' => 10,
                'email' => 'btamsettg@surveymonkey.com',
                'full_name' => 'Barbe Tamsett',
                'password' => password_hash('barbe', PASSWORD_DEFAULT),
                'phone_number' => '+62 266 527 0004',
            ],
        ];
    
            

        // Insert data into the 'user' table
        $this->db->table('user')->insertBatch($data);
    }
}