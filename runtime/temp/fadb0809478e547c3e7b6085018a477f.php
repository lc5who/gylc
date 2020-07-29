<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:29:"../template/mobile/index.html";i:1595551027;s:49:"/www/wwwroot/gylc.com/template/common/header.html";i:1595453494;s:49:"/www/wwwroot/gylc.com/template/common/footer.html";i:1595548462;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>首页</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=51244" />

    <script type="text/javascript" src="/Public/mobile/js/adaptive.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/config.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/public.js"></script>

    <script type="text/javascript">
        function msg(title, content, type, url) {
            $("#msgTitle").html(title);
            $("#msgContent").html(content);
            if (type == 1) {
                var btn = '<input type="button" value="确定" onclick="$(\'#msgBox\').hide();" style="background-color: #FF8600;color:#fff;border: none;padding:5px 10px;"/>';
            }
            else {
                var btn = '<input type="button" value="确定" onclick="window.location.href=\'' + url + '\'" style="background-color: #ff8600;color:#fff;border: none;padding:5px 10px;"/>';
            }
            $("#msgBtn").html(btn);
            $("#msgBox").show();
        }
    </script>
</head>

<body>
    <div id="msgBox"
        style="width: 100%;background-color: rgba(0,0,0,0.25);height: 1000px;position: fixed;top: 0;left: 0;z-index: 9999;font-size:.28rem;display: none;">
        <div
            style="width: 80%;margin-top: 40%;margin-left: 10%;background-color: #fff;border-radius: 5px;overflow: hidden;">
            <div id="msgTitle" style="padding:10px 20px;background-color: #ff8600;color:#fff;">
                提示
            </div>
            <div id="msgContent" style="padding:20px;line-height: 25px;">
                内容
            </div>
            <div id="msgBtn" style="padding: 10px 20px;text-align: right;border-top: 1px solid #eee;">
                <input type="button" value="确定"
                    style="background-color: #4f79bc;color:#fff;border: none;padding:5px 10px;" />
                <input type="button" value="取消"
                    style="background-color: #4f79bc;color:#fff;border: none;padding:5px 10px;" />
            </div>
        </div>
    </div>
<!-- <style>
    .processingbar {
        text-align: center;
        margin: 14px 28px 0 0;
        position: relative;
        width: 110px;
    }

    .processingbar font {
        color: #0088cc;
        display: block;
        width: 110px;
        height: 110px;
        line-height: 110px;
        font-size: 22px;
        font-weight: bold;
        text-align: center;
        position: absolute;
        left: 0;
        top: 0;
        margin: 0px 0 0 0px;
    }
