<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class LoginController extends Controller
{
    protected $adminModel = null;

    public function __construct()
    {
        $this->adminModel = new Admin();
    }

    public function index()
    {
        return view('admin.login.index');
    }

    public function login(Request $request)
    {
        $input = $request->input();

        // 输入验证
        $request->validate([
            'username' => 'bail|required',
            'password' => 'bail|required'
        ]);

        // 管理登录
        $errors = '';
        if (!$this->adminModel->login($input, $errors)) {
            return back()->with('custom_errors', $errors);
        }

        return redirect('admin/');
    }

    public function logout()
    {
        session(['admin' => null]);
        return redirect('admin/');
    }
}
