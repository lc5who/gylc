<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:28:"../template/user/invest.html";i:1595511592;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>投资记录</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=6703" />

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
            <div class="othertop-font">投资记录</div>
        </div>
        <div class="header-nbsp"></div>
        <div class="record_outer">
            <table>
                <tr>
                    <th>项目名称</th>
                    <th>投资金额</th>
                    <th>状态</th>
                    <th>详情</th>
                    <th>合同</th>
                </tr>
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td><?php echo $vo['title']; ?></td>
                        <td><?php echo $vo['money']; ?></td>
                        <?php if($vo['status'] == 1): ?>
                            <td>已完成</td>
                            <?php else: ?>
                            <td>进行中</td>
                        <?php endif; ?>
                        <td><a href="<?php echo url('details','id='.$vo['id']); ?>" class="a1">查看</a></td>
                        <td><a href="<?php echo url('contract','id='.$vo['id']); ?>" class="a2">查看</a></td>


                    </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
    </div>
</body>

</html>