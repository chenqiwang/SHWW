@extends('admin.parent.index')

@section('title', '编辑广告')
@section('content')
				<div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">编辑广告</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">广告地址 <span class="tpl-form-line-small-title">address</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入广告链接地址">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">发布时间 <span class="tpl-form-line-small-title">Time</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field tpl-form-no-bg" placeholder="发布时间" data-am-datepicker="" readonly="">
                                            <small>发布时间为必填</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">类型 <span class="tpl-form-line-small-title">Type</span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" style="display: none;">
											  <option value="0">请选择</option>
											  <option value="1">图文类</option>
											  <option value="2">行级类</option>
											  <option value="3">标签类</option>
											</select>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">广告商 <span class="tpl-form-line-small-title">Adversiters</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="输入您的企业或个人赞助名">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">选择您的广告图 <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                    <img src="{{ asset('admin/img/a5.png') }}" alt="">
                                                </div>
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
    											<i class="am-icon-cloud-upload"></i> 添加封面图片</button>
                                                <input id="doc-form-file" type="file" multiple="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">广告图宽 <span class="tpl-form-line-small-title">Width</span></label>
                                        <div class="am-u-sm-2">
                                            <input type="text" placeholder="默认为系统设置">
                                        </div>
                                        <label class="am-u-sm-2 am-form-label">广告图高 <span class="tpl-form-line-small-title">Height</span></label>
                                        <div class="am-u-sm-2">
                                            <input type="text" placeholder="默认为系统设置">
                                        </div>
                                        <div class="am-u-sm-6">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">您的广告描述信息<span class="tpl-form-line-small-title">Describe</span></label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" rows="10" id="user-intro" placeholder="请输入文章内容"></textarea>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">修改</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection