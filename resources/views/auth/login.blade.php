@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 80px">
            <div class="frame">
                <form action="{{url('/login')}}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                    <div class="form-group text-center" style="font-size: 24px">
                        <label for="title" >登录</label>
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
                        <button type="submit" class="btn btn-primary form-control col-md-12">登录</button>
                    </div>
                    <div class="form-group text-center" >
                        <label for="forgetPassword" ><a href="">忘记密码?</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection