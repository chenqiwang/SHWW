@extends('parent.index')

@section('content')
<div class="am-u-sm-12">
        <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
            <thead>
                <tr>
                    <th>问题名称</th>
                    <th>回答数</th>
                    <th>点赞数</th>
                </tr>
            </thead>
            @foreach ($res as $q)
                        
                <tr class="gradeX">
                            <td>{{ $q->name }}</td>
                            <td>{{ $q->count }}</td>
                            <td>{{ $q->thumb }}</td>
                        </tr>
                  @endforeach 
 </div>
              
@endsection