<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:31:"../template/user/recommend.html";i:1595546873;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>邀请好友</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=59667" />

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
            <a class="goback" href="javascript:history.back();"><img src="/Public/mobile/img/goback.png" /></a>
            <div class="othertop-font">邀请好友</div>
        </div>
        <!-- 推荐有奖 -->
        <div class="company">
            <div class="firends_to">
                <a style="width: 100%;" id="inteCode"><img src="/Public/mobile/img/code.png" /><span
                        style="width: 2rem;">邀请二维码</span></a>
                <a style="display: none;"><img src="/Public/mobile/img/link.png" /><span>发链接</span></a>
            </div>
            <div>
                <img src="/Public/uploads/share.png" width="100%" />
                <div>
                    <h2 class="planner_h2"><span>我推荐的会员</span></h2>
                    <div class="planner_rule">
                        <table>
                            <tr>
                                <th>推广会员</th>
                                <th>注册时间</th>
                            </tr>
                            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td><?php echo $vo['username']; ?></td>
                                    <td><?php echo date('Y-m-d H:i:s',$vo['createtime']); ?></td>
                                </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>

                        </table>
                    </div>
                </div>
                <div class="cover_bg">
                    <div class="share">
                        <!--<img src="/Public/mobile/img/2_code.png">-->
                        <div id="qrcode" style="width:3.06rem;margin: auto;padding: .1rem;background-color: #fff;">
                        </div>
                        <script type="text/javascript" src="/Public/mobile/js/qrcode.js"></script>
                        <script type="text/javascript">
                            //new QRCode(document.getElementById("qrcode"), "");  // 设置要生成二维码的链接
                            var qrcode = new QRCode('qrcode', {
                                text: "<?php echo APPHOST; ?>/mobile/register/invite/<?php echo $user['username']; ?>",
                                width: '100',
                                height: '100',
                                colorDark: '#000000',
                                colorLight: '#ffffff',
                                correctLevel: QRCode.CorrectLevel.H
                            });
                        </script>
                    </div>
                </div>
            </div>
            <script>
                $().ready(function () {
                    $("#inteCode").click(function () {
                        $(".cover_bg").show();
                    });
                    $(".cover_bg").click(function () {
                        $(".cover_bg").hide();
                    });
                });
            </script>
</body>

</html>