</style> -->
<div class="mobile">
    
        <div class="header">
            <img src="/Public/uploads/logo.png" />
            <a href="/user/person.html"></a>
        </div>
        <div class="header-nbsp"></div>
        <!--banner-->
        <div class="indexbanner">
            <div class="slide_01" id="slide_01">
                <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="mod_01"><a href="<?php echo $vo['url']; ?>"><img src="<?php echo $vo['image']; ?>"></a></div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <!-- <div class="mod_01"><a href="/about/details/id/2.html"><img
                            src="/Public/uploads/slide/20200705224556.png"></a></div>
                <div class="mod_01"><a href="/about/details/id/10.html"><img
                            src="/Public/uploads/slide/20200501020222.png"></a></div>
                <div class="mod_01"><a href=""><img src="/Public/uploads/slide/20200229182314.png"></a></div>
                <div class="mod_01"><a href=""><img src="/Public/uploads/slide/20200229180917.png"></a></div> -->
            </div>
            <div class="dotModule_new">
                <div id="slide_01_dot"></div>
            </div>
        </div>
        <script type="text/javascript" src="/Public/mobile/js/srcoll.js"></script>
        <script type="text/javascript">
            //轮播图
            $('.mod_01').css('width', document.body.offsetWidth);
            if (document.getElementById("slide_01")) {
                var slide_01 = new ScrollPic();
                slide_01.scrollContId = "slide_01"; //内容容器ID
                slide_01.dotListId = "slide_01_dot";//点列表ID
                slide_01.dotOnClassName = "selected";
                slide_01.frameWidth = document.body.offsetWidth;
                slide_01.pageWidth = document.body.offsetWidth;
                slide_01.upright = false;
                slide_01.speed = 10;
                slide_01.space = 30;
                slide_01.initialize(); //初始化
            }
        </script>
        <!--end banner-->
        <div class="indexnav" style="height: 2.8rem;">
            <a href="/about/details/id/2.html"><img src="/Public/mobile/img/nav2.png" />
                <font>活动公告</font>
            </a>
            <a href="/mobile/calculator.html"><img src="/Public/mobile/img/calculator.png" />
                <font>计算收益</font>
            </a>
            <a href="/user/recharge.html"><img src="/Public/mobile/img/recharge.png" />
                <font>我要充值</font>
            </a>
            <a href="/user/cash.html"><img src="/Public/mobile/img/cash.png" />
                <font>我要提现</font>
            </a>
            <a href="/about/details/id/1.html.html"><img src="/Public/mobile/img/nav4.png" />
                <font>种树攻略</font>
            </a>
            <a href="/mobile/wheel.html"><img src="/Public/mobile/img/dzpzz1.png" />
                <font>果实抽奖</font>
            </a>
            <a href="/mobile/box1"><img src="/Public/mobile/img/index-hlf-icon8.png" />
                <font>果实兑换</font>
            </a>
            <a href="/user/recommend.html"><img src="/Public/mobile/img/link.png" />
                <font>邀请好友</font>
            </a>
        </div>
        <div class="marquee_outer">
            <img src="/Public/mobile/img/notice.png" />
            <div class="marquee_txt">
                <marquee scrollamount="3">
                    <a><?php echo $site['notice']; ?></a>
                </marquee>
            </div>
        </div>
        
        <!-- 投资项目 -->
        <?php if(is_array($item) || $item instanceof \think\Collection || $item instanceof \think\Paginator): $i = 0; $__LIST__ = $item;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<div class="pro_box">
    <a href="/mobile/details/id/<?php echo $vo['id']; ?>.html">
        <div class="item_list">

            <h2><?php echo $vo['title']; ?></h2>
            <img src="/Public/uploads/item/20200717225849.png">
            <dl>
                <dt class="left">
                    <p><strong><?php echo $vo['day']; ?></strong>天</p>
                    <p>项目周期</p>
                </dt>
                <dt class="right">
                    <p>收益分红：<strong><?php echo round($vo['rate']*$vo['day']*$vo['min']/100,2); ?></strong>元</p>
                    <p>起投金额：<strong><?php echo $vo['min']; ?></strong>元</p>
                    <!-- 进度条 -->
                    
                    <div class="circle">
                        
                        
                        <?php if($vo['percent'] < 51): ?>
                            <div class="circle_left" >
                                <div class="clip_left"></div>
                            </div>
                            <div class="circle_right" style="transform:rotate(<?php echo $vo['percent']*3.6; ?>deg);">
                                <div class="clip_right"></div>
                            </div>
                            <?php else: ?>
                            <div class="circle_left" style="transform:rotate(<?php echo $vo['percent']*3.6-50*3.6; ?>deg);">
                                <div class="clip_left"></div>
                            </div>
                            <div class="circle_right" style="background-color: #fd5b35;">
                                <div class="clip_right"></div>
                            </div>
                        <?php endif; ?>
                        
                        <div class="mask">
                            <span><?php echo $vo['percent']; ?></span>%
                        </div>
                    </div>
                </dt>
            </dl>
            <div style="clear: both;"></div>
            <p class="pro_det">
                <span>项目规模：<?php echo $vo['total']; ?>万元</span>
                <span><?php echo $vo['typedata']; ?></span>
            </p>
            <p class="txt"></p>
        </div>
    </a>
</div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      

        <div class="contact">
            <span class="tel">服务热线：<a href="tel:400-113-5366"><strong>400-113-5366</strong></a></span>
        </div>
        <div
            style="width:100%;padding:0 0 0 0.2rem;font-weight: bold;font-size: .3rem;line-height:0.8rem;font-size: .28rem;border-bottom: 1px solid #ccc;">
            在线客服QQ：<span style="color: red;">246555999</span></div>
        <div class="footer">
            <div class="zhenjian">
                <!--认证代码 start-->
                <a href="javascript:;">
                    <img src="/Public/pc/img/auth_aqwz.png" title="安全网站" />
                </a>
                <a href="javascript:;">
                    <img src="/Public/pc/img/auth_gwyz.png" title="官网验证" />
                </a>
                <a href="javascript:;">
                    <img src="/Public/pc/img/auth_hyyz.png" title="行业验证" />
                </a>
                <a href="javascript:;">
                    <img src="/Public/pc/img/auth_smyz.png" title="实名验证" />
                </a>
                <a href="javascript:;">
                    <img src="/Public/pc/img/auth_sdxy.png" title="水滴信用" />
                </a>
                <a href="javascript:;">
                    <img src="/Public/pc/img/auth_hyrz.png" title="行业验证" />
                </a>
                <!--认证代码 end-->
            </div>
        </div>
        <!--
    <div class="appdown" style="width: 7.5rem;height: 1rem;background-color: rgba(0, 0, 0, 0.5);position: fixed;bottom: 1rem;">
            <div style="width: 1rem;float:left;height: 1rem;margin: 0 0.2rem;">
                <img src="/Public/uploads/mlogo2.png" width="100%"/>
            </div>
            <div style="width: 3rem;float: left;left: 1rem;color: #fff;line-height: 0.4rem;margin: 0.1rem 0;font-size: 0.28rem;">
                森态园林<br/>
                您身边的理财专家
            </div>
            <div style="width: 1rem;float:right;height: 1rem;">
                <a href="javascript:;" onclick="$('.appdown').hide();" style="display: block;width:1rem;font-size:0.5rem;cursor: pointer;color:#fff;line-height: 1rem;text-align: center;">×</a>
            </div>
            <div style="width: 2rem;height: 1rem;float: right;">
                <a href="http://gsxyt2018.com/sp/appdown/" style="display:block;width:1.6rem;height: 0.6rem;margin: 0.2rem .2rem;line-height:0.6rem;text-align:center;border-radius:0.1rem;background-color: #FD5A21;color:#fff;font-size: 0.28rem;">手机客户端</a>
            </div>
        </div>    -->
        <!--cc-->
        <!-- 底部样式 -->
        <?php if($user == 'NULL'): ?>
