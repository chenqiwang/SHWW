@extends('home.public.parent')

@section('content')
<script>
    var countnum=5 //一共多少个图 例如6个请输入5
    $("#leftbtn").click(function(){
        var temp_href=$("#topface li:eq(0) a").attr("href");
        var temp_img=$("#topface li:eq(0) img").attr("src");
        var temp_h3=$("#topface li:eq(0) h3").html();
        var temp_p=$("#topface li:eq(0) p").html();

        for (i=0; i<countnum; i++){
            var n=i+1;
            $("#topface li:eq("+i+") a").attr('href',$("#topface li:eq("+n+") a").attr("href"));
            $("#topface li:eq("+i+") img").attr('src',$("#topface li:eq("+n+") img").attr("src"));
            $("#topface li:eq("+i+") h3").html($("#topface li:eq("+n+") h3").html());
            $("#topface li:eq("+i+") p").html($("#topface li:eq("+n+") p").html());
        };
        $("#topface li:eq("+countnum+") a").attr('href',temp_href);
        $("#topface li:eq("+countnum+") img").attr('src',temp_img);
        $("#topface li:eq("+countnum+") h3").html(temp_h3);
        $("#topface li:eq("+countnum+") p").html(temp_p);
    });
    $("#rightbtn").click(function(){
        var temp_href=$("#topface li:eq("+countnum+") a").attr("href");
        var temp_img=$("#topface li:eq("+countnum+") img").attr("src");
        var temp_h3=$("#topface li:eq("+countnum+") h3").html();
        var temp_p=$("#topface li:eq("+countnum+") p").html();

        for (i=countnum; i>0; i--){
            var n=i-1;
            $("#topface li:eq("+i+") a").attr('href',$("#topface li:eq("+n+") a").attr("href"));
            $("#topface li:eq("+i+") img").attr('src',$("#topface li:eq("+n+") img").attr("src"));
            $("#topface li:eq("+i+") h3").html($("#topface li:eq("+n+") h3").html());
            $("#topface li:eq("+i+") p").html($("#topface li:eq("+n+") p").html());
        };
        $("#topface li:eq(0) a").attr('href',temp_href);
        $("#topface li:eq(0) img").attr('src',temp_img);
        $("#topface li:eq(0) h3").html(temp_h3);
        $("#topface li:eq(0) p").html(temp_p);
    });
</script>
<div id="cattit">
    <ul class="am-avg-sm-2 am-avg-md-2 am-avg-lg-2">
        <h3><a href="#">精华帖</a></h3>
    </ul>
</div>
<hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
<div id="cattlist" class="am-container">
    <ul class="am-avg-sm-1 am-avg-md-3 am-avg-lg-4">
        <li>
            <div class="cattlist_0">
                <div class="cattlist_1">
                    <div class="am-g">

                        <div class="am-u-sm-4 am-u-md-5 am-u-lg-5 am-vertical-align">
                            <div class="am-vertical-align-middle">
                                <img src="{{ asset('image/' . rand(1,14).'.jpg') }}">
                            </div>
                        </div>
                        <div class="am-u-sm-8 am-u-md-7 am-u-lg-7">

                            <h3>山边小溪</h3>
                            <h4>AmazeUI</h4>
                            <p>文章<span>9</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </li>

    </ul>
</div>

<div class="am-container" style="margin: 100px auto">
    <ul data-am-widget="pagination" class="am-pagination am-pagination-default am-text-center">

        <li class="am-pagination-first ">
            <a href="#" class="">第一页</a>
        </li>

        <li class="am-pagination-prev ">
            <a href="#" class="">上一页</a>
        </li>


        <li class="">
            <a href="#" class="">1</a>
        </li>
        <li >
            <a href="#">2</a>
        </li>
        <li class="">
            <a href="#" class="">3</a>
        </li>
        <li class="">
            <a href="#" class="">4</a>
        </li>
        <li class="">
            <a href="#" class="">5</a>
        </li>
        <li class="">
            <a href="#" class="">6</a>
        </li>
        <li class="">
            <a href="#" class="">7</a>
        </li>
        <li class="">
            <a href="#" class="">8</a>
        </li>
        <li class="am-active">
            <a href="#">9</a>
        </li>
        <li class="">
            <a href="#" class="">10</a>
        </li>
        <li class="">
            <a href="#" class="">11</a>
        </li>
        <li class="">
            <a href="#" class="">12</a>
        </li>
        <li class="">
            <a href="#" class="">13</a>
        </li>
        <li class="">
            <a href="#" class="">14</a>
        </li>
        <li class="">
            <a href="#" class="">15</a>
        </li>
        <li class="">
            <a href="#" class="">16</a>
        </li>


        <li class="am-pagination-next ">
            <a href="#" class="">下一页</a>
        </li>

        <li class="am-pagination-last ">
            <a href="#" class="">最末页</a>
        </li>
    </ul>
</div>




<div data-am-widget="gotop" class="am-gotop am-gotop-fixed" >
    <a href="#top" title="回到顶部">
        <span class="am-gotop-title">回到顶部</span>
        <i class="am-gotop-icon am-icon-chevron-up"></i>
    </a>
</div>
@endsection