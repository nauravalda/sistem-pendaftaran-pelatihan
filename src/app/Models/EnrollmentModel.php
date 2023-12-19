<?php
namespace App\Models;

use CodeIgniter\Model;

class EnrollmentModel extends Model
{
    protected $table = 'course_enrollment';
    public function getEnrollmentById($id)
    {
        return $this->db->table($this->table)->getWhere(['user_id' => $id])->getResultArray();
    }

    public function getEnrollmentIdAndCourseId($id, $course_id)
    {
        return $this->db->table($this->table)->getWhere(['user_id' => $id, 'course_id' => $course_id])->getRowArray();
    }

    public function getAllEnrollment()
    {
        return $this->db->table($this->table)->get()->getResultArray();
    }

    public function insertEnrollment($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}