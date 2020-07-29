<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:26:"../template/mobile/sp.html";i:1595796140;}*/ ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>森态园林</title>	  
	<link href="/sp/i/sb/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">  
	<link href="/sp/i/sb/dist/css/sb-admin-2.css" rel="stylesheet">  
	<script src="/sp/i/tree/js/jquery-3.2.1.js"></script>
	<script src="/sp/i/sb/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/sp/i/layer/layer.js"></script>	
	<style> 
	</style>
</head>
<body>
 <style>
@keyframes fromto-smallbig{
0%{transform:scale(1);}
50%{transform:scale(1);}
65%{transform:scale(1.1) rotate(0deg);}
60%{transform:scale(1.1) rotate(5deg);}
65%{transform:scale(1.1) rotate(0deg);}
70%{transform:scale(1.1) rotate(-5deg);}
75%{transform:scale(1.1) rotate(0deg);}
80%{transform:scale(1.1) rotate(5deg);}
85%{transform:scale(1.1) rotate(0deg);}
100%{transform:scale(1);}
}
	.bg{
	 
	}
	.bg1{
		 width: 100%; 
	}
	.main{
		margin-bottom:10px;
	}
	.title{
		color: #777;
		 
		margin-top:10px;
		margin-bottom:10px;
		margin-left:10px;
	}
	.marquee-box{ 
		padding-left:5px;
		padding-right:5px;
	}
	.marquee-box img{
		width:32px;
	}
	.marquee-box a{
		color:red;
		font-size: 14px;
	}
	.col-xs-6{
		padding-left:5px;
		padding-right:5px;
	}
	.panel{
		margin-bottom:10px;
	}
	.panel-body{
		padding:3px;
	}
	.panel-footer{
		font-size: 16px;
		padding:5px;
	}
	
	.right-btn{
		position: absolute;
		top:60px;
		right:15px;
		
		animation: fromto-smallbig 3s infinite; 
		animation-duration: 3s;		
		animation-delay: 3s;
	}
	.right-btn img{
		width:48px;
		height:48px;
	}
	
	.left-btn{
		position: absolute;
	}
	.left-btn img{
		width:48px;
		height:48px;
		margin-right:5px;
    }
	.button1{
		top: 30px;
		left: 15px;			
	}
	.button1 img{
		animation: fromto-smallbig 3s infinite; 
		animation-duration: 3s;		
		animation-delay: 0s;
	}
	.button2{
		top: 90px;
		left: 15px;	
	}
	.button2 img{
		animation: fromto-smallbig 3s infinite; 
		animation-duration: 3s;		
		animation-delay: 1s;
	}
	.button3{
		top: 160px;
		left: 15px;	
	}
	.button3 img{
		animation: fromto-smallbig 3s infinite; 
		animation-duration: 3s;		
		animation-delay: 2s;
	}
	.button4{ 
		left: 15px;	
	}
	.button4 img{
		animation: fromto-smallbig 3s infinite; 
		animation-duration: 3s;		
		animation-delay: 2s;
		width:48px;
		height:48px;
	}
	.button5{  
		right:15px;	
	}
	.button5 img{
		animation: fromto-smallbig 3s infinite; 
		animation-duration: 3s;		
		animation-delay: 2s;
		width:48px;
		height:48px;
	}
	.button6{  
		right:15px;	
	}
	.button6 img{
		animation: fromto-smallbig 3s infinite; 
		animation-duration: 3s;		
		animation-delay: 2s;
		width:48px;
		height:48px;
	}
	.tree{
		width: 66%;		 
		position: absolute;
		left:17%;
	} 
	.progress{
		height: 12px;
	}
	 
</style> 
<div class="dropdown open" style="width:100%;display:none" id="task"> 
	
	<!-- /.dropdown-tasks -->
</div>

