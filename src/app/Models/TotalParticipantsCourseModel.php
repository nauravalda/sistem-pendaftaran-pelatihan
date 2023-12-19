<?php
namespace App\Models;

use CodeIgniter\Model;

class TotalParticipantsCourseModel extends Model
{
    protected $table = 'total_participants_course';

    public function getTotalParticipantsByCourseId($id)
    {
        return $this->db->table($this->table)->getWhere(['course_id' => $id])->getRowArray();
    }

    public function getAllTotalParticipants()
    {
        // getting sum of total participants per course
        return $this->db->table($this->table)->selectSum('total_participants')->get()->getRowArray();
    }
}