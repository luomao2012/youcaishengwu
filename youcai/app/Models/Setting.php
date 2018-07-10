<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Setting extends Base
{
    protected $table = 'setting';

    public function saveSetting($input)
    {
        unset($input['_token']);

        foreach ($input as $key => $value) {
            //判断键值是否存在
            $data = [];
            $data['meta_value'] = $value;
            if (!$setting = $this->isSettingKeyExists($key)) {
                $data['meta_key'] = $key;
                $data['created_at'] = $this->now();
                $this->insert($data);
            } else {
                $this->where('id', $setting->id)->update($data);
            }
        }
    }

    public function isSettingKeyExists($meta_key)
    {
        return $this->where('meta_key', $meta_key)->where('is_deleted', 0)->first();
    }

    public function getAll()
    {
        return $this->where('is_deleted', 0)->get();
    }
}