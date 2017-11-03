<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <title>山海问问-用户注册</title>
        <link rel="stylesheet" href="{{ asset('home/login/css/style.css') }}">
    </head>
    <body>
        <div id="main">
            <form action="{{ URL('/register') }}" class="form" method="post">
                {{ csrf_field() }}
                <div class="form-head">
                    <h2>新用户注册</h2>
                    <p>已有账号？<a href="{{ URL('login') }}">立即登录</a></p>
                </div>
                <div class="form-body">
                    <p id="prom" class="err-msg">
                        @if(session('msg'))
                            {{ session('msg') }}
                        @endif
                    </p>
                    <div class="ui-input">
                        <input type="text" id="phone" name="phone" placeholder="手机号">
                    </div>
                    <div class="ui-input narrow-input">
                        <input type="text" name="code" id="code" placeholder="短信验证码">
                        <a class="sms-button" id="getcode" name="code" href="javascript:getCode();">获取验证码</a>
                    </div>
                    <input type="hidden" id="scode" name="scode" >
                    <div class="ui-input">
                        <input type="password" id="pwd" name="pwd" placeholder="密码，6-16位，区分大小写">
                    </div>
                    <button type="submit" class="ui-button ui-button--primary">注册</button>
                </div>
            </form>
        </div>
        <script src="{{ asset('home/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('home/login/js/script.js') }}"></script>
        <script type="text/javascript">
            function getCode()
            {
                var phone = $('#phone').val();
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
                                    getcode.innerHTML = "已发送("+time+")";
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