@extends('admin.parent.index')

@section('title', '修改用户')
@section('content')
	<div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">用户添加</div>

                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form" action="{{ url('admin/user/'.$list->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">昵称 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" name="nickname" placeholder="{{ $list->nickname }}">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">年龄 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" name="age" placeholder="{{ $list->age }}">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">性别 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            @if ($list->sex == 1)
                                            <input type="text" class="tpl-form-input" id="user-name" name="sex"  placeholder="男" >
                                            @else
                                            <input type="text" class="tpl-form-input" id="user-name" name="sex"  placeholder="女" >
                                            @endif
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">真实姓名 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="name" placeholder="{{ $list->name }}" >
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">邮箱 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="email" placeholder="{{ $list->email }}" >
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">手机号 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="phone" placeholder="{{ $phone->phone }}">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">修改</button>
                                            <a href="{{ URL('admin/user') }}">
                                                <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">返回</button>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection