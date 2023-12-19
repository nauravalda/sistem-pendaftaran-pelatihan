<?php

namespace App\Controllers;
use App\Models\EnrollmentModel;

class MyCourses extends BaseController
{
    public function index(): string
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
        

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        curl_close($curl);

        $courses = [];
        $data = [];

        if ($response) {
            $responseData = json_decode($response, true);

            if (isset($responseData['data']['courses'])) {
                $courses['courses'] = $responseData['data']['courses'];

                // Mencatat informasi ke dalam log
                log_message('debug', 'Data courses: ' . print_r($courses['courses'], true));
            } else {
                log_message('debug', 'Tidak ada data kursus.');
            }
        } else {
            log_message('error', 'Gagal mendapatkan respons dari API.');
        }

        $enrollmentModel = new EnrollmentModel();
        $enrollments = $enrollmentModel->getEnrollmentById($session->get('id'));



        for ($i = 0; $i < count($enrollments); $i++) {
            for ($j = 0; $j < count($courses['courses']); $j++) {
                if ($enrollments[$i]['course_id'] == $courses['courses'][$j]['id']) {
                    $data['mycourses'][] = $courses['courses'][$j];
                }
            }
        }

        return view('navbar').view('mycourses', $data).view('footer');
    }
}
