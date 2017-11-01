@extends('admin.parent.index')

@section('title', '新增公告')
@section('content')
	<div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    @if (session('msg'))
                                <script>
                                    alert("{{ session('msg') }}");
                                </script>
                            @endif
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">广告添加</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form action="{{ URL('admin/notice') }}"  method="POST" class="am-form tpl-form-line-form">
                                    {{ csrf_field() }}
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">类型：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="type" placeholder="请输入公告类型">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">公告内容：</label>
                                        <div class="am-u-sm-9">
                                            <textarea  name="content" rows="10" id="user-intro" placeholder="请输入公告内容"></textarea>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection