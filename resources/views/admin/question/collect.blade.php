@extends('admin.parent.index')
@section('title', '收藏')
@section('content')

<!-- 搜索 -->
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
    </form>
</div>
    <!-- 搜索结束 -->

<div class="am-u-sm-12">      
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
 </div> 
    </table> 
 </thead>          
<div class="am-fr">
{!! $res->appends('foo')->render() !!}
</div>
@endsection