<div class="tree-list" style="display:none;margin-top:5px;">            
			<div class="col-xs-4" onclick="getTree($(this).attr('data'))" data='{"id":"1","image":"\/sp\/i\/upload\/400b2f815f30a3dfb77acd00dbf9b5e0.png","name":"\u82f9\u679c\u6811","need_day":"5","max_credit":"115","min_credit":"100","expire":"2099-11-30"}'>
			<div class="panel panel-default"> 
				<div class="panel-body">
					<img width="100%" src="/sp/i/upload/400b2f815f30a3dfb77acd00dbf9b5e0.png">
				</div>
				<div class="panel-footer">
					苹果树 <br>5天
				</div>
			</div>
		</div> 
			<div class="col-xs-4" onclick="getTree($(this).attr('data'))" data='{"id":"2","image":"\/sp\/i\/upload\/88bfcc7b34fbb758b741536ec6eb9a07.png","name":"\u7ea2\u53f6\u6811","need_day":"10","max_credit":"250","min_credit":"220","expire":"2099-12-31"}'>
			<div class="panel panel-default"> 
				<div class="panel-body">
					<img width="100%" src="/sp/i/upload/88bfcc7b34fbb758b741536ec6eb9a07.png">
				</div>
				<div class="panel-footer">
					红叶树 <br>10天
				</div>
			</div>
		</div> 
			<div class="col-xs-4" onclick="getTree($(this).attr('data'))" data='{"id":"3","image":"\/sp\/i\/upload\/644ef76c216779c09bc6ab595214100a.png","name":"\u6995\u6811","need_day":"30","max_credit":"1500","min_credit":"1300","expire":"2099-12-31"}'>
			<div class="panel panel-default"> 
				<div class="panel-body">
					<img width="100%" src="/sp/i/upload/644ef76c216779c09bc6ab595214100a.png">
				</div>
				<div class="panel-footer">
					榕树 <br>30天
				</div>
			</div>
		</div> 
			<div class="col-xs-4" onclick="getTree($(this).attr('data'))" data='{"id":"4","image":"\/sp\/i\/upload\/3827b3bf5abec7c28881c2d77a146b31.png","name":"\u94f6\u674f\u6811","need_day":"20","max_credit":"800","min_credit":"600","expire":"2099-12-31"}'>
			<div class="panel panel-default"> 
				<div class="panel-body">
					<img width="100%" src="/sp/i/upload/3827b3bf5abec7c28881c2d77a146b31.png">
				</div>
				<div class="panel-footer">
					银杏树 <br>20天
				</div>
			</div>
		</div> 
	 
</div>


<div class="main">
	<div class="bg"> 		
		<img src="/sp/i/upload/f86d3ba48845d12d4805ff7ce3e92be1.gif"  class="bg bg1"> 
					<img src="/sp/i/upload/8f5daf0a670941cc0c5ddd2410824418.gif" class="tree" > 			
			</div>
	
	<div class="left-btn button1">
		<img src="/sp/i/upload/5e5e4a16c81487cb8b6f9965ba5b8636.png">
		<span style="display:none;color:#FF6600;"><?php echo $user['guoshi']; ?>个</span>
	</div>
	<div class="left-btn button2">
		<img src="/sp/i/upload/c36805c72b879f826ecabb5b5d4ff596.png">
		<span style="display:none;color:#FF6600;">  <?php echo $jscs; ?>次</span>
	</div>
       
 <div class="left-btn button3">
		<img src="/sp/i/upload/c3381875d2e6e0ee984393221abe79da.png" onclick="gotoUrl('/about/details/id/1.html')"> 
	</div> 
	
	<div class="left-btn button4">
		<img src="/sp/i/upload/57408de8cc850713ff69de192306ca72.png" onclick="getMylist()"> 
	</div>
	<div class="right-btn">
		<!--浇水 什么都没 摘取-->
		<!--树苗-->
		<img src="/sp/i/upload/0dd0f749e4245c60e49be9459be5557c.png" onclick="watering()">
	</div>
	 
	<div class="right-btn button5">
		 <img src="/sp/i/upload/d6c66f7a818343e0569e66abe1026fe5.png" onclick="showTask()">  
	</div> 
    
      <div class="right-btn button6" style="display: none;">
		 <img src="/sp/i/upload/26af0ce6e32d53b239a87be7dda635e3.png" onclick="openGame()">  
	</div> 
</div>

<script>
	
	$(function(){
		 console.log($(".main").height())
		 console.log($('.button4').height())
		 setTimeout("$('.tree').css('top',$('.main').height()-$('.tree').height()-30);",1000);
		 setTimeout("$('.tree').css('top',$('.main').height()-$('.tree').height()-30);",2000);
		 setTimeout("$('.tree').css('top',$('.main').height()-$('.tree').height()-30);",5000);
		$('.tree').css("top",$(".main").height()-$('.tree').height()-30);
		$('.button4').css("top",$(".main").height()-$('.button4').height()-50);
		$('.button5').css("top",$(".main").height()-$('.button5').height()+310);
		$('.button6').css("top",$(".main").height()-$('.button5').height()+380);
	});
	$(window).resize(function(){
		$('.tree').css("top",$(".main").height()-$('.tree').height()-30);
		$('.button4').css("top",$(".main").height()-$('.button4').height()-50);
		$('.button5').css("top",$(".main").height()-$('.button5').height() + 310);
		$('.button6').css("top",$(".main").height()-$('.button5').height() + 380);
	});
</script>

<div class="clearfix"></div>
<div class="col-xs-12 marquee-box ">
	<div class="panel panel-default  ">                       
		<div class="panel-body  ">
		<div  style="float: left;    width: .5rem; ">
		<img src="/Public/mobile/img/notice.png" >
		</div>
		<div style="    width: 90%;    overflow: hidden; color:red;       margin-top: 5px;  float: right;">
		<marquee scrollamount="3">
				
				
<a><?php echo $site['notice']; ?></a>
				
            </marquee>
		</div>	
		</div>
	</div>
