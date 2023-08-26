<?php

namespace App\Controllers;

use App\Models\Users;

class LoginController extends BaseController
{
    public function index(): string
    {
        return view('pages/login');
    }

    public function login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = new Users();
        $data = $user->where('username', $username)->first();
        $session = session();
        if ($data) {
            $session = session();
            if (!password_verify($password, $data['password'])) {
                $login = [
                    'islogin' => true,
                    'username' => $data['username'],
                ];
                $session->set($login);
                return redirect()->to('/welcome');

            } else {
                $session->setFlashdata('msg', 'username/Password invalid');
                return redirect()->to('/');
            }
        } else {
            $session->setFlashdata('msg', 'username / password invalid');
            return redirect()->to('/');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
