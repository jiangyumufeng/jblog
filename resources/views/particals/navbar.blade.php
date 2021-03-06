﻿<nav class="navbar navbar-default navbar-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Jblog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/') }}">文章</a></li>
        <li><a href="#">讨论</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="搜索">
          </div>
        </form>
        @if (Auth::guest())
        <li><a href="{{ url('login') }}">登录</a></li>
        <li><a href="{{ url('register') }}">注册</a></li>
        @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">设置 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            @if(Auth::user()->is_admin)
            <li><a href="{{url('dashboard')}}">控制板</a></li>
            @endif
            <li><a href="#">个人中心</a></li>
            <li><a href="{{url('logout')}}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">退出登录</a>
              <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>