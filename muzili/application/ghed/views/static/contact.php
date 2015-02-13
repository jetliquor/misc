<!DOCTYPE html>
<html>
<head>
	<title>国翰 | 联系</title>
	<link rel="shortcut icon" href="favicon.ico">
	<meta charset="utf-8">
	
<?php
$css_dir = get_css_path ();
$js_dir = get_js_path ();
$img_dir = get_img_path ();
?>
<link href="<?php echo $css_dir;?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $css_dir;?>common.css" rel="stylesheet">
<link href="<?php echo $css_dir;?>contact.css" rel="stylesheet">
</head>

<body>
	<header id="the_header">
		<div class="wrap">
			<a href="#" title="SolarCity" id="logo"><img
				src="<?php echo $img_dir;?>gh_logo.png" alt="SolarCity"></a>
			<ul class="menu">
				<li class="first expanded"><a href="/ghstatic/tesla">充电桩</a></li>
				<li class="expanded"><a href="/ghstatic/solar">分布式发电</a></li>
				<!-- <li class="leaf"><a href="/invest">储能</a></li>  -->
				<li class="expanded"><a href="/ghstatic/contact">联系我们</a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</header>
	
	<div id="the_content" class="container">
	<p>电话：</p>
	<p>邮箱：</p>
	<p>地址：</p>
	</div>
	
	<footer class="container" style="margin-top: 220px">
		<div id="the_footer">
			<span>Copyright © 2015 国翰能源 Inc. 渝ICP备xxxxxx号</span>
		</div>
	</footer>

	<script src="<?php echo $js_dir;?>jquery-1.11.1.min.js"></script>
	<script	src="<?php echo $js_dir;?>bootstrap.min.js"></script>
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