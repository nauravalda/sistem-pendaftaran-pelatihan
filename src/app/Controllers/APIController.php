<?php

namespace App\Controllers;
use App\Models\APIModel;
use App\Models\UserModel;

class APIController extends BaseController
{
    public function course_participants(){
        $apiModel = new APIModel();
        $data['course_participants'] = $apiModel->getCourseTotalParticipant();
        return $this->response->setJSON($data);
    }

    public function provider_participants(){
        $apiModel = new APIModel();
        $data['provider_participants'] = $apiModel->getProviderTotalParticipant();
        return $this->response->setJSON($data);
    }

    public function provider_participants_this_month(){
        $apiModel = new APIModel();
        $data['provider_participants_this_month'] = $apiModel->getProviderTotalParticipantThisMonth();
        return $this->response->setJSON($data);
    }

    public function course_rating(){
        $apiModel = new APIModel();
        $data['course_rating'] = $apiModel->getAvgRatingCourse();
        return $this->response->setJSON($data);
    }

    public function provider_rating(){
        $apiModel = new APIModel();
        $data['provider_rating'] = $apiModel->getAvgRatingProvider();
        return $this->response->setJSON($data);
    }

    public function review(){
        $apiModel = new APIModel();
        $data['reviews'] = $apiModel->getAllReviews();
        return $this->response->setJSON($data);
    }

    public function courseReview($id){
        $apiModel = new APIModel();
        $data['course_review'] = $apiModel->getReviewsByCourseId($id);
        return $this->response->setJSON($data);
    }

    public function payment(){
        $apiModel = new APIModel();
        $data['course_payment'] = $apiModel->getAllPayments();
        return $this->response->setJSON($data);
    }

    public function coursePayment($id){
        $apiModel = new APIModel();
        $data['course_payment'] = $apiModel->getPaymentsByCourseId($id);
        return $this->response->setJSON($data);
    }

    public function enrollment(){
        $apiModel = new APIModel();
        $data['enrollments'] = $apiModel->getAllEnrollment();
        return $this->response->setJSON($data);
    }

    public function thisMonthEnrollment(){
        $apiModel = new APIModel();
        $data['enrollments'] = $apiModel->getThisMonthEnrollment();
        return $this->response->setJSON($data);
    }

    
}