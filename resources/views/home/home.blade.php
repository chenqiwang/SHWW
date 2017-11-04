@extends('home.public.parent')
<!--banner-->
@section('content')
<style>
    .zero{
        width:18em;
        display:block;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    }
    .one{
        width:13em;
        display:block;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    }
    more{
        overflow:hidden;
        text-overflow:ellipsis;
        background: greenyellow;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
    }
</style>
<div class="banner">
    <div class="am-g am-container">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-8">
            <div data-am-widget="slider" class="am-slider am-slider-c1" data-am-slider='{"directionNav":false}' >
                <ul class="am-slides">
                    <li>
                        <a href="events_show.html"><img src="{{ asset('home/Temp-images/bb1.jpg') }}"></a>
                        <div class="am-slider-desc">远方 有一个地方 那里种有我们的梦想</div>

                    </li>
                    <li>
                        <a href="events_show.html"><img src="{{ asset('home/Temp-images/bb2.jpg') }}"></a>
                        <div class="am-slider-desc">某天 也许会相遇 相遇在这个好地方</div>

                    </li>
                    <li>
                        <a href="events_show.html"><img src="{{ asset('home/Temp-images/bb3.jpg') }}"></a>
                        <div class="am-slider-desc">不要太担心 只因为我相信 终会走过这条遥远的道路</div>

                    </li>
                    <li>
                        <a href="events_show.html"><img src="{{ asset('home/Temp-images/bb4.jpg') }}"></a>
                        <div class="am-slider-desc">OH PARA PARADISE 是否那么重要 你是否那么地遥远</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="am-u-sm-0 am-u-md-0 am-u-lg-4 padding-none">
            <div class="star am-container"><span><img src="{{ asset('home/images/star.png') }}">公告</span></div>
            <ul class="padding-none am-gallery am-avg-sm-2 am-avg-md-4 am-avg-lg-2 am-gallery-overlay" data-am-gallery="{ pureview: true }" >
                           <div class="three-parts-layout-content announcement-content line">
                                <ul class="announcement-list">
                                    @foreach ($notice as $not)
                                    <li class="announcement-list-item">
                                        <i class="announcement-disc"></i>
                                        <a target="_blank" href="javascript:void(0);" onclick="doNotInfo('{{ $not->type }}', '{{ $not->content }}')" class="announcement-link"  title="这些都是公告哦">【{{ $not->type }}】{{ $not->content }}</a>
                                        <i class="i-new announcement-new"></i>
                                    </li>
                                    @endforeach
                                </ul>
                            </div> 
            </ul>
        </div>
    </div>
</div>

<!--banner2-->
<div class="am-container">
    <ul class="padding-none banner2 am-gallery am-avg-sm-2 am-avg-md-4 am-avg-lg-4 am-gallery-overlay" data-am-gallery="{ pureview: true }" >
        <li>
            <div class="am-gallery-item">
                <h1>等你来答</h1>


                @foreach($zeroQues as $z)
               <a href="/ngavig/answer/{{ $z->id }}" class="zero" target="_self">{{ $z->name }}</a>
                @endforeach
            </div>
        </li>
        <li>
            <div class="am-gallery-item">
              <a href="#">
                    <img src="{{ asset('home/Temp-images/tempnews.png') }}"  alt="远方 有一个地方 那里种有我们的梦想"/>
                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                    <div class="am-gallery-desc">2375-09-26</div>
                </a>
            </div>
        </li>
        <li>
            <div class="am-gallery-item">
               <h1>大家在问</h1>
               <a href="/b/nYw7v9vXF.html" target="_blank">东奥会计在线继续教育如何取消课堂答题</a>
               <a href="/b/nYw7v9vXF.html" target="_blank">东奥会计在线继续教育如何取消课堂答题</a>
               <a href="/b/nYw7v9vXF.html" target="_blank">东奥会计在线继续教育如何取消课堂答题</a>
               <a href="/b/nYw7v9vXF.html" target="_blank">东奥会计在线继续教育如何取消课堂答题</a>
               <a href="/b/nYw7v9vXF.html" target="_blank">东奥会计在线继续教育如何取消课堂答题</a>
            </div>
        </li>
        <li>
            <div class="am-gallery-item">
                <a href="#">
                    <img src="{{ asset('home/Temp-images/tempnews.png') }}"  alt="远方 有一个地方 那里种有我们的梦想"/>
                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                    <div class="am-gallery-desc">2375-09-26</div>
                </a>
            </div>
        </li>
    </ul>
