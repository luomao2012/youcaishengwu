<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function views($view = null, $data = [], $mergeData = [])
    {
        $settingModel = new Setting();
        foreach ($settingModel as $key => $setting) {
            $data[$setting['meta_key']] = $setting['meta_value'];
        }
        return view($view, $data, $mergeData);
    }
}
