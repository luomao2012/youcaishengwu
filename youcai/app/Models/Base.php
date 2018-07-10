<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    public function now()
    {
        return date('Y-m-d H:i:s', time());
    }
}
