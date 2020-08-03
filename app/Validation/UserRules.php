<?php

namespace App\Validation;

use App\Models\M_user;

class UserRules
{
    public function validateUser(string $str, string $fields, array $data)
    {
        $model = new M_user();
        $user = $model->where('email', $data['email'])
            ->first();

        if (!$user)
            return false;

        return password_verify($data['password'], $user['password']);
    }
}
