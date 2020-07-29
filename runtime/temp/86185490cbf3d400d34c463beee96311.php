<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:29:"../template/mobile/wheel.html";i:1595547691;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0029)http://yy.1069.top/wheel.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>现金转不停</title>
    <link href="/Public/wheel/mui.min.css" rel="stylesheet">
    <link href="/Public/wheel/component.css" rel="stylesheet" type="text/css">
    <link href="/Public/wheel/award.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        //        document.documentElement.style.fontSize = document.documentElement.clientWidth / 1280*100 + 'px';
        function msg(content,type,url){
            $(".xxcy_text").html(content);
            $("#xxcy-main").fadeIn();
            if(type==2){
                window.location.href=url;
            }
        }
    </script>
    <link rel="stylesheet" type="text/css" href="/Public/wheel/animate.min.css">
    <script src="/Public/wheel/award.js"></script>
    <style>
        .img_2_3 {
            position: absolute;
            animation-delay: 0.25s;
            animation-duration: 1s;
            z-index: 5;
        }
    </style>
</head>
<body class="mui-ios mui-ios-11 mui-ios-11-0">
<!-------------抽奖页面-------------->
<div class="ml-main" id="ml-main">
    <img class="main_back" src="/Public/wheel/back.png">
    <img class="animated zoomIn img_2_1" src="/Public/wheel/img_1.png">
    <img class="animated bounceIn img_2_2" src="/Public/wheel/img_2.png">
    <img class="animated zoomIn img_2_3" onclick="window.location.href='/user/person.html'"  src="/Public/mobile/img/goback.png" />
    <div class="kePublic">
        <!--转盘效果开始-->
        <div style="margin:0 auto">
            <div class="banner">
                <div class="turnplate" style="background-image:url(resource/img/turnplate-bg_2.png);background-size:100% 100%;font-size:24px !important;">
                    <canvas class="item" id="wheelcanvas" width="516" height="516"></canvas>
                    <img id="tupBtn" class="pointer" src="/Public/wheel/turnplate-pointer_2.png">
                </div>
            </div>
        </div>
        <!--转盘效果结束-->
        <div class="clear"></div>
    </div>
    <img class="bottom_shadow" src="/Public/wheel/bottom_shadow.png">
    <img class="animated zoomIn kePublic_back" src="/Public/wheel/back1.png">

    <!--------------滚动中奖纪录---------------->
    <div class="record_line" id="Marquee">
        <div id="734">
            恭喜 187****0895 的用户抽中 现金8元        </div><div id="733">
            恭喜 138****1722 的用户抽中 现金8元        </div><div id="732">
            恭喜 177****6364 的用户抽中 现金8元        </div><div id="730">
            恭喜 189****3718 的用户抽中 现金8元        </div><div id="728">
            恭喜 151****6291 的用户抽中 现金8元        </div><div id="726">
            恭喜 198****2853 的用户抽中 现金8元        </div><div id="723">
            恭喜 198****2853 的用户抽中 现金8元        </div><div id="720">
            恭喜 187****6090 的用户抽中 现金8元        </div><div id="719">
            恭喜 187****6090 的用户抽中 现金8元        </div><div id="716">
            恭喜 137****6736 的用户抽中 现金8元        </div>


    </div>
    <!-------------底部声明-------------->
    <img class="rule_title" src="/Public/wheel/rule_title.png">
    <div class="rule_text">
        每次抽奖将消耗<?php echo $site['doprize']; ?>果实/次，用户抽中现金红包系统会自动添加在余额上，抽中奖品，可直接与在线客服联系获取！    </div>
</div>

<!-------------中奖弹窗页面-------------->
<div class="zj-main" id="zj-main">
    <div class="txzl">
        <div class="zj_text">
            <!--中奖啦<br>恭喜获得<span id="jiangpin"></span>一份-->
            中奖啦<br><span id="jiangpin"></span>
        </div>
        <div class="close_zj">关闭</div>
    </div>
</div>

<!-------------谢谢参与弹窗-------------->
<div class="xxcy-main" id="xxcy-main">
    <div class="xxcy">
        <div class="xxcy_text">
            很遗憾<br>没有抽中礼品
        </div>
        <div class="close_xxcy">关闭</div>
    </div>
</div>
                                
<script src="/Public/wheel/jquery-2.1.4.min.js"></script>
<script src="/Public/wheel/mui.min.js"></script>
<script src="/Public/wheel/awardRotate.js"></script>
<!--<script type="text/javascript" src="/statics/css/resource/js/main.js"></script>-->
<script type="text/javascript" src="/Public/wheel/award.js"></script>

<script>
    $(function(){
//        turnplate.restaraunts = ["奖励1元","奖励2元","奖励3元","奖励4元","奖励5元","奖励6元","奖励7元","奖励8元"];
        turnplate.colors = ["#FAEBD7","#FFFFFF","#FAEBD7","#FFFFFF","#FAEBD7","#FFFFFF","#FAEBD7","#FFFFFF"];
        turnplate.randomRate = ["0.00%", '0.00%', '0.00%', '3.00%', '30.00%', '67%'];  //小心设置按100%分配
        turnplate.restaraunts = ["1888元", "888元", "188元", "38元", "8元", "谢谢参与"];
        $("img").on("click",function(){
            return false;
        });
        document.addEventListener("WeixinJSBridgeReady",function(){
            WeixinJSBridge.call('hideOptionMenu');
        });
    });
</script>
</body></html>