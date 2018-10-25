<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人中心</title>
    <link rel="shortcut icon" href="{{asset('style/image/ooopic_1507533377.ico')}}">
    <link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/gr.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}">
</head>
<body>
@include('top')
<!--个人中心-->
<form class="form-horizontal" action="" method="post">
    <p>信息修改</p>
    <div class="form-group">
        <label for="exampleInputEmail1">账号：</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="账号">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">密码：</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="密码">
    </div>
</form>
<script src="{{asset('style/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('style/js/style.js')}}"></script>
<script src="{{asset('style/js/bootstrap.min.js')}}"></script>
</body>
</html>