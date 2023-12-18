<?php

namespace App\Controllers;
// use CodeIgniter\RESTful\ResourceController;
use App\Models\CourseModel;
use CodeIgniter\HTTP\Response;

class CourseReviewAPI extends BaseController
{
    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST');
        header('Access-Control-Allow-Headers: X-Requested-With');
    }
    
    public function getAll()
    {
        $model = new CourseModel();
        $data = [
            'message' => 'success',
            'data' => $model->getAllReview()
        ];
        // return $this->respond($data, 200);
        return $this->response->setJSON($data);
    }
}
