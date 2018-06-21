@extends('layouts.app')

@section('title', '主页')

@section('container')
<!-- w3l -->
<div class="w3l">
    <div class="container">
        <h3>生产流程</h3>
        <p class="wt">生产流程简述</p>
        <div class="wthree_w3l_grids">
            <div class="col-md-6 wthree_w3l_grid wow fadeInLeft animated" data-wow-delay=".5s">
                <div class="col-xs-4 wthree_w3l_grid-left">
                    <div class="wthree_w3l_grid-left1">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="col-xs-8 wthree_w3l_grid-right">
                    <h4>设置</h4>
                    <p>设置描述</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 wthree_w3l_grid wow fadeInRight animated" data-wow-delay=".5s">
                <div class="col-xs-4 wthree_w3l_grid-left">
                    <div class="wthree_w3l_grid-left1">
                        <span class="glyphicon glyphicon-scissors" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="col-xs-8 wthree_w3l_grid-right">
                    <h4>裁剪</h4>
                    <p>裁剪描述</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="wthree_w3l_grids">
            <div class="col-md-6 wthree_w3l_grid wow fadeInLeft animated" data-wow-delay=".5s">
                <div class="col-xs-4 wthree_w3l_grid-left">
                    <div class="wthree_w3l_grid-left1">
                        <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="col-xs-8 wthree_w3l_grid-right">
                    <h4>加工</h4>
                    <p>加工描述</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 wthree_w3l_grid wow fadeInRight animated" data-wow-delay=".5s">
                <div class="col-xs-4 wthree_w3l_grid-left">
                    <div class="wthree_w3l_grid-left1">
                        <span class="glyphicon glyphicon-oil" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="col-xs-8 wthree_w3l_grid-right">
                    <h4>生产</h4>
                    <p>生产描述</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="tlinks">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
<!-- w3l -->
<!-- agile -->
<div class="agile">
    <div class="container">
        <div class="agile-botom animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
            <h3>标题</h3>
            <p>描述内容</p>
        </div>
    </div>
</div>
<!-- agile -->
<!-- w3ls -->
<div class="w3ls">
    <div class="container">
        <div class="w3ls-top heading">
            <h3>标题</h3>
            <p class="wt">标题描述</p>
        </div>
        <div class="w3ls-bottom">
            <div class="w3ls-one">
                <div class="col-md-6 w3ls-left wow fadeInLeft animated" data-wow-delay=".5s">
                    <div class="ad-left">
                        <img src="{{ asset('images/5.jpg') }}" alt="">
                    </div>
                    <div class="ad-right">
                        <h4>标题1</h4>
                        <p>内容1</p>

                        <span></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 w3ls-left wow fadeInRight animated" data-wow-delay=".5s">
                    <div class="ad-left">
                        <img src="{{ asset('images/6.jpg') }}" alt="">
                    </div>
                    <div class="ad-right">
                        <h4>标题2</h4>
                        <p>内容2</p>

                        <span></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="w3ls-two">
                <div class="col-md-6 w3ls-left wow fadeInLeft animated" data-wow-delay=".5s">
                    <div class="ad-left">
                        <img src="{{ asset('images/7.jpg') }}" alt="">
                    </div>
                    <div class="ad-right">
                        <h4>标题3</h4>
                        <p>内容3</p>

                        <span></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 w3ls-left wow fadeInRight animated" data-wow-delay=".5s">
                    <div class="ad-left">
                        <img src="{{ asset('images/8.jpg') }}" alt="">
                    </div>
                    <div class="ad-right">
                        <h4>标题4</h4>
                        <p>内容4</p>
                        <span></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- w3ls -->
@endsection