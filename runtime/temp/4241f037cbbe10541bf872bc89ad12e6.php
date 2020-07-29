<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:31:"../template/mobile/details.html";i:1595523816;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>标详情</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=10481"/>
    
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
<style>
    body, html {
        font-family: Helvetica, Arial;
        font-size: .24rem;
        color: #424242;
        background: #fff;
    }
    .othertop {
        width: 7.5rem;
        height: .8rem;
        background: #FF8600;
        position: fixed;
        z-index: 2000;
        text-align: center;
        line-height: .8rem;
        font-size: .32rem;
        color: #fff;
    }
    .invest_btn {
        position: fixed;
        z-index: 2000;
        bottom: 0;
        width: 100%;
        height: 1rem;
        background: #fff;
        border-top: 1px solid #ddd;
    }
    .invest_btn a {
        background: linear-gradient(-269deg, #FF9906 0%, #FFC606 94%);
        display: block;
        width: 100%;
        height: 1rem;
        margin:  auto;
        /*background: #3582b3;*/
        color: #fff;
        font-size: .4rem;
        text-align: center;
        line-height: 1rem;
        border-radius: 0px;
    }
    .product_banner{ width:100%; height:4.8rem; background:url(/Public/detail/product_banner.png) no-repeat; background-size: 100% 100%; position:relative;margin-top:-0.2rem; }
    .product_banner .title_text {vertical-align:middle; text-align:center; font-size:.34rem; color:#fff; padding-top:.24rem;line-height: .34rem }
    .product_banner .cash { display:block; width:100%; text-align:center; font-size:.8rem; color:#FCFCFC; }
    .product_banner .tip_text { text-align:center; color:#fff; font-size:.28rem; padding-bottom:.12rem; }
    .product_banner .cash span { font-size:.48rem; }
    .product_banner .tip { font-size:.28rem; color:#FFF8E9; width:1.6rem; height:.44rem; line-height:.44rem; border:1px solid #FFD279; display:block; margin:0 auto; text-align:center; border-radius:.04rem; }
    .product_banner .list { width:100%; background:#FF8600; position:absolute; left:0; bottom:0; padding:.12rem 0; }
    .product_banner .list li { float:left; text-align:center; position:relative; }
    .product_banner .list .li1 { width:40%; }
    .product_banner .list .li2 { width:20%; }
    .product_banner .list .li3 { width:40%; }
    .product_banner .list .li4 { width:50%; }
    .product_banner .list .li5 { width:50%; }
    .product_banner .list strong { font-size:.28rem; color:#fff; }
    .product_banner .list p { font-size:.28rem; color:#fff; opacity:.8; padding-top:.08rem; }
    .product_banner .list li i { width:0; height:.9rem; border-right:1px solid #FFC043; position:absolute; right:0; top: 0; }
    .title.novice_title { width:100%; }
    .title.novice_title h3 { text-indent:.30rem; font-weight:bold; }

    .introduce_list { width:100%; display:-webkit-flew; display:flex; padding:.1.2rem 0; }
    .introduce_list li { -webkit-flew:1; flex:1; width:25%; }
    .introduce_list li img {height: .8rem; display:block; margin:0 auto; }
    .introduce_list li p{ text-align:center;}
    .introduce_list li .p01{color: #3B424C;font-size: 0.28rem;margin-top: 0.22rem;line-height: 0.4rem;margin-bottom: 0.06rem;}
    .introduce_list li .p02{font-size: 0.24rem;color: #9EA0A5;line-height: 0.34rem;}
    .tab { width:100%; }
    .tab .tab_btn { width:100%; display:-webkit-flew; display:flex; height:1rem; border-bottom:1px solid #EBECED;}
    .tab .tab_btn li { -webkit-flew:1; flex:1; width:50%; text-align:center; font-size:.34rem; color:#9EA0A5; height:1rem; line-height:1rem; position:relative; }
    .tab .tab_btn li span { font-size:.28rem; }
    .tab .tab_btn li.on { color:#3B424C; font-weight:bold; }
    .tab .tab_btn li.on i { width:.46rem; height:.06rem; background:#FF9906; position:absolute; bottom:0; left:50%; margin-left:-.22rem; }



    .progress_bar{ width:100%; height:.4rem; margin:0 auto; margin-top:.38rem; font-size:.32rem;}
    .progress_bar span{ width:100%; height:.20rem; border-radius:.06rem; background:#FFFF99; float:left; margin-bottom: .16rem;}
    .progress_bar em{ display:block; width:30%; height:.20rem; border-radius:.06rem; background:#FF6600; float:left;}
    .progress_bar h5:nth-child(2){ float:left;}
    .progress_bar h5:nth-child(3){ float:right;}
    /* 详情 */
    .novice_box { padding-bottom:.24rem; }
    .line {
        width: 100%;
        height: .1rem;
        background: #f5f5f5;
        overflow: hidden;
    }
    .details { width:100%; padding-top:.01rem; }
    .details table { width:100%; }
    .details table tr {}
    .details table tr.gray { background:#FCFCFC; border:1px solid #F5F5F5; }
    .details table td { padding:.12rem 0; }
    .details table .detail_name { width:22%; text-align:right; font-size:.28rem; color:#9EA0A5; }
    .details table td p { padding-left:.28rem; width:90%; line-height:.4rem; font-size:.28rem; color:#5B6067; }
    .details table td i{
        color: red;
    }
    .profit_box { width:94%; margin:0 auto; padding:.4rem 0; }
    .profit_box img { width:100%; max-width:100%; }
    .data p {
        padding-left: .32rem;
        width: 90%;
        line-height: .4rem;
        font-size: .28rem;
        color: #5B6067;
    }
</style>
<div class="mobile">
    <div class="othertop">
        <a class="goback" href="javascript:history.back();"><img src="/Public/mobile/img/goback.png" /></a>
        <div class="othertop-font">项目详情</div>
    </div>
    <div class="header-nbsp"></div>
    <!-- 详情 -->

    <div class="product_banner ">

        <p class="title_text"><img style="vertical-align:middle" src="/Public/detail/baox3.png">&nbsp;<?php echo $item['title']; ?></p>

        <strong class="cash"><i><?php echo $item['rate']; ?></i><span>%</span></strong>
        <p class="tip_text"></p><i class="tip">日化收益</i>

        <div class="progress_bar">
         <span class="progressBar">
             <em class="bar" style="width: <?php echo $item['percent']; ?>%;"></em>
            </span>
            <h5><font color="#FFFFFF">项目进度<i class="percent"><?php echo $item['percent']; ?>%</i></font></h5>
            <h5><font color="#FFFFFF">剩余可投金额<?php echo $item['total']*10000-$item['total']*$item['percent']/100*10000; ?>元</font></h5>
        </div>
        <br>
        <ul class="list">
            <li class="li2">
            	<p>期限</p>
                <strong><?php echo $item['day']; ?>天</strong>
            </li>
            <li class="li2">
            	<p>起投金额</p>
                <strong><?php echo round($item['min'],0); ?>元</strong>
            <li class="li2">
            	<p>果实</p>
                <strong><?php echo $item['zsgs']; ?>倍</strong>
            <li class="li2">
            	<p>成长值</p>
                <strong><?php echo $item['zsczz']; ?>倍</strong>    
            </li> <li class="li2">
                <p>项目规模</p>	
                <strong><?php echo round($item['total'],0); ?>万元</strong>
        </li>
        </ul>
    </div>

    <div class="line"></div>
    <div class="details">
        <div>
            <table>
                <tbody><tr class="gray">
                    <td class="detail_name">还款方式</td>
                    <td><p><font color="#FF6600"><?php echo $item['typedata']; ?></font></p></td>
                </tr>
                <tr>
                    <td class="detail_name">担保机构</td>
                    <td><p><font color="#FF6600"><?php echo $item['guarantee']; ?></font></p></td>
                </tr>
                <tr class="gray">
                    <td class="detail_name">安全保障</td>
                    <td><p><img src="/Public/detail/baox.png" width="24">&nbsp;<img src="/Public/detail/baox1.png" width="24">&nbsp;<img src="/Public/detail/baox2.png" width="24">&nbsp;</p></td>
                </tr>
                </tbody></table>
        </div>

    </div>
    <ul class="introduce_list flex">
        <li class="flex-1">
            <img src="/Public/detail/int_ico01.png">
            <p class="p01">安全保障</p>
            <p class="p02">100% 本息保障</p>
        </li>
        <li class="flex-1">
            <img src="/Public/detail/int_ico02.png">
            <p class="p01">第三方担保</p>
            <p class="p02">专业的风控团队</p>
        </li>
        <li class="flex-1">
            <img src="/Public/detail/int_ico03.png">
            <p class="p01">收益更高</p>
            <p class="p02">0.63%-9.32%</p>
        </li>
    </ul>
    <div class="line"></div>


    <div class="details_foot">
        <div class="tabs">
            <span class="">项目详情</span>
   
        </div>
        <div class="details1 details">
            <table class="table"><p>
                <tr class="gray">
                    <td class="detail_name">项目名称</td>
                    <td><p><?php echo $item['title']; ?></p></td>
                </tr>
                <tr class="gray">
                    <td class="detail_name">项目金额</td>
                    <td><p><i><?php echo $item['total']; ?>万</i>元人民币；</p></td>
                </tr>
                <tr class="gray">
                    <td class="detail_name">投资概要</td>
                    <td><p>最低起投<i><?php echo $item['min']; ?></i>元,最高上限<i><?php echo $item['max']; ?></i>元;赠送<i><?php echo $item['zsgs']; ?>倍果实</i>,赠送<i><?php echo $item['zsczz']; ?>倍成长值</i>（限投<i><?php echo $item['num']; ?></i>次）</p></td>
                </tr>
                <tr class="gray">
                    <td class="detail_name">每天分红</td>
                    <td><p>按每日<i><?php echo $item['rate']; ?>%</i>的收益<i>（保本保息）</i></p></td>
                </tr>
                <tr class="gray">
                    <td class="detail_name">项目期限</td>
                    <td><p><i><?php echo $item['day']; ?>个</i>自然日；</p></td>
                </tr>
                <tr class="gray">
                    <td class="detail_name">收益计算</td>
                    <td><p>每天分红<i><?php echo $item['rate']*$item['min']/100; ?>元</i>×<i><?php echo $item['day']; ?>天</i>=总收益<i><?php echo $item['rate']*$item['min']/100*$item['day']; ?></i>元；</p></td>
                </tr>
                <tr class="gray">
                    <td class="detail_name">还款方式</td>
                    <td><p><?php echo $item['typedata']; ?> 节假日照常收益；</p></td>
                </tr>
                <tr class="gray">
                    <td class="detail_name">结算时间</td>
                    <td><p>当天投资当天计算，在完成第一个自然日或周期结束时，系统将当日分红和产品本金一起返还到您的会员账号中；</p></td>
                </tr>
                <tr class="gray">
                    <td class="detail_name">可投金额</td>
                    <td><p>投资期间只要产品未投满，投资者均可自由投资；</p></td>
                </tr>
                <!--<tr>
                    <td>资金用途：</td>
                    <td>新手版票体验项目</td>
                </tr>-->
                <tr class="gray">
                    <td class="detail_name">安全保障</td>
                    <td><p><?php echo $item['guarantee']; ?>对平台上的每一笔投资提供<i>100%本息保障</i>，平台设立风险备用金，对本金承诺全额垫付；</p></p></td>
                </tr>
                <tr class="gray">
                    <td class="detail_name">项目概述</td>
                    <td><p>本项目筹集资金<i><?php echo $item['total']; ?>万</i>元人民币，投资本项目（按每日分红<i><?php echo $item['min']*$item['rate']/100; ?>元/天</i>）项目周期为<i><?php echo $item['day']; ?></i>个自然日，所筹集资金用于该项目直投运作，作为投资者分红固定且无任何风险，所操作一切风险都由公司与担保公司一律承担，投资者不需要承担任何风险。</p></td>
                </tr>
            </table>
            <div class="data" style="display: none;">
                <p>温馨提示：大额充值可通过网上银行，手机银行转账，转入企业托管公司账户，单笔充值可享受1%充值返现。<br>&nbsp;<br>项目名称：【新手专享项目】<br>&nbsp;<br>项目金额：2000万元人民币；<br>&nbsp;<br>项目分红：每日按1.58%收益分红；<br>&nbsp;<br>起投金额：500元/份；<br>&nbsp;<br>项目期限：3个自然日 (一个自然日为一天)；<br>&nbsp;<br>收益计算：(500元*利息1.58%*3天=总收益23.7元+本金500元=总计本息523.7元)；<br>&nbsp;<br>还款方式：按日付收益，到期还本(节假日照常收益)；</p>
                <!---->
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="profit_box">
        <img src="/Public/detail/profit.png">
    </div>
    <div class="header-nbsp"></div>
    <div class="invest_btn">
                    <a href="/mobile/form/id/<?php echo $item['id']; ?>.html">立即投资</a>    </div>
</div>
<script>
    $().ready(function(){
        var value = $(".progressNum1").text();
        var result = toPoint(value) - toPoint("<?php echo $item['percent']; ?>%");
        $(".progressNum1").css("left",toPercent(result));
    //    $(".tabs span:eq(0)").click(function(){
     //       $(this).addClass("on");
    //        $(".tabs span:eq(1)").removeClass("on");
    //        $(".details1 .table").show();
    //        $(".details1 .data").hide();
   //     });
    ////    $(".tabs span:eq(1)").click(function(){
   //         $(this).addClass("on");
   //         $(".tabs span:eq(0)").removeClass("on");
  //          $(".details1 .table").hide();
  //          $(".details1 .data").show();
  //      });
    });
</script>
</body>
</html>