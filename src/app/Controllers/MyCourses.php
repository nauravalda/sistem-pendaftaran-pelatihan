<?php

namespace App\Controllers;

class MyCourses extends BaseController
{
    public function index(): string
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return view('navbar').view('mycourses').view('footer');
    }
}
