<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:26:"../template/user/cash.html";i:1595514002;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>提现</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=74701" />

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
    <div class="mobile">
        <div class="othertop">
            <a class="goback" href="/user/person.html"><img src="/Public/mobile/img/goback.png" /></a>
            <div class="othertop-font">提现</div>
        </div>
        <div class="header-nbsp"></div>
        <!-- 提现 -->
        <form action="/user/cash.html" method="post" id="ifr">
            <div class="blank_card">
                <label>提现银行</label><select name="bank" id="bank">
                    <option value="0">点击选择提现银行卡</option>
                    <?php if(is_array($bank) || $bank instanceof \think\Collection || $bank instanceof \think\Paginator): $i = 0; $__LIST__ = $bank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['bankname']; ?> <?php echo $vo['bankcard']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div class="blank_card">
                <p>提现金额</p>
                <label class="big">￥</label><input class="big" name="money" id="money" type="text"
                    onkeyup="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}"
                    placeholder="请输入金额" />
                <p>可提现金额 <span id="userMoney" style="color:#ff8600"><?php echo $user['money']; ?></span>元</p>
            </div>
            <div class="blank_card">
                <label>交易密码</label><input type="password" name="pwd" id="pwd" placeholder="请输入交易密码" />
            </div>
            <div class="mobile">
                <span class="span_tit">注意事项：</span>
            </div>
            <div class="mobile">
                <span class="span_tit">1.提现银行卡务必是账号实名信息本人名下，否则无法提现！<br />2.若提现失败、或提现成功超过30分钟后仍未到账等，请及时联系在线客服或是拨打400电话咨询
                </span>
            </div>
            <input type="submit" value="确认提现" class="input_btn">
        </form>
        <!-- 提现  end-->
    </div>
    <script>
        $(function () {
            //下拉银行卡
            $(".bank_xl li a").bind('click', function () {
                $('#chose_input').val($(this).attr('title'));
                $('.bank_xl').slideUp();
                $("#chose_bank").parent().find('.jt_xz img').addClass('down');
            });
            $("#chose_bank").click(function () {
                $('.bank_xl').slideDown();
                $("#chose_bank").prev().find('img').removeClass('down');
            });
            $("#ifr").submit(function () {
                $(".input_btn").attr('disabled', true);
                setTimeout("$('.input_btn').removeAttr('disabled')", 3000);
                var userMoney = $("#userMoney").text();
                var bank = $("#bank").val();
                var money = $("#money").val();
                var min = "100";
                var pwd = $("#pwd").val();
                var auth = parseInt("1");
                if (auth == 0) {
                    msg("错误", "请认证后再进行提现！", 2, "/user/certification.html");
                    return false;
                }
                if (bank == 0) {
                    msg("错误", "请选择或者添加提现银行卡！", 1);
                    return false;
                }
                if (money.length <= 0) {
                    msg("错误", "请输入提现金额！", 1);
                    return false;
                }
                if (isNaN(money)) {
                    $("#money").val("");
                    msg("错误", "请输入正确的提现金额！", 1);
                    return false;
                }
                if (parseFloat(money) < parseFloat(min)) {
                    msg("错误", "提现金额不能小于" + min + "元！", 1);
                    return false;
                }
                if (parseFloat(money) > parseFloat(userMoney)) {
                    msg("错误", "金额不能大于可提现金额！", 1);
                    return false;
                }
                if (pwd.length < 6 || pwd.length > 16) {
                    msg("错误", "请输入正确的交易密码！", 1);
                    return false;
                }
            })
        });
    </script>
</body>

</html>