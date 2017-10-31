@extends('parent.index')
@section('content')
<!-- 遍历数据 -->
@foreach ($list as $v)

                <tr class="sidebar-nav-sub-title">
                        
                    </tr>
                    <li class="sidebar-nav-link">
        <p href="javascript:;" class="sidebar-nav-sub-title">         
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
                   <li class="am-fr sidebar-nav-link">
                          发表时间: {{ $v->revtime }}
                    </li>
            </li>
        </ul>
        </li>
@endforeach 
        </thead>      
     </table>
    </div>
</div>

@endsection