@extends('admin.parent.index')

@section('title', '意见详情')
@section('content')
				<div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">意见详情</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">意见人 <span class="tpl-form-line-small-title">Complainter</span></label>
                                        <div class="am-u-sm-2">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{ $name }}" disabled>
                                        </div>
                                        <div class="am-u-sm-7"> </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">联系方式 <span class="tpl-form-line-small-title">phone</span></label>
                                        <div class="am-u-sm-2">
                                            <input type="text" value="{{ $info->phone }}" disabled>
                                        </div>
                                        <div class="am-u-sm-7"> </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">给我们的意见信息<span class="tpl-form-line-small-title">Complaint Info</span></label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" rows="10" id="user-intro" disabled>{{ $info->content }}</textarea>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <a href="{{ URL('admin/comp') }}">
                                                <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">返回意见信息列表</button>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection