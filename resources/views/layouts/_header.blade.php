<header class="navbar navbar-static-top bs-docs-nav navbar-inverse" id="top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="../" class="navbar-brand">Bootstrap</a>
        </div>
        <nav id="bs-navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{route('home')}}">首页</a>
                </li>
                <li>
                    <a href="{{route('about')}}" >关于</a>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right" >
                @if (Auth::check())
                    <li><a href="{{ route('users.index') }}">用户列表</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{ Auth::user()->name }} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('users.show', Auth::user()->id)}}">个人中心</a></li>
                            <li><a href="{{ route('users.edit', Auth::user()->id)}}">编辑资料</a></li>
                            <li class="divider"></li>
                            <li>
                                <a id="logout" href="#">
                                    <form action="{{ route('logout') }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ route('signup') }}">注册</a></li>
                    <li><a href="{{ route('login') }}">登录</a></li>
                @endif
            </ul>
        </nav>
    </div>
</header>