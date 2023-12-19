<?php

namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->get('isLoggedIn')) {
            return redirect()->to('/courses');
        }
        return view('login').view('footer');
    }

    public function login()
    {
        $email = $this->request->getPost('email');

        $password = hash('sha256', $this->request->getPost('password'));
  

        $userModel = new UserModel();
        
        $user = $userModel->getUserByEmailAndPassword($email, $password);
        // return $this->response->setJSON($user);
        if ($user == null) {
            log_message('debug','user is empty');
        }
        
        if ($user) {
            log_message('debug',$user['email']);
            $session = session();
            $session->set([
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'isLoggedIn' => true,
            ]);
            return redirect()->to('/courses');
        } else {
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
