@extends('admin.parent.index')


@section('title','用户列表')

@section('content')
       <!-- 内容区域 -->
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">用户列表</div>


                            </div>
                            @if (session('msg'))
                                <script>
                                    alert("{{ session('msg') }}");
                                </script>
                            @endif
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    
                                </div>
                                <form action="{{ URL('admin/user') }}">
                                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                            <input type="text" name="search" class="am-form-field " placeholder="请输入要查询的手机号">
                                            <span class="am-input-group-btn">
                                                <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit"></button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>昵称</th>
                                                <th>手机号</th>
                                                <th>真实姓名</th>
                                                <th>邮箱</th> 
                                                <th>设置权限</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($list as $v)
                                            <tr class="gradeX">
                                                <td>{{ $v->id }}</td>
                                                <td>{{ $v->nickname }}</td>
                                                <td>{{ $v->phone }}</td>
                                                <td>{{ $v->name }}</td>
                                                <td>{{ $v->email }}</td> 
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="{{ URL('admin/user/'.$v->id.'/edit') }}">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-gear am-icon-spin"></i> 禁止回复
                                                        </a>            
                                                        <a href="{{ URL('admin/user/'.$v->id) }}" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-archive"></i> 用户详情
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">
                                    {!! $list->fragment('user')->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    




@endsection