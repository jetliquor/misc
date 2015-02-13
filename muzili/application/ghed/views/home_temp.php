<!DOCTYPE html>
<html>
<head>
<title>国翰</title>
<link rel="shortcut icon" href="<?php echo '/'.APPPATH.'favicon.ico'?>">
<meta charset="utf-8">
<link href="<?php echo get_css_path();?>common.css" rel="stylesheet">
<link href="<?php echo get_css_path();?>home_temp.css" rel="stylesheet">
<link
	href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"
	rel="stylesheet">
</head>

<body>
	<div id="the_header">
		<div class="wrap">
			<a href="/" title="SolarCity" id="logo"><img
				src="/application/ghed/img/gh_logo.png" alt="SolarCity"></a>
			<ul class="menu">
				<li class="first expanded"><a href="/residential">充电桩</a></li>
				<li class="expanded"><a href="/commercial">分布式发电</a></li>
				<li class="leaf"><a href="/invest">储能</a></li>
				<li class="expanded"><a href="/company">联系我们</a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
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
						<button type="button" class="btn btn-default">
							<a href="/application/ghed/views/tesla.html">新能源汽车充电桩</a>
						</button>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<button type="button" class="btn btn-default">
							<a href="/application/ghed/views/solar.html">分布式发电</a>
						</button>
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

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script
		src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
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
</body>
</html>