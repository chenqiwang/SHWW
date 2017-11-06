@extends('home.public.parent')
<!--banner-->
<!-- <div class="banner"> -->
    @section('content')
   <div class="category2top">
    <div class="am-g am-container userinfo">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-5 userinfo_left">
            <div class="am-g">
                <div class="am-u-md-12 am-u-lg-6 userface">
                    <img src="{{ asset('image/'.$alabel->mview) }}">
                </div>
                <div class="am-u-md-12 am-u-lg-6 userin">
                    
                    <h3>领域:{{ $alabel->name }}</h3>

                    <h3>帖子数:{{ count($problem) }}</h3>

                    <button type="button" class="am-btn am-btn-warning am-hide-lg-only" style="margin: 0 auto; margin-top: 30px">
                        <i class="am-icon-plus"></i>
                        订阅
                    </button>
                </div>
            </div>


    </div>
</div>
</div>
<div class="am-g am-container padding-none">
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-8 newshui">
        <div data-am-widget="list_news" class="am-list-news am-list-news-default ">
            <div class="am-list-news-bd">
                <ul class="am-list">
                    @foreach( $problem as $p )
                    @if( $p->status == 0 )
                    <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left" >
                        <div class="am-u-sm-5 am-list-thumb">
                        @foreach( $user as $u )
                        @if( $u->id == $p->uid )
                            <a href="/ngavig/answer/{{$p->id}}">

                                <img src="{{ asset('image/'.$u->photo) }}" height="100" width="80" alt="{{ $p->name }}"/>
                            </a>
                       
                        </div>

                        <div class=" am-u-sm-7 am-list-main">
                            <h3 class="am-list-item-hd"><a href="/ngavig/answer/{{$p->id}}">{{ $p->name }}</a></h3>


                            <div class="am-list-item-text"><?= date('Y-m-d',$p->tiem); ?></div>

                        </div>
                        @endif
                        @endforeach
                    </li>
                    @endif

                    @endforeach

                </ul>

                <ul data-am-widget="pagination" class="am-pagination am-pagination-default">

                    <li class="am-pagination-first ">
                        <a href="#" class="">第一页</a>
                    </li>

                    <li class="am-pagination-prev ">
                        <a href="#" class="">上一页</a>
                    </li>


                    <li class="">
                        <a href="#" class="">1</a>
                    </li>
                    <li >
                        <a href="#">2</a>
                    </li>
                    <li class="">
                        <a href="#" class="">3</a>
                    </li>
                    <li class="">
                        <a href="#" class="">4</a>
                    </li>
                    <li class="">
                        <a href="#" class="">5</a>
                    </li>
                    <li class="">
                        <a href="#" class="">6</a>
                    </li>
                    <li class="">
                        <a href="#" class="">7</a>
                    </li>
                    <li class="">
                        <a href="#" class="">8</a>
                    </li>
                    <li class="am-active">
                        <a href="#">9</a>
                    </li>
                    <li class="">
                        <a href="#" class="">10</a>
                    </li>
                    <li class="">
                        <a href="#" class="">11</a>
                    </li>
                    <li class="">
                        <a href="#" class="">12</a>
                    </li>
                    <li class="">
                        <a href="#" class="">13</a>
                    </li>
                    <li class="">
                        <a href="#" class="">14</a>
                    </li>
                    <li class="">
                        <a href="#" class="">15</a>
                    </li>
                    <li class="">
                        <a href="#" class="">16</a>
                    </li>


                    <li class="am-pagination-next ">
                        <a href="#" class="">下一页</a>
                    </li>

                    <li class="am-pagination-last ">
                        <a href="#" class="">最末页</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="am-u-sm-0 am-u-md-0 am-u-lg-4 padding-none am-hide-sm">
        <div class="tag">
            <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" >
                <h2 class="am-titlebar-title ">
                    热门网站
                </h2>
            </div>
            <ul>
                <li class="active"><a href="www.taobao.com">淘宝-淘出你所需要的东西</a></li>
                <li><a href="#">京东-优质的选择</a></li>
                <li><a href="#">360-你的安全必备</a></li>
                <li><a href="#">天猫-生活的必须</a></li>
                <li><a href="#">浪琴</a></li>
                <li><a href="#">劳力士</a></li>
                <li><a href="#">GUCCI</a></li>
                <li><a href="#">香奈儿</a></li>
            </ul>
            <div class="am-cf"></div>
        </div>
    </div>
        <div class="am-u-sm-0 am-u-md-0 am-u-lg-4 padding-none am-hide-sm">
        <div class="tag">
            <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" >
                <h2 class="am-titlebar-title ">
                    热门车位
                </h2>
            </div>
            <ul>
                <li class="active"><a href="#">宝马</a></li>
                <li><a href="#">奔驰</a></li>
                <li><a href="#">奥利</a></li>
                <li><a href="#">奥迪</a></li>
                <li><a href="#">法拉利</a></li>
                <li><a href="#">兰博基尼</a></li>
                <li><a href="#">迈凯伦</a></li>
                <li><a href="#">吉利</a></li>
                <li><a href="#">QQ</a></li>
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