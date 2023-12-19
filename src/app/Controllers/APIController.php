<?php

namespace App\Controllers;
use App\Models\APIModel;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

class APIController extends BaseController
{
    use ResponseTrait;
    public function request_token()
    {
        // get session
        $session = session();

        // if user is logged in
        if ($session->get('isLoggedIn')) {    
            // get user data
            $user = new UserModel();

            // generate token based on time and user id
            $token = hash('sha256', time() . $session->get('id'));
            log_message('info', 'User ' . $session->get('name') . ' requested token');
            log_message('info', 'Token generated: ' . $token);

            
            // update user data with token
            $user->update($session->get('id'), ['api_token' => $token]);

            return $this->response->setJSON($token);
        } else {
            return redirect()->to('/login');
        }

    }
    public function course_participants(){
        $request = service('request');
        $apiKey = $request->getVar('apiKey');

        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if ($user) {
            $apiModel = new APIModel();
            $data = [
                'message'  => 'success',
                'data' => [
                    'course_participants' => $apiModel->getCourseTotalParticipant()
                ]
                ];
            // $data['course_participants'] = $apiModel->getCourseTotalParticipant();
            return $this->response->setJSON($data);
        } else {
            return $this->response->setStatusCode(401);
        }
    }

    public function provider_participants(){
        $request = service('request');
        $apiKey = $request->getVar('apiKey');
        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if ($user) {
            $apiModel = new APIModel();
            $data['provider_participants'] = $apiModel->getProviderTotalParticipant();
            return $this->response->setJSON($data);
        } else {
            return $this->response->setStatusCode(401);
        }
    }

    public function provider_participants_this_month(){
        $request = service('request');
        $apiKey = $request->getVar('apiKey');
        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if ($user) {
            $apiModel = new APIModel();
            $data['provider_participants_this_month'] = $apiModel->getProviderTotalParticipantThisMonth();
            return $this->response->setJSON($data);
        } else {
            return $this->response->setStatusCode(401);
        }
    }

    public function course_rating(){
        $request = service('request');
        $apiKey = $request->getVar('apiKey');
        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if ($user) {
            $apiModel = new APIModel();
            $data['course_rating'] = $apiModel->getAvgRatingCourse();
            return $this->response->setJSON($data);
        } else {
            return $this->response->setStatusCode(401);
        }

    }

    public function provider_rating(){
        $request = service('request');
        $apiKey = $request->getVar('apiKey');
        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if ($user) {
            $apiModel = new APIModel();
            $data['provider_rating'] = $apiModel->getAvgRatingProvider();
            return $this->response->setJSON($data);
        } else {
            return $this->response->setStatusCode(401);
        }
    }

    public function review() {
        $request = service('request');
        $apiKey = $request->getVar('apiKey');
        $userModel = new UserModel();
        $user = $userModel->getUserByToken($apiKey);

        if ($user) {
            // Memuat model API
            $apiModel = new APIModel();
            $data['reviews'] = $apiModel->getAllReviews();

            return $this->respond($data); // Menggunakan ResponseTrait untuk mengirim data JSON
        } else {
            return $this->failUnauthorized(); // Menggunakan ResponseTrait untuk mengirim kode status 401
        }
    }

    public function courseReview($id){
        $request = service('request');
        $apiKey = $request->getVar('apiKey');
        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if ($user) {
            $apiModel = new APIModel();
            $data['course_review'] = $apiModel->getReviewsByCourseId($id);
            return $this->response->setJSON($data);
        } else {
            return $this->response->setStatusCode(401);
        }

    }

    public function payment(){
        $request = service('request');
        $apiKey = $request->getVar('apiKey');
        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if ($user) {
            $apiModel = new APIModel();
            $data['payments'] = $apiModel->getAllPayments();
            return $this->response->setJSON($data);
        } else {
            return $this->response->setStatusCode(401);
        }

    }

    public function coursePayment($id){
        $request = service('request');
        $apiKey = $request->getVar('apiKey');
        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if ($user) {
            $apiModel = new APIModel();
            $data['course_payment'] = $apiModel->getPaymentsByCourseId($id);
            return $this->response->setJSON($data);
        } else {
            return $this->response->setStatusCode(401);
        }
    }

    public function enrollment(){
        $request = service('request');
        $apiKey = $request->getVar('apiKey');
        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if ($user) {
            $apiModel = new APIModel();
            $data['enrollments'] = $apiModel->getAllEnrollment();
            return $this->response->setJSON($data);
        } else {
            return $this->response->setStatusCode(401);
        }

    }

    public function thisMonthEnrollment(){
        $request = service('request');
        $apiKey = $request->getVar('apiKey');
        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if ($user) {
        $apiModel = new APIModel();
        $data['enrollments'] = $apiModel->getThisMonthEnrollment();
        return $this->response->setJSON($data);
        } else {
            return $this->response->setStatusCode(401);
        
        }

    }

    public function participantspercourse($courseId){
        $request = service('request');
        $apiKey = $request->getVar('apiKey');
        $user = new UserModel();
        $user = $user->getUserByToken($apiKey);
        if ($user) {
        $apiModel = new APIModel();
        $data['participants'] = $apiModel->getTotalParticipantsByCourseId($apiModel->getCourseTotalParticipant(), $courseId);
        return $this->response->setJSON($data);
        } else {
            return $this->response->setStatusCode(401);
        
        }

    }

    
}