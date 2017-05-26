@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 80px">
            <div class="frame">
                <form action="{{url('/register')}}" method="POST" class="form-horizontal">
                 {{ csrf_field() }}
                    <div class="form-group text-center" style="font-size: 24px">
                        <label for="exampleInputEmail1" >注册</label>
                    </div>
                    <div class="form-group">
                        <label for="name">用户名</label>
                        <input type="text" class="form-control" name="name" placeholder="请输入用户名">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">邮箱地址</label>
                        <input type="email" class="form-control" name="email" placeholder="请输入邮箱地址">
                    </div>
                    <div class="form-group">
                        <label for="password">密码</label>
                        <input type="password" class="form-control" name="password" placeholder="请输入密码">
                    </div>
                    <div class="form-group">
                        <label for="password">确认密码</label>
                        <input type="password" class="form-control" name="conPassword" placeholder="请输入确认密码">
                    </div>
                    <div class="form-group" style="padding: 15px 0px 50px 0px">
                        <button type="submit" class="btn btn-primary form-control col-md-12">注册</button>
                    </div>
                    <div class="form-group text-center" >
                        <label for="exampleInputText" ><a href="{{url('/login')}}">如有账号？请登录</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection