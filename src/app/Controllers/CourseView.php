<?php

namespace App\Controllers;

class CourseView extends BaseController
{
    public function index(): string
    {
        return view('courseView');
    }
}
