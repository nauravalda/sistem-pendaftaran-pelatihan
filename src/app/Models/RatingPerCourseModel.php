<?php
namespace App\Models;

use CodeIgniter\Model;

class RatingPerCourseModel extends Model
{
    protected $table = 'rating_per_course';

    public function getRatingByCourseId($id)
    {
        return $this->db->table($this->table)->getWhere(['course_id' => $id])->getResultArray()? $this->db->table($this->table)->getWhere(['course_id' => $id])->getResultArray()[0] : null;
    }

    public function getAllRating()
    {
        return $this->db->table($this->table)->get()->getResultArray();
    }

    public function getHighestRating()
    {
        return $this->db->table($this->table)->selectMax('rating')->limit(1)->get()->getRowArray();
    }
}