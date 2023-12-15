<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Review extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'course_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'content' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'rating' => [
                'type' => 'INT',
                'constraint' => 1, // Assuming ratings from 0 to 5
                'null' => true,
            ],
        ]);

        $this->forge->createTable('review');
        $this->forge->addForeignKey('user_id', 'user', 'id', 'CASCADE', 'CASCADE');

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('review');
    }
}
