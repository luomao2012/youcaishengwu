@extends('layouts.app')

@section('title', '关于我们')

@section('container')
<div class="about-section">
    <div class="about agile-44">
        <div class="container">
            <div class="about-top heading">
                <h2>关于我们</h2>
            </div>
            <div class="about-bottom text-center">
                <h4>标题</h4>
                <p>内容描述</p>
            </div>
        </div>
    </div>
    <div class="about-middle">
        <div class="container">
            <div class="col-lg-4 col-md-6 col-sm-6 testimonials wthree-44">
                <h3>为什么选择我们?</h3>
                <ul class="list3">
                    <li>
                        <strong>1</strong>
                        <div class="extra">
                            <p>原因1</p>
                        </div>
                    </li>
                    <li>
                        <strong>2</strong>
                        <div class="extra">
                            <p>原因2</p>
                        </div>
                    </li>
                    <li>
                        <strong>3</strong>
                        <div class="extra">
                            <p>原因3</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 testimonials">
                <h3>特色服务</h3>
                <p>我们提供的特色服务种类</p>
                <ul class="list1-2">
                    <li><a href="javascript:void(0);">特色种类1</a></li>
                    <li><a href="javascript:void(0);">特色种类2</a></li>
                    <li><a href="javascript:void(0);">特色种类3</a></li>
                    <li><a href="javascript:void(0);">特色种类4</a></li>
                    <li><a href="javascript:void(0);">特色种类5</a></li>
                    <li><a href="javascript:void(0);">特色种类6</a></li>
                    <li><a href="javascript:void(0);">特色种类7</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 testimonials-box testimonials">
                <h3>客户评语</h3>
                <ul class="list4">
                    <li>
                        <img src="{{ asset('images/quote.png') }}" alt="">
                        <div class="extra">
                            <p>评语 </p>
                            <a href="javascript:void(0);">小王</a>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('images/quote.png') }}" alt="">
                        <div class="extra">
                            <p>评语 </p>
                            <a href="javascript:void(0);">小李</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Our-staff-starts -->
    <div class="our-staff about-staff">
        <div class="container">
            <div class="our-staff-head text-center">

                <h3>我们的团队</h3>

                <div class="our-staff-grids text-center">
                    <div class="col-md-3 our-staff-grid w3agile-44">
                        <div class="view view-seventh">
                            <a href="#"><img class="img-responsive" src="{{ asset('images/s1.jpg') }}" alt=""></a>
                            <div class="mask">
                                <ul class="staff-social-icons">
                                    <li><a href="javascript:void(0);"><span class="facebook"> </span></a></li>
                                    <li><a href="javascript:void(0);"><span class="twitter"> </span></a></li>
                                </ul>
                            </div>
                            <h4>小李</h4>
                            <p>座右铭</p>
                        </div>
                    </div>
                    <div class="col-md-3 our-staff-grid">
                        <div class="view view-seventh">
                            <a href="#"><img class="img-responsive" src="{{ asset('images/s2.jpg') }}" alt=""></a>
                            <div class="mask">
                                <ul class="staff-social-icons">
                                    <li><a href="javascript:void(0);"><span class="facebook"> </span></a></li>
                                    <li><a href="javascript:void(0);"><span class="twitter"> </span></a></li>
                                </ul>
                            </div>
                            <h4>小王</h4>
                            <p>座右铭</p>
                        </div>
                    </div>
                    <div class="col-md-3 our-staff-grid">
                        <div class="view view-seventh">
                            <a href="#"><img class="img-responsive" src="{{ asset('images/s3.jpg') }}" alt=""></a>
                            <div class="mask">
                                <ul class="staff-social-icons">
                                    <li><a href="javascript:void(0);"><span class="facebook"> </span></a></li>
                                    <li><a href="javascript:void(0);"><span class="twitter"> </span></a></li>
                                </ul>
                            </div>
                            <h4>小彩</h4>
                            <p>座右铭</p>
                        </div>
                    </div>
                    <div class="col-md-3 our-staff-grid">
                        <div class="view view-seventh">
                            <a href="#"><img class="img-responsive" src="{{ asset('images/s4.jpg') }}" alt=""></a>
                            <div class="mask">
                                <ul class="staff-social-icons">
                                    <li><a href="javascript:void(0);"><span class="facebook"> </span></a></li>
                                    <li><a href="javascript:void(0);"><span class="twitter"> </span></a></li>
                                </ul>
                            </div>
                            <h4>小雨</h4>
                            <p>座右铭</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Our-staff-ends -->
</div>
@endsection