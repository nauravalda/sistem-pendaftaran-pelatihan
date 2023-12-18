<?php
namespace App\Models;

use CodeIgniter\Model;

class APIModel extends Model
{
    protected $db;


    protected $userTable = 'user';
    protected $enrollmentTable = 'course_enrollment';
    protected $reviewTable = 'reviews_view';
    protected $paymentTable = 'payment';
    protected $totalParticipantsCourse = 'total_participants_course';
    protected $totalParticipantsCourseThisMonth = 'thismonth_total_course_participants';
    protected $avgRatingCourse = 'rating_per_course';
    protected $apiUrl;
    protected $apiKey;
    protected $url;

    public function __construct() {
        parent::__construct();
        $this->db = \Config\Database::connect();
        $this->apiUrl = getenv('API_URL');
        $this->apiKey = getenv('API_KEY');
        $this->url = $this->apiUrl . 'courses?apiKey=' . $this->apiKey;
    }
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
    function getTotalParticipantsByCourseId($courseParticipants, $searchCourseId) {
        foreach ($courseParticipants as $participant) {
            if ($participant['course_id'] === $searchCourseId) {
                return $participant['total_participants'];
            }
        }
        // Jika tidak ditemukan course_id yang sesuai
        return 0; // Atau nilai default lainnya yang Anda inginkan
    }

    public function getProviderTotalParticipant(){
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $this->url);
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
        $apiModel = new APIModel();

        $totalParticipantsCourses =  $apiModel->getCourseTotalParticipant();
    


        // Buat array untuk menyimpan total partisipan per provider
        $providerandtotal = [];
        $i = 0;
        foreach ($this->course['courses'] as $course) {
            $providerId = $course['provider_id'];
            $courseId = $course['id'];
            $totalParticipants = $this->getTotalParticipantsByCourseId($totalParticipantsCourses, $courseId);
    
            if (array_key_exists($providerId, $providerandtotal)) {
                $providerandtotal[$providerId] += $totalParticipants;
            } else {
                $providerandtotal[$providerId] = $totalParticipants;
            }
        }

        $res = [];
    foreach ($providerandtotal as $providerId => $totalParticipants) {
        $res[] = [
            "provider_id" => $providerId,
            "total_participants" => $totalParticipants
        ];
    }
    
        return $res;


    }



    public function getProviderTotalParticipantThisMonth(){
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $this->url);
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

        $totalParticipantsCourses =  $this->db->table($this->totalParticipantsCourseThisMonth)->get()->getResultArray();
    


        // Buat array untuk menyimpan total partisipan per provider
        $providerandtotal = [];
        $i = 0;
        foreach ($this->course['courses'] as $course) {
            $providerId = $course['provider_id'];
            $courseId = $course['id'];
            $totalParticipants = $this->getTotalParticipantsByCourseId($totalParticipantsCourses, $courseId);
    
            if (array_key_exists($providerId, $providerandtotal)) {
                $providerandtotal[$providerId] += $totalParticipants;
            } else {
                $providerandtotal[$providerId] = $totalParticipants;
            }
        }

        $res = [];
    foreach ($providerandtotal as $providerId => $totalParticipants) {
        $res[] = [
            "provider_id" => $providerId,
            "total_participants_this_month" => $totalParticipants
        ];
    }
    
        return $res;


    }

    



    public function getAvgRatingCourse(){
        return $this->db->table($this->avgRatingCourse)->get()->getResultArray();
    }

    function getAvgRatingByCourseId($avgRatingCourses, $searchCourseId) {
        foreach ($avgRatingCourses as $avgRating) {
            if ($avgRating['course_id'] === $searchCourseId) {
                return $avgRating['rating'];
            }
        }
        // Jika tidak ditemukan course_id yang sesuai
        return NULL; // Atau nilai default lainnya yang Anda inginkan
    }

    public function getAvgRatingProvider(){
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $this->url);
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

        $totalParticipantsCourses =  $this->db->table($this->avgRatingCourse)->get()->getResultArray();
    


        $providerRating = [];
        $providerCount = [];
    
        foreach ($this->course['courses'] as $course) {
            $providerId = $course['provider_id'];
            $courseId = $course['id'];
            $rating = $this->getAvgRatingByCourseId($totalParticipantsCourses, $courseId);
            if ($rating === NULL) {
                continue;
            }

    
            if (isset($providerRating[$providerId])) {
                $providerRating[$providerId] += $rating;
                $providerCount[$providerId]++;
            } else {
                $providerRating[$providerId] = $rating;
                $providerCount[$providerId] = 1;
            }
        }
    
        $res = [];
        foreach ($providerRating as $providerId => $totalRating) {
            // Hitung rata-rata rating per provider
            $avgRating = $totalRating / $providerCount[$providerId]; // Rata-rata = Total Rating / Jumlah Kursus
            $res[] = [
                "provider_id" => $providerId,
                "avg_rating" => $avgRating
            ];
        }
    
        return $res;
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
    public function getThisMonthTotalCourseParticipants(){
        return $this->db->table($this->totalParticipantsCourseThisMonth)->get()->getResultArray();
    }

    
}
