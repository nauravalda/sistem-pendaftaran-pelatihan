<?php
namespace App\Models;

use CodeIgniter\Model;

class ReviewsViewModel extends Model
{
    protected $table = 'reviews_view';

    public function getReviewByCourseId($id)
    {
        return $this->db->table($this->table)->getWhere(['course_id' => $id])->getResultArray();
    }

    public function getReviewByUserId($id)
    {
        return $this->db->table($this->table)->getWhere(['user_id' => $id])->getResultArray();
    }

    public function getReviewByUserIdAndCourseId($user_id, $course_id)
    {
        return $this->db->table($this->table)->getWhere(['user_id' => $user_id, 'course_id' => $course_id])->getRowArray();
    }

    public function getAllReview()
    {
        return $this->db->table($this->table)->get()->getResultArray();
    }

    public function getRatingCount($course_id)
    {
        return $this->db->table($this->table)->where('course_id', $course_id)->countAllResults();
    }

    public function getHighestRatingReview($course_id)
    {
        // Getting the highest rating
        $highestRating = $this->db->table($this->table)->selectMax('rating')->where('course_id', $course_id)->limit(1)->get()->getRowArray()['rating'];

        if ($highestRating == null) {
            return null;
        }
        return $this->db->table($this->table)->where('course_id', $course_id)->where('rating', $highestRating)->get()->getResultArray()[0];

    }
}