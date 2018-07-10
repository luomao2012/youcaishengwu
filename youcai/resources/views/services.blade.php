@extends('layouts.app')

@section('title', '主页')

@section('container')
<div class="ser-first wthree-11">
    <div class="container">
        <div class="services-info">
            <h2 class="title">服务宗旨</h2>
        </div>
        <div class="ser-first-grids">
            <div class="col-md-3 ser-first-grid text-center">
                <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                <h3>标题1/h3>
                <p>内容1</p>
            </div>
            <div class="col-md-3 ser-first-grid text-center">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                <h3>标题2</h3>
                <p>内容2</p>
            </div>
            <div class="col-md-3 ser-first-grid text-center">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <h3>标题3</h3>
                <p>内容3</p>
            </div>
            <div class="col-md-3 ser-first-grid text-center">
                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                <h3>标题4</h3>
                <p>内容4</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="services-top agile-11">
    <div class="container">
        <div class="services-info">
            <h3 class="tittle">我们能帮助你哪里？</h3>
        </div>
        <div class="ser-top-grids">
            <div class="col-md-8 ser-top-grid">
                <div class="ser-top-img">
                    <img src="{{ asset('images/13.jpg') }}" alt=" ">
                </div>
                <div class="ser-top-txt">

                    <p>内容1</p>
                    <p>内容2</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 ser-top-grid-1">
                <ul>
                    <li><a href="javascript:void(0);">特色服务1</a></li>
                    <li><a href="javascript:void(0);">特色服务2</a></li>
                    <li><a href="javascript:void(0);">特色服务2</a></li>
                    <li><a href="javascript:void(0);">特色服务2</a></li>
                    <li><a href="javascript:void(0);">特色服务2</a></li>
                    <li><a href="javascript:void(0);">特色服务2</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="services w3agile-11">
    <div class="container">
        <div class="services-info">
            <h3 class="tittle">能力与开发</h3>
        </div>
        <div class="services-grids">
            <div class="row">
                <div class="col-md-6 services-grid">
                    <div class="ser-img">
                        <img src="{{ asset('images/9.jpg') }}" alt=" ">
                    </div>
                    <div class="caption">
                        <h4>能力1</h4>
                        <p>能力描述1</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 services-grid">
                    <div class="ser-img">
                        <img src="{{ asset('images/10.jpg') }}" alt=" ">
                    </div>
                    <div class="caption">
                        <h4>能力1</h4>
                        <p>能力描述1</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 services-grid">
                    <div class="ser-img">
                        <img src="{{ asset('images/12.jpg') }}" alt=" ">
                    </div>
                    <div class="caption">
                        <h4>能力1</h4>
                        <p>能力描述1</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 services-grid">
                    <div class="ser-img">
                        <img src="{{ asset('images/11.jpg') }}" alt=" ">
                    </div>
                    <div class="caption">
                        <h4>能力1</h4>
                        <p>能力描述1</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
@endsection