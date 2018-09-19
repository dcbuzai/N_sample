<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class UsersController extends Controller
{
    //用户注册页面请求处理指定给create方法
    public function create()
    {
        return view('users.create');
    }
}
