@extends('home.public.parent')
@include('vendor.UEditor.head')  
@section('content')
                        <link rel="stylesheet" href="{{ asset('home1/css/base_html_new.combo.css') }}">
                        <link rel="stylesheet" href="{{ asset('home1/css/detail.combo.css') }}">
                     
                                <div id="bd"  style="margin-top:16px;">
                                     <div class="mod-novice-task" id="js-mod-novice-task" style="float:right">
                                                <div class="title">
                                                    <i class="icon icon-search">
                                                    </i>山海问答</div>
                                                <div class="msg">登录一下，也成为分享知识的一员
                                                    <br>首次登录可获：金币+20，经验+20</div>
                                                <a href="{{ url('login')}}">点击我去登录哟</a>

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
                                                <form>
                                                    <div>
                                                        <script id="editor" type="text/plain" style="width:100%;height:200px;">

                                                        </script>
                                                    </div>
                                                    <script type="text/javascript">
                                                        var ue = UE.getEditor('editor', {
                                                            toolbars: [
                                                                ['fullscreen', 'source', 'undo', 'redo', 'bold']
                                                            ],
                                                            autoHeightEnabled: true,
                                                            autoFloatEnabled: true,
                                                            elementPathEnabled: false
                                                        });
                                                        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');  
                                                    </script>
                                                    <button type="button" onclick="" style="float:right;width:60px;height:30px;" >提交</button>
                                                </form>
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
                                                                                <i>给力</i>

                                                                                <span>0</span>
                                                                            </a>
                                                                             <a href="javascript:;" class="approve js-approve" >
                                                                            <i>收藏</i>
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
@endsection