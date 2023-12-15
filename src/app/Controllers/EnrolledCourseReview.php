<?php

namespace App\Controllers;

class EnrolledCourseReview extends BaseController
{
    public function index(): string
    {
        return view('enrolledCourseReview');
    }
}
