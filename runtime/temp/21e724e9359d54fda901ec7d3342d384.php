<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:34:"../template/mobile/qiandaonew.html";i:1595437037;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>兑换</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=21665"/>
    
    <script type="text/javascript" src="/Public/mobile/js/adaptive.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/config.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/public.js"></script>
    
    <script type="text/javascript">
        function msg(title,content,type,url){
            $("#msgTitle").html(title);
            $("#msgContent").html(content);
            if(type==1){
                var btn = '<input type="button" value="确定" onclick="$(\'#msgBox\').hide();" style="background-color: #FF8600;color:#fff;border: none;padding:5px 10px;"/>';
            }
            else{
                var btn = '<input type="button" value="确定" onclick="window.location.href=\''+url+'\'" style="background-color: #ff8600;color:#fff;border: none;padding:5px 10px;"/>';
            }
            $("#msgBtn").html(btn);
            $("#msgBox").show();
        }
    </script>
</head>
<body>
<div id="msgBox" style="width: 100%;background-color: rgba(0,0,0,0.25);height: 1000px;position: fixed;top: 0;left: 0;z-index: 9999;font-size:.28rem;display: none;">
    <div style="width: 80%;margin-top: 40%;margin-left: 10%;background-color: #fff;border-radius: 5px;overflow: hidden;">
        <div id="msgTitle" style="padding:10px 20px;background-color: #ff8600;color:#fff;">
            提示
        </div>
        <div id="msgContent" style="padding:20px;line-height: 25px;">
            内容
        </div>
        <div id="msgBtn" style="padding: 10px 20px;text-align: right;border-top: 1px solid #eee;">
            <input type="button" value="确定" style="background-color: #4f79bc;color:#fff;border: none;padding:5px 10px;"/>
            <input type="button" value="取消" style="background-color: #4f79bc;color:#fff;border: none;padding:5px 10px;"/>
        </div>
    </div>
</div> 
<body style=""> 
<div id="mobile_icon_div" style="position: fixed; display: block; font-family: 'Microsoft YaHei', Arial; z-index: 1000000; width: auto; height: auto;"></div>
<!--引用的新闻链接-->
	<iframe style="display:block;" height="1000" marginwidth="0" marginheight="0" src=" " frameborder="0" width="100%" scrolling="noshade" height="1000px"></iframe>
<div class="mobile">
<!--aa-->
<!--cc-->
<!-- 底部样式 -->
<div class="header-nbsp"></div>
<div class="footer_nav">

    <script type="text/javascript">
    $(function(){
        var nav = "about";
        if(nav == "news"){
            $(".footer_nav span").eq(0).addClass("active");
            $(".footer_nav img").eq(0).attr("src","/Public/mobile/img/home_blue.png");
            $(".footer_nav img").eq(2).addClass("min");
        }
        if(nav == "indexnew"){
        	$(".footer_nav img").eq(2).addClass("min");
        }
        if(nav == "about"){
            $(".footer_nav span").eq(1).addClass("active");
            $(".footer_nav img").eq(1).attr("src","/Public/mobile/img/invest_blue.png");
            $(".footer_nav img").eq(2).addClass("min");
        }
        if(nav == "user"){
            $(".footer_nav span").eq(3).addClass("active");
            $(".footer_nav img").eq(3).attr("src","/Public/mobile/img/user_blue.png");
           $(".footer_nav img").eq(2).addClass("min");
        }
        if(nav == "index"){
            $(".footer_nav span").eq(1).addClass("active");
            $(".footer_nav img").eq(1).attr("src","/Public/mobile/img/about_blue.png");
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



<!--bb-->
</div>
<script>
	//计算高度,并设置页面
	$(function(){
		$("iframe").height($(window).height()-$(".footer_nav").height());
		$("iframe").attr("src","/mobile/giftlist");
	})	
	$(window).resize(function(){
		$("iframe").height($(window).height()-$(".footer_nav").height());
	});
</script>
</body>
</html>