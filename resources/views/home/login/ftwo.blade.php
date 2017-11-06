<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>山海问问-重置密码</title>
	<link rel="stylesheet" href="{{ asset('home/login/css/style.css') }}">
</head>
<body>
<div id="main">
	<form class="form">
		<div class="form-head">
			<h2>找回密码-重置密码</h2>
		</div>
		<div class="form-body">
			<p class="err-msg" id="prom"></p>
			<div class="ui-input">
				<input type="password" onblur="checkPwd()" id="pwd" name="pwd" placeholder="新密码">
			</div>
			<input type="hidden" name="phone" value="{{ $phone }}">
			<div class="ui-input">
				<input type="password" id="npwd" name="npwd" placeholder="确认新密码">
			</div>
			<button type="button" onclick="doReset({{ $phone }})" class="ui-button ui-button--primary">确定</button>
		</div>
	</form>
</div>

<script src="{{ asset('home/assets/js/jquery.min.js') }}"></script>
<script type="text/javascript">
	function checkPwd()
	{
		var pwd = $('#pwd').val();
		if (pwd.length > 20 || pwd.length < 6) {
    		document.getElementById('prom').innerHTML = "密码长度大于6位小于20位";
    		return false;
    	}else{
    		document.getElementById('prom').innerHTML = "";
    		return true;
    	};
	}
	function doReset(phone)
	{
		var pwd = $('#pwd').val();
		var npwd = $('#npwd').val();
		if (pwd == npwd) {
			$.post('doreset',{phone:phone,pwd:pwd,'_token':'{{ csrf_token() }}'},function(data){
				if (data) {
					window.location = '/login';
				} else {
					document.getElementById('prom').innerHTML = "输入有误，请确认后重新输入";
				};
			});
		} else {
			document.getElementById('prom').innerHTML = "两次密码不一致，请确认后重新输入";
			return false;
		};
	}
</script>
</body>
</html>