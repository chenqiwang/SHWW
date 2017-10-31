<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{ asset('admin/i/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('admin/i/app-icon72x72@2x.png') }}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{ asset('admin/css/amazeui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/amazeui.datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}">
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>

</head>

<body data-type="login">
    <script src="{{ asset('admin/js/theme.js') }}"></script>
    <div class="am-g tpl-g">
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-logo">

                </div>



                <form class="am-form tpl-form-line-form">
                    <div class="am-form-group">
                        <input type="text" onblur="checkPhone()" class="tpl-form-input" id="phone" name="phone" placeholder="请输入管理员手机号">
                    </div>


                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" id="pwd" name="pwd" placeholder="请输入管理员密码">

                    </div>
                    <div class="am-form-group">

                        <button id="login" type="button" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/js/amazeui.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>

</body>
<script type="text/javascript">
    function checkPhone(){
        var phone = document.getElementById('phone').value;
        if(!(/^1[34578]\d{9}$/.test(phone))){
            alert("手机号码有误，请重填");
            return false;
        }
    }
    $('#login').click(function(){
        var phone = $('#phone').val();
        var pwd = $('#pwd').val();
        $.ajax({
            url:'{{ URL('admin/dologin') }}',
            type:'get',
            data:{phone:phone, pwd:pwd},
            async:false,
            error:function() {
                alert('用户名或密码错误！');
            },
            success:function(data){
                if(data == 1) {
                    window.location = '/admin/index';
                } else {
                    alert(data);
                }
            }
        });
    });
</script>
</html>