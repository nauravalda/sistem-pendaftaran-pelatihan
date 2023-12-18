<?php
namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
   protected $table = 'review';
   public function getAllReview()
   {
      return $this->findAll();
   }

   public function getReviewByCourseId($id)
   {
      return $this->where(['course_id' => $id])->first();
   }

   public function getReviewByUserAndCourseId($id)
   {
      return $this->where(['user_id' => $id])->first();
   }

   public function postReview()
   {
    //   return
   }
}