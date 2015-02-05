<html>
<head>
<title>国翰</title>
<link rel="shortcut icon" href="<?php echo '/'.APPPATH.'favicon.ico'?>">
<meta charset="utf-8">
<link href="<?php echo get_css_path();?>home_temp.css" rel="stylesheet">
<link
	href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"
	rel="stylesheet">
</head>

<body>
	<div id="site_wrapper" class="container">
		<header id="the_header">
			<a class="navbar-brand" href=""><img id="img_logo" title="logo"
				src="/application/ghed/img/gh_logo.png"></a>
		</header>
		<div class="row" id="nav_bar">
			<div
				class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10">
				<div class="row" id="nav_group">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<button type="button" class="btn btn-default">
							<a href="/application/ghed/views/tesla_home.html">新能源汽车</a>
						</button>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<button type="button" class="btn btn-default">
							<a href="/application/ghed/views/solarcity_home.html">光伏发电</a>
						</button>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<button type="button" class="btn btn-default">
							<a href="/application/ghed/views/accenture_home.html">企业咨询</a>
						</button>
					</div>
				</div>
			</div>
		</div>

		<footer id="the_footer">
		<span>Copyright © 2015 Guohan Energy, Inc. 渝ICP备xxxxxx号</span></footer>

		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script
			src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			var hw = window.innerHeight;
			var hd = document.body.offsetHeight;
			if (hd <= hw) {
				var footer = $('#the_footer');
				footer.css('margin-top', hw - footer[0].offsetTop - footer[0].offsetHeight);
			}
		});
		</script>
	</div>
</body>
</html>