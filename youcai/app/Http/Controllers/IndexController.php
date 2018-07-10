<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $settingModel = null;

    public function __construct()
    {
        $this->settingModel = new Setting();
    }

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        $settings = $this->settingModel->getAll();
        foreach ($settings as $key => $setting) {
            $data[$setting['meta_key']] = $setting['meta_value'];
        }
        return $this->views('contact', $data);
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function services()
    {
        return view('services');
    }

    public function typo()
    {
        return view('typo');
    }
}
