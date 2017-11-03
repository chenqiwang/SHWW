@extends('admin.parent.index')
@section('title', '精华帖')
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
    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
        <thead>
            <tr>
                <th>问题名称</th>
                <th>回答数</th>
                <th>点赞数</th>
            </tr>
        </thead>
<!--          <div class="page-header-heading"><span class=" page-header-heading-icon"></span></div>
         <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title am-fl">折线柱图</div>
                        <div class="widget-function am-fr">
                            <a href="javascript:;" class="am-icon-cog"></a>
                        </div>
                    </div>
                    <div class="widget-body am-fr">
                        <div style="height: 400px" id="tpl-echarts-C">

                        </div>
                    </div>
                    
                </div> -->
                      @foreach ($res as $q)
                        <tr class="gradeX">
                                    <td>{{ $q->name }}</td>
                                    <td>{{ $q->count }}</td>
                                    <td>{{ $q->thumb }}</td>
                                </tr>
                        @endforeach 

      

</div>
</table>
         {!! $res->appends('foo')->render() !!}

@endsection