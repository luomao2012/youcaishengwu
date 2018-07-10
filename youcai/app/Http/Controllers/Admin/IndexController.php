<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPUnit\Util\Json;

/**
 * Class IndexController
 * @package App\Http\Controllers\Admin
 */
class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.index.index');
    }

    public function main()
    {
        $data['title'] = '网站首页';
        return view('admin.index.main', $data);
    }

    public function menu()
    {
        $data = [
            'status'  => 1,
            'message' => '',
            'data'    => [
                [
                    'title'  => '后台首页',
                    'icon'   => 'icon-computer',
                    'href'   => url('admin/'),
                    'spread' => false
                ],
                [
                    'title'    => '团队管理',
                    'icon'     => '&#xe61c;',
                    'href'     => '',
                    'spread'   => false,
                    'children' => [
                        [
                            'title'  => '团队成员列表',
                            'icon'   => '&#xe631;',
                            'href'   => url('admin/team/memberList'),
                            'spread' => false
                        ]
                    ]
                ],
                [
                    'title'  => '系统基本参数',
                    'icon'   => '&#xe631;',
                    'href'   => url('admin/setting/index'),
                    'spread' => false
                ],
            ]
        ];

        return JsonResponse::create($data);
    }
}
