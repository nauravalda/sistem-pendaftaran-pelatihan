<?php

namespace App\Controllers;

class MyCourses extends BaseController
{
    public function index(): string
    {
        return view('navbar').view('mycourses').view('footer');
    }
}
