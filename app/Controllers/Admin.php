<?php

namespace App\Controllers;

use App\Models\M_user;

class Admin extends BaseController
{

    public function index()
    {
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[5]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];


            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password don\'t match'
                ]
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new M_user();
                $user = $model->where('email', $this->request->getVar('email'))
                    ->first();

                $this->setUserSession($user);

                return redirect()->to(base_url('home'));
            }
        }

        echo view('auth/partial_authheader');
        echo view('auth/login');
        echo view('auth/partial_authfooter');
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function register()
    {
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|min_length[3]|max_length[50]',
                'email' => 'required|min_length[5]|max_length[50]|valid_email|is_unique[user.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'repeatpassword' => 'matches[password]',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new M_user();

                $newData = [
                    'username' => $this->request->getVar('username'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),

                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Registrasi Sukses');
                return redirect()->to('/');
            }
        }

        echo view('auth/partial_authheader');
        echo view('auth/register');
        echo view('auth/partial_authfooter');
    }

    public function logout()
    {
        $session = session();

        $session->destroy();

        echo view('auth/partial_authheader');
        echo view('auth/login');
        echo view('auth/partial_authfooter');
    }
}
