@extends('home.public.parent')

@section('content')
                        <link rel="stylesheet" href="{{ asset('home1/css/base_html_new.combo.css') }}">
                        <!--[if IE 6]>
                            <script src="js/fixie6.120320.js"></script>
                        <![endif]-->
                        <link rel="stylesheet" href="{{ asset('home1/css/detail.combo.css') }}">
                                <div id="bd"  style="margin-top:16px;">
                                     <div class="mod-novice-task" id="js-mod-novice-task" style="float:right">
                                                <div class="title">
                                                    <i class="icon icon-search">
                                                    </i>山海问答</div>
                                                <div class="msg">登录一下，也成为分享知识的一员
                                                    <br>首次登录可获：金币+20，经验+20</div>

                                    </div>
                                    <div class="grid clearfix">
                                        <!-- 填空回答，安仔提示 -->
                                        <div class="article " id="js-detail">
                                            <div class="mod-q js-form" ask_id="1508858411211877" style="border-bottom:0;">
                                                <div class="question_logo" style="display:none;"></div>
                                                <div class="hd">

                                                    <h2 class="title js-ask-title">
                                                        <img width="80" height="80" src="{{ asset('image/'. $user->photo) }}">{{ $problem->name }}
                                                    </h2>
                                                    
                                                    <div class="mod-user-label">
                                                        <div class="l-ask clearfix">
                                                            <div class="text" style="float:left;">
                                                               <span>{{ $user->nickname }}</span>
                                                                <span>
                                                                    <a target="_blank" href="/u/609910038" class="ask-author  js-ordinary-card" index="609910038">
                                                                    采纳率: {{ $integral->adopt }}%
                                                                    </a>
                                                                </span>
                                                                <i class="line"></i><span>{{ $user->score }}积分</span>
                                                                <!-- 分类 -->
                                                                
                                                                <span><?= date('Y-m-d',$problem->time) ?>发表</span>
                                                                <!-- /分类 -->
                                                        
                                                        </div>
                                                    </div>
                                                    <input type="hidden" value="imp-手机网页-14" class="js-wenda-src-moniter">
                                                </div>

                                                <div class="bd">
                                                    <div class="mod-added-qa js-added-area" style="">
                                                        <ul></ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mod-q-ans js-form ">
                                                <div class="top-line"></div>
                                                <!-- <a href="http://jifen.so.com" target="_blank" text='【详情页-商城文字链】点击' class="activity-link">答题中大奖啦，百万豪礼抱回家！</a> -->
                                                <div class="bd clearfix">
                                                    <span class="pic">
                                                        <img text="userinfo-pic" src=" asset('home1/picture/t0168b1bfdd84ea2fc8.png') }}"></span>
                                                    <div class="ans-form">
                                                        <form id="editform" action="/submit/answer" method="post" type="0">
                                                            <div class="umeditor-wrap js-umeditor-wrap" style="width:565px;min-height:226px;">
                                                                
                                                            </div>


                                                            <div class="editor-opt">
                                                                <label class="anonymous">
                                                                    <input name="is_hide" type="checkbox" value="1">&nbsp;
                                                                    <span class="ver-mid">匿名</span></label>
                                                            </div>
                                                            <div class="extra clearfix">
                                                                <div class="submit clearfix">
                                                                    <span class="btn btn-2">
                                                                        <button type="button" id="submit" class="js-added-submit" text="详情页回答输入框—“提交回答">提交回答</button></span>
                                                                    <div class="btn-loading js-submiting"></div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mod-other-ans clearfix" id="hoa">
                                                <div class="answers">
                                                    <div class="hd">
                                                        <h2>全部回答</h2>
                                                           
                                                    </div>
                                                    <div class="bd">
                                                        <ul>
                                                          @foreach( $answer as $a )
                                                            @if( $problem->id == $a->pid )
                                                            <li style="padding-top:17px" class="ans-item js-form" ?="" ans_id="1508858487211895" qid="148309030">
                                                                <div class="mod-user-label">
                                                                    <div class="l-ans clearfix">
                                                                        <div class="info">
                                                                            <a target="_blank" href="/u/148309030" class="pic  js-ordinary-card" index="148309030">
                                                                                <img src="{{ asset('image/'.$a->photo) }}" width="41" height="41"></a>
                                                                        </div>
                                                                        <div class="text">
                                                                            <div style="margin-bottom:2px;display:inline;">
                                                                                <span>
                                                                                    <a target="_blank" href="/u/148309030" class="ask-author  js-ordinary-card" index="148309030">{{ $a->nickname }}</a></span>
                                                                            </div>
                                                                            <span title="采纳率越高回答质量越高">
                                                                                <span style="margin-right:0;" class="o"></span></span>
                                                                            <span></span>
                                                                            <span class="time"><?= date('Y-m-d',$a->revtime) ?></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="other-ans-cnt">
                                                                    <p>{{ $a->content }}</p>
                                                                </div>
                                                                <div class="mod-added-qa js-added-area" style="">
                                                                    <ul></ul>
                                                                </div>
                                                                <div class="console clearfix">
                                                                    <div class="clearfix">
                                                                        <div class="action">
                                                                            <span class="js-operate" style="visibility: hidden;">
                                                                                <!-- <span class="line ui-line last-line"></span> -->
                                                                            </span>
                                                                            <a href="javascript:;" class="approve js-approve" data-num="0">
                                                                                <i>很给力</i>
                                                                                <span>0</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="js-form-area add-area"></div>
                                                                </div>
                                                            </li>
                                                            @endif
                                                        @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="ft"></div>
                                                </div>
                                            </div>

                                            <div class="mod-related-question" id="ask-relate">
                                                <div class="hd">
                                                    <h2>相关问题</h2>
                                                </div>
                                                <div class="bd">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <a target="_blank" href="/q/1449366482499851?src=9999" class="s0" data-cid-pre="1000204">徐州市哪家
                                                                <b>别克车</b>保养
                                                                <b>质量</b>好
                                                            </a>
                                                            <span class="s1">2015.12.06</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mod-related_search" id="js-rel-list">
                                                <div class="hd">
                                                    <h2>搜索推荐</h2></div>
                                                <div class="bd">
                                                    <ul class="clearfix js-list-item" data-abtest="b"></ul>
                                                </div>
                                            </div>
                                            <div class="mod-share  clearfix" data-con="别克车的质量如何？">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:;" title="分享到QQ空间" text="详情页QQ空间分享" class="qzone"></a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" title="分享到新浪微博" text="详情页新浪分享" class="sina"></a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" title="分享到微信" text="详情页微信分享" class="weixin"></a>
                                                        <div class="weixin-box">
                                                            <div class="box-bg"></div>
                                                            <i class="arrow"></i>
                                                            <div class="box-inner">
                                                                <a href="javascript:;" class="close">x</a>
                                                                <div class="qrcode"></div>
                                                                <span class="desc">用微信扫描二维码
                                                                    <br>分享至好友和朋友圈</span></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h4>分享到：</h4></div>
                                        </div>
                                        </div>
                                    </div> 
                                    <div id="js-aside" class="aside" style="float:right">
                                            <div style="display:none">$is_forced_adv:;$is_login:;is_adoption:; $is_done_novice_task:; level:</div>  
                                    
                                </div>

                            </div>
                               
                        <script src="{{ asset('home1/js/1141.js') }}"></script>
                        <script src="{{ asset('home1/js/jquery,require,qw.core.js') }}"></script>
                        <script src="{{ asset('home1/js/5.0.3.js') }}"></script>
                        <script>window.namespace = function(e, t) {
                                var n = e.split("."),
                                r = 0,
                                i;
                                t = t || window;
                                for (; i = n[r++];) t[i] || (t[i] = {}),
                                t = t[i];
                                return t
                            }</script>
                        <script src="{{ asset('home1/js/underscore-1.8.3.js') }}"></script>
                        <script src="{{ asset('home1/js/monitor-1.2.3.js') }}"></script>
                        <script src="{{ asset('home1/js/monitor_analytic.js') }}"></script>
                        <script src="{{ asset('home1/js/performance.js') }}"></script>
                        <script src="{{ asset('home1/js/base_html.combo.js') }}"></script>
                        <!--[if IE 6]>
                            <script>DD_belatedPNG.fix(".close")</script>
                        <![endif]-->
                        <!--[if IE 6]>
                            <script>DD_belatedPNG.fix(".close,.pro-num,.green-bar,.pro-bar,.success,.invite,.analyze")</script>
                        <![endif]-->
                        <script src="{{ asset('home1/js/22d4f3fe413740e5ad34da0a390077a9.js') }}"></script>
                        <!--[if IE 6]>
                            <script>DD_belatedPNG.fix(".mod-music-add-toolbar span")</script>
                        <![endif]-->
                        <script src="{{ asset('home1/js/detail.combo.js') }}"></script>
                        <script src="{{ asset('home1/js/61bc8925b74cf513.js') }}"></script>
                        <script>SoLog.init({
                                pro: 'wenda',
                                pid: 'detail'
                            }).log();</script>
@endsection