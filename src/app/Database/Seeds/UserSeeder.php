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
                'email' => 'nauravalda.nvp@gmail.com',
                'name' => 'Naura Valda Prameswari',
                'password' => hash('sha256', 'naura'),
                'phone_number' => '081232461002',
                'api_token' => null,
            ],
            [
                'id' => 2,
                'email' => 'gacorkang@gmail.com',
                'name' => 'Gacor kang',
                'password' => hash('sha256', 'gacor'),
                'phone_number' => '0818277389102',
                'api_token' => null,
            ],    [
                'id' => 3,
                'email' => 'bebekgacor02@gmail.com',
                'name' => 'Bebek Gacor',
                'password' => hash('sha256', 'bebek'),
                'phone_number' => '0298178912983',
                'api_token' => null,
            ],
            [
                'id' => 4,
                'email' => 'ojan@gmail.com',
                'name' => 'Ojan',
                'password' => hash('sha256', 'ojan'),
                'phone_number' => '0812918297736',
                'api_token' => null
            ],
            [
                'id' => 5,
                'email' => 'pudin@gmail.com',
                'name' => 'Pudin',
                'password' => hash('sha256', 'pudin'),
                'phone_number' => '0812788261632',
                'api_token' => null,
            ],
            [
                'id' => 6,
                'email' => 'budionosiregar@gmail.com',
                'name' => 'Budiono Siregar',
                'password' => hash('sha256', 'budiono'),
                'phone_number' => '07782190290192',
                'api_token' => null,
            ],
            [
                'id' => 7,
                'email' => 'rediohed@gmail.com',
                'name' => 'Skena Boy',
                'password' => hash('sha256', 'skena'),
                'phone_number' => '08129829192',
                'api_token' => null,
            ],
            [
                'id' => 8,
                'email' => 'naufalstarboti@gmail.com',
                'name' => 'Nopal Starboy',
                'password' => hash('sha256', 'nopal'),
                'phone_number' => '08219289329',
                'api_token' => null,
            ],
            [
                'id' => 9,
                'email' => 'john.doe@example.com',
                'name' => 'John Doe Training Solutions',
                'password' => hash('sha256', 'john'),
                'phone_number' => '123-456-789',
                'api_token' => '332bd937d1b3bca3cb7206cc2146a3d8a92a3577fdc98ea8d75489418ca76417',
            ],
        ];
    
            

        // Insert data into the 'user' table
        $this->db->table('user')->insertBatch($data);
    }
}