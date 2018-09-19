@extends('layouts.default')
@section('title','首页')
@section('content')
    <div class="jumbotron">
        <h1>Hello Dc</h1>
        <p class="lead">
            你现在看到的是 Dc不在线上的首页
        </p>
        <p>
            一切,将不会开始.
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">注册一个</a>
        </p>
    </div>
@stop
