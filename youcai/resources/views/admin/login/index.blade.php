<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8"/>
    <title>成都宥彩生物科技有限公司 - 后台登录</title>
    <meta name="description"
          content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="{{ asset('layui-admin/login/css/bootstrap.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('layui-admin/login/css/simple-line-icons.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('layui-admin/login/css/app.css') }}" type="text/css"/>
</head>
<body background="{{ asset('layui-admin/login/images/bodybg.jpg') }}">
<section id="content" class="m-t-lg wrapper-md animated fadeInUp ">
    <div class="container aside-xl" style="margin-top: 48px;">
        <a class="navbar-brand block"><span class="h1 font-bold" style="color: #ffffff">成都宥彩生物科技有限公司</span></a>
        <section class="m-b-lg">
            <header class="wrapper text-center">
                <strong class="text-sucess">管理员登录</strong>
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first() }}
                    </div>
                @endif
                @if (session('custom_errors'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('custom_errors') }}
                    </div>
                @endif
            </header>
            <form action="{{ url('/admin/login/login') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="username" name="username" placeholder="用户名"
                           class="form-control  input-lg text-center no-border">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="密码"
                           class="form-control  input-lg text-center no-border">
                </div>

                <button type="submit" class="btn btn-lg btn-danger lt b-white b-2x btn-block" id="validate-submit">
                    <i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">登录</span></button>
            </form>
        </section>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder">

    </div>
</footer>
<!-- / footer -->
<div style="text-align:center;">
    <p>网站主页：<a href="{{ url('/') }}" target="_blank">成都宥彩生物科技有限公司</a></p>
</div>
</body>
</html>