</div>
<!--news-->
<div class="am-g am-container newatype">
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-8 oh">
        <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" style="border-bottom: 0px; margin-bottom: -10px">
            <h2 class="am-titlebar-title ">
                热门问题
            </h2>
            <nav class="am-titlebar-nav">
                <a href="{{ URL('ngavig/whole/1') }}">更多 &raquo;</a>
            </nav>
        </div>

        <div data-am-widget="list_news" class="am-list-news am-list-news-default news">
            <div class="am-list-news-bd">
                <ul class="am-list">
                    @foreach($hotQues as $hot)
                    <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left" data-am-scrollspy="{animation:'fade'}">
                        <div class="am-u-sm-5 am-list-thumb">
                            <a href="#">
                                <img src="{{ asset('image/'.$hot->mview) }}" style="height: 80px;width: 250px;" class="face"/>
                            </a>

                        </div>

                        <div class=" am-u-sm-7 am-list-main">
                            <h3 class="am-list-item-hd zero">{{ $hot->name }}</h3>
                            <div class="am-list-item-text" class="more">作者：{{ $hot->uname }}
                                <br>
                                <a href="{{ URL('/ngavig/answer/'.$hot->id) }}">点我进入哟>></a>
                            </div>
                        </div>
                    </li>

                    <div class="newsico am-fr">
                        <i class="am-icon-clock-o">{{ $hot->time }}</i>
                        <i class="am-icon-commenting-o">{{ $hot->count }}</i>
                    </div>
                    @endforeach
                </ul>
            </div>
            <a href="#"><img src="{{ asset('home/Temp-images/ad2.png') }}" class="am-img-responsive" width="100%"/></a>

            <div class="am-hide-sm">
                <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
                    <h2 class="am-titlebar-title ">
                        专家达人
                    </h2>
                </div>
                <div id="youxi" class="case am-animation-slide-left">
                    <ul class="am-gallery am-avg-sm-2 am-avg-md-4 am-avg-lg-4 am-gallery-overlay" data-am-gallery="{ pureview: true }" >
                        @foreach($expert as $ex)
                        <li>
                            <div class="am-gallery-item">
                                <a href="">
                                    <img src="{{ asset('image/'.$ex->photo) }}" style="width: 184px;height: 184px;" class="face" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title" style="text-align: center;">{{ $ex->nickname }}</h3>
                                </a>
                            </div>
                        </li>
                            @endforeach
                    </ul>
                </div>

                <div id="yingxiao" class="case am-animation-slide-right dn">
                    <ul class="am-gallery am-avg-sm-2 am-avg-md-4 am-avg-lg-4 am-gallery-overlay" data-am-gallery="{ pureview: true }" >
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>


                <div id="gongju" class="dn case am-animation-slide-right">
                    <ul class="am-gallery am-avg-sm-2 am-avg-md-4 am-avg-lg-4 am-gallery-overlay" data-am-gallery="{ pureview: true }" >
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="am-gallery-item">
                                <a href="{{ asset('home/Temp-images/dd.jpg') }}">
                                    <img src="{{ asset('home/Temp-images/cc.jpg') }}" data-replace-img="{{ asset('home/Temp-images/dd.jpg') }}" alt="远方 有一个地方 那里种有我们的梦想"/>
                                    <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                                    <div class="am-gallery-desc">2375-09-26</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-4">


        <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
            <h2 class="am-titlebar-title ">
                提问问题
            </h2>
        </div>

        <div data-am-widget="list_news" class="am-list-news am-list-news-default right-bg" data-am-scrollspy="{animation:'fade'}">
			  <form class="am-form" action="javascript:;">
                <fieldset>
                    <div class="am-form-group">
                        <label for="doc-select-1">帖子类型选择</label>
                        <select>

                           @foreach( $supo as $s )
                           @if( $s->id != 1 )
                            <option value="{{ $s->id }}">{{ $s->name }}</option>
                           @endif
                           @endforeach

                        </select>
                        <span class="am-form-caret"></span>
                    </div>
                    <div class="am-form-group">
                        <label for="doc-ta-1">发帖内容</label>
                        <textarea id="tw" class="" rows="5" id="doc-ta-1"></textarea>
                    </div>

                    <p><button onclick="supo()" class="am-btn am-btn-default">发帖</button></p>
                </fieldset>
            </form>
        </div>
        <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
            <h2 class="am-titlebar-title ">
               最新问题
            </h2>
            <nav class="am-titlebar-nav">
                <a href="{{ 'ngavig/whole/1' }}">more &raquo;</a>
            </nav>
        </div>

        <div data-am-widget="list_news" class="am-list-news am-list-news-default right-bg" data-am-scrollspy="{animation:'fade'}">
            <ul class="am-list"  >
                @foreach($newQues as $new)
                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                    <div class="am-u-sm-4 am-list-thumb">
                            <img src="{{ asset('image/'.$new->photo) }}"/>
                    </div>

                    <div class=" am-u-sm-8 am-list-main">
                        <h3 class="am-list-item-hd one" title="{{ $new->name }}">{{ $new->name }}</h3>

                        <div style="font-size: 14px;">
                            <br>
                            作者：{{ $new->uname }}<br>
                            提问时间：{{ $new->time }}<a href="{{ URL('ngavig/answer/'.$new->id) }}">点击进入>></a>
                        </div>
                    </div>
                </li>
                <hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
                @endforeach
            </ul>
        </div>
        <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
            <h2 class="am-titlebar-title ">
                广告专区
            </h2>
        </div>
        <div data-am-widget="list_news" class="am-list-news am-list-news-default right-bg" data-am-scrollspy="{animation:'fade'}">
            <ul class="am-list" >
                @foreach($ad2 as $a2)
                    <li  class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                        <div class="am-u-sm-3 am-list-thumb" style="">
                            <a href="{{  $a2->url }}">
                                <img style="height: 30px;width: 30px;float: right;" src="{{ asset('image/'.$a2->pic) }}" class="face"/>
                            </a>
                        </div>

                        <div class=" am-u-sm-9 am-list-main">
                            <h3 class="am-list-item-hd"><a class="one" href="{{  $a2->url }}" title="{{ $a2->title }}">{{ $a2->title }}</a></h3>
                        </div>
                    </li>
                    <hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div data-am-widget="gotop" class="am-gotop am-gotop-fixed" >
    <a href="#top" title="回到顶部">
        <span class="am-gotop-title">回到顶部</span>
        <i class="am-gotop-icon am-icon-chevron-up"></i>
    </a>
</div>
<script type="text/javascript">
    function doNotInfo(type, content)
    {
        //示范一个公告层
        layer.open({
          type: 1
          ,title: false //不显示标题栏
          ,closeBtn: false
          ,area: '300px;'
          ,shade: 0.8
          ,resize: false
          ,btn: '我知道了'
          ,btnAlign: 'c'
          ,anim:0
          ,content: '<div style="padding: 50px; line-height: 22px; background-color: #ff9900; color: #fff; font-weight: 300;"><h2>类型：'+type+'</h2><p>公告内容</p>'+content+'</div>'
        });
    }
</script>
@if( session('user') )
<script>
    function supo()
    {
        var lid = $('option:selected').val();
        var content = $('#tw').val();
        // alert(lid);
       $.post("/ngavig/supo", {'lid':lid, 'content':content,'_token':'{{ csrf_token() }}'}, function(data){
        alert(data);
       });
    }
</script>
@else
<script>
    function supo()
    {
        alert('请先登录再发帖');
    }
</script>
@endif

@endsection
