<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'full_name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'phone_number' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
