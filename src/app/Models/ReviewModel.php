<?php
namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'review';
    protected $allowedFields = ['user_id', 'course_id', 'rating', 'review'];

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

    public function insertReview($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function deleteReview($id, $course_id)
    {
        return $this->db->table($this->table)->delete(['user_id' => $id, 'course_id' => $course_id]);
    }
}