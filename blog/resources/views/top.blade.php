<!--导航栏-->
<nav class="navbar navbar-inverse">
    <ul class="nav nav-pills" id="dis">
        <li role="presentation" class="active"><a href="{{route('home')}}">官方</a></li>
        <li role="presentation"><a href="{{route('gl')}}">玩家攻略</a></li>
        <li role="presentation"><a href="{{route('zl')}}">游戏资料</a></li>
        <li role="presentation"><a href="{{asset('gr')}}">个人中心</a></li>
    </ul>
    <!-- 登录 -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">登录</button>
    <!--登录用户-->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="dd" aria-hidden='true' data-backdrop='static'>
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        登录
                    </h4>
                </div>
                <form action="{{route('dl')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">用户账号</label>
                        <input type="text" class="form-control" value="" id="exampleInputEmail1" placeholder="请输入用户账号" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">用户密码</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入用户密码" name="password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                        </button>
                        <button type="submit" class="btn btn-default">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--注册-->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sx">注册</button>
    <!--注册界面-->
    <div class="modal fade bs-example-modal-sx" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="qq" aria-hidden='true' data-backdrop='static'>
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">注册</h4>
                </div>
                @include('laravel.errors')
                <form class="modal-body" action="{{route('zc')}}" method="post">
                    @csrf
                    <label for="exampleInputEmail1">用户账号</label>
                    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="请输入用户账号" name="name" value="{{old('name')}}">
                    <label for="exampleInputPassword1">用户密码</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="请输入用户密码" name="password">
                    <label for="exampleInputPassword1">确定用户密码</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="确定用户密码" name="password_confirmation">
                    <label for="exampleInputPassword1">邮箱</label>
                    <input type="email" class="form-control" id="exampleInputPassword2" placeholder="请输入邮箱" name="email" value="{{old('email')}}">
                    <label for="exampleInputPassword1">手机号</label>
                    <input type="text" class="form-control" id="exampleInputPassword2" placeholder="请输入手机号" name="shouji" value="{{old('shouji')}}">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--当缩小一定界面出现分行-->
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse" id="bl">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</nav>