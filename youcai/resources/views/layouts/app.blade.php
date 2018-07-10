<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //for-mobile-apps -->
    <link href="{{ asset('css/bootstrap.css')  }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
@yield('link')
<!-- js -->
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- //js -->
    <!-- animation-effect -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
<div class="banner">
    <div class="container">
        <div class="head-top wow fadeInLeft animated" data-wow-delay=".5s">
            <div class="navigation">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav class="cl-effect-11">
                            <ul class="nav navbar-nav">
                                {{--<li><a href="{{ url('/') }}" data-hover="Home">Home</a></li>--}}
                                {{--<li><a href="{{ url('/about') }}" data-hover="About">About</a></li>--}}
                                {{--<li><a href="{{ url('/services') }}" data-hover="Services">Services</a></li>--}}
                                {{--<li><a href="{{ url('/typo') }}" data-hover="Codes">Codes</a></li>aa--}}
                                {{--<li><a href="{{ url('/gallery') }}" data-hover="Gallery">Gallery</a></li>--}}
                                {{--<li><a href="{{ url('/contact') }}" data-hover="Contact">Contact</a></li>--}}
                                <li><a href="{{ url('/') }}">主页</a></li>
                                <li><a href="{{ url('/about') }}">关于我们</a></li>
                                <li><a href="{{ url('/services') }}">服务宗旨</a></li>
                                <li><a href="{{ url('/gallery') }}">图集展示</a></li>
                                <li><a href="{{ url('/contact') }}">联系我们</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>


        </div>
        <div class="logo wow fadeInRight animated" data-wow-delay=".5s">
            <h1><a href="{{ url('/') }}">{{ $siteName ?? '成都宥彩生物科技有限公司' }}<span></span></a></h1>
        </div>
        <h2 class="animated wow fadeInUp animated animated" data-wow-duration="1200ms"
            data-wow-delay="500ms">{{ $siteProfile ?? '成都宥彩生物科技有限公司简述' }}</h2>
        <p class="animated wow fadeInUp animated animated" data-wow-duration="1200ms"
           data-wow-delay="500ms">{{ $siteDescription ?? '成都宥彩生物科技有限公司详情' }}</p>
    </div>
</div>
<!-- //banner -->
<!-- w3ls -->
@yield('container')
<!-- w3ls -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-main">
            <div class="col-md-3 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
                <h4>信息</h4>
                <ul>
                    <li><a href="{{ url('/about') }}"><span>&gt; </span>关于我们</a></li>
                    <li><a href="{{ url('/gallery') }}"><span>&gt; </span>服务宗旨</a></li>
                    <li><a href="{{ url('/services') }}"><span>&gt; </span>图集展示</a></li>
                    <li><a href="{{ url('/contact') }}"><span>&gt; </span>联系我们</a></li>
                </ul>
            </div>
            {{--<div class="col-md-3 footer-left wow fadeInLeft animated" data-wow-delay=".5s">--}}
            {{--<h4>New Solutions</h4>--}}
            {{--<ul>--}}
            {{--<li><a href="#"><span>&gt; </span>Notare quam littera</a></li>--}}
            {{--<li><a href="#"><span>&gt; </span>Malesuada rhoncus congue</a></li>--}}
            {{--<li><a href="#"><span>&gt; </span>Suspendisse finibus purus</a></li>--}}
            {{--<li><a href="#"><span>&gt; </span>Malesuada orci purus</a></li>--}}
            {{--<li><a href="#"><span>&gt; </span>Quisque ullamcorper tellus</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 ft-left wow fadeInRight animated" data-wow-delay=".5s">--}}
            {{--<h4>Newsletter</h4>--}}
            {{--<p>Proin congue metus mi, nec tempor tellus consectetur eget. Cum sociis natoque penatibus et magnis dis--}}
            {{--parturient montes.</p>--}}
            {{--<form action="#" method="post">--}}
            {{--<input type="text" name="email" value="Enter Your Email" onfocus="this.value = '';"--}}
            {{--onblur="if (this.value == '') {this.value = 'Enter Your Email';}">--}}
            {{--<input type="submit" value="Subscribe">--}}
            {{--</form>--}}
            {{--</div>--}}
            <div class="clearfix"></div>
        </div>

    </div>

</div>
<div class="footer-copy">
    {{--<div class="container">--}}
    {{--<p class="animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">Copyright--}}
    {{--&copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/"--}}
    {{--target="_blank" title="模板之家">模板之家</a> ---}}
    {{--Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>--}}
    {{--<div class="copy-rights animated wow fadeInUp animated animated" data-wow-duration="1200ms"--}}
    {{--data-wow-delay="500ms">--}}
    {{--<ul>--}}
    {{--<li><a href="#"><span class="fa"> </span></a></li>--}}
    {{--<li><a href="#"><span class="tw"> </span></a></li>--}}
    {{--<li><a href="#"><span class="g"> </span></a></li>--}}
    {{--</ul>--}}
    {{--<div class="clearfix"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
</div>
<!-- //footer -->
</body>
</html>
