<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:27:"../template/mobile/reg.html";i:1595437645;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>注册</title>
    <link rel="stylesheet" href="/Public/mobile/css/base.css?k=23924"/>
    
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
.re-center{width:90%;margin:0 5%;}
.re-ament{margin:.4rem auto;}
.re-ament a{color:#3467b1;font-size:.24rem;text-decoration:underline;}
.shade, .shade-sp {
    width: 100%;
    position: fixed;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
    background: rgba(0,0,0,0.6);
    z-index: 999;
    display: none;
}
.agreement {
    width: 90%;
    height: auto;
    border-radius: 4px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -65%;
    margin-left: -45%;
    display: none;
    background: #fff;
    z-index: 10000;
}
.agree-title {
    font-size: .26rem;
    color: #323333;
    line-height: .7rem;
    text-align: center;
    border-bottom: 1px solid #999999;
}
.agree-word {
    font-size: .26rem;
    color: #323333;
    padding: 4%;
    line-height: .4rem;
    max-height: 400px;
    overflow-y: scroll;
}
</style>
<div class="mobile">
    <div class="othertop">
        <a class="goback" href="/mobile/login.html"><img src="/Public/mobile/img/goback.png" /></a>
        <div class="othertop-font">注册</div>
    </div>
    
    <div class="container_page">
        <div style="text-align: center;">
            <img src="/Public/uploads/mlogo2.png" width="50%" style="pointer-events:none;">
        </div>
        <div class="reg_bg">
	        <form action="/mobile/reg.html" method="post" id="ifr">
	            <div class="input_text">
                    <i><img src="/Public/mobile/img/icon_tel.png"></i>
                    <input type="text" id="phone" name="phone" placeholder="请输入手机号" maxlength="11">
                </div>
                <div class="input_text">
                    <i><img src="/Public/mobile/img/icon_pwd.png"></i>
                    <input type="password" placeholder="请设置登录密码" id="pwd" name="pwd">
                    <i class="pwd_show"><img src="/Public/mobile/img/see.png" id="pwd_show"></i>
                </div>
                <div class="input_text">
                    <i><img src="/Public/mobile/img/icon_pwd.png"></i>
                    <input type="password" placeholder="请再输入登录密码" id="pwd2" name="pwd2">
                    <i class="pwd_show"><img src="/Public/mobile/img/see.png" id="pwd_show2"></i>
                </div>
                <div class="input_text">
                    <i><img src="/Public/mobile/img/icon_code.png"></i>
                    <input type="text" id="code" name="code" placeholder="请输入图形验证码">
                    <button id="imgcode" type="button" style="font-style: italic;text-decoration:line-through">1234</button>
                </div>
                <div class="input_text">
                        <i><img src="/Public/mobile/img/icon_code.png"></i>
                        <input type="text" id="smsCode" name="smscode" placeholder="请输入短信验证码">
                        <button id="getcode" type="button" onclick="regcode(60)">发送</button>
                    </div>          
                <div class="input_text">
                    <i><img src="/Public/mobile/img/icon_person.png"></i>
                    <input type="text" name="top" placeholder="推荐人手机号（没有可不填）">
                </div>
                <input type="hidden" id="imei" name="imei" value="">
                <div class="re-center re-ament">
        			<input type="checkbox" id="cheBoxTrue" class="cycle-check-btn">
        			<label>我已经阅读并同意<a href="javascript:;" class="agreement-click">《用户协议与隐私政策》</a></label>
    			 </div>
                <div class="error_tips"></div>
                <input type="submit" class="input_btn" value="立即注册" />
                <!--<p class="p1">点击完成注册，即表示您同意<a href="">《服务协议》</a></p>-->
                <p class="p2">已有帐号？<a href="login.html">请登录</a></p>
	        </form>
	        <div class="shade" style="display: none;"></div>
	        <div class="agreement" style="display: none;">
           <h5 class="agree-title">用户协议与隐私政策</h5>
           <ul class="agree-word">
           	  <p>
	<p class="MsoNormal" align="center" style="text-align:center;">
		<b>森态园林</b><b>用户协议和隐私政策</b>
	</p>
	<p class="MsoNormal">
		<b>"</b><b>森态园林</b><b>”用户服务协议</b>
	</p>
	<p class="MsoNormal">
		<span>更新时间：</span>2019<span>年</span><span>8</span><span>月</span><span>19</span><span>日</span>
	</p>
	<p class="MsoNormal">
		<span>发布时间：</span>2019<span>年</span><span>8</span><span>月</span><span>19</span><span>日</span>
	</p>
	<p class="MsoNormal">
		审慎阅读：
	</p>
	<p class="MsoNormal">
		1.&nbsp;使用森态园林软件及服务前，请森态园林<span>软件及服务使用人</span>(<span>以下简称</span><span>"</span><span>您</span><span>")</span><span>仔细阅读并充理解《</span><span>"</span>森态园林”用户服务协议》<span>(</span><span>以下简称</span><span>"</span><span>本协议</span><span>")</span><span>，其中，</span><b>免除或者限制责任的条款、权利许可和信息使用的条款、法律适用和争议解决条款等</b><b>重</b><b>要内容将以加粗形式提示您注意，您应</b><b>重</b><b>点阅读。</b><b></b>
	</p>
	<p class="MsoNormal">
		2.&nbsp;本协议是您与江苏鑫誉投资管理有限公<span>司</span>(<span>以下简称</span><span>"</span><span>公司</span><span>"</span><span>或</span><span>"</span>森态园林")<span>之间就您使用</span>森态园林软件及相关服务所订立的协议。森态园林有权对本协议随时进行更新，更新后的协议条款一经公布即代替原来的协议条款，您应同样遵守。本协议条款更新后，如您不同意接受，则不应继续使用森态园林提供的服务。<b>本协议及</b><b>森态园林</b><b><span>已经发布及将来不时发布的各项规则</span>(<span>以下统称</span><span>"</span><span>平台规则”</span><span>)</span><span>是本协议不可分割的组成部分，与本协议具有同等法律效力。</span></b>
	</p>
	<p class="MsoNormal">
		3.&nbsp;<b>如您不具备与您行为相适应的民事行为能力，须在法定监护人陪同下阅读并决定是否接受本协议。</b>您接受本协议全部内容之后，即可注册、登录或使用森态园林<span>相关服务。您在进行注册过程中点击</span>“同意”按钮，或者您的注册、登录、使用等行为均视为对本协议全部内容的接受。<b>如您不接受本协议的全部成任何内容，应立即停止下载、安装、注册、登录、使用或者通过任何方式获取或使用</b><b>森态园林</b><b>服务。</b>如您需要使用森态园林的其他单项服务，还应该遵守与该项
	</p>
	<p class="MsoNormal">
		服务有关的服务协议或规则。
	</p>
	<p class="MsoNormal">
		一、软件使用规则
	</p>
	<p class="MsoNormal">
		1.&nbsp;您充分理解并同意：森态园林仅为用户提供信息存储服务。您有权通过您在森态园林注册的账号上传、发布或分享内容、信息、评论等或选择其他服务，但您必须为您注册账号下发生的一切行为负责，包括因您上传至森态园林的任何内容和信息、支付款项等所导致的一切不利后果。且森态园林有权要求您全额赔偿因您的行为所导致森态园林<span>遭受的全部损失，包括但不限于罚款、赔偿、诉讼</span>/<span>仲裁费用、公证费、律师费、差旅费及其他合理支出。</span><b>森态园林</b><b>对您上传的所有信息的真实性、合法性、无害性、有效性等不负任何单独或连带之保证责任。</b>
	</p>
	<p class="MsoNormal">
		2.&nbsp;为您更好的使用森态园林服务，森态园林<span>为您提供了账户注册通道</span>(森态园林<span>某些功能</span>/<span>服会要求您提供真实的身份信息进行实名注册，以充分保障您的账号安全</span><span>)</span><span>。您须确保注册信息真实、合法、有效并为此承担全部责任，</span>森态园林有权对您提交的注册信息进行审核。若您提交的信息及资料不合法、不真实、不准确或森态园林有理由认为该等信息或资料不真实、不合法、不准确，则森态园林有权拒绝为您提供全部或部分服务。您不得实施恶意注册账号、未经许可以他人名义注册、擅自使用他人姓名、肖像、商标等注册账号、盗用账号等违反法律法规、平台规则及社会道德的行为，否则，森态园林有权在未通知您的情况下，暂停或终止向该注册账号提供服务，且有权冻结、回收、注销该账号，而无需承担任何法律责任。
	</p>
	<p class="MsoNormal">
		3.&nbsp;为保证您的账号安全，请您务必妥善保管您的账号信息及密码。因您保管不当导致遭受盗号或密码丢失，由您自行承担全部责任。
	</p>
	<p class="MsoNormal">
		4.&nbsp;您的森态园林<span>账号若出现以下所述的违规情形</span>(<span>违规情形包括但不限于以下内容</span><span>)</span><span>，</span>森态园林按照本协议有权在不通知您的情况下对您的森态园林账号进行处理：
	</p>
	<p class="MsoNormal">
		(1)&nbsp;借助软件、机器注册森态园林账号，借助软件、机器登录森态园林账号；
	</p>
	<p class="MsoNormal">
		(2)&nbsp;使用非正规或非实名的手机号注册，绑定森态园林账号；
	</p>
	<p class="MsoNormal">
		(3)&nbsp;注册、填写、绑定森态园林<span>账号时使用虚假信息等行为</span>(<span>包括但不限于填写虚假的手机号</span>、盗用他人身份信息填写信息、盗取他人森态园林账号、银行账号等信息、或盗取他人森态园林<span>账号中的资产等</span>)<span>；</span>
	</p>
	<p class="MsoNormal">
		(4)&nbsp;借助软件、机器等非正规手段刷由森态园林<span>发放、提供的实物或虚拟资产、权益</span>(<span>包括但不限于元宝、现金券、红包等</span><span>)</span><span>。</span>
	</p>
	<p class="MsoNormal">
		(5)&nbsp;通过账号发送违法违规内容、广告或垃圾信息等。
	</p>
	<p class="MsoNormal">
		(6)&nbsp;利用软件、技术手段或其他方式，为套取拟资产、权益或其他利益而注册一个或多个森态园林账号、一人使用同一或多个森态园林账号，或合意他人使用同一或多个森态园林账号。
	</p>
	<p class="MsoNormal">
		5.&nbsp;在需要终止使用森态园林账号服务时，您可依据本协议及平台规则申请注销您的森态园林账号。但您知悉并确认：您仅能申请注销您本人的账号，并依照森态园林的流程进行注销；注销成功后，账号记录、功能、视讯、资产、余额及虚拟金等将被清除且无法恢复；账号注销后，您仍应对您在注销账号前且使用森态园林服务期间的行为承担相应责任。
	</p>
	<p class="MsoNormal">
		6.&nbsp;您知悉并理解，森态园林有权依据运营安排单方面决定由其关联公司或指定的第三方公司向您提供森态园林软件涉及的某项服务，且有权单方面决定将森态园林软件交由其关联公司或第三方公司进行运营、维护。
	</p>
	<p class="MsoNormal">
		7.&nbsp;公司有权对应用程序的名称、样式、功能等进行单方面变更。
	</p>
	<p class="MsoNormal">
		8.&nbsp;您使用森态园林软件及相关服务，应根据您实际使用的设备型号从森态园林或经森态园林授权的正规第三方获取本软件，您从非官方渠道下载、获取的森态园林软件，可能无法正常使用，您因此遭受的损失与森态园林无关。为优化用户体验及服务，森态园林将不定期进行软件更新、改变、开发、优化、替换等，您有权选择接受更新版本或服务，如您不接受，部分功能将受到限制或不能继续使用。
	</p>
	<p class="MsoNormal">
		9.&nbsp;您充分理解并同意：森态园林提供的服务中可能包括广告。您同意森态园林有权在森态园林软件及相关服务中展示森态园林<span>软件和</span>/<span>或第三方供应商、合作伙伴的商业广告或推广信息。</span><b>森态园林</b><b>提示您应审慎判断广告或推广信息的内容，除法律法规明确规定外，您因该广告或推广信息进行的购买、交易或因前述内容</b><b>遭</b><b>受的损害或损失，应自行承担，</b><b>森态园林</b><b>不予承担责任。</b>
	</p>
	<p class="MsoNormal">
		10.&nbsp;您的权利及义务：
	</p>
	<p class="MsoNormal">
		(1)&nbsp;您在完成申请注册手续后，仅获得森态园林账号的使用权，账号所有权归森态园林所有。您无权以任何形式赠与、借用、租用、转让或售卖森态园林账号。如森态园林发现您并非账号初始申请注册人，森态园林有权在未通知的情况下冻结、回收、注销该账号而无需向该账号使用人承担法律责任。
	</p>
	<p class="MsoNormal">
		(2)&nbsp;您应严格遵守法律法规、本协议各条款及平台规则，不得扰乱平台和互联网秩序，不得利用森态园林软件或服务侵害他人合法权益。如您违反法律法规、本协议或平台规则的任何条款，森态园林<span>有权暂停</span>/<span>终止对您提供全部或部分服务，甚至永久封禁账号，并追究您的相关责任。</span>
	</p>
	<p class="MsoNormal">
		(3)&nbsp;除非得到森态园林明示事先书面授权，您不得以任何形式对森态园林软件及相关服务进行包括但不限于改编、复制、传播、垂直搜索、镜像、交易等未经授权的访问或使用。
	</p>
	<p class="MsoNormal">
		(4)&nbsp;您不得对森态园林软件进行反向工程、反向汇编、编译或者以其他方式尝试发现本软件的源代码。
	</p>
	<p class="MsoNormal">
		(5)&nbsp;您不得利用或针对森态园林软件及相关服务进行任何危害计算机网络安全的行为，包括但不限于非法侵入他人网络、干扰他人网络正常功能、窃取网络数据、干涉破坏森态园林<span>软件系统的正常运行、使用未经许可的数据或进入未经许可的服务器</span>/<span>账号、故意传播恶意程序或病毒。若</span>森态园林有理由认为您实施了任何前述行为，森态园林有权在不进行任何事先通知的情况下终止向您提供服务，并追究相关责任，情节严重的，森态园林有权向相关部门举报。
	</p>
	<p class="MsoNormal">
		(6)&nbsp;您在使用森态园林服务过程中，若发现涉政、涉枪、涉毒、涉暴、赌博、涉黄等违法违规的内容，可以通过森态园林软件内的投诉举报通道、森态园林客服通道或邮箱sentaiyuanlin1@163.com进行举报、投诉。森态园林在收到举报、投诉后，会及时处理并反馈。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		二、&nbsp;隐私保护政策
	</p>
	<p class="MsoNormal">
		1 .&nbsp;森态园林将会釆取合理的措施保护您的个人隐私信息安全。在使用森态园林<span>软件及相关服务的过程中，您可能需要提供您的个人信息</span>(<span>包括但不限于您的姓名、电话号码、位置信息、设备信息等</span><span>)</span><span>，以便</span>森态园林向您提供更好的服务和相应的技术支持。您理解并同意，森态园林<span>有权在遵守法律法规、本协议以及《</span>"森态园林"<span>隐私政策》的前提下，收集、使用</span><span>(</span><span>含商业合作使用</span><span>)</span><span>、存储和分享您的个人信息，同时，您具有浏览、修改、删除相关个人信息以及撤回同意的权利。</span>
	</p>
	<p class="MsoNormal">
		2.&nbsp;未经您的同意，森态园林不会向森态园林以外的任何第三方披露您的个人信息，但下列情形除外：
	</p>
	<p class="MsoNormal">
		(1)&nbsp;与国家安全、国防安全相关的；
	</p>
	<p class="MsoNormal">
		(2)&nbsp;与公共安全、公共卫生、重大公共利益相关的；
	</p>
	<p class="MsoNormal">
		(3)&nbsp;与犯罪侦查、起诉、审判和判决执行等相关的；
	</p>
	<p class="MsoNormal">
		(4)&nbsp;出于维护个人信息主体或其他个人的生命、财产等重大合法权益目的但又很难得到本人同意的；
	</p>
	<p class="MsoNormal">
		(5)&nbsp;所收集的您的个人信息是您自行向社会公众公开的；
	</p>
	<p class="MsoNormal">
		(6)&nbsp;从合法公开披露的信息中收集的您的个人信息的，如合法的新闻报道、政府信息公开等渠道；
	</p>
	<p class="MsoNormal">
		(7)&nbsp;根据您的要求签订或履行合同所必需的；
	</p>
	<p class="MsoNormal">
		(8)&nbsp;用于维护森态园林软件及相关服务的安全稳定运行所必需的，例如发现、处置森态园林软件及相关服务的故障；
	</p>
	<p class="MsoNormal">
		(9)&nbsp;为合法的新闻报道所必需的；
	</p>
	<p class="MsoNormal">
		(10)&nbsp;学术硏究机构基于公共利益开展统计或学术研究所必要，且对外提供学术研究或描述的结果时，对结果中所包含的个人信息进行去标识化处理的；
	</p>
	<p class="MsoNormal">
		(11)&nbsp;已事先获得您的明确授权同意的；
	</p>
	<p class="MsoNormal">
		(12)&nbsp;法律法规规定的其他情形。
	</p>
	<p class="MsoNormal">
		3.&nbsp;您知悉并理解，鉴于森态园林<span>软件及相关服务中可能包括或链接至第三方提供的信息或其他服务</span>(<span>包括网站</span><span>)</span><span>，运营该等服务的第三方可能会要求您提供个人信息。本协议以及其他与</span>森态园林<span>软件及服务相关的协议和规则</span>(<span>包括但不限于《“</span>森态园林"<span>隐私政策》</span>)不适用于任何第三方提供的服务，森态园林对任何因第三方使用由您提供的个人信息所可能引起的后果不承担任何法律责任。<b>森态园林</b><b>提示您，您在向第三方提供个人信息前需认真阅读该等第三方的用户协议、隐私政策以及其他相关的条款，妥善保护自己的个人信息。</b>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		4.<b>森态园林</b><b>提示您，在使用</b><b>森态园林</b><b>软件及相关服务中请务必仔细判断并遂慎提供各类财产账户、银行卡、信用卡、第三方支付账户及对应密码等</b><b>重</b><b>要资料，否</b><b>则</b><b>由此带来的任何损失由您自行承担。</b>
	</p>
	<p class="MsoNormal">
		5.<span>用户个人信息保护的详细内容，请您参看《</span>"森态园林”隐私政策》。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		三、&nbsp;知识产权
	</p>
	<p class="MsoNormal">
		1 .&nbsp;森态园林商业标识：森态园林软件及服务中所包含的森态园林<span>图形、</span>logo<span>、文字或其组合</span>，以及其他森态园林标志及产品、服务名称，均为森态园林的商业标识。未经森态园林事先书面同意，您不得将森态园林标识以任何方式展示、使用或申请注册商标、外观设计专利、申请域名等，也不得向他人明示或暗示自己有权展示、使用、或其他有权处理森态园林商业标识的行为。由于您非法使用森态园林商业标识给森态园林(<span>包括其关联公司</span><span>)</span><span>或他人造成损失的，由您承担相应法律责任。</span>
	</p>
	<p class="MsoNormal">
		2.森态园林对其运营的软件、应用、网页、程序以及内含的包括但不限于文字、图片、图像、音频、视讯、图表、版面设计、电子文档等内容享有全部的知识
	</p>
	<p class="MsoNormal">
		产权。森态园林提供本服务时所依托的软件著作权、专利权及其他知识产权均归森态园林所有。未经森态园林许可，任何人不得擅自使用。
	</p>
	<p class="MsoNormal">
		3.&nbsp;<b>森态园林</b><b>注重知识产权的保护，并支持原创作品。您在此承诺并保证，您使用</b><b>森态园林</b><b><span>软件及相关服务时制作、发布、上传的文字、图片、视讯、音频等</span>(<span>包括其中包含的商标、姓名、人物肖像、企业标识等</span><span>)</span><span>均由您原创或已获合法授权</span><span>(</span><span>含转授权</span><span>)</span><span>，并且来源合法</span><span>(</span><span>不徊通过抓取、扒窃等手段获取</span><span>)</span><span>。如</span></b><b>森态园林</b><b>发现您的制作、发布、上传的内容侵犯第三方的合法权益，</b><b>森态园林</b><b>有权自行采取包括但不限于區除、屏蔽、断开链接等必要措施。您通过</b><b>森态园林</b><b>制作、上传、发布的任何成果的知识产权归属您或原始著作权人所有</b>。
	</p>
	<p class="MsoNormal">
		4.&nbsp;<b>您在此同意许可</b><b>森态园林</b><b><span>及其关联公司在全世界范围内永久性地、非独家地、不可撤销地使用和可再许可及</span>/<span>或转授权任意第三方使用您通过</span></b><b>森态园林</b><b><span>发布上传的内容</span>(<span>包括但不限于文字，图片，视讯，音频，视讯及</span><span>/</span><span>或音频中包括的音乐作品、声音、对话等</span><span>)</span><span>，包括但不限于复制权、发行权、出租权、展览权、表演权、放映权、广播权、信息网络传播权、</span></b><b>复</b><b>制权、改编权、翻译权、汇编权以及《著作权法〉规定的由著作权人享有的其他著作财产权利，</b><b>森态园林</b><b>及其关联公司无须对此额外向您支付任何费用。使用范围包括但不限于在当前或其他应用程序、产品或终端设备、与</b><b>森态园林</b><b><span>品牌有关的任何推广、广告、营销和</span>/<span>或宣传等。</span></b><span>为避免疑义，您同意，上述权利的授予包括使用、复制和展示您拥有或被许可使用并植入内容中的个人形象、肖像、姓名、商标、服务标志、品牌、名称、标识和公司标记</span>(<span>如有</span><span>)</span><span>以及任何其他品牌、营销或推广资产的权利和许可。</span>
	</p>
	<p class="MsoNormal">
		5.&nbsp;<b>您确认并同意授权</b><b>森态园林</b><b>以</b><b>森态园林</b><b>自己的名义或委托专业第三方对侵犯您上传发布的享有知识产权的内容进行代维权，维权形式包括但不限于：监测侵权行为、发送维权函、提起诉讼或仲裁、调解、和解等，</b><b>森态园林</b><b>有权对维权事宜做出决策并独立实施。</b>且森态园林<span>有权对您上传发布的包括但不限于音频</span>/<span>视讯内容进行添加水印等操作，但会保证不影响音频</span><span>/</span><span>视讯的播放及观看效果。</span>
	</p>
	<p class="MsoNormal">
		6.&nbsp;任何第三方未经森态园林<span>同意，不得将用户在平台上上传发布的内容、所发表言论等进行复制、修改、编辑、转让、使用、通过信息网络传播或作其他用途，包括但不限于抓取音频</span>/<span>视讯、编辑视讯</span><span>/</span><span>音频</span><span>/</span><span>文字和其他形式的内容等方式。否则，</span>森态园林有权就任何主体侵权而以森态园林自己的名义单独或委托第三方机构提起诉讼或开展其他法律行动，并获得全部赔偿。
	</p>
	<p class="MsoNormal">
		7.&nbsp;公司对森态园林软件及相关服务的开发和运营等过程中产生的所有数据和信息等享有全部权利，您不得自行或允许任何人以任何方式获取、使用该等数据和信息。
	</p>
	<p class="MsoNormal">
		8.&nbsp;<b>如您认为您拥有的知识产权受到侵犯，可以通过向</b><b>sentaiyuanlin1@163.com</b><b>发送邮件的方式通知我们</b>，并向我们提供您的身份信息文件、权属证明文件及构成侵权的初步证据，侵权初步证据包括但不限于以下信息或相关文件：
	</p>
	<p class="MsoNormal">
		(1)&nbsp;明确涉嫌侵权内容的具体链接，有多个涉嫌侵权链接的，请逐一提供每个链接；
	</p>
	<p class="MsoNormal">
		(2)&nbsp;明确指出涉嫌侵权内容侵犯您知识产权的具体内容和理由，并写明诉求，涉及专利侵权投诉需要提交详细的专利侵权对比分析；
	</p>
	<p class="MsoNormal">
		(3)&nbsp;其他能够证明存在侵权行为的补充投诉信息或证据材料；
	</p>
	<p class="MsoNormal">
		(4)&nbsp;您对投诉资料及通知的真实性、合法性、准确性负责的承诺。
	</p>
	<p class="MsoNormal">
		9.森态园林将依据相关法律规定将您所提交的投诉材料通知被投诉人，被投诉人可以在收到投<span>诉通知的</span>1-5<span>个工作日内提交申诉，期满未提交申诉材料的，不影响</span>森态园林的后续处理。您的投诉材料不足以构成侵权的初步证据的，森态园林有权通知您补充足够的侵权证据重新发起投诉。您的投诉材料构成侵权的初步证据的，森态园林将对被投诉的内容釆取删除、屏蔽、断
	</p>
	<p class="MsoNormal">
		开链接等必要措施。
	</p>
	<p class="MsoNormal">
		10.<span>您应保证投诉时提供信息的真实性、合法性、准确性，由于您提供信息不实导致的任何后果及责任由您自行承担。</span>森态园林对提供虚假材料的投诉人有权采取限制投诉、屏蔽账号等必措施，并保留依法追责的权利。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		四、&nbsp;用户禁止行为
	</p>
	<p class="MsoNormal">
		1.<span>您应自觉维护健康、良好、和谐的互联网氛围和秩序。您制作、评论、发布、传播的内容应遵守法律法规、国家政策、社会公共秩序、本协议及平台规则。</span>森态园林有权对您发布上传的内容进行审核，审核不通过的内容森态园林有权不予发布，但森态园林的审核通过并不代表对您上传发布内容进行任何形式的担保或保证。您不得发表下列信息：
	</p>
	<p class="MsoNormal">
		(1)&nbsp;反对宪法确定的基本原则的；
	</p>
	<p class="MsoNormal">
		(2)&nbsp;危害国家安全，泄露国家秘密；
	</p>
	<p class="MsoNormal">
		(3)&nbsp;颠覆国家政权，推翻社会主义制度，煽动分裂国家，破坏国家统一的；
	</p>
	<p class="MsoNormal">
		(4)&nbsp;损害国家荣誉和利益的；
	</p>
	<p class="MsoNormal">
		(5)&nbsp;宣扬恐怖主义、极端主义的；
	</p>
	<p class="MsoNormal">
		(6)&nbsp;宣扬民族仇恨、民族歧视，破坏民族团结的；
	</p>
	<p class="MsoNormal">
		(7)&nbsp;煽动地域歧视、地域仇恨的；
	</p>
	<p class="MsoNormal">
		(8)&nbsp;破坏国家宗教政策，宣扬邪教和迷信的；
	</p>
	<p class="MsoNormal">
		(9)&nbsp;编造、散布谣言、虚假信息，扰乱社会秩序、破坏社会稳定的；
	</p>
	<p class="MsoNormal">
		(10)&nbsp;散布、传播淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；
	</p>
	<p class="MsoNormal">
		(11)&nbsp;危害网络安全、利用网络从事危害国家安全、荣誉和利益的；
	</p>
	<p class="MsoNormal">
		(12)&nbsp;侮辱或者诽谤他人，侵害他人合法权益的；
	</p>
	<p class="MsoNormal">
		(13)&nbsp;对他人进行暴力恐吓、威胁，实施人肉搜索的；
	</p>
	<p class="MsoNormal">
		(14)&nbsp;涉及他人隐私、个人信息或资料的；
	</p>
	<p class="MsoNormal">
		(15)&nbsp;散布污言秽语，损害社会公序良俗的；
	</p>
	<p class="MsoNormal">
		(16)&nbsp;侵犯他人隐私权、名誉权、肖像权、知识产权等合法权益内容的；
	</p>
	<p class="MsoNormal">
		(17)&nbsp;散布商业广告，或类似的商业招揽信息、过度营销信息及垃圾信息；
	</p>
	<p class="MsoNormal">
		(18)&nbsp;使用本网站常用语言文字以外的其他语言文字评论的；
	</p>
	<p class="MsoNormal">
		(19)&nbsp;与所评论的信息毫无关系的；
	</p>
	<p class="MsoNormal">
		(20)&nbsp;所发表的信息毫无意义的，或刻意使用字符组合以逃避技术审核的；
	</p>
	<p class="MsoNormal">
		(21)&nbsp;侵害未成年人合法权益或者损害未成年人身心健康的；
	</p>
	<p class="MsoNormal">
		(22)&nbsp;未获他人允许，偷拍、偷录他人，侵害他人合法权利的；
	</p>
	<p class="MsoNormal">
		(23)&nbsp;包含恐怖、暴力血腥、高危险性、危害表演者自身或他人身心健康内容的；
	</p>
	<p class="MsoNormal">
		(24)&nbsp;其他违反法律法规、政策及公序良俗、干扰森态园林正常运营或侵犯其他用户或第三方合法权益内容的其他信息。
	</p>
	<p class="MsoNormal">
		2.&nbsp;未经公司书面许可，您不得自行或授权、允许、协助任何第三人对森态园林软件及相关服务中信息内容进行如下行为：
	</p>
	<p class="MsoNormal">
		(1)&nbsp;<span>擅</span>自编辑、整理、编排森态园林软件及相关服务的信息内容后在森态园林软件及相关服务的源页面以外的渠道进行展示；
	</p>
	<p class="MsoNormal">
		(2)&nbsp;复制、读取、利用森态园林软件及相关服务的信息内容，用于包括但不限于宣传、増加阅读量、浏览量等商业用途；
	</p>
	<p class="MsoNormal">
		(3)&nbsp;采用包括但不限于特殊标识、特殊代码等任何形式的识别方法，自行或协助第三人对森态园林软件及相关服务的信息或内容产生流量、阅读量引导、转移、劫持的不利影响；
	</p>
	<p class="MsoNormal">
		(4) 其他非法获取森态园林软件及相关服务的信息内容的行为。
	</p>
	<p class="MsoNormal">
		3.&nbsp;经森态园林书面许可后，用户对森态园林软件及相关服务的信息和内容的分享、转发等行为，还应符合以下规范：
	</p>
	<p class="MsoNormal">
		(1)&nbsp;对抓取、统计、获得的相关搜索热词、命中率、分类、搜索量、点击率、阅读量等相关数据，未经森态园林事先书面同意，不得将上述数据以任何方式公示、提供、泄露给任何第三人；
	</p>
	<p class="MsoNormal">
		(2)&nbsp;不得对森态园林软件及相关服务的源网页进行任何形式的任何改动，包括但不限于森态园林软件及相关服务的首页链接入口，也不得对森态园林软件及相关服务的源页面的展示进行任何形式的遮挡、插入、弹窗等妨碍；
	</p>
	<p class="MsoNormal">
		(3)&nbsp;应当采取安全、有效、严密的措施，防止森态园林<span>软件及相关服务的信息内容被第三方通过包括但不限于</span>"<span>蜘蛛”</span><span>(spider)</span><span>程序等任何形式进行非法获取；</span>
	</p>
	<p class="MsoNormal">
		(4)&nbsp;不得把相关数据内容用于森态园林书面许可范围之外的目的，进行任何形式的销售和商业使用，或向第三方泄露、提供或允许第三方为任何方式的使用；
	</p>
	<p class="MsoNormal">
		(5) 用户向任何第三人分享、转发、复制森态园林软件及相关服务信息内容的行为，还应遵守森态园林为此制定的其他规范和标准。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		五、&nbsp;法律责任及免责条款
	</p>
	<p class="MsoNormal">
		1.<span>您如果存在违反法律法规、本协议或其他平台规则的行为，因该行为而产生的行为后果由您自行承担，公司有权视情况严重程度采取预先警示、拒绝发布、立即停止信息发布、删除评论、音频、视讯等内容、限制账号部分或者全部功能、冻结账号直至永久关闭账号等措施。公司有权公告处理结果，且有权根据实际情况决定是否恢复使用。对涉嫌违反法律法规、涉嫌违法犯罪的行为将保存有关记录，并依法向有关主管部门报告、配合有关主管部门调查。对已删除内容公司有权不予恢复或返还。</span>
	</p>
	<p class="MsoNormal">
		2.&nbsp;<span>因您违反本协议或其他服务条款规定，引起第三方投诉或诉讼索赔的，您应当自行承担全部法律责</span>.<span>任。因您的违法或违约行为导致</span>森态园林及其关联公司向任何第三方赔偿或遭受国家机关处罚的，您还应足额赔偿森态园林及其关联公司因此遭受的全部损失。
	</p>
	<p class="MsoNormal">
		3.&nbsp;您承诺并保证，在使用森态园林软件及相关服务时上传的文字、图片、视讯、音频、链接等不侵犯任何第三方的知识产权、名誉权、姓名权、隐私权等合法权益。否则，公司有权在收到权利方或者相关方通知的情况下移除该涉嫌侵权内容。针对第三方提出的全部权利主张，您应自行承担全部法律责任；如因您的侵权行为导致森态园林<span>及其关联公司遭受损失的</span>(<span>包括但不限于经济、商誉等损失</span><span>)</span><span>，您还应足额赔偿</span>森态园林及其关联公司遭受的全部损失。
	</p>
	<p class="MsoNormal">
		4.&nbsp;<b>您知悉并理解，</b><b>森态园林</b><b>提供的服务可能会受到不可控、不可预见因素的影响，存在因不可抗力、计算机病毒或黑客攻击、系统不稳定、用户所在位置、用户关机以及其他任何技术、互联网络、通信线路原因等造成的服务中断或不能满足您要求的风险。因前述情形导致用户不能发送、接受、阅读、上传信息、或接发错信息，</b><b>森态园林</b><b>不承担任何责任。</b><b></b>
	</p>
	<p class="MsoNormal">
		5.&nbsp;<b><span>您明确了解并同意，如您连续</span>30<span>日未登录</span></b><b>森态园林</b><b><span>，账户余额及虚拟金将被清除且无法恢复。但在以上内容被清除前我们将会通过适当方式</span>(<span>如系统通知成者短信通知</span><span>)</span><span>告知您。</span></b><b></b>
	</p>
	<p class="MsoNormal">
		6.&nbsp;<b>在任何情况下，</b><b>森态园林</b><b>对任何由于用户使用</b><b>森态园林</b><b>而导致的间接性、后果性、惩罚性、偶然性、特殊性成刑罚性的损害，包括但不限于因用户使用</b><b>森态园林</b><b>服务而</b><b>遭</b><b><span>受的各项损失均不承担责任</span>(<span>即使</span></b><b>森态园林</b><b><span>已被告知该等损失发生的可能性</span>)<span>。</span></b>
	</p>
	<p class="MsoNormal">
		7.&nbsp;森态园林依据本协议约定获得处理违法违规内容的权利，该权利不构成森态园林的义务或承诺，森态园林不能保证及时发现违法行为或进行相应处理。
	</p>
	<p class="MsoNormal">
		8.&nbsp;您明确了解并同意：对于森态园林提供的服务，森态园林不提供任何种类的明示或暗示担保、保证或条件，包括但不限于商业适售性、特定用途适用性等。您对森态园林软件及相关服务的使用行为必须自行承担相应风险。
	</p>
	<p class="MsoNormal">
		六、单项服务功能的使用
	</p>
	<p class="MsoNormal">
		1.&nbsp;"森态园林"<span>软件及相关服务中包含</span>森态园林以各种合法方式获取的信息或信息内容链接，同时也包括森态园林合法运营的其他单项服务。这些服务在森态园林可能以单独板块形式存在；森态园林有权根据运营安排不时地增加、减少或改动这些特别板块的设置及服务。
	</p>
	<p class="MsoNormal">
		2.&nbsp;您若在森态园林软件中使用上述单项服务功能，需要您同时接受就该单项服务特别制订的协议或者其他约束您与该项服务提供者之间的规则。您知悉并理解，一旦您开始使用上述服务，则视为您同时接受有关单项服务的相关协议、规则的约束，否则，您应立即停止使用。
	</p>
	<p class="MsoNormal">
		3.&nbsp;森态园林<span>部分功能需要您提供包括个人敏感信息</span>(<span>银</span>行<span>账号、姓名、身份证号等</span>)<span>在内的个人信息，如您</span><span>|</span><span>拒绝提供相关必要个人信息，您将无法使用该单项服务功能。</span>森态园林充分认识到个人信息的重要性，我们将采取安全可行的安全防护措施对您的信息进行保护。
	</p>
	<p class="MsoNormal">
		4.&nbsp;森态园林软件中可能为您展示由第三方提供的服务，如您在森态园林软件中使用第三方提供的软件及相关服务时，除遵守本协议及森态园林中的其他相关规则外，还应遵守第三方的协议、相关规则。如因您使用第三方软件及服务而产生的争议、损失或损害，由您自行与第三方解决，森态园林不承担任何责任。
	</p>
	<p class="MsoNormal">
		5.&nbsp;森态园林部分功能或应用涉及付费，您输入账号密码的行为或通过森态园林提供的第三方支付通道确认支付的行为视为对收费服务的接受和订阅，您一旦接受订阅收费服务，需要按森态园林公示的收费标准支付费用。但您理解，如因第三方支付机构原因导致您支付失败或支付提示，森态园林不承担责任。	-
	</p>
	<p class="MsoNormal">
		6.&nbsp;您在进行消费时，请事先了解消费价格、扣款和款规则等事项；如您是未成年人，请在监护人的认可后进行消费。
	</p>
	<p class="MsoNormal">
		7.&nbsp;您付费后获得的权益不得转让给第三人。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		七、&nbsp;未成年人保护
	</p>
	<p class="MsoNormal">
		1.&nbsp;<span>若您是未满</span>18<span>周岁的未成年人，在使用</span>森态园林软件及相关服务前，应在您的父母或其他监护人的监护、指导下阅读并同意本协议。
	</p>
	<p class="MsoNormal">
		2.&nbsp;如因未成年用户违反法律法规、本协议内容，则未成年用户及其监护人应依照法律规定承担因此而导致的一切后果。
	</p>
	<p class="MsoNormal">
		3.&nbsp;为更好的保护未成年人隐私权益，森态园林提醒用户慎重发布包含未成年人素材的内容，一经发布，即视为用户同意森态园林展示未成年人的信息、肖像、声音等，且允许森态园林依据本协议使用、处理该等与未成年人相关的内容。
	</p>
	<p class="MsoNormal">
		4.&nbsp;森态园林中可能包含不适宜未成年人阅读或观看的内容，为保护未成年人的身心健康，请未成年人家长妥善监管和指导未成年人使用森态园林软件及相关服务的行为。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		八、协议更新
	</p>
	<p class="MsoNormal">
		1.&nbsp;森态园林有权随时更新本协议的任何条款，一旦本协议的内容发生变动，森态园林<span>将会在平台上公布更新之后的协议内容，或者选择其他适当方式</span>(<span>如系统通知</span><span>)</span><span>等向您通知更新内容。</span>
	</p>
	<p class="MsoNormal">
		2.&nbsp;更新后的协议条款一经公布即代替原来的协议条款，您应同样遵守。本协议条款更新后，如您不同意接受，则不应继续使用森态园林提供的服务。如果您继续使用森态园林，则视为对更新条款的接受。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		九、法律适用及争议解决
	</p>
	<p class="MsoNormal">
		1 .&nbsp;本协议的成立、生效、履行、解释及争议的解决其应适用中华人民共和国大陆地区法律。若本协议之任何规定因与中华人民共和国大陆地区的法律抵触而无效，本协议其它规定仍应具有完整的效力及效果。
	</p>
	<p class="MsoNormal">
		<b>2. </b><b>本协议的签署地点为</b><b>中华人民共和国北京市东城区</b><b>，若您与公司发生争议的，双方应尽</b><b>量</b><b>友好协商解决，协商不成，您同意应将争议提交至合同签署地有管辖权的人民法院管辖。</b><b></b>
	</p>
	<p class="MsoNormal">
		<b>&nbsp;</b>
	</p>
	<p class="MsoNormal">
		十、其他条款
	</p>
	<p class="MsoNormal">
		1.&nbsp;您和森态园林均是独立的主体，在任何情况下本协议不构成森态园林对您的任何形式的明示或暗示担保，双方之间亦不构成代理、合伙、合营或雇佣关系。
	</p>
	<p class="MsoNormal">
		2.本协议中的标题仅为方便而设，在解释本协议时应被忽略，不能作为本协议条款解释的依据。
	</p>
	<p class="MsoNormal">
		3.&nbsp;森态园林保留对本协议解释和修改的权利。
	</p>
	<p class="MsoNormal" align="center" style="text-align:center;">
		<b>&nbsp;</b>
	</p>
	<p class="MsoNormal">
		<b>"</b><b>森态园林</b><b>"<span>隐私政策</span></b><b></b>
	</p>
	<p class="MsoNormal">
		<span>更新时间：</span>2019<span>年</span><span>8</span><span>月</span><span>19</span><span>日</span>
	</p>
	<p class="MsoNormal">
		<span>发布时间：</span>2019<span>年</span><span>8</span><span>月</span><span>19</span><span>日</span>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		森态园林(<span>以下简称</span><span>"</span><span>我们”</span><span>)</span><span>深知个人信息对您的重要性，我们将按法律法规要求，采取相应安全保护措施，尽力保护您的个人信息安全可控。鉴于此，我们制定本《隐私政策》</span><span>(</span><span>下称</span><span>"</span><span>本政策</span><span>/</span><span>本隐私政策”</span><span>)</span><span>并提醒您：</span>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		审慎阅读：
	</p>
	<p class="MsoNormal">
		本政策仅适用于所有使用森态园林<span>软件及服务的所有用户</span>(<span>以下或称“您”</span><span>)</span><span>，清您认真阅读并充分了解我们对您信息的收集、使用、储存等方式，以及国家关</span><span>.</span><span>于该类互联网信息服务的法律法规等。</span><b>本政策一经同意并接受，即形成您与</b><b>森态园林</b><b>间有法律约束力之文件。如果您不同意本政策的全部或任何条款，您可以选择不使用并立即停止使用</b><b>森态园林</b><b>；使用</b><b>森态园林</b><b>服务则意味着您认同本政策的全部内容，以及我们后续对本政策所作的任何修改。本政策中如涉及到您的个人敏感信息，将会以醒目方式提</b><b>醒</b><b>您，</b><b>请</b><b>您注意阅读。</b><b></b>
	</p>
	<p class="MsoNormal">
		如对本政策内容有任何疑问、意见或建议，或就用户个人信息问题进行申诉，您可通过森态园林提供的客服通道或通过邮箱sentaiyuanlin1@163.com进行反馈。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		本隐私政策将帮助您了解以下内容：
	</p>
	<p class="MsoNormal">
		一、我们收集的信息及如何使用收集的信息
	</p>
	<p class="MsoNormal">
		<span>二、我们如何使用</span>Cookie<span>和同类技术</span>
	</p>
	<p class="MsoNormal">
		三、我们如何共享、转让、公开披露您的信息
	</p>
	<p class="MsoNormal">
		四、我们存储您个人信息的地点和期限
	</p>
	<p class="MsoNormal">
		五、您的权利保障机制
	</p>
	<p class="MsoNormal">
		六、我们如何保护您的个人信息
	</p>
	<p class="MsoNormal">
		七、我们如何处理未成年人的信息
	</p>
	<p class="MsoNormal">
		八、本隐私政策如何更新
	</p>
	<p class="MsoNormal">
		九、适用范围
	</p>
	<p class="MsoNormal">
		十、其他
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		一、<b>我们收集的信息及如何使用收集的信息</b><b></b>
	</p>
	<p class="MsoNormal">
		个人信息是指以电子或者其他方式记录的能够单独或者与其他信息结合识别特定自然人身份或者反映特定自然人活动情况的各种信息。我们会根据合法、正当、必要的原则，仅收集实现森态园林软件功能及相关服务所必要的信息，我们收集的信息包括如下几类：
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		(一)&nbsp;<b>您创建或者主动提供的信息</b><b></b>
	</p>
	<p class="MsoNormal">
		<b>1. <span>注册成为</span></b><b>森态园林</b><b>用户时填写的信息</b> 
	</p>
	<p class="MsoNormal">
		(1)&nbsp;您可以通过提供<b>手机号</b>创建账号，我们将使用分<span>类信息通过发送验证码信息以供验证您提交验证身份是否有效。并且您可完善相关的网络身份识别信息</span>(<span>如头像、昵称和密码</span><span>)</span><span>，收集这些信息是为了帮助您完成注册。您还可根据自身需求选择填写性别、生日、地区及介绍等信息完善您的个人信息。</span>
	</p>
	<p class="MsoNormal">
		(2)&nbsp;<span>在您使用直播等需进行身份认证的功能或服务时，根据我国的法律法规，您可能需要提供您的真实身份信息</span>(<b>真实姓名、身份证号码、电话号码等</b>)<span>以完成实名验证。如您不提供这些信息，我们将无法为您提供直播功能，但您可以继续使用</span>森态园林的其他服务和功能。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		2.&nbsp;<b>为您提供个性化内容展示和推送</b>
	</p>
	<p class="MsoNormal">
		(1)&nbsp;个性化内容展示和推送是我们产品核心的功能之一，是为了向您提供更符合您需求的页面、视讯、直播等内容。如果您拒绝同意提供信息，我们将无法向您提供个性化推荐服务。为实现这一核心功能，我们会收集并使用下列信息：
	</p>
	<p class="MsoNormal">
		-<b><span>设备信息</span>(<span>包括型号、操作系统版本、设备设置、唯一设备标识符等软硬件特征信息</span><span>)</span><span>；</span></b><b></b>
	</p>
	<p class="MsoNormal">
		<b>-<span>个人上网记录</span></b>(<span>包括关注、收藏、搜索、点击记录、互动记录、软件使用记录、浏览偏好等您的操作、使用行为信息</span><span>)</span><span>；</span>
	</p>
	<p class="MsoNormal">
		<b>-<span>反愦、发布、点费、评论</span></b>等您主动发布或提供的信息；
	</p>
	<p class="MsoNormal">
		-<span>您设备所在的</span><b>地理位置信息。</b>
	</p>
	<p class="MsoNormal">
		(2)&nbsp;我们可能会将上述信息与来自我们其他服务的信息结合，进行综合统计并通过算法做特征与偏好分析，用以向您进行个性化推荐、展示或推送您可能感兴趣的特定音视讯等信息，或者推送更合适您的特定功能或服务。
	</p>
	<p class="MsoNormal">
		(3)&nbsp;我们会对收集的信息进行去标识化地研究、统计分析和预测，用于改善森态园林<span>平台的内容和布局，为商业决策提供产品或服务支撑，以及改进我们的产品和服务</span>(<span>例如使用匿名数据进行机器学习或模型算法训练</span><span>)</span><span>。因此，数据分析仅对应特定的、无法直接关联用户身份的编码，无法也绝不会与您的真实身份相关联。</span>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		3. <b><span>您提供音</span>/<span>视讯、图片文字等内容发布与直播限务</span></b>
	</p>
	<p class="MsoNormal">
		(1)&nbsp;<span>当您自行发布音</span>/<span>视讯、图片文字或进行直播时，我们会请求您授权</span><b>相机、照片、麦克风、存储</b>的权限。您如果拒绝授权提供，将无法使用此功能，但不影响您正常使用森态园林的其他功能。
	</p>
	<p class="MsoNormal">
		(2)&nbsp;<span>当您发布音</span>/<span>视讯等信息并选择显示位置时，我们会请求您授权</span><b>地理位置</b><span>这一敏感权限，并收集与本服务相关的位置信息。这些技术包括</span>IP<span>地址、</span><span>GPS</span><span>以及能够提供相关信息的</span><span>WLAN</span><span>等传感器技术。您如果拒绝授权提供，将无法使用此功能，但不影响您</span>
	</p>
	<p class="MsoNormal">
		正常使用森态园林的其他功能。
	</p>
	<p class="MsoNormal">
		<br />
	</p>
	<p class="MsoNormal">
		4.<b>&nbsp;<span>为您提供社交类互动功能成服务</span></b> 
	</p>
	<p class="MsoNormal">
		(1)&nbsp;当您关注您感兴趣的账号并与其他账号进行互动，例如进行发表评论、分享、点赞、私信等功能时，我们会收集<b>您关注的账号</b>，并向您展示您关注账号发布内容。
	</p>
	<p class="MsoNormal">
		(2)&nbsp;当您使用推荐通讯录好友功能时，我们会在获得您的明示同意后，获取您的<b>通讯录</b>权限，向您推荐通信录中的好友，您的好友也能看到您使用森态园林服务。通讯录信息属于<b>个人敏感信息，拒绝提供该信息仅会使您无法使用上述功能，但不影响您正常使用</b><b>森态园林</b><b>及相关服务的其他功能。同时，</b><b>请</b><b>您注意，个人敏感信息一旦泄搏、非法提供或者滥用可能危害人身和财产安全，极易导致个人名誉、身心健康受到损害或歧视性待遇，谪您在决定是否提供该信息时审慎考虑。</b><b></b>
	</p>
	<p class="MsoNormal">
		<b>&nbsp;</b>
	</p>
	<p class="MsoNormal">
		<b>5. </b><b>为您提供搜索功能或服务</b><b></b>
	</p>
	<p class="MsoNormal">
		您使用森态园林的搜索服务时，我们会收集您的<b>搜索关键字信息、日志记录</b>。为了提供高效的搜索服务，部分前述信息会暂时存储在您的本地存储设备之中，并可向您展示搜索结果内容、搜索历史记录。<b>您的搜索关键词信息无法单独识别您的身份，不属于您的个人信息，我们有权对其进行使用。当您的搜索关键词信息与您的其他信息相互结合使用并可以识别您的身份时，在结合使用期间，我们会将您搜索关键词信息作为您的个人信息，与您的搜索记</b><b></b>
	</p>
	<p class="MsoNormal">
		<b>录一并按本政策的规定进行保护和处理。</b><b></b>
	</p>
	<p class="MsoNormal">
		<b>&nbsp;</b>
	</p>
	<p class="MsoNormal">
		6. <b>为您提供购买、査询、使用虚拟财产服务</b><b></b>
	</p>
	<p class="MsoNormal">
		<span>（</span>1<span>）当您通过</span>森态园林进行充值或查询、提现虚拟货币时，我们为了方便您查询虚拟财产，并尽量降低可能存在的风险，森态园林会记录<b>您获取虚拟货帀、充值、账户余额与提现情况。</b>这些信息是您使用森态园林充值、提现功能所必需，拒绝提供会使您无法使用此功能，但不影响您正常使用其他功能。
	</p>
	<p class="MsoNormal">
		<span>（</span>2<span>）当您将</span>森态园林元宝进行首次提现时，我们为了保护您的财产和账户安全，并确保所提现的款项顺利到账，森态园林需要对您所指定的账户进行用户验证。我们需要您提供<b>身份证号、姓名、银行账号、手机号</b>进行用户验证。这些信息属于个人敏感信息，拒绝提供会使您无法进行元宝提现，但不影响您使用森态园林的其他功能。
	</p>
	<p class="MsoNormal">
		当您进行用户验证时，您接受提现金额的微信账号会自动与您的森态园林账号进行绑定。
	</p>
	<p class="MsoNormal">
		<span>（</span>3<span>）您在</span>森态园林<span>的收益将直接提现到微信、支付宝和聚美余额，为了确保提现功能的正常使用，我们会关联微信钱包、支付宝和聚美</span>APP<span>保障您的资金安全，并且快速地完成提现操作。</span> 
	</p>
	<p class="MsoNormal">
		<b>7. <span>为您提供</span></b><b>森态园林</b><b>内的单项服务功能</b> 
	</p>
	<p class="MsoNormal">
		森态园林可能会在应用程序中上线单项服务功能，使用这些单项服务功能可能需要您提供您的<b>身份证号、银行账号、姓名、手机号、通信地址</b>等个人信息，我们会在单项服务功能界面另行提示您收集信息的种类及用途，如您拒绝提供上述必要信息，您将无法使用该单项服务功能，但是不影响您使用森态园林的其他功能。我们可能在未来对该等单项服务功能进行进一步增加或更新，若需要您提供更多个人信息，请您理解这是为了您使用某功能所必需的信息。您可以拒绝提供相关个人信息，这将使您无法继续使用某项单项服务功能，如您选择提供相应的
	</p>
	<p class="MsoNormal">
		个人信息，则视为对更新后的相关规则的接受和同意。您理解，森态园林提供的单项服务功能可能会另行制定隐私政策，此种情况下，如您使用该单项服务功能，须事先同意该单项服务功能的隐私政策；若某单项服务功能未另行制定隐私政策，则以本隐私政策为准。
	</p>
	<p class="MsoNormal">
		<b>&nbsp;</b>
	</p>
	<p class="MsoNormal">
		8.&nbsp;<b>开展广告、营销活动</b><b></b>
	</p>
	<p class="MsoNormal">
		我们可能使用您的相关信息，向您提供与您更加相关的广告；我们也可能使用您的信息，通过我们的服务、电子邮件或者其他方式向您发送营销信息，推广或者提供我们或第三方的商品或服务。我们会不时开展一些营销、抽奖等活动，当您选择参加我们举办的有关营销活动时，根据活动需要您可提供<b>姓名、通信地址、联系方式、银行账号等信息，这些信息中可能包含个人敏感信息（如身份证号、个人电话号码、银行账号等）。该等信息是您收到转账或者礼品所必要的，如果您拒绝提供这些信息，我们将可能无法向您转账或发放礼品。</b><b></b>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		9.&nbsp;<b>保障产品、用户使用安全及</b><b>森态园林</b><b>服务的正常运行</b><b></b>
	</p>
	<p class="MsoNormal">
		为保障森态园林服务的安全性、软件与服务的正常运行，保护您和社会公众的人身财产安全，帮助我们更好地了解森态园林及相关服务的运行情况，更好地预
	</p>
	<p class="MsoNormal">
		防网络漏洞、计算机病毒、钓鱼网站的安全风险，我们可能记录您的如下信息：
	</p>
	<p class="MsoNormal">
		<b>-<span>网络日志信息；</span></b><b></b>
	</p>
	<p class="MsoNormal">
		<b>-<span>软件及使用相关服务的信息（例如，软件版本号、应用程序使用频率、崩溃数据、总体安装和使用情况、性能数据、应用程序来源信息、操作日志）；</span></b><b></b>
	</p>
	<p class="MsoNormal">
		<b>-<span>设备信息（例如，硬件型号、操作系统版本号、国际移动设备识别码（</span><span>IMEI</span><span>）、网络设备硬件地址（</span><span>MAC</span><span>）、网络接入方式及类型</span></b><b></b>
	</p>
	<p class="MsoNormal">
		<b>-IP<span>地址。</span></b><b></b>
	</p>
	<p class="MsoNormal">
		请您了解，这些信息是我们提供服务和保障产品正常运行所必须收集的基本信息。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>（二）我们从第三方获得您的个人信息</b><b></b>
	</p>
	<p class="MsoNormal">
		1.&nbsp;基于我们与通信运营商的合作，当您使用森态园林“一键登录<span>"</span><span>功能时，经过您的明示同意，您使用的手机号码的运营商将您的手机号码发送给我们，便于我们为您提供快捷的登录服务。如您不选择“一键登录</span><span>"</span><span>，您还可以使用其他登录方式，如手机验证码、第三方账号登录等。手机号码属于个人敏感信息，您有权拒绝提供，但这将会使您无法使用“一键登录”方式注册登录</span><span>"</span>森态园林”，但不影响您通过其他方式注册登录，也不影响其他功能的正常使用。
	</p>
	<p class="MsoNormal">
		2. 当您主动使用第三方账号（如微信、微博账号）登录森态园林时，我们可能从第三方获取您授权共享的账户信息（头像、昵称、所在地区等），并在您同意本隐私政策后将您的第三方账户直接登录并使用我们的产品与或服务。我们将依据与第三方的约定，对个人信息来源的合法性进行确认后，在符合相关法律和法规规定的前提下，使用您的这些个人信息。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>（三）其他用户分享的信息中含有您的信息</b>
	</p>
	<p class="MsoNormal">
		其他用户发布的信息中可能含有您的部分信息（如：在评论、留言、发布图文、音视讯中涉及到与您相关的信息）。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>（四）依法豁免征得授权同意收集的个人信息请您理解，根据法律法规以下情形中收集和使用您的个人信息无需征得您的授权同意：</b><b></b>
	</p>
	<p class="MsoNormal">
		1.&nbsp;与国家安全、国防安全相关的；
	</p>
	<p class="MsoNormal">
		2.&nbsp;与公共安全、公共卫生、重大公共利益相关的；
	</p>
	<p class="MsoNormal">
		3.&nbsp;与犯罪侦查、起诉、审判和判决执行等相关的；
	</p>
	<p class="MsoNormal">
		4.&nbsp;出于维护个人信息主体或其他个人的生命、财产等重大合法权益但又很难得到本人同意的；
	</p>
	<p class="MsoNormal">
		5.&nbsp;所收集的您的个人信息是您自行向社会公众公开的
	</p>
	<p class="MsoNormal">
		6.&nbsp;从合法公开披露的信息中收集的您的个人信息的，如合法的新闻报道、政府信息公开等渠道；
	</p>
	<p class="MsoNormal">
		7.&nbsp;根据您的要求签订或履行合同所必需的；
	</p>
	<p class="MsoNormal">
		8.&nbsp;用于维护森态园林软件及相关服务的安全稳定运行月必需的，例如发现、处置森态园林软件及相关服务的故障；
	</p>
	<p class="MsoNormal">
		9.&nbsp;为合法的新闻报道所必需的；
	</p>
	<p class="MsoNormal">
		10.&nbsp;学术研究机构基于公共利益开展统计或学术研究所必要，且对外提供学术研究或描述的结果时，对结果中所包含的个人信息进行去标识化处理的；
	</p>
	<p class="MsoNormal">
		11.&nbsp;法律法规规定的其他情形。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>（五）</b><b> </b><b>收集、使用个人信息目的变更的处理</b><b></b>
	</p>
	<p class="MsoNormal">
		请您了解，隨着我们业务的发展，可能会对森态园林的功能和提供的服务有所调整变化。当新功能或服务与个性化音视讯推荐、直播、程序化广告推送、发布信息、用户推荐、互动交流、搜索查询、注册认证、虚拟财产等场景相关时，收集与使用的个人信息属于与原目的具有直接或合理关联。在与原目的无直接或合理关联的场景下，我们收集、使用您的个人信息，会再次进行告知，并征得您的同意。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>（六）</b><b> </b><b>其他</b><b></b>
	</p>
	<p class="MsoNormal">
		1.<span>如我们停止运营</span>森态园林平台产品或服务，我们将及时停止继续收集您个人信息的活动，将停止运营的通知以逐一送达或公告的形式通知您，并对我们所持有的与已关停业务相关的个人信息进行删除或匿名化处理。
	</p>
	<p class="MsoNormal">
		2.<span>若我们超出本政策记载的用途使用您的信息，我们将再次向您进行说明，并征得您的同意。</span>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b><span>二、我们如何使用</span>Cookie<span>和相关技术</span></b><b></b>
	</p>
	<p class="MsoNormal">
		<b><span>（</span>―）什么是<span>Cookie</span></b><b></b>
	</p>
	<p class="MsoNormal">
		<span>为确保网站正常运转、为您获得更轻松的使用体验、向您推荐您可能感兴趣的内容，我们会在您的计算机或移动设备上存储名为</span>Cookie<span>的小数据文件。</span><span>Cookie</span><span>通常包含标识符、站点名称以及一些号码和字符。借助于</span><span>Cookie,</span><span>网站能够存储您的偏好等数据。</span>
	</p>
	<p class="MsoNormal">
		<span>您也可以通过浏览器设置管理</span>Cookie<span>。但请注意，如果停用</span><span>Cookie,</span><span>您可能无法享受最佳的服务体验，某些服务也可能无法正常使用。</span>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>（</b><b>二</b><b><span>）</span>Cookie<span>同类技术</span></b><b></b>
	</p>
	<p class="MsoNormal">
		<span>除</span>Cookie<span>外，我们还会在网站上使用网站信标、像素标签、</span><span>ETag</span><span>等其他同类技术。例如，我们向您发送的电子邮件可能含有链接至我们网站内容的地址链接，如果您点击该链接，我们则会跟踪此次点击，帮助我们了解您的产品或服务偏好，以便于我们主动改善客户服务体验。网站信标通常是一种嵌入到网站或电子邮件中的透明图像。借助于电子邮件中的像素标签，我们能够获知电子邮件是否被打开。如果您不希望自己的活动以这种方式被追踪，则可以随时从我们的寄信名单中退订。</span>
	</p>
	<p class="MsoNormal">
		ETag <span>（实体标签）是在互联网浏览器与互联网服务器之间背后传送的</span><span>HTTP</span><span>协议标头，可代替</span><span>CookieoETag</span><span>可以帮助我们避免不必要的服务器负载，提高服务效率，节省资源、能源，同时，我们可能通过</span><span>ETag</span><span>来记录您的身份，以便我们可以更深入地了解和改善我们的产品或服务。大多数浏览器均为用户提供了清除浏览器缓存数据的功能，您可以在浏览器设置功能中进行相应的数据清除操作。但请注意，如果停用</span><span>ETag,</span><span>您可能无法享受相对更佳的产品或服务体验。</span>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b><span>（三）我们使用</span>Cookie<span>的目的</span></b><b> </b><b></b>
	</p>
	<p class="MsoNormal">
		Cookie<span>能够帮助我们提升用户的使用体验，我们使用</span><span>Cookie</span><span>和相关技术主要是出于以下目的：</span><b>1 .<span>偏好设</span></b><b>置</b><b></b>
	</p>
	<p class="MsoNormal">
		Cookie<span>和同类技术可以帮助我们了解您的偏好和使用习惯，以改善产品服务及用户体验，并优化您对广告的选择。</span>
	</p>
	<p class="MsoNormal">
		<b>2.<span>保障产品或服务的安全</span></b><b></b>
	</p>
	<p class="MsoNormal">
		Cookie<span>可帮助我们保障数据和服务的安全性，使我们确认您是否安全登录服务，排查针对我们的产品和服务的作弊、盗号、黑客、欺诈行为。</span>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>三、</b><b> </b><b>我们如何共享、转让、公开披露您的信息</b><b></b>
	</p>
	<p class="MsoNormal">
		<b>（</b><b>一</b><b>）共享</b>
	</p>
	<p class="MsoNormal">
		我们不会与森态园林平台服务提供者及其关联公司以外的公司、组织和个人共享您的个人信息，但以下情况除外：
	</p>
	<p class="MsoNormal">
		1.&nbsp;在法定情形下的共享：我们可能会根据法律法规牛定、诉讼争议解决需要，或按行政、司法机关依法提出的要求，对外共享您的个人信息。
	</p>
	<p class="MsoNormal">
		2.&nbsp;在获取明确同意的情况下共享：获得您的明确同意后，我们会与其他方共享您的个人信息。
	</p>
	<p class="MsoNormal">
		3.&nbsp;在您主动选择情况下共享：您通过森态园林平台购买商品或服务，我们会根据您的选择，将您的订单信息中与交易有关的必要信息共享给相关商品或服务的提供者，以实现您的交易需求。
	</p>
	<p class="MsoNormal">
		4.&nbsp;与关联公司或指定服务商共享：为便于我们基于刷森态园林台账户向您提供产品和服务，推荐您可能感兴趣的信息，识别会员账号异常，保护森态园林平台关联公司或其他用户或公众的人身财产安全免遭侵害，您的个人信息可能会与我们的关联公司或其指定的服务提供商共享。我们只会共享必要的个人信息，且受本隐私政策中所声明目的的约束，如果我们共享您的个人敏感信息或关联公司改变个人信息的使用及处理目的，将再次征求您的授权同意。
	</p>
	<p class="MsoNormal">
		5.&nbsp;与授权合作伙伴共享：我们可能委托授权合作伙伴为您提供某些服务或代表我们履行职能，我们仅会出于本隐私权政策声明的合法、正当、必要、特定、明确的目的共享您的信息，授权合作伙伴只能接触到其履行职责所需信息，且不得将此信息用于其他任何目的。目前，我们的授权合作伙伴包括以下类型：
	</p>
	<p class="MsoNormal">
		<span>（</span>1<span>）广告、分析服务类的授权合作伙伴。我们可能与委托我们进行推广和广告投放的广告合作伙伴共享去标识化或匿名化处理后的信息。我们会向这些合作伙伴提供有关其广告覆盖面和有效性的信息，但不会提供用于识别您个人身份的信息，如姓名、身份证号等，或者我们将这些信息进行汇总，以便它不会识别您个人。这类合作伙伴可能将上述信息与他们合法获取的其他数据相结合，以进行广告或决策建议。</span>
	</p>
	<p class="MsoNormal">
		<span>（</span>2<span>）供应商、服务提供商和其他合作伙伴。我们将间息发送给支持我们业务的供应商、服务提供商和其他合作伙伴，这些支持包括提供技术基础设施服务、分析我们服务的使用方式、衡量广告和服务的有效性、提供客户服务（包括但不限于在首次进行元宝提现时逬行用户验证以及</span>森态园林卡注册时进行身份验证）、支付便利或进行学术研究和调查。<b></b>
	</p>
	<p class="MsoNormal">
		<b>我们会与之共享个人信息的公司、组织、个人约定严格的数据保护措施，要求其按照我们的说明、本隐私权政策以及其他任何相关的保密和安全措施来处理个人信息。</b><b></b>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>（二）</b><b> </b><b>转让</b>
	</p>
	<p class="MsoNormal">
		我们不会将您的个人信息转让给任何公司、组织和个人，但以下情况除外：
	</p>
	<p class="MsoNormal">
		1.<span>在获取明确同意的情况下转让：获得您的明确同意后，我们会向其他方转让您的个人信息。</span>
	</p>
	<p class="MsoNormal">
		2.<span>在涉及合并、收购或破产清算情形，或其他涉及合并、收购或破产清算情形时，如涉及到个人信息转让，我们会要求新的持有您个人信息的公司、组织继续受本政策的约束，否则我们将要求该公司、组织和个人重新向您征求授权同意。</span>
	</p>
	<p class="MsoNormal">
		3.<span>我们承诺，在需要转让的情况下我们会向您明确说明转让的目、需要转让的个人信息类型以及接收方的类型或身份。</span>
	</p>
	<p class="MsoNormal">
		<b>&nbsp;</b>
	</p>
	<p class="MsoNormal">
		<b>（三）</b><b> </b><b>公开披</b><b>露</b><b></b>
	</p>
	<p class="MsoNormal">
		我们仅会在以下情况下，公开披露您的个人信息：
	</p>
	<p class="MsoNormal">
		1.<span>获得您明确同意或基于您的主动选择，我们可能会公开披露您的个人信息。</span>
	</p>
	<p class="MsoNormal">
		2.<span>如果我们确定您出现违反法律法规或严重违反</span>森态园林平台相关协议及规则的情况，或为保护森态园林平台用户或公众的人身财产安全免遭侵害，我们可能依据法律法或征得您同意的情况下披露关于您的个人信息，包括相关违规行为以及森态园林平台已对您采取的措施。
	</p>
	<p class="MsoNormal">
		3.<span>基于法律的披露：在法律、法律程序、诉讼或政</span>府主管部门强制性要求的情况下，我们可能会公开披露您的个人信息。
	</p>
	<p class="MsoNormal">
		4.<span>我们承诺，在需要公开披露的情况下我们会向您明确说明公开披露的目的、需要披露的个人信息类型以及接收方的类型或身份。</span>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>（四）</b><b> </b><b>共享、转让、公开披</b><b>露</b><b>个人信息时</b><b>事</b><b>先征得授权同意的例外</b><b></b>
	</p>
	<p class="MsoNormal">
		在以下情形中，共享、转让、公开披露您的个人信息无需事先征得您的授权同意：
	</p>
	<p class="MsoNormal">
		1.&nbsp;与国家安全、国防安全有关的；
	</p>
	<p class="MsoNormal">
		2.&nbsp;与公共安全、公共卫生、重大公共利益有关的；
	</p>
	<p class="MsoNormal">
		3.&nbsp;与犯罪侦查、起诉、审判和判决执行等司法或行政执法有关的；
	</p>
	<p class="MsoNormal">
		4.&nbsp;出于维护您或其他个人的生命、财产等重大合法权益但又很难得到本人同意的；
	</p>
	<p class="MsoNormal">
		5.&nbsp;从合法公开披露的信息中收集个人信息的，如合耳的新闻报道、政府信息公开等渠道；
	</p>
	<p class="MsoNormal">
		6.&nbsp;您自行向社会公众公开的个人信息；
	</p>
	<p class="MsoNormal">
		7.&nbsp;经由其他有权国家司法、行政机关要求报备的。<b>根据法律规定，共享、转让经去标识化处理的个人信息，且确保数据接收方无法覆原并</b><b>重</b><b>新识别个人信息主体的，不属于个人信息的对外共享、转让及公开披露行为，对此类数据的保存及处理将无需另行向您通知并征徊您的同意。</b>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>四、</b><b>我们存储您个人信息的地点和期限</b><b></b>
	</p>
	<p class="MsoNormal">
		<b>&nbsp;</b>
	</p>
	<p class="MsoNormal">
		<b>(</b><b>一</b><b>)<span>信息存储地点</span></b><b></b>
	</p>
	<p class="MsoNormal">
		我们依照中华人民共和国的法律法规的规定，将在境内运营过程中收集和产生的您的个人信息存储于中华人民共和国境内。上述信息如需跨境运输，我们将会单独征得您的授权同意。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>(<span>二</span><span>)</span><span>存储期限</span></b><b></b>
	</p>
	<p class="MsoNormal">
		<span>我们仅在为提供</span>“森态园林"<span>及服务之目的所必需的期间内保留您的个人信息，例如，您发布的音视讯等信息、评论、点赞等信息，在您未撤回、删除或未注销账号期间，我们会保留相关信息。超出必要期限后，我们将对您的个人信息进行删除或匿名化处理，但在下列情况下，我们有可能根据法律要求，更改个人信息的存储时间：</span>
	</p>
	<p class="MsoNormal">
		1.&nbsp;为遵守适用的法律法规等有关规定；
	</p>
	<p class="MsoNormal">
		2.&nbsp;为遵守相关政府机关的要求；
	</p>
	<p class="MsoNormal">
		3.&nbsp;为遵守法院判决、裁定或其他司法程序的要求；
	</p>
	<p class="MsoNormal">
		4.&nbsp;为执行相关服务协议或本政策、维护社会公共利益，为保护我们或我们的关联公司、用户或雇员的合法权益所合理必需的用途。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>五、您的权利保障机制</b><b></b>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>(</b><b>一</b><b>)<span>访问、更正和删除您的个人信息</span></b><b></b>
	</p>
	<p class="MsoNormal">
		除法律法规规定外，您有权随时访问、更正和删除您的个人信息，具体包括：
	</p>
	<p class="MsoNormal">
		<b>1 .<span>访问个人信息</span></b><b></b>
	</p>
	<p class="MsoNormal">
		如果您希望访问或编辑您个人资料中的昵称、头像、性别、出生年月日、地区以及其他资料信息，您可以登录账户通过森态园林App<span>首页</span><span>-"</span><span>我的</span><span>"</span><span>进入我的</span>森态园林-<span>右上角</span><span>"</span><span>设置”或在</span><span>"</span><span>我的</span>森态园林"<span>界面点击</span><span>"</span><span>编辑</span><span>"</span><span>执行此类操作。</span>
	</p>
	<p class="MsoNormal">
		如果您无法通过上述路径访问该等个人信息，您可以随时通过森态园林客服通道或邮箱sentaiyuanlin1@163.com与我们取得联系。我们将及回复您的访问请求。对于您在使用我们的产品或服务过程中产生的其他个人信息，我们将根据相关安排向您提供。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>2.<span>个人信息更正</span></b><b></b>
	</p>
	<p class="MsoNormal">
		当您发现我们处理的关于您的个人信息有提示时，您有权要求我们做出更正或补充。您可以通过登录账户通过森态园林App<span>首页</span><span>-"</span><span>我的</span><span>"</span><span>进入我的</span>森态园林-<span>右上角</span><span>"</span><span>设置</span><span>"</span><span>或在“我的</span>森态园林”界面点击”编辑<span>"</span><span>执行此类操作。</span>
	</p>
	<p class="MsoNormal">
		如果您无法通过上述路编辑该等个人信息或您希望更正在使用我们产品或服务中产生的其他个
	</p>
	<p class="MsoNormal">
		人信息，您可以随时通过森态园林客服通道或邮箱sentaiyuanlin1@163.com与我们取得联系。我们将及时回复您的请求。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>3.<span>个人信息</span></b><b>删</b><b>除</b><b></b>
	</p>
	<p class="MsoNormal">
		<span>您在</span>"<span>我的</span>森态园林.<span>页面中可以直接清除或删除的信息</span><span>,</span><span>包括法律法规规定的可以删除的搜索记录信息、收藏记录信息、浏览记录信息及您</span><span>"</span><span>个人资料</span><span>"</span><span>页中的诺分个人信息。在以下情形中，您可以向我们提出删除个人信息的请求：</span>
	</p>
	<p class="MsoNormal">
		(1)&nbsp;如果我们处理个人信息的行为违反法律法规；
	</p>
	<p class="MsoNormal">
		(2)&nbsp;如果我们收集、使用您的个人信息，却未征得您的同意；
	</p>
	<p class="MsoNormal">
		(3)&nbsp;如果我们处理个人信息的行为违反了与您的约定；
	</p>
	<p class="MsoNormal">
		(4)&nbsp;如果我们终止服务及运营；
	</p>
	<p class="MsoNormal">
		(5)&nbsp;如果您决定注销账户且满足注销要求时。
	</p>
	<p class="MsoNormal">
		若我们决定响应您的信息删除请求，我们还将同时通知从我们获得您的个人信息的实体，要求其及时删除您的信息，除非法律法规另有规定，或这些实体已获得您的独立授权。当您从我们的服务中删除信息后，我们可能不会立即在备份系统中删除相应的信息，但会在备份更新时删除这些信息。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>4. <span>无法访</span></b><b>问</b><b>及更正的信息</b> 
	</p>
	<p class="MsoNormal">
		除上述列明的信息外，您的部分个人信息我们可能无法为您提供访问和更正的服务，这些信息主要是为了提升您的用户体验和保证交易安全所收集的您的设备信息、您使用附加功能时产生的个人信息。上述信息我们会在您的授权范围内进行使用，您无法访问和更正。
	</p>
	<p class="MsoNormal">
		<b><span>在您访问、修改和</span>I!<span>除相关信息时，我们可能会耍求您进行身份验证，以保障账号的安全。</span></b><b></b>
	</p>
	<p class="MsoNormal">
		<span>对于您在使用我们的产品与</span>/<span>或服务过程中产生的其他个人信息需要访问或更正，请随时联系我们，我们会根据本隐私政策所列明的方式和期限响应您的请求。</span>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>(<span>二</span><span>)</span><span>改变您授权同意的范围或撤回您的授权</span></b>&nbsp;
	</p>
	<p class="MsoNormal">
		您可以通过删除信息、关闭设备功能等方式改变您授权我们继续收集个人信息的范围或撤回您的授权。
	</p>
	<p class="MsoNormal">
		<b>请</b><b>您理解，每个业务功能需要一些基本的个人信息才能得以完成，当您撤回同意或授权后，我们无法继续为您提供撤回同意或授权所对应的服务，也不再处理您相应的个人信息。但您撤回同意或授权的决定，不会彫响此前基于您的授权而开展的个人信息处理</b>。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>(<span>三</span><span>)</span></b><b> </b><b>注销您的账号</b><b></b>
	</p>
	<p class="MsoNormal">
		我们在此善意地提醒您，您注销账户的行为是不可逆的，<b><span>您账号中的浏览记录、发布信息信息记录、上传发布的音</span>/<span>视讯内容、虚拟货币等信息在账号注销后将会被清除或对相关信息进行匿名化处理，</span></b><b>请</b><b>您审慎进行注销账号操作。</b>在您注销账号前我们将会通过合理方式验证您的个人身份、账号安全状态、设备信息等。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>1.<span>注销账户需同时满足的条件</span></b><b></b>
	</p>
	<p class="MsoNormal">
		(1)&nbsp;自愿放弃账户在森态园林<span>系统中的资产和虚拟权益</span>(<span>包括但不限于元宝、账户余额、红包、果实、优惠券等</span><span>)</span><span>；</span>
	</p>
	<p class="MsoNormal">
		(2)&nbsp;账户内无未完成的请求和服务；
	</p>
	<p class="MsoNormal">
		(3)&nbsp;账户无任何纠纷，包括投诉举报或被投诉举报；
	</p>
	<p class="MsoNormal">
		(4)&nbsp;<span>账户已经解除与其他网站、其他</span>APP<span>的授权登录或绑定关系；</span>
	</p>
	<p class="MsoNormal">
		(5)&nbsp;不存在其他森态园林认为注销可能影响平台使用安全或其他用户权益的情况。
	</p>
	<p class="MsoNormal">
		注：已被森态园林限制交易的账户，不给予账户注销服务。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>2.<span>注销账户的</span></b><b>影</b><b>响</b><b></b>
	</p>
	<p class="MsoNormal">
		(1)&nbsp;森态园林账户一旦被注销将不可恢复，请您在操作之前自行备份森态园林账户相关的所有信息和数据。
	</p>
	<p class="MsoNormal">
		(2)&nbsp;在森态园林账户注销期间，如果您的森态园林账户涉及争议纠纷，包括但不限于投诉、举报、诉讼、仲裁、国家有权机关调查等，森态园林有权自行终止本森态园林账户的注销而无需另行得到您的同意；
	</p>
	<p class="MsoNormal">
		(3)&nbsp;注销森态园林账户，您将无法再使用本森态园林账户，也将无法找回您森态园林账户中及与账户相关的任何内容或信息，包括但不限于：
	</p>
	<p class="MsoNormal">
		a.&nbsp;您将无法登录、使用本森态园林账户；
	</p>
	<p class="MsoNormal">
		b.&nbsp;本森态园林<span>账户的个人资料、历史信息</span>(<span>包括但不限于用户名、头像、浏览记录、关注信息等</span><span>)</span><span>、上传发布的音</span><span>/</span><span>视讯文件都将无法找回；</span>
	</p>
	<p class="MsoNormal">
		c.&nbsp;您通过森态园林账户使用、授权登录或绑定森态园林账户后使用的森态园林相关或第三方的其他服务的所有记录将无法找回；
	</p>
	<p class="MsoNormal">
		d.&nbsp;您将无法再登录、使用前述服务，账户中的资产及您曾获得的元宝、余额、优惠券、红包等虚拟权益视为您自行放弃，将无法继续使用。
	</p>
	<p class="MsoNormal">
		(4)&nbsp;您理解并同意，森态园林无法协助您重新恢复前述诺务。请您在提交注销申请前，务必先了解您须解绑的其他相关账户信息，具体可与我们的客服联系。
	</p>
	<p class="MsoNormal">
		(5)<span>注销该</span>森态园林账户并不代表该森态园林账户注销前的账户行为和相关责任得到豁免或减轻。
	</p>
	<p class="MsoNormal">
		<b>&nbsp;</b>
	</p>
	<p class="MsoNormal">
		(四)&nbsp;<b>响应您的</b><b>请</b><b>求</b>
	</p>
	<p class="MsoNormal">
		<span>如果您无法通过上述方式访问、更正或删除您的个人信息，或您需要访问、更正或删除您在使用我们产品与</span>/<span>或服务时所产生的其他个人信息，或您认为</span>森态园林存在任何违反法律法规或与您关于个人信息的收集或使用的约定，或您对我们规则的制定和修改有相应的建议，您可以通过森态园林<span>客服通道或通过邮箱</span> sentaiyuanlin1@163.com&nbsp;<span>与我们联系。</span>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<span>为了保障安全，我们可能需要您提供书面请求，或以其他方式证明您的身份，我们将在收到您反馈并验证您的身份后</span>15<span>天内答复您的请求。</span>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<span>对于那些无端重复、需要过多技术手段</span>(<span>例如，需要开发新系统或从根本上改变现行惯例</span><span>)</span><span>、给他人合法权益带来风险或者非常不切实际</span><span>(</span><span>例如，涉及备份磁带上存放的信息</span><span>)</span><span>的请求，我们可能会予以拒绝。在以下情形中，按照法律法规要求，我们将无法响应您的请求：</span>
	</p>
	<p class="MsoNormal">
		1.&nbsp;与我们履行法律法规规定的义务相关的；
	</p>
	<p class="MsoNormal">
		2.&nbsp;与国家安全、国防安全有关的；
	</p>
	<p class="MsoNormal">
		3.&nbsp;与公共安全、公共卫生、重大公共利益有关的；
	</p>
	<p class="MsoNormal">
		4.&nbsp;与犯罪侦查、起诉和审判等有关的；
	</p>
	<p class="MsoNormal">
		5.&nbsp;有充分证据表明您存在主观恶意或滥用权利的；
	</p>
	<p class="MsoNormal">
		6.&nbsp;出于维护个人信息主体或其他个人的生命、财产等重大合法权益但又很难得到本人同意的；
	</p>
	<p class="MsoNormal">
		7.&nbsp;涉及商业秘密的；
	</p>
	<p class="MsoNormal">
		8.&nbsp;响应您的请求将导致您或其他个人、组织的合法权益受到严重损害的。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>六、我们如何保护您的</b><b>信</b><b>息</b><b></b>
	</p>
	<p class="MsoNormal">
		（一<span>）我们已采取符合业界标准、合理可行的安全防护措施保护您的信息，防止个人信息遭到未经授权访问、公开披露、使用、修改、损坏或丢失。例如，在您的浏览器与服务器之间交换数据时受</span>SSL<span>协议加密保护；我们同时对</span>森态园林<span>网站提供</span>HTTPS<span>协议安全浏览方式；我们会使用加密技术提高个人信息的安全性；我们会使用受信赖的保护机制防止个人信息遭到恶意攻击；我们会部署访问控制机制，尽力确保只有授权人员才可访问个人信息；以及我们会举办安全和隐私保护培训课程，加强员工对于保护个人信息重要性的认识。</span>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		（二）我们有行业先进的以数据为核心、围绕数据生命周期进行的数据安全管理体系，从组织建设、制度设计、人员管理、产品技术等方面多维度提升整个系统的安全性。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		（三）我们会采取合理可行的措施，尽力避免收集无关的个人信息。我们只会在达成本政策所述目的所需的期限内保留您的个人信息（除非需要延长保留期或者法律有强制的存留要求）。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		（四）	互联网并非绝对安全的环境，使用森态园林平台服务时，我们强烈建议您不要使用非森态园林平台推荐的通信方式发送您的信息。您可以通过我们的服务建立联系和相互分享。当您通过我们的服务创建交流、交易或分享时，您可以自主选择沟通、交易或分享的对象，作为能够看到您的交易内容、联络方式、交流信息或分享内容等相关信息的第三方。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		（五）	我们将不定期更新并公开安全风险、个人信息安全影响评估报告等有关内容，您可通过森态园林平台公告方式获得。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		（六）&nbsp;在不幸发生个人信息安全事件后，我们将按照法律法规的要求向您告知：安全事件的基本情况和可能的影响、我们已采取或将要釆取的处置措施、您可自主防范和降低风险的建议、对您的补救措施等。事件相关情况我们将以邮件、信函、电话、推送通知等方式告知您，难以逐一告知个人信息主体时，我们会采取合理、有效的方式发布公告。同时，我们还将按照监管部门要求，上报个人信息安全事件的处置情况。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>在使用</b><b>森态园林</b><b>平台中的第三方服务时，您可能需要向第三方披</b><b>露</b><b>自己的个人信息，如联络方式或联系地址。请您事前仔细阅读第三方的隐私政策，审慎判断并妥善保护自己的个人信息，仅在必要的情形下向第三方提供。如您发现自己的个人信息尤其是您的账户或密码发生泄露，谪您立即联络</b><b>森态园林</b><b>平台客眼，以便我们根据您的申谪采取相应措施。</b><b></b>
	</p>
	<p class="MsoNormal">
		<b>&nbsp;</b>
	</p>
	<p class="MsoNormal">
		<b>请</b><b><span>注意，您在使用我们服务时自愿共享甚至公开分享的信息，可能会涉及您或他人的个人信息甚至个人敏感信息，如您在上传发布音</span>/<span>视讯内容及发布评论时选择上传包含个人信息的内容。</span></b><b>请</b><b>您更加适慎地考虑，是否在使用我们的服务时共享甚至公开分享相关信息。</b><b></b>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		请使用复杂密码，协助我们保证您的账号安全。我们将尽力保障您发送给我们的任何信息的安全性。如果我们的物理、技术或管理防护设施遭到破坏，导致信息被非授权访问、公开披露、篡改或毁坏，导致您的合法权益受损，我们将承担相应的法律责任。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>七、我们如何处理未成年人的信息</b><b></b>
	</p>
	<p class="MsoNormal">
		如您为未成年人，我们要求您请您的父母或监护人仔细阅读本隐私权政策，并在征得您的父母或监护人同意的前提下使用我们的服务或向我们提供信息
	</p>
	<p class="MsoNormal">
		对于经父母或监护人同意使用我们的产品或服务而收集未成年人个人信息的情况，我们只会在法律法规允许、父母或监护人明确同意或者保护未成年人所必要的情况下使用、共享、转让或披露此信息。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>八、</b><b> </b><b>本隐私政策如何更新</b>
	</p>
	<p class="MsoNormal">
		我们的隐私政策可能变更。未经您明确同意，我们不会限制您按照本隐私政策所应享有的权利。我们会在森态园林平台上发布对隐私权政策所做的变更。对于重大变更，我们还会提供更为显著的通知（包括我们会通过森态园林平台公示的方式进行通知）。此种情况下，若您继续使用我们的服务，即表示同意受经修订的隐私政策约束。
	</p>
	<p class="MsoNormal">
		本政策所指的重大变更包括但不限于：
	</p>
	<p class="MsoNormal">
		1 .&nbsp;我们的服务模式发生重大变化。如处理个人信息的目的、处理的个人信息类型、个人信息的使用方式等；
	</p>
	<p class="MsoNormal">
		2. 我们在所有权结构、组织架构等方面发生重大变化，如业务调整、破产并购等引起的所有者变更等；
	</p>
	<p class="MsoNormal">
		3.&nbsp;个人信息共享、转让或公开披露的主要对象发生变化；
	</p>
	<p class="MsoNormal">
		4.&nbsp;您参与个人信息处理方面的权利及其行使方式发生重大变化；
	</p>
	<p class="MsoNormal">
		5.&nbsp;我们负责处理个人信息安全的责任部门、联络方式及投诉渠道发生变化时；
	</p>
	<p class="MsoNormal">
		6.&nbsp;个人信息安全影响评估报告表明存在高风险时。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>九、适用范围</b><b></b>
	</p>
	<p class="MsoNormal">
		本隐私权政策适用于我们提供的所有服务（包括森态园林提供的单项服务功能），包括森态园林客户端、网站等，但不适用于非由森态园林及提供、有单独的隐私权政策且未纳入本隐私权政策的第三方产品或服务。<b>森态园林</b><b>运营者的公司名称为江苏鑫誉投资管理有限公司</b><b></b>
	</p>
	<p class="MsoNormal">
		<b>司，注册地址为：</b><b><span>盐城市迎宾南路100号国飞尚城G区联鑫购物广场幢1007室</span><span></span></b>，个人信息保护相关负责人联系方式为</span>:</b><b>sentaiyuanlin1@163.com。</b>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		本隐私权政策不适用于：
	</p>
	<p class="MsoNormal">
		1.<span>其他第三方产品或服务，可能包括在个性化推荐中向您显示的产品或网站和广告内容或者</span>森态园林服务中链接到的其他产品或网站；
	</p>
	<p class="MsoNormal">
		2. <span>为</span>森态园林服务进行广告宣传的其他第三方。	您使用这些第三方服务（包括您向这些第三方提供的任何个人信息），将受这些第三方的服务条款及隐私政策约束（而非本隐私政策），具体规定请您仔细阅读第三方的条款。谓您妥善保护自己的个人信息，仅在必要的情况下向第三方提供，我们对于任何第三方使用由您提供的信息不承担任何责任。本隐私政策中所述的森态园林及相关服务有可能会根据您所使用的手机型号、系统版本、软件应用程序版本等因素而有所不同。最终的产品和服务以您所使用的森态园林软件及相关服务为准。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		<b>十、其他</b><b></b>
	</p>
	<p class="MsoNormal">
		（一<span>）本</span>"<span>隐私政策</span><span>"</span><span>中的标题仅为方便及阅读而设，并不影响本《隐私政策》中任何规定的含义或解释。</span>
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		（二）<span>本</span>"<span>隐私政策</span><span>"</span><span>的版权为我们所有，在法律允</span>许的范围内，我们拥有解释和修改的权利。
	</p>
	<p class="MsoNormal">
		&nbsp;
	</p>
	<p class="MsoNormal">
		（三）如果您对我们的回复不满意，特别是您认为我们的个人信息处理行为损害了您的合法权
	</p>
	<p class="MsoNormal">
		益，您可以通过森态园林提供的客服通道或通过邮箱sentaiyuanlin1@163.com<span>进行申诉或者投诉，我们将在</span>15<span>天内回复处理意见或结果。同时，您还可以通过向北京市东城区人民法院提起诉讼来寻求解决方案。</span>
	</p>
</p>
           </ul>
	   </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var ua = navigator.userAgent;
	$(".shade").click(function(){
	    $('.shade,.agreement').hide();
	})
	$(".agreement-click").click(function(){
	    $(".agreement,.shade").show();
	    $(".wtd-main").css("position","fixed");
	})
    var imgCode = "";
    var chars = ['0','1','2','3','4','5','6','7','8','9'];
    $(function(){
        generateMixed();
    });
    //创建验证码
    function generateMixed(n) {
        var url = "/handle/smsRand.html";
        $.ajax({
            type : "POST",
            url : url,
            data: {key:n},
            dataType : "json",
            success : function(result){
                imgCode = result;
                $("#imgcode").html(result);
            },
            error:function(){
                $("#imgcode").html('8888');
            }
        });
    }
    //变换验证码
    $("#imgcode").click(function(){
        generateMixed();
    });
    checkPwd("pwd","pwd_show");
    checkPwd("pwd2","pwd_show2");
    $("#ifr").submit(function(){
        var phone = $("#phone").val();
        var pwd = $("#pwd").val();
        var pwd2 = $("#pwd2").val();
        var code = $("#code").val();
        var imei = $("#imei").val();
    	
        var smsCode = $("#smsCode").val();
		if(ua.indexOf("bsl") >= 0 ){
        	if(imei == ''){
	            msg("提示","请开启手机信息权限！",1);
	            BSL.PhoneID('ver');
	            return false;
        	}
        }

        
        if(phone.length != 11){
            msg("提示","请输入11位手机号码！",1);
            return false;
        }
        var myreg=/^[1][3,4,5,6,7,8,9][0-9]{9}$/;
        if (!myreg.test(phone)) {
            msg("提示","手机格式不正确！",1);
            return false;
        }
        if(pwd.length < 6 || pwd.length > 16){
            msg("提示","请输入6-16个字符的密码！",1);
            return false;
        }
        if(pwd2.length < 6 || pwd2.length > 16){
            msg("提示","请再次输入6-16个字符的密码！",1);
            return false;
        }
        if(pwd != pwd2){
            msg("提示","两次密码不一致！",1);
            return false;
        }
     
        if(code.length != 4){
            msg("提示","请输入4位图形验证码！",1);
            return false;
        }
        if(code != imgCode){
            msg("提示","图形验证码不正确！",1);
            generateMixed();
            return false;
        }
        if(smsCode.length != 4){
            msg("提示","请输入4位短信验证码！",1);
            return false;
        }        if(!$("#cheBoxTrue").is(":checked")){
			msg("提示","请阅读《用户协议与隐私政策》！",1);
			return false;
		}
    });
    function regcode(time) {
        var phone = $("#phone").val();
        var pwd = $("#pwd").val();
        var pwd2 = $("#pwd2").val();
        var code = $("#code").val();
        var smsCode = $("#smsCode").val();
        if(phone.length != 11){
            msg("提示","请输入11位手机号码！",1);
            return false;
        }
        var myreg=/^[1][3,4,5,6,7,8,9][0-9]{9}$/;
        if (!myreg.test(phone)) {
            msg("提示","手机格式不正确！",1);
            return false;
        }
        if(pwd.length < 6 || pwd.length > 16){
            msg("提示","请输入6-16个字符的密码！",1);
            return false;
        }
        if(pwd2.length < 6 || pwd2.length > 16){
            msg("提示","请再次输入6-16个字符的密码！",1);
            return false;
        }
        if(pwd != pwd2){
            msg("提示","两次密码不一致！",1);
            return false;
        }
      
        if(code.length != 4){
            msg("提示","请输入4位图形验证码！",1);
            return false;
        }
        if(imgCode == ""){
            msg("提示","请重新输入图形验证码！",1);
            generateMixed();
            return false;
        }
        if(code != imgCode){
            msg("提示","图形验证码不正确！",1);
            generateMixed();
            return false;
        }
        var btn = $("#getcode");
        var url = "/handle/zhuce.html";
        $.ajax({
            type : "POST",
            url : url,
            data: {phone:phone,code:imgCode},
            dataType : "json",
            success : function(result){
                if(result[0]==1){
                    msg("提示","发送成功！",1);
                    btn.addClass("on");
                    btn.attr("disabled", true);  //按钮禁止点击
                    btn.text(time <= 0 ? "发送" : ("" + (time--) + "s"));
                    var hander = setInterval(function() {
                        if (time <= 0) {
                            generateMixed();
                            clearInterval(hander); //清除倒计时
                            btn.text("发送");
                            btn.removeClass("on");
                            btn.attr("disabled", false);
                            return false;
                        }else {
                            btn.text("" + (time--) + "s");
                        }
                    }, 1000);
                }else{
                    generateMixed();
                    if(result[0] == -1){
                        msg("提示",result[1],2,window.location.href);
                    }
                    else if(result[0] == -2){
                        generateMixed();
                        msg("提示",result[1],1);
                    }
                    else{
                        msg("提示",result[1],1);
                    }
                    //alert(result[1]);//result[0]不等于等于1代表提示，result[1]代表提示理由
                }
            },
            error:function(){
                msg("提示","系统繁忙，发送失败！",1);
            }
        });
    }</script>
<script type="text/javascript">
	if(ua.indexOf("bsl") >= 0 ){
		function appFinishiLoad() {
			//写要自动运行的JS，如横屏
			BSL.PhoneID('ver'); //横屏
	    }  
		
		function ver(r){
			$("#imei").attr("value",r);
			//alert(r);
		}
	}
	
	
</script>


</body>
</html>