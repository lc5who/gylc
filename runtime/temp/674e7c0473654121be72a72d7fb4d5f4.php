<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:30:"../template/user/add_card.html";i:1595507104;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>绑定银行卡</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=6602"/>
    
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
        <a class="goback" href="/user/person.html"><img src="/Public/mobile/img/goback.png" /></a>
        <div class="othertop-font">绑定银行卡</div>
    </div>
    <div class="header-nbsp"></div>
<!-- 银行卡 -->
    <?php if(is_array($bank) || $bank instanceof \think\Collection || $bank instanceof \think\Paginator): $i = 0; $__LIST__ = $bank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="mycard">
            <p><span class="card_name"><?php echo $vo['bankname']; ?> [储蓄卡]</span><a href="/user/del_card/id/<?php echo $vo['id']; ?>.html" style="float: right;">删除此卡</a></p>
            <!-- <p><span class="card_type">海淀支行</span></p> -->
            <p>
                <span class="card_num"><?php echo $vo['bankcard']; ?></span>
                <!-- <span class="card_num">****</span>
                <span class="card_num">****</span>
                <span class="card_num">1231</span> -->
            </p>
        </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
        <form action="/user/add_card.html" method="post" class="mycard_add">
        <h3>添加银行卡</h3>
        <div class="input_text">
            <i><img src="/Public/mobile/img/icon_card.png"></i>
            <input type="text" name="bank" id="bank" placeholder="开户银行，如：中国工商银行">
        </div>
        <div class="input_text">
            <i><img src="/Public/mobile/img/icon_card.png"></i>
            <input type="text" name="area" id="area" placeholder="开户网点，如：北京海定区支行(或开户省市)">
        </div>
        <div class="input_text">
            <i><img src="/Public/mobile/img/icon_card.png"></i>
            <input type="text" name="account" id="account" placeholder="储蓄卡号">
        </div>
        <div class="error_tips"></div>
        <p class="action">
            <input type="submit" value="提交" class="sub" />
            <input type="button" value="取消" class="sub del" />
        </p>
    </form>
    <a class="input_btn">+添加银行卡</a>
<!-- 银行卡  end-->

        <div class="mobile">
        	<span class="span_tit">注意事项：</span>
        </div>	
            <div class="mobile">
            <span class="span_tit"> 1.请勿绑定信用卡，不支持信用卡提现！<br/>2.尽量不要绑定农村信用社或农村商业银行，以免导致财务无法划款！<br/>3.请务必仔细核对您的银行卡号，确认无误后再提交。<br/>4.所添加银行卡需和实名认证必须一致，否则将无法进行提款。<br/>.注：如有疑问请及时联系在线客服或是拨打400电话咨询</span>
        </div>   
</div>
</body>
<script>
    $().ready(function(){
    	$(".input_btn").click(function(){
    		$(this).css("display","none");
    		$(".mycard_add").css("display","block");
    		$(".mycard").css("display","none");
    	});
    	$(".del").click(function(){
            $(".input_btn").css("display","block");
            $(".mycard_add").css("display","none");
            $(".mycard").css("display","block");
        });
        $(".mycard_add").submit(function(){
            var bank = $("#bank").val();
            var area = $("#area").val();
            var account = $("#account").val();
            if(bank.length < 4){
                msg("错误","请输入正确的所属银行！",1);
                return false;
            }
            if(area.length < 4){
                msg("错误","请输入正确的支行名称！",1);
                return false;
            }
            if(account.length < 6){
                msg("错误","请输入正确的银行卡号！",1);
                return false;
            }
        });
    });
</script>
</html>