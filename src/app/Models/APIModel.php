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

    public function getTotalParticipantsinArrayofCourses($string) {
        // Prepare the SQL query
        $sql = "SELECT COUNT(user_id) as total_participants FROM course_enrollment WHERE course_id IN $string";
    
        // Execute the query
        $query = $this->db->query($sql)->getRowArray();
    
        return $query;
    }

    public function getTotalParticipantsThisMonth($string) {
        // Prepare the SQL query
        $sql = "SELECT COUNT(user_id) as total_participants_this_month FROM course_enrollment WHERE course_id IN $string AND MONTH(enrolled_at) = MONTH(CURRENT_DATE()) AND YEAR(enrolled_at) = YEAR(CURRENT_DATE())";
    
        // Execute the query
        $query = $this->db->query($sql)->getRowArray();
    
        return $query;
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

    function getAvgRatingofArray($string){
                // Prepare the SQL query
                $sql = "SELECT AVG(rating)
                FROM rating_per_course
                WHERE course_id IN $string";
    
                // Execute the query
                $query = $this->db->query($sql)->getRowArray();
            
                return $query;
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
