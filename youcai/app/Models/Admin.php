<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    public function login($input, &$errors)
    {
        $username = $input['username'];
        $password = md5($input['password']);

        $admin = $this->where('username', $username)->where('password', $password)->where('is_deleted', 0)->first();

        if (!$admin) {
            $errors = '账号或密码错误';
            return false;
        }

        session(['admin' => $admin]);
        return true;
    }
}
