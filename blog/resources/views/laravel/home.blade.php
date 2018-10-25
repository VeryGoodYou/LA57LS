<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('style/image/ooopic_1507533377.ico')}}">
    <title>贪玩CS</title>
    <link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('style/js/swiper-4.4.1.min.css')}}">
</head>
<script src="{{asset('style/js/swiper-4.4.1.min.js')}}"></script>
<body>
@include('top')
<!--巨幕-->
<main class="bs-masthead" id="content" role="main">
    <div class="container">
        <h1>青春永不散场</h1>
        <p class="lead">青春不败 热血不散 生命不息 战斗不止</p>
        <blockquote>
            <p><a href="index.html">全新CS </a>人在江湖飘 哪有不挨刀 来吧 CS世界里等你的挑战</p>
            <p>当前更新游戏进度 2017年10月9日</p>
        </blockquote>
        <p class="leed">
            <a href="#" class="btn btn-outline-inverse btn-lg" >下载游戏</a>
            <a href="#" class="btn btn-outline-inverse btn-lg">游戏专辑</a>
        </p>
    </div>
</main>
<!--游戏主要内容-->
<div class="row">
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-md-3">
        <h1>尽情期待</h1>
    </div>
</div>
<div class="swiper-container">
    <h1>CS历代作品： </h1>
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="hid" id="page">
                <div class="col-md-1">
                    <span class="klogo-1"></span>
                    <div>《2018CS》</div>
                </div>
                <div class="col-md-1">
                    <span class="klogo-2"></span>
                    <div>《2018CS》</div>
                </div>
                <div class="col-md-1">
                    <span class="klogo-3"></span>
                    <div>《2018CS》</div>
                </div>
                <div class="col-md-1">
                    <span class="klogo-4"></span>
                    <div>《2018CS》</div>
                </div>
                <div class="col-md-1">
                    <span class="klogo-5"></span>
                    <div>《2018CS》</div>
                </div>
                <div class="col-md-1">
                    <span class="klogo-6"></span>
                    <div>《2018CS》</div>
                </div>
                <div class="col-md-1">
                    <span class="klogo-7"></span>
                    <div>《2018CS》</div>
                </div>
                <div class="col-md-1">
                    <span class="klogo-8"></span>
                    <div>《2018CS》</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--底部-->
<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="box"><img src="{{asset('style/image/qiang.png')}}" alt="..." class="img-rounded"></div>
    <div class="box">
        <ul class="breadcrumb">
            <li><a href="#">关于我们</a></li>
            <li><a href="#">公司新闻</a></li>
            <li><a href="#">人才招聘</a></li>
            <li><a href="#">商务合作</a></li>
            <li><a href="#">产品介绍</a></li>
            <li><a href="#">家长监护</a></li>
        </ul>
        <ul class="breadcrumb">
            <li>Copyright 2004-2017 LEDO Interactive Co., Ltd. All rights reserved.</li>
            <li>乐道互动（天津）科技有限公司版权所有</li>
        </ul>
        <ul class="breadcrumb">
            <li>ICP证:津B2-20150036 | </li>
            <li><a href="#">津ICP备15002493号-2</a></li>
            <li><a href="#">津网文[2015]1320-007号</a></li>
            <li><a href="#">津公网安备 12019202000006号</a></li>
        </ul>
        <ul class="breadcrumb">
            <li>抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防受骗上当 适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</li>
        </ul>
        <ul class="breadcrumb">
            <li>公司地址:中国河南XXXXXXXXXXXXXXX |   联系电话:17839505030</li>
        </ul>
    </div>
</nav>
<script>
    var mySwiper = new Swiper('.swiper-container',{
        freeMode : true,
        loop:true,
    });
</script>
<script src="{{asset('style/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('style/js/style.js')}}"></script>
<script src="{{asset('style/js/bootstrap.min.js')}}"></script>
</body>
</html>