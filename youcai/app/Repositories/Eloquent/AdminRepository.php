<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\Repository;

class AdminRepository extends Repository
{
    public function model()
    {
        return 'App\Models\Admin';
    }
}