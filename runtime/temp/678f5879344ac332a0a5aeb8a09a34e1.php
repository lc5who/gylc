<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:28:"../template/mobile/box1.html";i:1595546778;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>兑换</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=86453" />

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

    <body style="">
        <div class="mobile">
            <div class="othertop">
                <a class="goback" href="#" onclick="window.history.go(-1);"><img
                        src="/Public/mobile/img/goback.png" /></a>
                <div class="othertop-font">兑换</div>
            </div>
            <div class="header-nbsp" style="height: .8rem;"></div>
            <div id="mobile_icon_div"
                style="position: fixed; display: block; font-family: 'Microsoft YaHei', Arial; z-index: 1000000; width: auto; height: auto;">
            </div>
            <!--引用的新闻链接-->
            <iframe style="display:block;" height="1000" marginwidth="0" marginheight="0" src=" " frameborder="0"
                width="100%" scrolling="noshade" height="1000px"></iframe>

        </div>
        <script>
            //计算高度,并设置页面
            $(function () {
                $("iframe").height($(window).height() - $(".othertop").height());
                $("iframe").attr("src", "/mobile/giftlist");
            })
            $(window).resize(function () {
                $("iframe").height($(window).height() - $(".othertop").height());
            });
        </script>
    </body>

</html>