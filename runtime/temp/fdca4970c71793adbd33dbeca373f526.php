<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:26:"../template/user/fund.html";i:1595461817;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>资金记录</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=39138"/>
    
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
<div class="mobile">
    <div class="othertop">
        <a class="goback" href="javascript:history.back();"><img src="/Public/mobile/img/goback.png" /></a>
        <div class="othertop-font">资金明细</div>
    </div>
    <div class="header-nbsp"></div>
    <div class="record_outer">
    <ul class="user_list">
        <li><a href="/user/record_game.html"><img src="/Public/mobile/img/user_invest.png">果实抽奖明细</a></li>
        <li><a href="/user/record_fund.html"><img src="/Public/mobile/img/user_inter.png">充值提现明细</a></li>
        <li><a href="/user/record_income.html"><img src="/Public/mobile/img/user_rech.png">投资收益明细</a></li>		<li><a href="/user/record_credit.html"><img src="/Public/mobile/img/user_credit.png">果实变动明细</a></li>
		<li><a href="/user/record_task.html"><img src="/Public/mobile/img/user_credit.png">任务游戏收益</a></li>
    </ul>
    <!--
    	<table>
    		<tr>
    			<th>摘要</th>
    			<th>金额</th>
                <th>时间</th>
    		</tr>
                	</table>
    	-->
    </div>
</body>
</html>