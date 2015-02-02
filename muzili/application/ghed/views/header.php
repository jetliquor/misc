<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!-- <html lang="zh_cn"> -->
<html class="html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="<?php echo get_css_path().'bootstrap.min.css'?>" rel="stylesheet" media="screen">
<link href="<?php echo get_css_path().'bootstrap.min_new1.css'?>" rel="stylesheet" media="screen">
<link href="<?php echo get_css_path().'home_page.css'?>" rel="stylesheet" media="screen">

</head>

<!-- <body> -->
<body class="" id="page-homepage">
	<!-- 导航栏  -->
	<div class="container" id="top">
		
			<a id="mailto" href="mailto:#">guohan@163.com</a>
		
		
			<a class="" id="english" href="#"><p class="text-right">English</p></a>
		
	</div>
	<div class="container" id="navbar">
		<nav class="navbar navbar-default navbar-inverse1" id="navbar-left" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="">
				<a class="navbar-brand" href=""><img id="img_logo" title="logo" src="<?php echo get_img_path().'gh_logo.png'?>"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse1 navbar-collapse" id="caidan">
				<ul class="nav navbar-nav navbar-midlle1">
					<li class="guangfu_li" id="guangfu_li"><a href="/index.php/guangfu" class="dropdown-toggle1" id="taiyangneng"
						data-toggle="dropdown1"><p class="text-center">太阳能</p></a>
					</li>
					<li class="guangfu_li"><a href="#" class="dropdown-toggle1" id="diandongqiche"
						data-toggle="dropdown1"><p class="text-center">电动汽车</p></a>
					</li>
					
					<li class="guangfu_li"><a href="#" class="dropdown-toggle1" id="qiyezixun"
						data-toggle="dropdown1"><p class="text-center">企业咨询</p></a>
					</li>
					<li class="guangfu_li"><a href="#" id="jishuzhichi"><p class="text-center">技术支持</p></a></li>
					<li class="guangfu_li"><a href="#callback"	class="cb-trigger" data-toggle="modal" id="lianxiwomen"><p class="text-center">联系我们</p></a></li>
					
					<li class="guangfu_li"><a href="#" id="jiaruwomen"><p class="text-center">加入我们</p></a></li>
					
				</ul>			
			</div>
			<!-- /.navbar-collapse -->
		</nav>
	</div>
	<!-- /导航栏  -->	
	
	<!-- callback -->
	<div class="modal" id="callback" style="top1: 8%;">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- header -->
				<div class="modal-header">
					<a class="close" data-dismiss="modal">x</a>
					<p class="form-title1" style="">要求电话回拨</p>
				</div>
				<!-- /header -->
				<form action="#" accept-charset="UTF-8" method="post" id="">
					<!-- body -->
					<div class="modal-body our_contact">
						<div class="row-fluid">
							<div class=col-lg-5>
								<div class="form-group">
									<h4>如何联系我们 </h4>
									<p>电话：</p>
									<p>023-636*****</p>
									<p>邮箱：</p>
									<p>
									<address>
									<a href="mailto:#">mailto@somedomain.com</a>
									</address>
									</p>
								</div>
							</div>
							
							<div class="col-lg-7">
								<div class="form-group" id="">
									<label class="small">名字： <span class="form-required" title="必填字段。">*</span></label>
									<input type="text" maxlength="40" name="firstname" id="" size="50" value="" class="form-control">
								</div>
								<div class="form-group" id="">
									<label class="small">电子邮件地址：<span class="form-required" title="必填字段。">*</span></label>
									<input type="text" maxlength="64" name="email" id="edit-email" size="50" value="" class="form-control required">
								</div>
								<div class="form-group" id="">
									<label class="small">电话：<span class="form-required" title="必填字段。">*</span></label>
									<input type="text" maxlength="20" name="phone" id="edit-phone" size="50" value="" class="form-control required">
								</div>
								<div class="form-group" id=""form-item"">
									<label class="small">您希望我们什么时间给您回拨电话？： </label>
									<input type="text" maxlength="255" name="sub-notes--c" id="edit-sub-notes--c" size="100" value="" class="form-control required" placeholder="立即、上午 9 点以后，等等...">
								</div>
							</div>
							
						</div>
						<div class="page-right"></div>
					</div>
					<!-- /body -->
				</form>	
				<!-- footer -->
				<div class="modal-footer">
				<input type="submit" name="op" id="" value="提交" class="btn btn-info">
				</div>
				<!-- /footer -->
			</div>
		</div>
	</div>
	
	<!-- /callback -->