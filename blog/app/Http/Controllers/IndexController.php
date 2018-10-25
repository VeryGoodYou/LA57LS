<?php

namespace App\Http\Controllers;
use function Couchbase\defaultDecoder;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Config;
class IndexController extends Controller
{
    //
    public function home(){
        return view('laravel.home');
    }
    public function gl(){
        return view('laravel.gl');
    }
    public function zl(){
        return view('laravel.zl');
    }
    public function gr(){
        return view('laravel.gr');
    }
    public function dl(Request $request){
        /*$data = $this->validate($request,[
           'name'=>'required|min:6',
           'password'=>'required|min:5'
        ]);
        if (\Auth::attempt($data)) {
            session()->flash('success');
            return '<script>alert("登录成功")</script>'.back();
        }
            session()->flash('danger');
            return '<script>alert("账号或密码错误")</script>'.back();*/
        $validatedData = $request->validate([
            'name' => 'required|min:6',
            'password' => 'required|min:5',
        ]);


    }
    public function zc(Request $request){
       $user = DB::table('blog_zc')->insert($this->validate($request,[
            'name'=>'required|min:6',
            'email'=>'required|unique:blog_zc|email',
            'password'=>'required|min:9|confirmed',
            'shouji'=>'required|min:11'
        ]));
        return '<script>alert("注册成功")</script>'.back();
    }
}
