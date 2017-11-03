<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>山海问问-登录</title>
	<link rel="stylesheet" href="{{ asset('home/login/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('home/login/layer/mobile/need/layer.css') }}">
</head>
<body>
<div id="main">
	<form action="{{ url('login') }}" class="form" method="post">
		{{csrf_field()}}
		<div class="form-head">
			<h2>欢迎您    请登录</h2>
			<p>还没有账号？<a href="{{ URL('register') }}">立即注册</a></p>
		</div>
		<div class="form-body">
			<p id="prom" class="err-msg">
				@if(session('msg'))
					{{ session('msg') }}
				@endif
			</p>
			<div class="ui-input">
				<input id="phone" onblur="checkPhone()" name="phone" type="text" placeholder="手机号">
			</div>
			<div class="ui-input">
				<input id="pwd" onblur="checkPwd()" type="password" name="pwd" placeholder="密码(6~20位)">
			</div>
			<p class="forget-password">
				<a href="forget.html">忘记密码？</a>
			</p>
			<button type="submit" class="ui-button ui-button--primary">登录</button>
		</div>
	</form>
	<p style="text-align:center;"><a href="{{ URL('/') }}">返回首页</a> &copy; 2017 Powered by <a href="http://www.shww.cn" target="_blank">http://www.shww.com</a></p>
</div>
<script src="{{ asset('home/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('home/login/layer/layer.js') }}"></script>

</body>
<script type="text/javascript">
	function checkPhone()
	{
		var phone = $('#phone').val().trim();
        if(!(/^1[34578]\d{9}$/.test(phone))){
            document.getElementById('prom').innerHTML = "手机号有误，请输入正确格式！";
            return false;
        } else {
        	document.getElementById('prom').innerHTML = "";
        	return true;
        }
	}
	function checkPwd()
	{
		var pwd = $('#pwd').val().trim();
    	if ($('#pwd').val().length > 20 || $('#pwd').val().length < 6) {
    		document.getElementById('prom').innerHTML = "密码有误，请输入正确格式！";
    		return false;
    	}else{
    		document.getElementById('prom').innerHTML = "";
    		return true;
    	};
	}
</script>
</html>