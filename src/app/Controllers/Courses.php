<?php

namespace App\Controllers;
use App\Models\EnrollmentModel;
use App\Models\ReviewModel;
use App\Models\ReviewsViewModel;
use App\Models\RatingPerCourseModel;
use App\Models\TotalParticipantsCourseModel;


class Courses extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $apiUrl = getenv('API_URL');
        $apiKey = getenv('API_KEY');

        $url = $apiUrl . 'courses?' . http_build_query([
            'apiKey' => $apiKey,
        ]);
        log_message('debug', 'URL: ' . $url);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_USERAGENT,'');
        $response = curl_exec($curl);

        $data = []; // Inisialisasi data

        if ($response) {
            $responseData = json_decode($response, true);

            if (isset($responseData['data']['courses'])) {
                $data['courses'] = $responseData['data']['courses'];

                // Mencatat informasi ke dalam log
                log_message('debug', 'Data courses: ' . print_r($data['courses'], true));
            } else {
                log_message('debug', 'Tidak ada data kursus.');
            }
        } else {
            log_message('error', 'Gagal mendapatkan respons dari API.');
        }

        return view('navbar').view('courses', $data).view('footer');
    }

    public function detail(int $id){
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $apiUrl = getenv('API_URL');
        $apiKey = getenv('API_KEY');
        
        // get course detail
        $url = $apiUrl . 'course?' . http_build_query([
            'id' => $id,
            'apiKey' => $apiKey,
        ]);

        log_message('debug', 'URL: ' . $url);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_USERAGENT,'');
        $response = curl_exec($curl);

        $enrollmentModel = new EnrollmentModel();
        $reviewViewModel = new ReviewsViewModel();
        $totalParticipantsCourseModel = new TotalParticipantsCourseModel();
        $ratingPerCourseModel = new RatingPerCourseModel();
        $data = [
            'isEnrolled' => $enrollmentModel->getEnrollmentIdAndCourseId(session()->get('id'), $id) ? true : false,
            'review' => $reviewViewModel->getReviewByUserIdAndCourseId(session()->get('id'), $id),
            'session' => $session->get(),
        ];

        if ($response) {
            $responseData = json_decode($response, true);
            log_message('debug', 'Data courses: ' . print_r($responseData, true));

            if (isset($responseData['data'])) {
                $data = array_merge($data, $responseData['data']);
                // Mencatat informasi ke dalam log
            } else {
                log_message('debug', 'Tidak ada data kursus.');
                return redirect()->to('/courses');
            }
        } else {
            log_message('error', 'Gagal mendapatkan respons dari API.');
            return redirect()->to('/courses');
        }

        $data['course'] = array_merge($data['course'], [
            'rating' => $ratingPerCourseModel->getRatingByCourseId($id) ? $ratingPerCourseModel->getRatingByCourseId($id)['rating'] : 0,
            'totalReviews' => $reviewViewModel->getRatingCount($id),
            'topReview' => $reviewViewModel->getHighestRatingReview($id),
            'participants' => $totalParticipantsCourseModel->getTotalParticipantsByCourseId($id) ? $totalParticipantsCourseModel->getTotalParticipantsByCourseId($id)['total_participants'] : 0,
        ]);

        return view('navbar').view('course-detail', $data).view('footer');
        // return $this->response->setJSON($data);
    }

    public function enroll($id)
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // looking if user already enrolled
        $enrollmentModel = new EnrollmentModel();
        $enrollment = $enrollmentModel->getEnrollmentIdAndCourseId(session()->get('id'), $id);
        if ($enrollment) {
            return redirect()->to('/courses/' . $id);
        } else {
            $enrollmentModel->insertEnrollment([
                'user_id' => session()->get('id'),
                'course_id' => $id,
                'enrolled_at' => date('Y-m-d H:i:s'),
            ]);
            return redirect()->to('/courses/' . $id);
        }
    }

    public function addReview($id)
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // looking if user already reviewed
        $reviewModel = new ReviewModel();
        $review = $reviewModel->getReviewByUserIdAndCourseId(session()->get('id'), $id);
        if ($review) {
            return redirect()->to('/courses/' . $id);
        }

        $reviewModel->insertReview([
            'user_id' => session()->get('id'),
            'course_id' => $id,
            'rating' => $this->request->getPost('rating'),
            'content' => $this->request->getPost('review_text'),
        ]);
        return redirect()->to('/courses/' . $id);
    }

    public function deleteReview($id)
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // looking if user already reviewed
        $reviewModel = new ReviewModel();
        $review = $reviewModel->getReviewByUserIdAndCourseId(session()->get('id'), $id);
        if ($review) {
            $reviewModel->deleteReview(session()->get('id'), $id);
        }
        return redirect()->to('/courses/' . $id);
    }
}
