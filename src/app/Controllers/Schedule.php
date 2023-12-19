<?php

namespace App\Controllers;
use App\Models\EnrollmentModel;

class Schedule extends BaseController
{
    public function index(int $numDays)
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // getting all user courses
        $enrollmentModel = new EnrollmentModel();
        $enrollments = $enrollmentModel->getEnrollmentById(session()->get('id'));
        $enrollmentIds = [];

        foreach ($enrollments as $enrollment) {
            $enrollmentIds[] = $enrollment['course_id'];
        }
        log_message('debug', 'Enrollment IDs: ' . print_r($enrollmentIds, true));

        $apiUrl = getenv('API_URL');
        $apiKey = getenv('API_KEY');

        $url = $apiUrl . 'schedule/' . $numDays . '?' . http_build_query([
            'id' => implode(',', $enrollmentIds),
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
        $data['schedule'] = [];

        if ($response) {
            $responseData = json_decode($response, true);

            if (isset($responseData['data']['schedule'])) {
                $data['schedule'] = $responseData['data']['schedule'];
                // Mencatat informasi ke dalam log
                log_message('debug', 'Data schedule: ' . print_r($data['schedule'], true));
            } else {
                log_message('debug', 'Tidak ada data schedule.');
            }
        } else {
            log_message('error', 'Gagal mendapatkan respons dari API.');
        }
        $data['day'] = $numDays;
        return view('navbar').view('schedule', $data).view('footer');
        // return $this->response->setJSON($data);
    }
}