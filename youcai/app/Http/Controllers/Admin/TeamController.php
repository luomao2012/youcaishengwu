<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function memberList()
    {
        $data['title'] = '团队成员';
        return view('admin/team/memberList', $data);
    }
}