<div class="header-nbsp"></div>
<div class="footer_nav">

    <script type="text/javascript">
        $(function () {
            var nav = "index";
            if (nav == "box") {
                $(".footer_nav span").eq(0).addClass("active");
                $(".footer_nav img").eq(0).attr("src", "/Public/mobile/img/home_blue.png");
                $(".footer_nav img").eq(2).addClass("min");
            }
            if (nav == "indexnew") {
                $(".footer_nav img").eq(2).addClass("min");
            }
            if (nav == "about") {
                $(".footer_nav span").eq(1).addClass("active");
                $(".footer_nav img").eq(1).attr("src", "/Public/mobile/img/invest_blue.png");
                $(".footer_nav img").eq(2).addClass("min");
            }
            if (nav == "user") {
                $(".footer_nav span").eq(3).addClass("active");
                $(".footer_nav img").eq(3).attr("src", "/Public/mobile/img/user_blue.png");
                $(".footer_nav img").eq(2).addClass("min");
            }
            if (nav == "index") {
                $(".footer_nav span").eq(1).addClass("active");
                $(".footer_nav img").eq(1).attr("src", "/Public/mobile/img/about_blue.png");
            }

        })
    </script>
    <a href="/mobile/box.html">
        <img src="/Public/mobile/img/home.png">
        <span>首页</span>
    </a>
    <a href="/mobile/qiandaonew.html">
        <img src="/Public/mobile/img/invest.png">
        <span class="">果园</span>
    </a>
    <a href="">
        <img src="/Public/index_files/logo.png">
        <span class=""></span>
    </a>
    <a href="/user/person.html">
        <img src="/Public/mobile/img/user.png">
        <span>会员中心</span>
    </a>
    <a href="<?php echo $site['kefu']; ?>">
        <img src="/Public/mobile/img/kefu.png">
        <span class="">在线帮助</span>
    </a>



</div>
<?php endif; if($user != 'NULL'): ?>
<div class="header-nbsp"></div>
<div class="footer_nav">

    <a href="/mobile/box.html">
        <img src="/Public/mobile/img/home.png">
        <span>首页</span>
    </a>
    <a href="/mobile/index.html">
        <img src="/Public/mobile/img/touzhi2.png">
        <span class="">优选项目</span>
    </a>
    <a href="/user/person.html">
        <img src="/Public/mobile/img/888.png">
        <span>会员中心</span>
    </a>
    <a href="/about/index.html">
        <img src="/Public/mobile/img/about.png">
        <span class="">新手指引</span>
    </a>
    <a href="<?php echo $site['kefu']; ?>">
        <img src="/Public/mobile/img/kefu.png">
        <span class="">在线帮助</span>
    </a>
    <script type="text/javascript">
        $(function () {
            var nav = "index";
            if (nav == "box") {
                $(".footer_nav span").eq(0).addClass("active");
                $(".footer_nav img").eq(0).attr("src", "/Public/mobile/img/home_blue.png");
            }
            if (nav == "index") {
                $(".footer_nav span").eq(1).addClass("active");
                $(".footer_nav img").eq(1).attr("src", "/Public/mobile/img/touzhi1.png");
            }
            if (nav == "user") {
                $(".footer_nav span").eq(2).addClass("active");
                $(".footer_nav img").eq(2).attr("src", "/Public/mobile/img/8888.png");
            }
            if (nav == "about") {
                $(".footer_nav span").eq(3).addClass("active");
                $(".footer_nav img").eq(3).attr("src", "/Public/mobile/img/about_blue.png");
            }
        })
    </script>




</div>
<?php endif; ?>


        <!-- 底部样式 end -->
        <!-- 回到顶部 -->
        <div class="go_top" id="go_top"><img src="/Public/mobile/img/top.png"></div>

        <!-- <script>
                (function () {
                    var c = document.createElement('script');
                    c.src = '//kefu.ziyun.com.cn/vclient/?webid=153214&wc=54446f';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(c, s);
                })();
        </script>
        <script type="text/javascript" src="https://js.users.51.la/20172683.js"></script> -->

    </div>
</body>

</html>