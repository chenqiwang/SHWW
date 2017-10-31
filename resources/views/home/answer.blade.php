@extends('home.public.parent')

@section('content')
                        <link rel="stylesheet" href="{{ asset('home1/css/base_html_new.combo.css') }}">
                        <!--[if IE 6]>
                            <script src="js/fixie6.120320.js"></script>
                        <![endif]-->
                        <link rel="stylesheet" href="{{ asset('home1/css/detail.combo.css') }}">
                                <div id="bd" class="mod-detail" style="margin-top:16px;">
                                    <input type="hidden" value="别克车的质量如何？" id="js-ask-title">
                                    <div style="display:none;"></div>
                                    <!-- 面包屑导航 -->
                                    <!-- 右侧滚动新闻 -->
                                    <div style="clear:both"></div>
                                    <div class="grid clearfix">
                                        <!-- 填空回答，安仔提示 -->
                                        <div class="article " id="js-detail">
                                            <div class="mod-q js-form" ask_id="1508858411211877" style="border-bottom:0;">
                                                <div class="question_logo" style="display:none;"></div>
                                                <div class="hd">
                                                    <h2 class="title js-ask-title"><img width="80" height="80" src="{{ asset('image/'.$_GET['photo']) }}"><?= $_GET['lname'] ?></h2>
                                                    <div class="mod-user-label">
                                                        <div class="l-ask clearfix">
                                                            <div class="text" style="float:left;">
                                                                <span>
                                                                    <a target="_blank" href="/u/609910038" class="ask-author  js-ordinary-card" index="609910038"><?= $_GET['nickname'] ?>
                                                                    </a>
                                                                </span>
                                                                @foreach( $answer as $u )
                                                                @if( $_GET['pid'] == $u->id )
                                                                <i class="line"></i><span>{{ $u->score }}积分</span>
                                                                @endif
                                                                @endforeach
                                                                <!-- 分类 -->
                                                                <i class="line"></i>分类：
                                                                <span>
                                                                    <a href="/c/35"><?= $_GET['bname'] ?></a></span>
                                                                <!-- /分类 -->
                                                                <i class="line"></i>
                                                                <span>被浏览31次</span>
                                                                <i class="line"></i>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" value="imp-手机网页-14" class="js-wenda-src-moniter"></div>
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
                                                        <img text="userinfo-pic" src="{{ asset('home1/picture/t0168b1bfdd84ea2fc8.png') }}"></span>
                                                    <div class="ans-form">
                                                        <form id="editform" action="/submit/answer" method="post" type="0">
                                                            <div class="umeditor-wrap js-umeditor-wrap" style="width:565px;min-height:226px;">
                                                                <div class="js-umeditor-fullscreen">
                                                                    <div class="erro js-form-error">
                                                                        <span class="err-cnt"></span>
                                                                        <a href="javascript:;" class="close-error"></a>
                                                                    </div>
                                                                    <script id="detailUmeditor" name="content" type="text/plain" style=""></script>
                                                                </div>
                                                                <a class="fullscreen-tips js-fullscreen-tips" href="#fullscreen">
                                                                    <i class="arrow-up"></i>
                                                                    <p>"全屏" 更方便哦～</p>
                                                                </a>
                                                            </div>
                                                            <input name="ask_id" type="hidden" value="1508858411211877">
                                                            <input name="stcode" type="hidden" value="">
                                                            <input name="stime" type="hidden" value="">
                                                            <input id="ans_mid" type="hidden" name="mid">
                                                            <input type="hidden" name="ze_ans" value="0">
                                                            <input id="map_info" type="hidden" name="map_info" value="">
                                                            <script type="text/tmpl" id="js-um-uploadimg-tpl"> <span class = "add-html5-img js-add-html5-img" > <input type = "file"id = "js-html5-upload"multiple = "multiple"accept = "image/gif, image/png, image/jpg, image/jpeg"alt = "上传图片" > </span><span class="add-flash-img js-add-flash-img"><span id="js-flash-upload"></span > </span></a ></script>
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
                                                                <div class="captcha js-captcha">
                                                                    <span class="captcha-error js-captcha-error" data-empty="请输入验证码" data-wrong="验证码错误"></span>
                                                                    <input class="js-captcha-input" type="text" name="captcha" maxlength="4" autocomplete="off" placeholder="验证码">
                                                                    <img class="js-captcha-btn"></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="mod-onebox-map" class="mod-onebox-map" data-title="别克车的质量如何？">
                                                <img class="anan" src="{{ asset('home1/picture/t01bbf5f310e44b4b1a.png') }}" alt="">
                                                <div class="info clearfix">
                                                    <div class="desc">答答
                                                        <span>360问答团队最勤劳最可爱的答答</span></div>
                                                    <i>16分钟前</i>
                                                </div>
                                                <p class="content">下面是答答童鞋给您的小建议，您看靠谱吗？初来乍到，弄错了您不要生气哦(*^__^*)</p>
                                                <div class="map">
                                                    <div class="arrow">
                                                        <span>答答小贴士</span>
                                                        <i>
                                                        </i>
                                                    </div>
                                                    <div class="box"></div>
                                                </div>
                                            </div>
                                            <div class="mod-other-ans clearfix" id="hoa">
                                                <div class="answers">
                                                    <div class="hd">

                                                        <h2>全部回答 
                                                            @foreach( $answer as $s )
                                                            
                                                            <span>{{ count($s->id) }}</span>
                                                            
                                                            @endforeach
                                                        </h2>
                                                           
                                                    </div>
                                                    <div class="bd">
                                                        <ul>
                                                            @foreach( $answer as $a )
                                                            @if( $_GET['pid'] == $a->pid )
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
                                                                            <span title="采纳率越高回答质量越高">采纳率：
                                                                                <span style="margin-right:0;" class="o">{{ $a->adopt }}%</span></span>
                                                                            <span>{{ $a->score }}积分</span>
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
                                        <div id="js-aside" class="aside">
                                            <div style="display:none">$is_forced_adv:;$is_login:;is_adoption:; $is_done_novice_task:; level:</div>
                                            <div class="mod-novice-task" id="js-mod-novice-task">
                                                <div class="title">
                                                    <i class="icon icon-search">
                                                    </i>山海问答</div>
                                                <div class="msg">登录一下，也成为分享知识的一员
                                                    <br>首次登录可获：金币+20，经验+20</div>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="search_level" style="display:none">0</div></div>
            
                                    <div id="usercard_box" class="mod-usercard"></div>
                                    <style>.red-packge-wrap,.red-packge-wrap .rp-inn{width: 250px;height: 335px;position: relative;}.red-packge-wrap .rp-inn,.red-packge-wrap .rp-close{background-image: url(images/t01ef90169e955ad1bd.png);background-repeat: no-repeat;}.red-packge-wrap .rp-inn {background-position: 0 -406px}.red-packge-wrap .bg-rp-open,.red-packge-wrap .bg-rp-no-open{background-position: 0 -47px;}.red-packge-wrap .rp-texts,.red-packge-wrap .rp-no-texts{padding: 36px 0 0 0;text-align: center;display: none;}.red-packge-wrap .rp-texts1{color: #c45800;font-size: 16px;margin-bottom: 5px}.red-packge-wrap .rp-texts2{color: #f32500;font-size: 20px;line-height: 48px;height: 60px;}.red-packge-wrap .rp-no-texts .rp-texts2{font-size: 30px;font-weight: bold;}.red-packge-wrap .rp-texts2 span{font-size: 48px;font-weight: bold;vertical-align: middle;margin-right: 7px;}.red-packge-wrap .rp-texts2 i{font-style: normal;vertical-align: middle;}.red-packge-wrap .rp-texts3{color: #f5e47f;font-size: 18px;text-align: center;}.red-packge-wrap .rp-open{display: block;position: absolute;top: 162px;left: 86px;width: 78px;height: 78px;z-index: 2;}.red-packge-wrap .rp-close{display: block;position: absolute;top: 8px;right: 7px;width: 22px;height: 24px;background-position: 0px 2px;}.bg-rp-open .rp-texts{display: block;}.bg-rp-open .rp-open,.bg-rp-no-open .rp-open{display: none}.bg-rp-no-open .rp-no-texts{display: block;}.panel-redpackge .close{display: none;}.rp-texts-inn{background: #ffdc8f;background: -webkit-linear-gradient(#ffe59d, #ffcb78 94%, #f99b54 100%);background: -moz-linear-gradient(#ffe59d, #ffcb78 94%, #f99b54 100%);background: -o-linear-gradient(#ffe59d, #ffcb78 94%, #f99b54 100%);background: linear-gradient(#ffe59d, #ffcb78 94%, #f99b54 100%)}.red-packge-wrap .rp-colorful{position: absolute;width: 274px;height: 167px;background: url(images/t018e0cfb524fb1654c.png) no-repeat;top: 33px;left: -23px;opacity: 0;display: none\9;-webkit-transition:all .1s ease-in;-moz-transition:all .1s ease-in;-o-transition:all .1s ease-in;transition:all .1s ease-in;z-index: 1;}.red-packge-wrap .rp-show{opacity: 1;display: block\9;}@-webkit-keyframes uptotop{0%{transform:translateY(112px);}100%{transform:translateY(0);}}@-moz-keyframes uptotop{0%{transform:translateY(112px);}100%{transform:translateY(0);}}@-o-keyframes uptotop{0%{transform:translateY(112px);}100%{transform:translateY(0);}}@keyframes uptotop{0%{transform:translateY(112px);}100%{transform:translateY(0);}}.rp-texts-inn{overflow: hidden;height: 89px;padding: 20px 0 0 0;-webkit-animation:uptotop .5s ;-moz-animation:uptotop .5s ;-o-animation:uptotop .5s ;animation:uptotop .5s ;box-shadow: 0 10px 12px rgba(0,0,0,.3);}.rp-texts-w{overflow:hidden;margin-bottom: 53px;padding: 0 16px;}</style>
                                    
                                    
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