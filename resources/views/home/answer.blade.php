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
                                                    <br>首次登录可获：经验+20<br>登录可以回帖哦!!</div>

                                                <a href="{{ url('login')}}">点击我去登录哟</a>

                                    </div>
                                    <div class="grid clearfix">
                                        <!-- 填空回答，安仔提示 -->
                                        <div class="article " id="js-detail">
                                            <div class="mod-q js-form"  style="border-bottom:0;">
                                                <div class="question_logo" style="display:none;"></div>
                                                <div class="hd">

                                                    <h2 class="title js-ask-title">
                                                        <img width="80" style="float: left;" height="80" src="{{ asset('image/'. $user->photo) }}">{{ $problem->name }}
                                                    </h2>
                                                    
                                                    <div class="mod-user-label">
                                                        <div class="l-ask clearfix">
                                                            <div class="text" style="float:left;">
                                                               <span style="float: left;margin-right: 50px;">提问者：{{ $user->nickname }}</span>

                                                                <span>
                                                                    <a target="_blank" href="#" class="ask-author  js-ordinary-card" >
                                                                    采纳率: {{ $integral->adopt }}%
                                                                    </a>
                                                                </span>
                                                                <i class="line"></i><span>积分：{{ $user->score }}</span>
                                                                <!-- 分类 -->
                                                                <span>{{ $problem->time }}发表</span>
                                                                <!-- /分类 -->
                                                        
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bd">
                                                    <div class="mod-added-qa js-added-area" style="">
                                                        <ul></ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mod-q-ans js-form ">
                                                @if(session('user'))
                                                <form>
                                                    <div>
                                                        <textarea id="editor" style="width:100%;height:200px;">
                                                        </textarea>
                                                    </div>
                                                    <button type="button" onclick="hui({{ $problem->id }})" style="float:right;width:60px;height:30px;" >提交</button>
                                                </form>
                                                @endif
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
                                                            <li style="padding-top:17px;" class="ans-item js-form" >
                                                                <div class="mod-user-label">
                                                                    <div class="l-ans clearfix">
                                                                        <div class="info">
                                                                            <a target="_blank" href="" class="pic js-ordinary-card">
                                                                                <img src="{{ asset('image/'.$a->photo) }}" width="41" height="41"></a>
                                                                        </div>
                                                                        <div     class="text">
                                                                            <div style="margin-bottom:2px;display:inline;">
                                                                                <span>
                                                                                    <a target="_blank" class="ask-author  js-ordinary-card" index="148309030">{{ $a->nickname }}</a></span>
                                                                            </div>
                                                                            <span title="采纳率越高回答质量越高">
                                                                                <span style="margin-right:0;" class="o"></span></span>
                                                                            <span></span>
                                                                            <span class="time">{{ $a->revtime }}</span></div>
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
                                                                            </span>
                                                                            
                                                                           <a href="javascript:;" id="show{{$a->id}}" onclick="dian({{$a->id}})"><img id="thumb{{ $a->id }}" height="15" widht="15" src="{{ asset('image/give.png') }}"></a>
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

                                                </div>
                                            </div>
                                            <div class="mod-related_search" id="js-rel-list">

                                            </div>
                                        </div>
                                        </div>
                                    </div> 
                                    <div id="js-aside" class="aside" style="float:right">
                                            <div style="display:none"></div>
                                    
                                </div>

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

                                function hui(pid)
                                {
                                    var content = ue.getContentTxt();
                                    $.post("/ngavig/reply", {'content':content, 'pid':pid, '_token':'{{csrf_token()}}'}, function(data){
                                        alert(data);
                                        window.location = '';
                                    });
                                }

                            </script>
                            @if(session('user'))
                            <script>
                                 function dian(id)
                                {
                                    var thumb = document.getElementById('thumb'+id);

                                    $.get("{{ URL('/ngavig/dian') }}",{'id':id}, function(data){
                                        if(data){
                                            thumb.setAttribute('src', "{{ asset('image/give1.png') }}");
                                            thumb.setAttribute('onclick','');
                                            thumb.setAttribute('href','');
                                            return thumb;
                                        }
                                    });
                                }
                            </script>
                            @else
                            <script>
                                 function dian(id)
                                {
                                    alert('请先登录再发帖');
                                }
                            </script>
                            @endif
@endsection