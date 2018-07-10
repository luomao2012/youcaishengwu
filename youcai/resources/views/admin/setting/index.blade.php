@extends('admin.layouts.default')

@section('title', $title)

@section('custom-style')
    <style type="text/css">
        .layui-table td, .layui-table th {
            text-align: center;
        }

        .layui-table td {
            padding: 5px;
        }
    </style>
@endsection

@section('content')
    <form class="layui-form" method="post" action="{{ url('admin/setting/save') }}">
        @csrf
        <table class="layui-table">
            <colgroup>
                <col width="20%">
                <col width="50%">
                <col>
            </colgroup>
            <thead>
            <tr>
                <th>参数说明</th>
                <th>参数值</th>
                <th>变量名</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>网站名称</td>
                <td><input type="text" name="siteName" class="layui-input siteName" lay-verify="required"
                           placeholder="请输入网站名称" value="{{ $siteName ?? '' }}"/></td>
                <td>siteName</td>
            </tr>
            <tr>
                <td>网站简介</td>
                <td><input type="text" name="siteProfile" class="layui-input siteProfile" lay-verify="required"
                           placeholder="请输入网站简介" value="{{ $siteProfile ?? '' }}"></td>
                <td>siteProfile</td>
            </tr>
            <tr>
                <td>网站描述</td>
                <td><textarea name="siteDescription" placeholder="请输入网站描述"
                              class="layui-textarea siteDescription">{{ $siteDescription ?? '' }}</textarea>
                <td>siteDescription</td>
            </tr>
            <tr>
                <td>联系地址</td>
                <td><input type="text" name="contractAddress" class="layui-input contractAddress" lay-verify="required"
                           placeholder="请输入联系地址" value="{{ $contractAddress ?? '' }}"></td>
                <td>contractAddress</td>
            </tr>
            <tr>
                <td>联系邮件</td>
                <td><input type="text" name="contractEmail" class="layui-input contractEmail" lay-verify="required"
                           placeholder="请输入联系邮件" value="{{ $contractEmail ?? '' }}"></td>
                <td>contractEmail</td>
            </tr>
            <tr>
                <td>联系电话</td>
                <td><input type="text" name="contractPhone" class="layui-input contractPhone" lay-verify="required"
                           placeholder="请输入联系电话" value="{{ $contractPhone ?? '' }}"/></td>
                <td>contractPhone</td>
            </tr>
            </tbody>
        </table>
        <div class="layui-form-item" style="text-align: right;">
            <div class="layui-input-block">
                <button class="layui-btn">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>
@endsection