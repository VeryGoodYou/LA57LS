<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded=[];//这是字段黑名单，填到里面的不能被操作
    public $timestamps=false;//这是关闭时间戳自动记录的，一般都关闭，因为你的数据库没有那两个字段
    protected $table='blog_zc';//这里是模型自定义的表
}
