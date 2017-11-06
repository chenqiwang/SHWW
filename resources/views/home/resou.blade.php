@extends('home.public.parent')
@section('content')

<div class="am-g am-container padding-none">
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-8 newshui">
        <div data-am-widget="list_news" class="am-list-news am-list-news-default ">
            <div class="am-list-news-bd">
                <ul class="am-list">
                    @foreach( $users as $user )
                    
                    <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left" >
                        <div class=" am-u-sm-7 am-list-main">
                            <h3 class="am-list-item-hd"><a href="/ngavig/answer/{{$user->id}}">标题:{{ $user->name }}</a></h3>
                            <div class="am-list-item-text">时间:{{ $user->time }}</div>
                        </div>
                    </li>
                    
                   @endforeach

                </ul>

                <ul data-am-widget="pagination" class="am-pagination am-pagination-default">

                   {!! $users->appends($where)->render() !!}
                </ul>
            </div>
        </div>
    </div>
    <div class="am-u-sm-0 am-u-md-0 am-u-lg-4 padding-none am-hide-sm">
        <div class="tag">
            <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" >
                <h2 class="am-titlebar-title ">
                    热门标签
                </h2>
            </div>
            <ul>
                <li class="active"><a href="#">的房间打开</a></li>
                <li><a href="#">阿斯达</a></li>
                <li><a href="#">恩恩</a></li>
                <li><a href="#">十二分</a></li>
                <li><a href="#">爱妃</a></li>
                <li><a href="#">而非</a></li>
                <li><a href="#">为非</a></li>
                <li><a href="#">二位</a></li>
                <li><a href="#">维吾尔</a></li>
                <li><a href="#">玩儿玩儿</a></li>
            </ul>
            <div class="am-cf"></div>
        </div>
    </div>
        <div class="am-u-sm-0 am-u-md-0 am-u-lg-4 padding-none am-hide-sm">
        <div class="tag">
            <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" >
                <h2 class="am-titlebar-title ">
                    热门标签
                </h2>
            </div>
            <ul>
                <li class="active"><a href="#">的房间打开</a></li>
                <li><a href="#">阿斯达</a></li>
                <li><a href="#">恩恩</a></li>
                <li><a href="#">十二分</a></li>
                <li><a href="#">爱妃</a></li>
                <li><a href="#">而非</a></li>
                <li><a href="#">为非</a></li>
                <li><a href="#">二位</a></li>
                <li><a href="#">维吾尔</a></li>
                <li><a href="#">玩儿玩儿</a></li>
            </ul>
            <div class="am-cf"></div>
        </div>
                <div class="tag">
            <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" >
                <h2 class="am-titlebar-title ">
                    热门标签
                </h2>
            </div>
            <ul>
                <li class="active"><a href="#">的房间打开</a></li>
                <li><a href="#">阿斯达</a></li>
                <li><a href="#">恩恩</a></li>
                <li><a href="#">十二分</a></li>
                <li><a href="#">爱妃</a></li>
                <li><a href="#">而非</a></li>
                <li><a href="#">为非</a></li>
                <li><a href="#">二位</a></li>
                <li><a href="#">维吾尔</a></li>
                <li><a href="#">玩儿玩儿</a></li>
            </ul>
            <div class="am-cf"></div>
        </div>
    </div>
</div>


<div data-am-widget="gotop" class="am-gotop am-gotop-fixed" >
    <a href="#top" title="回到顶部">
        <span class="am-gotop-title">回到顶部</span>
        <i class="am-gotop-icon am-icon-chevron-up"></i>
    </a>
</div>
@endsection