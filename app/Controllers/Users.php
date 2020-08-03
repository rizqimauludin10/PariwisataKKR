<?php

namespace App\Controllers;

use App\Models\M_user;

class Users extends BaseController
{
    public function index()
    {
    }

    public function register()
    {
        $userData = new M_user();

        //$user = new \App\Entities\User();

        // $_POST['email'] = $_POST['email'];
        // $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // $user = $userData->username = $this->request->getPost('username');
        // $user = $userData->password = $this->request->getPost('password');

        $data = array(
            // 'username' => 'udin',
            // 'password' => '123456789',
            // 'user_role' => '0'
            'username' => $this->request->getVar('regis_email'),
            'password' => $this->request->getVar('regis_password'),
            'user_role' => '0'
            // 'created_at' => $this->request->getPost('created_at'),
            // 'updated_at' => $this->request->getPost('updated_at')

        );

        $userData->insert($data);
        return redirect()->to(base_url('admin/login'));
    }
}
