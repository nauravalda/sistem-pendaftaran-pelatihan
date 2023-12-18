<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RatingPerCourse extends Migration
{
    public function up()
    {
        $sql = "
            CREATE VIEW rating_per_course AS
            SELECT
                review.course_id AS course_id,
                ROUND(AVG(review.rating), 1) AS rating
            FROM
                review
            GROUP BY
                review.course_id
        ";

        $this->db->query($sql);
    }

    public function down()
    {
        $this->db->query("DROP VIEW rating_per_course");
    }
}
