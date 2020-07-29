<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:32:"../template/mobile/giftlist.html";i:1595536995;}*/ ?>
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
		@keyframes fromto-smallbig {
			0% {
				transform: scale(1);
			}

			50% {
				transform: scale(1);
			}

			65% {
				transform: scale(1.1) rotate(0deg);
			}

			60% {
				transform: scale(1.1) rotate(5deg);
			}

			65% {
				transform: scale(1.1) rotate(0deg);
			}

			70% {
				transform: scale(1.1) rotate(-5deg);
			}

			75% {
				transform: scale(1.1) rotate(0deg);
			}

			80% {
				transform: scale(1.1) rotate(5deg);
			}

			85% {
				transform: scale(1.1) rotate(0deg);
			}

			100% {
				transform: scale(1);
			}
		}

		.bg {}

		.bg1 {
			width: 100%;
		}

		.main {
			margin-bottom: 10px;
		}

		.title {
			color: #777;

			margin-top: 10px;
			margin-bottom: 10px;
			margin-left: 10px;
		}

		.marquee-box {
			padding-left: 5px;
			padding-right: 5px;
		}

		.marquee-box img {
			width: 32px;
		}

		.marquee-box a {
			color: red;
			font-size: 14px;
		}

		.col-xs-6 {
			padding-left: 5px;
			padding-right: 5px;
		}

		.panel {
			margin-bottom: 10px;
		}

		.panel-body {
			padding: 3px;
		}

		.panel-footer {
			font-size: 16px;
			padding: 5px;
		}

		.right-btn {
			position: absolute;
			top: 15px;
			right: 40px;

			animation: fromto-smallbig 3s infinite;
			animation-duration: 3s;
			animation-delay: 3s;
		}

		.right-btn img {
			width: 48px;
			height: 48px;
		}

		.left-btn {
			position: absolute;
		}

		.left-btn img {
			width: 32px;
			height: 32px;
			margin-right: 5px;
		}

		.button1 {
			top: 15px;
			left: 15px;
		}

		.button1 img {
			animation: fromto-smallbig 3s infinite;
			animation-duration: 3s;
			animation-delay: 0s;
		}

		.button2 {
			top: 65px;
			left: 15px;
		}

		.button2 img {
			animation: fromto-smallbig 3s infinite;
			animation-duration: 3s;
			animation-delay: 1s;
		}

		.button3 {
			top: 110px;
			left: 15px;
		}

		.button3 img {
			animation: fromto-smallbig 3s infinite;
			animation-duration: 3s;
			animation-delay: 2s;
		}

		.button4 {
			left: 15px;
		}

		.button4 img {
			animation: fromto-smallbig 3s infinite;
			animation-duration: 3s;
			animation-delay: 2s;
			width: 48px;
			height: 48px;
		}

		.tree {
			width: 66%;
			position: absolute;
			left: 17%;
		}

		body {
			background: #fff
		}
	</style>



	<div class="main">
		<h3 class="title">果园欢乐</h3>
		<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<div class="col-xs-6  ">
				<div class="panel panel-default  ">
					<div class="panel-body  ">
						<image src="<?php echo $vo['avaimage']; ?>" width="100%" height="100%">
					</div>
					<!-- /.panel-body -->
					<div class="panel-footer">
						<?php echo $vo['title']; ?>
						<div class="form-group input-group"
							style="margin-top:5px;margin-bottom:5px;margin-left:2%;margin-right:2%; ">
							<input type="text" class="form-control" style="height: 26px;" value="<?php echo $vo['price']; ?>果实"
								id="num_<?php echo $vo['id']; ?>" readonly="readonly">
							<span class="input-group-btn">
								<button class="btn btn-info" type="button" style="padding:2px 15px"
									onclick="gift($(this).attr('data'))"
									data='{"id":"<?php echo $vo['id']; ?>","image":"\/sp\/i\/upload\/29845c17467586999d8bc91088c3c078.png","name":"<?php echo $vo['title']; ?>","credit":"<?php echo $vo['price']; ?>","state":"0","can_many":"0","invest_day":"0","invest_money":"0","url":"","normal_show":"0","voucher_amount":"0","voucher_min":"0","ord":"149","canget":"0"}'>兑换
								</button>
							</span>
						</div>
					</div>
				</div>
				<!-- /.panel -->
			</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>


	</div>
	<script>

		function gotoUrl(url) {
			window.parent.location.href = url;
		}
		function login(show = true) {
			if (show) {
				layer.alert("请先登陆！", { "title": "" }, function (index) {
					layer.close(index);
					window.parent.location.href = "/mobile/login.html";
				});
			} else {
				window.parent.location.href = "/mobile/login.html";
			}
		}

		<?php if($user['id'] > 0): ?>
			function gift(data) {


				var data=JSON.parse(data);

		layer.confirm('确定消耗'+ data.credit +'个果实兑换'+data.name+'吗？',{"title":""}, function(index){
				layer.close(index);
			$.post("<?php echo APPHOST; ?>/user/getgift",{'id':data.id },function(rs){
				if(rs.code==1)
				{
				layer.alert(rs.msg, { "title": "" }, function (index) {
					layer.close(index);
				});
				}else{
				layer.alert(rs.msg, { "title": "" }, function (index) {
					layer.close(index);
				});
				}
			});
		});

}

	<?php endif; ?>





	</script>

</body>

</html>