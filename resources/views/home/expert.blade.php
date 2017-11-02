@extends('home.public.parent')
@section('content')
<div id="category_top">
    <div class="am-hide-lg-only kz" id="leftbtn">
        <i class="am-icon-angle-left" ></i>
    </div>
    <div class="am-hide-lg-only kz" style="right:0px;" id="rightbtn">
        <i class="am-icon-angle-right"></i>
    </div>
    <div class="am-container" >
        <ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-6 am-thumbnails" id="topface">
            <li>
                <a href="category2.html">
                <div class="ctl active">
                    <img src="{{ asset('home/Temp-images/face1.jpg') }}">
                    <h3>一号女嘉宾</h3>
                    <p>MMM</p>
                </div>
                <button type="button" class="am-btn am-btn-primary">进入专栏</button>
                </a>
            </li>
            <li>
                <a href="http://www.sina.com">
                <div class="ctl">
                    <img src="{{ asset('home/Temp-images/face2.jpg') }}">
                    <h3>二号女嘉宾</h3>
                    <p>AmazeUI</p>
                </div>
                <button type="button" class="am-btn am-btn-default">进入专栏</button>
                </a>
            </li>
        </ul>

    </div>

</div>

<div id="cattit">
        <h3><a href="#">专家板块</a></h3>
</div>
<hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
<div id="cattlist" class="am-container">
    <ul class="am-avg-sm-1 am-avg-md-3 am-avg-lg-4">
        <li>
            <div class="cattlist_0">
                <div class="cattlist_1">
                    <div class="am-g">

                        <div class="am-u-sm-4 am-u-md-5 am-u-lg-5 am-vertical-align">
                            <div class="am-vertical-align-middle">
                                <img src="{{ asset('home/Temp-images/face1.jpg') }}">
                            </div>
                        </div>
                        <div class="am-u-sm-8 am-u-md-7 am-u-lg-7">

                            <h3>山边小溪</h3>
                            <h4>AmazeUI</h4>
                            <p>文章<span>9</span></p>
                        </div>
                    </div>
                </div>
                <div class="cattlist_2">
                    <p>
                        设计的空间发生快，乐十分的骄傲了开发奥斯卡的房间辣椒反馈。发奥斯卡的房间辣椒反馈。设计的空间发生快，
                    </p>
                </div>
                <div class="cattlist_3">
                    <button type="button" class="am-btn am-btn-warning">
                       <a href="123465"> 橙色按钮 </a>
                    </button>
                </div>
            </div>
        </li>
    </ul>
</div>


@endsection