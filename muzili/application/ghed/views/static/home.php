<!DOCTYPE html>
<html>
<head>
<title>国翰</title>
<link rel="shortcut icon" href="favicon.ico">
<meta charset="utf-8">

<?php
$css_dir = get_css_path ();
$js_dir = get_js_path ();
$img_dir = get_img_path ();
?>
<link href="<?php echo $css_dir;?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $css_dir;?>common.css" rel="stylesheet">
<link href="<?php echo $css_dir;?>home.css" rel="stylesheet">
</head>

<body>
	<header id="the_header">
		<div class="wrap">
			<a href="#" id="logo"><img
				src="<?php echo $img_dir;?>gh_logo.png" alt="SolarCity"></a>
			<ul class="menu">
				<li class="first expanded"><a href="/ghstatic/tesla">充电桩</a></li>
				<li class="expanded"><a href="/ghstatic/solar">分布式发电</a></li>
				<!-- <li class="leaf"><a href="/invest">储能</a></li>  -->
				<li class="expanded"><a data-toggle="modal" data-target="#gh_contact">联系我们</a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</header>

	<div id="site_wrapper" class="container">
		<div class="row" id="nav_bar">
			<div
				class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10">

				<!--<div class="row" id="nav_group">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<button type="button" class="btn btn-default">
							<a href="/application/ghed/views/tesla.html">新能源汽车</a>
						</button>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<button type="button" class="btn btn-default">
							<a href="/application/ghed/views/solar.html">光伏发电</a>
						</button>
					</div> 
					<div class="col-md-4 col-sm-4 col-xs-4">
						<button type="button" class="btn btn-default">
							<a href="/application/ghed/views/accenture_home.html">企业咨询</a>
						</button>
					</div>
				</div> -->
				<div class="row" id="nav_group">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<a href="ghstatic/tesla" class="btn btn-default btn-lg"
							role="button">新能源汽车充电桩</a>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<a href="ghstatic/solar" class="btn btn-default btn-lg "
							role="button">分布式发电</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="container">
		<div id="the_footer">
			<span>Copyright © 2015 国翰能源 Inc. 渝ICP备xxxxxx号</span>
		</div>
	</footer>

	<script src="<?php echo $js_dir;?>jquery-1.11.1.min.js"></script>
	<script src="<?php echo $js_dir;?>bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var hw = window.innerHeight;
			var hd = document.body.scrollHeight;
			if (hd <= hw) {
				var footer = $('#the_footer');
				var offset = footer.offset();
				var h = footer.outerHeight();
				footer.css('margin-top', hw - offset.top - h);
			}
		});
	</script>

	<!-- Modal -->
	<div class="modal fade" id="gh_contact" role="dialog"
		aria-labelledby="myModalLabel" aria-hidden="true" style="padding-top: 70px;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">联系方式</h4>
				</div>
				<div class="modal-body" style="text-align: left; margin: 30px; ">
					<p>电话：</p>
					<p>邮箱：</p>
					<p>地址：</p>
				</div>
<!-- 				<div class="modal-footer"> -->
<!-- 				</div> -->
			</div>
		</div>
	</div>

</body>
</html>