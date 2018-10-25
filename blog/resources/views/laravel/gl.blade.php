<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('style/image/ooopic_1507533377.ico')}}">
    <title>玩家攻略</title>
    <link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('style/css/gl.css')}}" type="text/css">
</head>
<body>
@include('top')
<!--分类导航栏-->
<div class="fdd">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="img"><a href="{{asset('home')}}"><img src="{{asset('style/image/timg2.jpg')}}"></a></li>
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">首页</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">推荐</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">技术</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">赛事</a></li>
        <li role="presentation"><a href="#yule" aria-controls="settings" role="tab" data-toggle="tab">娱乐</a></li>

    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <!--首页-->
        <div role="tabpanel" class="tab-pane active" id="home">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="{{asset('style/image/timg.jpg')}}">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="{{asset('style/image/timg.jpg')}}">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="{{asset('style/image/timg.jpg')}}">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="{{asset('style/image/timg.jpg')}}">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="{{asset('style/image/timg.jpg')}}">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="{{asset('style/image/timg.jpg')}}">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="{{asset('style/image/timg.jpg')}}">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="{{asset('style/image/timg.jpg')}}">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="{{asset('style/image/timg.jpg')}}">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="{{asset('style/image/timg.jpg')}}">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="{{asset('style/image/timg.jpg')}}">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="{{asset('style/image/timg.jpg')}}">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="{{asset('style/image/timg.jpg')}}">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="{{asset('style/image/timg.jpg')}}">精彩视频，玩转全新CS</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMod"><div><img src="{{asset('style/image/timg.jpg')}}">精彩视频，玩转全新CS</div></a>
        </div>
        <!--首页视频-->
        <div class="modal fade" id="myMod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden='true' data-backdrop='static'>
            <div class="modal-dialog" role="document" id="tan">
                <div class="modal-content" style="width: 800px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;outline: none;"><span aria-hidden="true" onclick="out()">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="text-align: center;">精彩视频</h4>
                    </div>
                    <div class="modal-bodyi" style="padding-left: 87px;">
                        <video src="{{asset('style/mv/dao_a.mp4')}}" controls="controls"></video>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="out()" class="btn btn-default" data-dismiss="modal" style="position: relative;left: 703px;float: left;">关闭</button>
                    </div>
                </div>
            </div>
        </div>

        <!--推荐-->
        <div role="tabpanel" class="tab-pane" id="profile">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/timg1.jpg')}}">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/timg1.jpg')}}">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/timg1.jpg')}}">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/timg1.jpg')}}">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/timg1.jpg')}}">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/timg1.jpg')}}">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/timg1.jpg')}}">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/timg1.jpg')}}">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/timg1.jpg')}}">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/timg1.jpg')}}">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/timg1.jpg')}}">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/timg1.jpg')}}">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/timg1.jpg')}}">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/timg1.jpg')}}">菜鸟进阶高手</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/timg1.jpg')}}">菜鸟进阶高手</div></a>
        </div>
        <!--推荐视频-->
        <div class="modal fade" id="myMoa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden='true' data-backdrop='static'>
            <div class="modal-dialog" role="document" id="tan">
                <div class="modal-content" style="width: 800px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;outline: none;"><span aria-hidden="true" onclick="tui()">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="text-align: center;">精彩视频</h4>
                    </div>
                    <div class="modal-bodyi" style="padding-left: 87px;">
                        <video src="{{asset('style/mv/dao_a.mp4')}}" controls="controls"></video>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="tui()" class="btn btn-default" data-dismiss="modal" style="position: relative;left: 703px;float: left;">关闭</button>
                    </div>
                </div>
            </div>
        </div>

        <!--技术-->
        <div role="tabpanel" class="tab-pane" id="messages">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoaa"><div><img src="{{asset('style/image/u=1924092723,4212236483&fm=27&gp=0.jpg')}}">跑遍全图，就是如此的无聊</div></a>
        </div>
        <!--技术视频-->
        <div class="modal fade" id="myMoaa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden='true' data-backdrop='static'>
            <div class="modal-dialog" role="document" id="tan">
                <div class="modal-content" style="width: 800px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;outline: none;"><span aria-hidden="true" onclick="ji()">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="text-align: center;">精彩视频</h4>
                    </div>
                    <div class="modal-bodyi" style="padding-left: 87px;">
                        <video src="{{asset('style/mv/dao_b.mp4')}}" controls="controls"></video>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="ji()" class="btn btn-default" data-dismiss="modal" style="position: relative;left: 703px;float: left;">关闭</button>
                    </div>
                </div>
            </div>
        </div>

        <!--赛事-->
        <div role="tabpanel" class="tab-pane" id="settings">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=1260585801,1785176028&fm=27&gp=0.jpg')}}">中国选手TXT队获得冠军</div></a>
        </div>
        <!--赛事视频-->
        <div class="modal fade" id="myMoa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden='true' data-backdrop='static'>
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 800px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;outline: none;"><span aria-hidden="true" onclick="sai()">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="text-align: center;">精彩视频</h4>
                    </div>
                    <div class="modal-bodyi" style="padding-left: 87px;">
                        <video src="{{asset('style/mv/dao_a.mp4')}}" controls="controls" style="height: 363px;"></video>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="sai()" class="btn btn-default" data-dismiss="modal" style="position: relative;left: 703px;float: left;">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <!--娱乐-->
        <div role="tabpanel" class="tab-pane" id="yule">
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
            <a href="#" class="bt" data-toggle="modal" data-target="#myMoa"><div><img src="{{asset('style/image/u=917443024,4064903481&fm=27&gp=0.jpg')}}">无聊吗？那就来看直播吧</div></a>
        </div>
        <!--娱乐视频-->
        <div class="modal fade" id="myMoa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden='true' data-backdrop='static'>
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 800px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;outline: none;"><span aria-hidden="true" onclick="yu()">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="text-align: center;">精彩视频</h4>
                    </div>
                    <div class="modal-bodyi" style="padding-left: 87px;">
                        <video src="{{asset('style/mv/dao_a.mp4')}}" controls="controls" style="height: 363px;"></video>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="yu()" class="btn btn-default" data-dismiss="modal" style="position: relative;left: 703px;float: left;">关闭</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('style/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('style/js/style.js')}}"></script>
<script src="{{asset('style/js/bootstrap.min.js')}}"></script>
</body>
</html>