<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>LSS</title>
<link rel="shortcut icon" href="<?php echo '/'.APPPATH.'favicon.ico'?>">
<link rel="stylesheet"
	href="<?php echo get_css_path().'idangerous.swiper.css';?>">
<style>
/* Demo Styles */
body {
	margin: 0;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	line-height: 1.5;
}

.swiper-container {
	color: #fff;
}

.swiper-slide {
	overflow: hidden;
	vertical-align: middle;
	align-content: center;
	border: 1px solid;
	text-align: center;
}

.swiper-slide img {
	vertical-align: middle;
}

.slideImg {
	vertical-align: middle;
}

.pagination {
	position: absolute;
	z-index: 20;
	left: 10px;
	top: 10px;
}

.swiper-pagination-switch {
	display: block;
	width: 8px;
	height: 8px;
	border-radius: 8px;
	background: #555;
	margin: 0 0px 5px;
	opacity: 0.8;
	border: 1px solid #fff;
	cursor: pointer;
}

.swiper-active-switch {
	background: #fff;
}
</style>
</head>
<body>
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img alt="1" src="<?php echo get_img_path().'5.jpg';?>">
			</div>
			<div class="swiper-slide">
				<img alt="2" src="<?php echo get_img_path().'1.jpg';?>">
			</div>
			<div class="swiper-slide">
				<img alt="3" src="<?php echo get_img_path().'2.jpg';?>">
			</div>
			<div class="swiper-slide">
				<img alt="4" src="<?php echo get_img_path().'3.jpg';?>">
			</div>
			<div class="swiper-slide">
				<img alt="5" src="<?php echo get_img_path().'4.jpg';?>">
			</div>
		</div>
		<div class="pagination"></div>
	</div>

	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

	<script src="<?php echo get_js_path().'idangerous.swiper.min.js';?>"></script>

	<script type="text/javascript">
	$(window).load(function() {
		refreshImgs();
	});

	$(window).resize(function() {
		refreshImgs();
	});

	function refreshImgs() {
 		$('.swiper-container').css({"width":window.innerWidth,"height":window.innerHeight});
 		$('swiper-slide').css({"width":window.innerWidth,"height":window.innerHeight});
 		var ww = window.innerWidth;
 		var wh = window.innerHeight;
 		var w, h, f;
 		$('img').each(function() {
 	 		w = $(this).width();
 	 		h = $(this).height();
 	 		f = Math.min(ww / w, wh / h);
 	 		$(this).css({"width" : w*f,"height" : h*f,"margin-top" : (wh-h*f)/2});
 		});
	}
	var mySwiper = new Swiper('.swiper-container',{ pagination:
	'.pagination', paginationClickable: true, mode: 'vertical', grabCursor: true });

	</script>
</body>
</html>