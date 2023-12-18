<?php

namespace App\Controllers;

class Courses extends BaseController
{
    public function index()
    {
        $url = 'http://localhost:8081/api/courses/john.doe@example.com/john';

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        curl_close($curl);

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
        $url = 'http://localhost:8081/api/course/john.doe@example.com/john/'.$id;
        log_message('debug', 'URL: ' . $url);

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        curl_close($curl);

        $data = []; // Inisialisasi data

        if ($response) {
            $responseData = json_decode($response, true);
            log_message('debug', 'Data courses: ' . print_r($responseData, true));

            if (isset($responseData['data'])) {
                $data['course'] = $responseData['data']['course'][0];

                // Mencatat informasi ke dalam log
                log_message('debug', 'Data course: ' . print_r($data['course'], true));
            } else {
                log_message('debug', 'Tidak ada data kursus.');
            }
        } else {
            log_message('error', 'Gagal mendapatkan respons dari API.');
        }
        return view('navbar').view('course-detail', $data).view('footer');

    }
}
