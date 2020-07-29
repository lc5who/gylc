<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:28:"../template/mobile/form.html";i:1595533183;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>立即投标</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=37451" />

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
    <style>
        .gray {
            -webkit-filter: grayscale(100%);
            -moz-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            -o-filter: grayscale(100%);

            filter: grayscale(100%);

            filter: gray;
        }
    </style>
    <div class="mobile">
        <div class="othertop">
            <a class="goback" href="javascript:history.back();"><img src="/Public/mobile/img/goback.png" /></a>
            <div class="othertop-font">立即投标</div>
        </div>

        <div class="form_outer">
            <div class="form_top">
                <p>
                    <span class="span_tit">账户可用余额（元）</span>
                    <span class="span_num">￥ <?php echo $user['money']; ?>元</span>
                </p>
                <p>
                    <span class="span_tit">项目可投金额（元）</span>
                    <span class="span_num">￥ <strong id="maxNum"><?php echo $item['total']*10000-$item['total']*$item['percent']/100*10000; ?> </strong>元</span>
                </p>
            </div>
            <form action="/mobile/form.html" method="post" id="ifr">
                <input type="hidden" value="<?php echo $item['id']; ?>" name="id" />
                <!-- <input type="hidden" value="1000000" id="maxNum2" />
                <input type="hidden" value="0" id="userMoney" />
                <input type="hidden" value="30" id="userMoney2" /> -->
                <ul>
                    <li>
                        <label>起投金额</label><span>￥ <em class="start"><?php echo $item['min']; ?></em> 元</span>
                    </li>
                    <li>
                        <label>结息时间</label><span>满 <em class="time">24小时</em> 自动结息</span>
                    </li>
                    <li>
                        <label>投资金额</label><br />
                        <div class="caculate">
                            <i class="btn_reduce">&minus;</i>
                            <input type="text" name="money" id="money" value="<?php echo $item['min']; ?>">
                            <i class="btn_add">+</i>
                        </div>
                    </li>
                    <li>
                        <label></label><span class="add">最低起投 <em class="time" id="minNum"><?php echo $item['min']; ?></em> 元，加一次为 <em
                                class="time" id="addNum">100</em> 元</span>
                    </li>

                    <input type="hidden" name="vid" id="vid" value="0">

                    <li>
                        <label>支付密码</label>
                        <input type="password" placeholder="默认为登录密码" name="pwd" id="pwd" class="pwd">
                    </li>
                    <div class="mobile">
                        <span class="span_tit">注：投资金额可直接输入，数值不能小于起投金额</span>
                    </div>
                </ul>
                <input type="submit" value="立即投资" class="input_btn">
            </form>
        </div>
    </div>
    <div style="display:none">
        <div id="giftList">
            <ul style="margin:-20px">
            </ul>
        </div>
    </div>

    <script>
        var oldSelectGiftTitle = "";
        var vmoney = 0;
        function setGift(id, money, title) {
            vmoney = money;
            $("#vid").val(id);
            if (id > 0) {
                if (oldSelectGiftTitle == "") oldSelectGiftTitle = $("#selectGiftTitle").html();
                $("#selectGiftTitle").html("当前选中<em class='time'>" + title + "</em>,点击更换");
            } else {
                if (oldSelectGiftTitle != "")
                    $("#selectGiftTitle").html(oldSelectGiftTitle);
            }
            $('#msgBox').hide();
        }
        function msg1(title, content) {
            $("#msgTitle").html(title);
            $("#msgContent").html(content);
            var btn = '<input type="button" value="不使用" onclick="setGift(0,0)" style="background-color: #5bc0de;color:#fff;border: none;padding:5px 10px;"/> <input type="button" value="关闭" onclick="$(\'#msgBox\').hide();" style="background-color: #FF8600;color:#fff;border: none;padding:5px 10px;"/>';
            $("#msgBtn").html(btn);
            $("#msgBox").show();
        }
        function selectGift() {
            msg1("点击选择抵用券", $("#giftList").html());
        }
        $().ready(function () {
            var minNum = Number($("#minNum").text());
            var maxNum = Number($("#maxNum").text());
            var maxNum2 = Number($("#maxNum2").val());
            var userMoney = Number($("#userMoney").val());
            var addNum = Number($("#addNum").text());
            $(".caculate .btn_reduce").click(function () {
                var number = Number($(this).next().val());
                if (number > minNum) {
                    number = number - addNum;
                    $(this).next().val(number);
                }
            });
            $(".caculate .btn_add").click(function () {
                var number = Number($(this).prev().val());
                if (number < maxNum && number < maxNum2 && userMoney > number) {
                    number = number + addNum;
                    $(this).prev().val(number);
                }
            });
            $("#ifr").submit(function () {
                var money = $("#money").val();
                if (money > maxNum) {
                    msg("提示", "投资金额不能大于项目剩余可投金额！", 1);
                    return false;
                }
                if (money < minNum) {
                    msg("提示", "投资金额不能小于项目最低起投金额！", 1);
                    return false;
                }
                if (money > maxNum2) {
                    msg("提示", "投资金额不能大于项目最大投资金额！", 1);
                    return false;
                }
                var userMoney2 = <?php echo $user['money']; ?>;
                if (money > (userMoney2 + vmoney)) {
                    console.log(money, userMoney2,vmoney)
                    msg("提示", "余额不足！请充值后再进行投资！", 1);
                    return false;
                }
                var pwd = $("#pwd").val();
                if (pwd.length < 6 || pwd.length > 16) {
                    msg("提示", "请输入正确的交易密码！", 1);
                    return false;
                }
            });
        });
    </script>
</body>

</html>