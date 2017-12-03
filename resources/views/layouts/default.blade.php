<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1, maximum-scale=1">
    <title>@yield('title','dream field')</title>
    <meta name="Keywords" content="Coding,码市,Coding码市,外包,软件外包,Coding源码市场,众包,云端众包,远程工作,悬赏平台,Coding悬赏平台,软件项目需求,软件开发">
    <meta name="Description"
          content="码市是 Coding 推出的基于云技术的软件外包平台，意在连接需求方与广大开发者。让项目的需求方快速的找到合适的开发者，完成项目开发工作。同时也帮助开发者找到合适的项目将技术变成财富。码市基于 Coding 的在线工具对项目进行管控，保障双方的利益。">

    <script src="/js/app.js"></script>
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
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
            <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="http://mb.bootcss.com" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', 'themes'])" target="_blank">主题/模板</a></li> -->
                <li><a href="{{route('users.create')}}">注册</a></li>
                <li><a href="{{route('users.create')}}" >登录</a></li>
            </ul>
        </nav>
    </div>
</header>
<div>

</div>
    @include('shared._messages')
    @yield('content')


</body>
</html>
