<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>山海问问-找回密码</title>
	<link rel="stylesheet" href="{{ asset('home/login/css/style.css') }}">
</head>
<body>
<div id="main">
	<form action="{{ URL('/forget') }}" method="post" class="form">
		{{ csrf_field() }}
		<div class="form-head">
			<h2>找回密码</h2>
		</div>
		<div class="form-body">
			<p class="err-msg" id="prom">
				@if(session('msg'))
					{{ session('msg') }}
				@endif
			</p>
			</p>
			<p class="warn-msg" id="prom_warn"></p>
			<div class="ui-input">
				<input type="text" id="phone" name="phone" placeholder="注册手机号">
			</div>
			<input type="hidden" id="scode" name="scode" >
			<div class="ui-input narrow-input">
	            <input type="text" name="code" id="code" placeholder="短信验证码">
	            <a class="sms-button" id="getcode" name="code" href="javascript:getCode();">获取验证码</a>
	        </div>
	        
			<button type="submit" class="ui-button ui-button--primary">下一步</button>
		</div>
	</form>
</div>

<script src="{{ asset('home/assets/js/jquery.min.js') }}"></script>
<script type="text/javascript">
function getCode()
{
    var phone = $('#phone').val();
    var warn = document.getElementById('prom_warn');
    var getcode = document.getElementById('getcode');
    if(!(/^1[34578]\d{9}$/.test(phone))){
        document.getElementById('prom').innerHTML = "手机号有误，请输入正确格式！";
        return false;
    } else {
        document.getElementById('prom').innerHTML = "";
        $.ajax({
            url:'{{ url('/getCode') }}',
            type:'get',
            async:false,
            data:{'phone':phone},
            success:function(data){
                var time = 60;
                function setTime(){
                    if(time == 0){
                        getcode.innerHTML = "获取验证码";
                        $('#getcode').attr('href',"javascript:getCode();");
                        time = 60;
                        clearInterval(interval);
                    }else{
                        $('#getcode').removeAttr('href');
                        warn.innerHTML = "短信验证码已发送至 "+phone+"，如未收到，请重新获取";
                        getcode.innerHTML = "重新发("+time+")";
                        time--;
                    }
                }
                document.getElementById('scode').value = data;
                var interval = setInterval(function (){
                    setTime();
                },1000);
            }
        });
    }
}
</script>
</body>
</html>