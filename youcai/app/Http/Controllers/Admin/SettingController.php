<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    protected $settingModel = null;

    public function __construct()
    {
        $this->settingModel = new Setting();
    }

    public function index()
    {
        $data['title'] = '系统基本参数';

        $settings = $this->settingModel->getAll();
        foreach ($settings as $key => $setting) {
            $data[$setting['meta_key']] = $setting['meta_value'];
        }

        return view('admin/setting/index', $data);
    }

    public function save(Request $request)
    {
        $input = $request->input();
        $this->settingModel->saveSetting($input);
        return redirect('admin/setting/index');
    }
}
