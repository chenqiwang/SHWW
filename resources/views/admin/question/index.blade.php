@extends('admin.parent.index')
@section('content')
<div class="widget-body  am-fr">
    <form action="{{ URL('admin/tabulation') }}">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
            <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                <input type="text" name="search" class="am-form-field ">
                <span class="am-input-group-btn">
                <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit" ></button>
              </span>
            </div>
        </div>
    <form>
 <div class="am-u-sm-12">
        <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
            <thead>
                <tr>
                    <th>id</th>
                    <th>问题</th>
                    <th>作者</th>
                    <th>时间</th>
                    <th>问题分类</th>
                    <th>操作</th>
                </tr>
            </thead>
            @foreach ($list as $v)
                <tr class="gradeX">
                            <td>{{ $v->id }}</td>    
                            <td>{{ $v->name }}</td>
                             <td>{{ $v->uname }}</td>
                            <td>{{ $v->time }} </td>
                            <td>{{ $v->lname }} </td>

                            <td>
                                <a href="{{ URL('admin/content/'.$v->id) }}" class="btn btn-sm">
                                查看
                                </a>
                                |
                                <a href="{{ URL('admin/recycling/'.$v->id) }}" class="btn btn-sm">
                                放入回收站
                                </a>   
                            </td>

                        </tr>
 </div>
                @endforeach 

</table>
<div class="am-u-lg-12 am-cf">

<div class="am-fr">
{!! $list->appends($where)->render() !!}
</div>
@endsection