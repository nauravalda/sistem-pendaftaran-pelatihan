<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ReviewsView extends Migration
{
    public function up()
    {
        $sql = "
            CREATE VIEW view_reviews AS
            SELECT
                user.id AS id,
                user.name AS name,
                review.course_id AS course_id,
                review.content AS content,
                review.rating AS rating
            FROM
                (review JOIN user ON (review.user_id = user.id))
        ";

        $this->db->query($sql);
    }

    public function down()
    {
        $this->db->query("DROP VIEW view_reviews");   
    }
}
