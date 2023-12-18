<?php

namespace App\Controllers;
use App\Models\EnrollmentModel;

class Courses extends BaseController
{
    public function index()
    {
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
        $data = [
            'isEnrolled' => $enrollmentModel->getEnrollmentIdAndCourseId(session()->get('id'), $id) ? true : false
        ];

        if ($data['isEnrolled']) {
            // checking if user rated the course
            $ratingModel = new RatingModel();
        }

        if ($response) {
            $responseData = json_decode($response, true);
            log_message('debug', 'Data courses: ' . print_r($responseData, true));

            if (isset($responseData['data'])) {
                $data['data'] = $responseData['data'];

                // Mencatat informasi ke dalam log
                log_message('debug', 'Data course: ' . print_r($data['data'], true));
            } else {
                log_message('debug', 'Tidak ada data kursus.');
                return redirect()->to('/courses');
            }
        } else {
            log_message('error', 'Gagal mendapatkan respons dari API.');
            return redirect()->to('/courses');
        }

        return view('navbar').view('course-detail', $data).view('footer');
        // return $this->response->setJSON($data);
    }

    public function enroll()
}
