<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:30:"../template/user/recharge.html";i:1595456045;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>充值</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=20658" />

    <script type="text/javascript" src="/Public/mobile/js/adaptive.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/config.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/public.js"></script>

    <script type="text/javascript">
        function msg(title, content, type, url) {
            $("#msgTitle").html(title);
            $("#msgContent").html(content);
            if (type == 1) {
                var btn =
                    '<input type="button" value="确定" onclick="$(\'#msgBox\').hide();" style="background-color: #FF8600;color:#fff;border: none;padding:5px 10px;"/>';
            } else {
                var btn =
                    '<input type="button" value="确定" onclick="window.location.href=\'' +
                    url +
                    '\'" style="background-color: #ff8600;color:#fff;border: none;padding:5px 10px;"/>';
            }
            $("#msgBtn").html(btn);
            $("#msgBox").show();
        }
    </script>
</head>

<body>
    <div id="msgBox" style="
        width: 100%;
        background-color: rgba(0, 0, 0, 0.25);
        height: 1000px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        font-size: 0.28rem;
        display: none;
      ">
        <div style="
          width: 80%;
          margin-top: 40%;
          margin-left: 10%;
          background-color: #fff;
          border-radius: 5px;
          overflow: hidden;
        ">
            <div id="msgTitle" style="padding: 10px 20px; background-color: #ff8600; color: #fff;">
                提示
            </div>
            <div id="msgContent" style="padding: 20px; line-height: 25px;">
                内容
            </div>
            <div id="msgBtn" style="
            padding: 10px 20px;
            text-align: right;
            border-top: 1px solid #eee;
          ">
                <input type="button" value="确定" style="
              background-color: #4f79bc;
              color: #fff;
              border: none;
              padding: 5px 10px;
            " />
                <input type="button" value="取消" style="
              background-color: #4f79bc;
              color: #fff;
              border: none;
              padding: 5px 10px;
            " />
            </div>
        </div>
    </div>
    <div class="mobile">
        <div class="othertop">
            <a class="goback" href="/user/person.html"><img src="/Public/mobile/img/goback.png" /></a>
            <div class="othertop-font">充值</div>
        </div>
        <div class="header-nbsp"></div>
        <!-- 充值 -->
        <form action="/user/recharge.html" method="post" id="ifr">
            <div class="blank_card">
                <p>充值金额<?php echo $site['minrecharge']; ?>元起【如通道关闭请先咨询在线客服】</p>
                <label class="big">￥</label>
                <input class="big" type="text" name="money" placeholder="请输入充值金额" id="money"
                    style="font-size: 0.52rem;" />
                <p>可用余额&nbsp;&nbsp;&nbsp;￥ <strong>30.00</strong> 元</p>
            </div>
            <div class="blank_card">
                <label style="font-weight: bold;">充值方式</label><br />
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<label style="padding-right: 0.2rem; width: auto;"><input type="radio" value="<?php echo $vo['name']; ?>" name="type" />
    <?php echo $vo['title']; ?></label>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                
                <!-- <label style="padding-right: 0.2rem; width: auto;"><input type="radio" value="alipay" name="type" />
                    支付宝</label>
                <label style="padding-right: 0.2rem; width: auto;"><input type="radio" value="bank" name="type" />
                    银行入款</label> -->

            </div>
            <div class="blank_card" id="blank">
                <label>银行卡</label><input id="chose_input" type="text" placeholder="请选择银行卡" />
                <div class="jt_xz">
                    <img class="down" src="/Public/mobile//img/jtx.png" />
                </div>
                <div id="chose_bank" class="bank_xljt1"></div>
                <ul class="bank_xl">
                    <li>
                        <a href="javascript:;" title="中国工商银行">
                            <img src="/Public/mobile/img/bank/bank_ICBC.jpg" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" title="中国农业银行">
                            <img src="/Public/mobile/img/bank/bank_ABC.jpg" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" title="中国建设银行">
                            <img src="/Public/mobile/img/bank/bank_CCB.jpg" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" title="招商银行">
                            <img src="/Public/mobile/img/bank/bank_CMB.jpg" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" title="中国银行">
                            <img src="/Public/mobile/img/bank/bank_BOC.jpg" alt="" />
                        </a>
                    </li>
                </ul>
            </div>
            <div style="
            padding: 0 0.4rem 0.4rem;
            font-size: 0.32rem;
            color: #666;
            line-height: 0.5rem;
            background-color: #efefee;
          ">
                充值方式说明：<br />1.【微信支付宝扫码】：提供小额扫码充值。<br />2.【银行入款】：仅支持手机银行或网银转账，大额充值使用，单笔5000元以上有返现。<br />3.【微信支付宝转银行】：支持手机银行、网银、微信和支付宝转账到银行，单笔1000元以上有返现。<br />注：如有疑问请联系在线客服或是拨打400热线咨询!
            </div>
            <input type="submit" value="下一步" class="input_btn" />
        </form>
        <!-- 充值  end-->
    </div>
    <script>
        $(function () {
            //下拉银行卡
            $(".bank_xl li a").bind("click", function () {
                $("#chose_input").val($(this).attr("title"));
                $(".bank_xl").slideUp();
                $("#chose_bank").parent().find(".jt_xz img").addClass("down");
            });
            $("#chose_bank").click(function () {
                $(".bank_xl").slideDown();
                $("#chose_bank").prev().find("img").removeClass("down");
            });
            $(":radio[name='style']").click(function () {
                var index = $(this).val();
                if (index == 3) {
                    //$("#blank").show();
                } else {
                    //$("#blank").hide();
                }
            });
        });
        $("#ifr").submit(function () {
            var money = parseFloat($("#money").val()).toFixed(2);
            var auth = parseInt("1");
            if (auth == 0) {
                msg("错误", "请认证后再进行充值！", 2, "/user/certification.html");
                return false;
            }
            if (isNaN(money)) {
                msg("错误", "充值金额有误！", 1);
                return false;
            }
            if (money < <?php echo $site['minrecharge']; ?>) {
                msg("错误", "最低充值金额<?php echo $site['minrecharge']; ?>元！", 1);
                return false;
            }
            var type = $("input:radio[name='type']:checked").val();
            if (type == null) {
                msg("错误", "请选择支付方式！", 1);
                return false;
            }
        });
    </script>
</body>

</html>