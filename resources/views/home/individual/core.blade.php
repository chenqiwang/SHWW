<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">

		<link href="{{ asset('home/individual/css/admin.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('home/individual/css/amazeui.css') }}" rel="stylesheet" type="text/css">

		<link href="{{ asset('home/individual/css/personal.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('home/individual/css/infstyle.css') }}" rel="stylesheet" type="text/css">
		<script src="{{ asset('home/individual/js/jquery.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('home/individual/js/amazeui.js') }}" type="text/javascript"></script>
			
	</head>

	<body>

		<!--头 -->
		 <b class="line"></b>
		<div class="center">
			<div class="col-main">
				<div class="main-wrap">
			@yield('content')
					

				</div>
			
				<!--底部-->
				<div class="footer" >
					
					<div class="footer-bd">
						<p>
							<a href="#">关于山海</a>
							<a href="#">合作伙伴</a>
							<a href="#">联系我们</a>
							
							<em>© 2017-2025 山海问问 版权所有
						</p>
					</div>
				</div>
			</div>

			<aside class="menu">
				<ul>
					
					<li class="person">
						<span>个人设置</span>
					</li>
					<li class="person">
						<ul>
							<li><a href="{{ URL('/data')}}">个人中心</a></li>
							<li> <a href="{{ URL('#')}}">修改密码</a></li>
							<li> <a href="ask.html">手机验证</a></li>
						</ul>
					</li>
					<li class="person">
						<ul>
							<li> <a href="{{ URL('#')}}">我的提问</a></li>
							<li> <a href="{{ URL('#')}}">我的回复</a></li>
						</ul>
					</li>
					<li class="person">
						<ul>
							<li> <a href="{{ URL('#')}}">我的关注</a></li>
						</ul>
					</li>
				</ul>
			</aside>
		</div>
	</body>
		
</html>