<?php
namespace App\Models;

use CodeIgniter\Model;

class APIModel extends Model
{
    protected $userTable = 'user';
    protected $enrollmentTable = 'course_enrollment';
    protected $reviewTable = 'reviews_view';
    protected $paymentTable = 'payment';
    protected $totalParticipantsCourse = 'total_participants_course';
    protected $avgRatingCourse = 'rating_per_course';
    protected $url = 'http://localhost:8081/api/courses/john.doe@example.com/john';
    protected $response;
    protected $curl;
    protected $course;
    protected $responseData;
    

    // ... rest of the code ...

    // END: abpxx6d04wxr



    // return all from course_view
    public function getCourseTotalParticipant(){
        return $this->db->table($this->totalParticipantsCourse)->get()->getResultArray();
    }

    public function getProviderTotalParticipant(){
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, 'http://localhost:8081/api/courses/john.doe@example.com/john');
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        $this->response = curl_exec($this->curl);
        curl_close($this->curl);
        $this->course = [];
        if ($this->response) {
            $this->responseData = json_decode($this->response, true);
            if (isset($this->responseData['data']['courses'])) {
                $this->course['courses'] = $this->responseData['data']['courses'];
            }
        }

        $totalParticipantsCourses =  $this->db->table($this->totalParticipantsCourse)->get()->getResultArray();



        // Buat array untuk menyimpan total partisipan per provider
        $providerandtotal = [];
        $i = 0;
        foreach ($totalParticipantsCourses as $totalParticipantsCourse) {
            $providerid = 
            $providerandtotal[$i]['provider_id'] = $totalParticipantsCourse['total_participants'];
        }
        return $providerandtotal;


    }

    public function getAvgRatingCourse(){
        return $this->db->table($this->avgRatingCourse)->get()->getResultArray();
    }

    public function getReviewsByCourseId($id){
        return $this->db->table($this->reviewTable)->getWhere(['course_id' => $id])->getResultArray();
    }
    public function getAllReviews(){
        return $this->db->table($this->reviewTable)->get()->getResultArray();
    }
    public function getAllPayments(){
        return $this->db->table($this->paymentTable)->get()->getResultArray();
    }
    public function getAllEnrollment(){
        return $this->db->table($this->enrollmentTable)->get()->getResultArray();
    }
    public function getPaymentsByCourseId($id){
        return $this->db->table($this->paymentTable)->getWhere(['course_id' => $id])->getResultArray();
    }
    public function getThisMonthEnrollment(){
        return $this->db->table($this->enrollmentTable)->getWhere(['MONTH(enrolled_at)' => date('m')])->getResultArray();
    }
}