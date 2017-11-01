@extends('admin.parent.index')
@section('title', '收藏')
@section('content')

<table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
	    <thead>
	        <tr>
	            <th>id</th>
	            <th>标题</th>
	            <th>作者</th>
	            <th>操作</th>
	        </tr>
</thead>
	 @foreach ($res as $v)
                <tr class="gradeX">
                            <td>{{ $v->id }}</td>    
                            <td>{{ $v->name }}</td>
                            <td>{{ $v->nickname }}</td>
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
                @endforeach 	

@endsection