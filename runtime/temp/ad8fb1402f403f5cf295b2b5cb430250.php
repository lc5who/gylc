<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:30:"../template/about/details.html";i:1595452583;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>文章详情</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=46136" />

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
            <div class="othertop">
                <a class="goback" href="javascript:history.back();"><img src="/Public/mobile/img/goback.png" /></a>
                <div class="othertop-font"><?php echo $article['title']; ?></div>
            </div>
            <div class="news_detail">
                <div>
                    <?php echo $article['content']; ?>
                    <!-- <p><img src="/Public/uploads/article/20200629/1593422163612889.png" title="1593422163612889.png"
                            alt="高端黑金代理记账营销长图@凡科快图.png" /></p> -->
                </div>
            </div>

            <!--cc-->
            <!-- 底部样式 -->
            <div class="header-nbsp"></div>
            <div class="footer_nav">

                <script type="text/javascript">
                    $(function () {
                        var nav = "about";
                        if (nav == "news") {
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
                <a href="https://kefu.cckefu3.com/vclient/chat/?websiteid=145988&amp;wc=030fd6">
                    <img src="/Public/mobile/img/kefu.png">
                    <span class="">在线帮助</span>
                </a>



            </div>
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