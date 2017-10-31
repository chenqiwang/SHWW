@extends('admin.parent.index')
@section('content')

<div class="widget-body  am-fr">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
    </div>
<div class="">

<table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
    <thead>
        <!-- 遍历数据 -->
          <form name="delete" action="" method="post" style='display:none'>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>
            <form name="myform" action="" method="get" style='display:none'>
            </form>
@foreach ($list as $v)
          
            <tr class="sidebar-nav-sub-title">
                        
                    </tr>

        <li class="sidebar-nav-link">
        <p href="javascript:;" class="sidebar-nav-sub-title">           
               作者：{{ $v->nickname }}
               |
               {{ $v->name }}
            <span class="am-icon-chevron-down  am-margin-right-sm sidebar-nav-sub-ico"></span>
        </p>
                 
        <ul class="sidebar-nav sidebar-nav-sub">
            <li class="sidebar-nav-link">
            <p href="javascript:;">
                    <span class="sidebar-nav-link-logo">
                        内容: {{ $v->content }}
                    </span>
                </p>
            </li>
            </li>
               <li class="am-fr sidebar-nav-link">
                          发表时间: {{ $v->revtime }}
                  </li>
                    
        </ul>
        </li>
         <a href="javascript:reinstate({{ $v->id }})" class="btn btn-sm">恢复</a> |
         <a href="javascript:doDel({{ $v->id }})" class="btn btn-sm">删除</a>   

  @endforeach 

    </thead>   
</table>
</div>
{!! $list->fragment('foo')->render() !!}  
</div>
  <script type="text/javascript">

          function doDel(id)
          {
             //alert(id);
             if(confirm('是否删除')){
               var form = document.delete;
               form.action = 'recycling/'+id;
               form.submit();
             }
           
          }      
     </script>
<script>
            function reinstate(id)
        {
           //alert(id);
         if(confirm('是否恢复')){
             var form=document.myform;
             form.action = 'recycling/'+id;
             form.submit();
           }
        } 
</script> 
@endsection