</div>
<h3 class="title">果园欢乐</h3>
  <div class="col-xs-6  " onclick="gotoUrl('/mobile/box/id/1.html')">
	<div class="panel panel-default  ">                       
		<div class="panel-body  ">
			<image src="/sp/i/upload/4a72b6965e71d712b8381670c9b9c933.jpg" width="100%" height="100%">
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.panel -->
</div>
 <div class="col-xs-6  " onclick="gotoUrl('/mobile/box/id/1.html')">
	<div class="panel panel-default  ">                       
		<div class="panel-body  ">
			<image src="/sp/i/upload/afa9668455a1d9578ee15c592a946f3b.png" width="100%" height="100%">
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.panel -->
</div>
 <div class="col-xs-6  " onclick="gotoUrl('/mobile/box/id/1.html')">
	<div class="panel panel-default  ">                       
		<div class="panel-body  ">
			<image src="/sp/i/upload/86eb3c1d9af7721b7305793eaf08e306.png" width="100%" height="100%">
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.panel -->
</div>
 <div class="col-xs-6  " onclick="gotoUrl('/mobile/box/id/1.html')">
	<div class="panel panel-default  ">                       
		<div class="panel-body  ">
			<image src="/sp/i/upload/db3a8182fa901497de6b9e69eb160577.png" width="100%" height="100%">
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.panel -->
</div>
 
 <div class="clearfix"></div>
 <h3 class="title"></h3>
  

<script>
// function getNotice()
// {
// 	$.get("http://www.zhijianquyou.com/sp/main/getnotice",function(rs){ 
// 		var str='';
// 		 for(i in rs)
// 		 {
// 			str=str+rs[i].text +'      ';
// 		 } 
		 
// 		$("marquee").text(str);
// 		//20秒后重新获取
// 		setTimeout('getNotice()',20000);
// 	});
// }
// getNotice();
function getMylist()
{
			login();
	}
function getTree(data)
{
	data=JSON.parse(data);
	layer.confirm('确定领取 '+data.name+' 吗？',{"title":""}, function(index){
		layer.close(index);
		$.post("http://www.zhijianquyou.com/sp/main/getTree",{'id':data.id},function(rs){
			if(rs.result==1)
			{
				layer.alert('领取成功！',{"title":""},function(){
					location.reload();
				});
			}else{
				layer.alert(rs.info,{"title":""},function(index){
					layer.close(index);
				});
			}
		}); 
	});
}
function showTree()
{
	layer.open({
	  type: 1,
	  skin: 'layui-layer-rim', //加上边框
	  title:'',
	  content:$(".tree-list")
	});
}
function getcredit()
{
			login();
	}
function watering() {
	 <?php if($islogin == 0): ?>
		login()
		return;
		<?php endif; ?>
		$.post("<?php echo APPHOST; ?>/user/watering", function (rs) {
			if (rs.code == 1) {
				layer.alert('浇水成功！', { "title": "" }, function (index) {
					layer.close(index);
					location.reload();
				});
			} else {
				layer.alert(rs.msg, { "title": "" }, function (index) {
					layer.close(index);
				});
			}
		});
	}
function gotoUrl(url)
{
	window.parent.location.href=url;
}
function login(show=true)
{
	if(show)
	{
		layer.alert("请先登陆！",{"title":""},function(index){
					layer.close(index);
					window.parent.location.href="/mobile/login.html";
				});
	}else{
		window.parent.location.href="/mobile/login.html";
	}
}
function showTask()
{
	<?php if($islogin == 0): ?>
		login()
		return;
		<?php endif; ?>
		$.get("<?php echo APPHOST; ?>/mobile/task", function (rs) {
		$('#task').empty();
		$('#task').append(rs);
		layer.open({
			anim: 2,
			shadeClose: true,
			type: 1,
			area: ['90%', '320px'],
			offset: 'b',
			title: '<p style="width:100%;text-align:center;font-weight:bold;font-size:150%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;任务列表</p>',
			content: $('#task')
		});
	});
	}
function openGame()
{
			<?php if($islogin == 0): ?>
		login()
		return;
		<?php endif; ?>
			window.parent.location.href = "/mobile/box1/id/2.html";
	}
function getTaskReward(emt,id)
{
	$.post("<?php echo APPHOST; ?>/mobile/reward",{id:id},function(rs){
		$(emt).parents('li').remove();
		layer.alert(rs.msg);
	});
	
}
	<?php if($islogin == 0): ?>
		$(function(){
			$(".button1").click(function () {
				login();
			});
			$(".button2").click(function(){
			login();
			});
			$(".tree").click(function(){
			login();
			});
	});	
	<?php else: ?>
	$(function(){
			$(".button1").click(function () {
				$(this).find("span").fadeToggle();
			});
			$(".button2").click(function(){
			$(this).find("span").fadeToggle();
			});
			// $(".tree").click(function(){
			// $(this).find("span").fadeToggle();
			// });
	});	
	<?php endif; ?>

</script>
 
</body>
</html>