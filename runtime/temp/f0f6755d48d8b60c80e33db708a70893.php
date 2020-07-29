<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:28:"../template/about/index.html";i:1595545469;s:49:"/www/wwwroot/gylc.com/template/common/footer.html";i:1595548462;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>关于我们</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=95140" />

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

    <body>
        <div class="mobile">
            <div class="othertop">更多</div>
            <h1 class="about_tit">关于我们</h1>
            <ul class="about_outer">
                <li>
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('about/details','id='.$vo['id']); ?>" id="a"><img src="/Public/mobile/img/about_notice.png"><?php echo $vo['title']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </li>
                <!-- <li>
                    <a href="/about/lists/id/11.html" id="a"><img src="/Public/mobile/img/about_notice.png">代理</a> <a
                        href="/about/lists/id/2.html" id="a"><img src="/Public/mobile/img/about_notice.png">活动公告</a> <a
                        href="/about/lists/id/4.html" id="a"><img src="/Public/mobile/img/about_company.png">公司简介</a><a
                        href="/About/default.html"><img src="/Public/mobile/img/about_safe.png">安全保障</a>
                    <a href="/about/lists/id/1.html" id="a"><img src="/Public/mobile/img/about_pay.png">种树攻略</a> <a
                        href="/about/lists/id/5.html" id="a"><img src="/Public/mobile/img/about_user.png">VIP等级说明</a> <a
                        href="/about/lists/id/7.html" id="a"><img src="/Public/mobile/img/about_company.png">公司资质</a> <a
                        href="/about/lists/id/8.html" id="a"><img src="/Public/mobile/img/about_photo.png">常见问题</a> <a
                        href="/about/lists/id/9.html" id="a"><img src="/Public/mobile/img/about_help.png">联系我们</a> </li> -->
            </ul>
            <div class="contact">
                <span class="tel">服务热线：<a href="tel:400-113-5366"><strong>400-113-5366</strong></a></span>
                <a href="https://kefu.cckefu3.com/vclient/chat/?websiteid=145988&amp;wc=030fd6" class="kef"></a>
            </div>
            <div
                style="width:100%;padding:0 0 0 0.2rem;font-weight: bold;font-size: .3rem;line-height:0.8rem;font-size: .28rem;border-bottom: 1px solid #ccc;">
                在线客服QQ：<span style="color: red;">246555999</span></div>
            <!--cc-->
            <!-- 底部样式 -->
<?php if($user == 'NULL'): ?>
<div class="header-nbsp"></div>
<div class="footer_nav">

    <script type="text/javascript">
        $(function () {
            var nav = "about";
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
            var nav = "about";
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

            <script>
                    (function () {
                        var c = document.createElement('script');
                        c.src = '//kefu.ziyun.com.cn/vclient/?webid=153214&wc=54446f';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(c, s);
                    })();
            </script>
            <script type="text/javascript" src="https://js.users.51.la/20172683.js"></script>

        </div>
    </body>

</html>