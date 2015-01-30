<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>LSS</title>
<link rel="stylesheet"
	href="<?php echo $this->config->config['base_url'].'css/idangerous.swiper.css';?>">
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
				<img alt="1"
					src="<?php echo $this->config->config['base_url'].'assets/img/5.jpg';?>">
			</div>
			<div class="swiper-slide">
				<img alt="2"
					src="<?php echo $this->config->config['base_url'].'assets/img/1.jpg';?>">
			</div>
			<div class="swiper-slide">
				<img alt="3"
					src="<?php echo $this->config->config['base_url'].'assets/img/2.jpg';?>">
			</div>
			<div class="swiper-slide">
				<img alt="4"
					src="<?php echo $this->config->config['base_url'].'assets/img/3.jpg';?>">
			</div>
			<div class="swiper-slide">
				<img alt="5"
					src="<?php echo $this->config->config['base_url'].'assets/img/4.jpg';?>">
			</div>
		</div>
		<div class="pagination"></div>
	</div>

	<script
		src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

	<script
		src="<?php echo $this->config->config['base_url'].'js/idangerous.swiper.min.js';?>"></script>

	<script type="text/javascript">
	$(document).ready(function(){
 		$('.swiper-container').css({"width":window.innerWidth,"height":window.innerHeight});
 		$('swiper-slide').css({"width":window.innerWidth,"height":window.innerHeight});
 		$('img').css({"width":window.innerWidth,"height":window.innerHeight,"vertical-align":"middle"});
 		//$('img').addClass("slideImg");
	});
	var mySwiper = new Swiper('.swiper-container',{ pagination:
	'.pagination', paginationClickable: true, mode: 'vertical', grabCursor: true });
	</script>
</body>
</html>