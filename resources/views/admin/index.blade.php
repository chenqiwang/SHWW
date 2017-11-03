@extends('admin.parent.index')
@section('title', '首页')
@section('content')
            <div class="page-header-heading"><span class=" page-header-heading-icon"></span></div>
            <div class="row-content am-cf">
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
                </div>

            </div>
        </div>
          <script src="assets/js/amazeui.min.js"></script>
    <script src="assets/js/amazeui.datatables.min.js"></script>
    <script src="assets/js/dataTables.responsive.min.js"></script>
    <script src="assets/js/app.js"></script>
@endsection