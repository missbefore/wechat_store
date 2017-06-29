<?php if (!defined('THINK_PATH')) exit();?>
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <!--state overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="f18 col_464646 bg_fff lh50 border_1_919191 bord_ra_4 pl12">
                        <form class="form-inline" role="form">
                            <div class="form-group">
                                <span  class="f14 lh30 col_464646">手机号：</span>
                                <input class="f14 w115 h30 lh30"  id="mobilephone" type="text">
                            </div>
                            <div class="form-group">
                                <span  class="f14 lh30 col_464646">地址：</span>
                                <input class="f14 w115 h30 lh30"  id="street" type="text">
                            </div>
                            <div class="form-group">
                                <span  class="f14 lh30 col_464646">内容：</span>
                                <input class="f14 w115 h30 lh30"  id="content" type="text">
                            </div>

                            <div class="form-group">
                                <span  class="f14 lh30 col_464646">申请时间：</span>
                                <input size="16" type="text" value="" id="start_time" readonly class="w115 f14 h30 lh30 form_datetime">-
                                <input size="16" type="text" value="" id="end_time" readonly class="w115 f14 h30 lh30 form_datetime">

                            </div>
                            <button type="button" class="btn bg_f14d1a col_fff" onclick="page_js(1)">搜索</button>
                        </form>

                </div>
                </div>
                <div class="col-lg-12 mt20" id="drivers">

                    <script>
                        $('.nc').mouseover(function(){
                            $(this).next().show();
                        });
                        $('.nc').next().mouseover(function(){
                            $(this).show();
                        });
                        $('.nc').mouseleave(function(){
                            $(this).next().hide();
                        });
                        $('.nc').next().mouseleave(function(){
                            $(this).hide();
                        });
                    </script>
                    <!--分页-->
                    <!--<div class="text-r pagelsit col_464646 mt100">
                        <a href="#">首页</a>
                        <a class="on" href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">下一页</a>
                        <a href="#">末页</a>
                        共460条数据，当前第<span style="color:#f25828">5</span>页&nbsp;跳至<input style="width:40px;line-height:24px;" type="text"/>页
                        <a href="#">确定</a>
                    </div>-->
                </div>
            </div>
            <!--state overview end-->
            <!-- page end-->
<script type="text/javascript">
    page_js(1);
    function page_js(page) {

        var mobilephone = $('#mobilephone').val();
        var street = $('#street').val();
        var content = $('#content').val();
        var start_time = $('#start_time').val();
        var end_time = $('#end_time').val();

        var param = {mobilephone:mobilephone,street:street,content:content,start_time:start_time,end_time:end_time,page:page};
        //console.log(param);
        $.post('/index.php/Index/ajax_page',param,function (data) {
            $("#drivers").html(data.html);
            //console.log(data.sql);
        });
    }
</script>

        </section>
    </section>