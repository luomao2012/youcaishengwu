<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="{{ asset('layui-admin/layui/css/layui.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('layui-admin/css/font_eolqem241z66flxr.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('layui-admin/css/main.css') }}" media="all"/>
    @yield('custom-style')
</head>
<body class="childrenBody">
@yield('content')
<script type="text/javascript" src="{{ asset('layui-admin/layui/layui.js') }}"></script>
<script type="text/javascript" src="{{ asset('layui-admin/js/main.js') }}"></script>
@yield('custom-javascript')
</body>
</html>