<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CourseEnrollment extends Migration
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
                'unsigned' => true,
            ],
            'enrolled_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
        ]);

        $this->forge->addForeignKey('user_id', 'user', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('course_enrollment');

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('course_enrollment');
    }
}
