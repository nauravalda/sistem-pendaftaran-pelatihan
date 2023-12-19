<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ThisMonthTotalCourseParticipants extends Migration
{
    public function up()
    {
        $sql = "
            CREATE VIEW thismonth_total_course_participants AS
            SELECT
                course_enrollment.course_id AS course_id,
                COUNT(course_enrollment.user_id) AS total_participants
            FROM
                course_enrollment
            WHERE
                MONTH(course_enrollment.enrolled_at) = MONTH(CURRENT_DATE())
            GROUP BY
                course_enrollment.course_id
        ";

        $this->db->query($sql);
    }

    public function down()
    {
        $this->db->query("DROP VIEW thismonth_total_course_participants");
    }
}
