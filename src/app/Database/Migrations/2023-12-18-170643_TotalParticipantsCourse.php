<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TotalParticipantsCourse extends Migration
{
    public function up()
    {
        $sql = "
            CREATE VIEW total_participants_course AS
            SELECT
                course_enrollment.course_id AS course_id,
                COUNT(course_enrollment.course_id) AS total_participants
            FROM
                course_enrollment
            GROUP BY
                course_enrollment.course_id
        ";

        $this->db->query($sql);
    }

    public function down()
    {
        $this->db->query("DROP VIEW total_participants_course");
    }
}
