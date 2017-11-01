<!--头部开始-->
<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>山海问问</title>

    <!--360 browser -->
    <meta name="renderer" content="webkit">
    <meta name="author" content="wos">
    <!-- Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="{{ asset('images/i/app.png') }}">
    <!--Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/i/app.png') }}">
    <!--Win8 or 10 -->
    <meta name="msapplication-TileImage" content="{{ asset('images/i/app.png') }}">
    <meta name="msapplication-TileColor" content="#e1652f">
    
    <link rel="icon" type="image/png" href="{{ asset('images/i/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/amazeui.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/public.css') }}">
    <link rel="stylesheet" href="{{ asset('home/login/layer/mobile/need/layer.css') }}">
    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="{{ asset('home/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('home/login/layer/layer.js') }}"></script>
    <!--<![endif]-->
    <!--[if lte IE 8 ]>
    <script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
    <script src="assets/js/amazeui.ie8polyfill.min.js"></script>
    <![endif]-->
    <script src="{{ asset('home/assets/js/amazeui.min.js') }}"></script>
    <script src="{{ asset('home/js/public.js') }}"></script>

</head>
<body>

<header class="am-topbar am-topbar-fixed-top wos-header">
    <div class="am-container">
        <h1 class="am-topbar-brand">
            <a href="/"><img src="{{ asset('home/images/logo.png') }}" alt=""></a>
        </h1>

        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-warning am-show-sm-only"
                data-am-collapse="{target: '#collapse-head'}">
            <span class="am-sr-only">导航切换</span>
            <span class="am-icon-bars"></span>
        </button>

        <div class="am-collapse am-topbar-collapse" id="collapse-head">
            <ul class="am-nav am-nav-pills am-topbar-nav">
                <!-- 导航栏：tab_navigation表,二级联动 -->
                @foreach( $navigation as $v )
                <!-- 问题分类id=2，等于2让它二级联动 -->
                @if( $v->id != 2 )
                <li>
                    <a href="{{ $v->url }}">{{ $v->name }}</a>
                </li>
                @else
                <li class="am-dropdown" data-am-dropdown>
                    <a class="am-dropdown-toggle" data-am-dropdown-toggle href="{{ $v->url }}">{{ $v->name }}<span class="am-icon-caret-down"></span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li class="am-dropdown-header">问题分类</li>
                        <!--标签表tab_label ，二级联动-->
                        @foreach( $label as $u )

                            <li><a href="{{ $u->url }}/{{ $u->id }}" style="font-size:12px;">{{ $u->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @endif
                @endforeach
            </ul>
            @if(session('user'))
                <div style="height: 70px;width: 260px; float: right">
                    <img src="{{ asset('home/images/i/shang.png') }}" style="height: 70px;width: 70px; color: black; float: left">
                    <a style="font-size: 16px;margin-left: 8px;">{{ session('user') }}</a>
                    <a style="font-size: 12px;color: white;margin-left: 20px;">Lv:最强王者</a>
                    <button class="am-btn am-btn-danger am-btn-xs am-radius" style="margin-left: 5px;" ><i class="am-icon-cog"></i>个人中心</button>
                    <a href="{{ URL('/doLogOut') }}"><button  class="am-btn am-btn-danger am-btn-xs am-radius" >注销</button></a>
                </div>
            @else
            <div class="am-topbar-right">
                <a href="{{ URL('/register') }}"><button class="am-btn am-btn-default am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span>注册</button></a>
            </div>

            <div class="am-topbar-right">
                <a href="{{ URL('/login') }}"><button class="am-btn am-btn-danger am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button></a>
            </div>
            @endif
        </div>
    </div>
</header>
<!--头部结束-->

    @yield('content')
<!--尾部开始-->
<footer>
    <div class="content">
        <ul class="am-avg-sm-5 am-avg-md-5 am-avg-lg-5 am-thumbnails">
            
            <li><a href="#">加入我们</a></li>
            <li><a href="#">合作伙伴</a></li>
            <li><a href="#">广告及服务</a></li>
            <li><a href="#">友情链接</a></li>
            <li><a href="#">意见反馈</a></li>

        <div class="btnlogo"><img src="{{ asset('home/images/btnlogo.png') }}"/></div>
        <p>山海问问出品<br>

        <div class="w2div">
        <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
  am-avg-md-2 am-avg-lg-2 am-gallery-overlay" data-am-gallery="{ pureview: true }" >
            <li class="w2">
                <div class="am-gallery-item">
                    <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                        <img src="{{ asset('home/Temp-images/dd.jpg') }}" />
                        <h3 class="am-gallery-title">邮箱：xxxxxx@qq.com</h3>
                    </a>
                </div>
            </li>
            <li   class="w2">
                <div class="am-gallery-item">
                    <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                        <img src="{{ asset('home/Temp-images/dd.jpg') }}"/>
                        <h3 class="am-gallery-title">关于我们：shww</h3>
                    </a>
                </div>
            </li>
             
        </ul>
        </div>
    </div>
    
</footer>
</body>
</html>
<!--尾部结束-->