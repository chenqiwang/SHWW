@extends('parent.index')
@section('content')

<div class="widget-body  am-fr">
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
    </div>
    <div class="">

        <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
            <thead>
<!-- 遍历数据 -->
@foreach ($a as $v)
            
             <li class="">
                      
                <a class="sidebar-nav-sub-title">
                     {{ $v->name }}
                     </a>
                    </li>
            <li >   
                 <a class="sidebar-nav-sub-title">
                     内容: {{ $v->content }} 

                     发表时间: {{ $v->revtime }} 
                     </a>
                    </li>
                    
            <tr class="sidebar-nav-sub-title">
                        
                    </tr>
@endforeach 
        </thead>      
     </table>
    </div>
</div>

@endsection