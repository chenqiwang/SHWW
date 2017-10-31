@extends('admin.parent.index')

@section('title', '意见列表')
@section('content')
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">意见列表</div>
                            </div>
                            @if (session('msg'))
                                <script>

                                    alert("{{ session('msg') }}");
                                </script>
                            @endif
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                </div>
                                <form action="{{ URL('admin/comp') }}">
                                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                            <input type="text" name="search" class="am-form-field ">
                                            <span class="am-input-group-btn">
                                                <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit"></button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                                <form name='myform' action="" method='post' style='display:none'>
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>意见人</th>
                                                <th>联系方式</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list as $l) 
                                            <tr class="gradeX">
                                                <td class="am-text-middle">{{ $l->name }}</td>

                                                <td class="am-text-middle">{{ $l->phone }}</td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="{{ URL('admin/comp/'.$l->id) }}">
                                                            <i class="am-icon-pencil"></i> 意见详情
                                                        </a>
                                                        <a href="javascript:doDel({{ $l->id }})" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
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
                                    {!! $list->appends($where)->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection