@extends('admin.parent.index')
@section('title', '首页')
@section('content')
    
<div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
        
        <span class="am-input-group-btn">
    <button ></button>
  </span>
    </div>
    </div>
<div class="am-u-sm-12">
        <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
            <thead>
                <tr>
                    <th>作者</th>
                    <th>时间</th>
                    <th>内容</th>
                    <th>回复时间</th>
                    <!-- <th>lid</th> -->
                    <th>操作</th>
                </tr>
            </thead>
            @foreach ($user as $v)
                        
                <tr class="gradeX">
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->name }}</td>
                            <td>{{ $v->uid }}</td>
                            <td>{{ $v->time }}</td>
                            <td>{{ $v->lid }}</td>
                          

                        </tr>
 </div>
                @endforeach 
        <!-- more data -->
<div class="am-u-lg-12 am-cf">

<div class="am-fr">
{!! $user->render() !!}
</div>
@endsection