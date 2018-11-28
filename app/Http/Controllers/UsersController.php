<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;

class UsersController extends Controller
{
    //用户注册页面请求处理指定给create方法
    public function create()
    {
        return view('users.create');
    }

    //用户信息页请求 自动注入请求URL中的ID对应的用户模型实例,指定给show方法展示用户信息
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
        'name' => 'required|max:50', //required验证不为空,max/min验证长度
        'email' => 'required|email|unique:users|max:255', // unique:users是直接读取users表中email是否重复
        'password' => 'required|confirmed|min:6' //confirmed用来验证两次密码输入是否一致
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->name,
            'password' => bcrypt($request->password),
        ]);

        session()->flash('success','非常好,你已经注册成功了~'); //用session缓存一条数据 flash接收两个参数,一个为键,一个为值, 注册成功后,我们可以用session->get('success')取出值. success是专用键名,有不同显示效果.
        return redirect()->route('users.show', [$user]); //返回的$user中数据给show页面,并展示.
    }
}
