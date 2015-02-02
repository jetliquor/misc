<!DOCTYPE html>
<html lang="zh_cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css"
	rel="stylesheet" media="screen">

<script type="text/javascript">
function mouse_over(x) {
	$(x).dropdown('toggle');
}
function mouse_out(x) {
	$(x).dropdown('untoggle');
}
	</script>
</head>

<body>

	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Brand</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-midlle">
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">光伏<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">充电桩<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">企业咨询<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">联系我们</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>

		<div id="content"">content of photovoltaic, TODO
		</div>
	</div>

	<div id="social">social</div>
	<div id="footer">
		<ul style="margin-left: 6px; height: 30px;">
			<li class="left"><a style="color: #FFF;" href="#" rel="nofollow">法律声明</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
			<li class="left"><a style="color: #FFF;" href="#" rel="nofollow">隐私保护</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
			<li class="left"><a style="color: #FFF;" href="#">联系我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
			<li class="left" style="line-height: 24px; height: 24px;"><a href="#"
				style="color: #FFF;">网站地图</a></li>
			<li class="left" style="margin-left: 100px;">版权所有 © XXX公司 2014。
				保留一切权利。渝0000000号</li>

		</ul>
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).off('click.bs.dropdown.data-api');
			dropdownOpen();
		});
		function dropdownOpen() {

			var $dropdownLi = $('li.dropdown');

			$dropdownLi.mouseover(function() {
				$(this).addClass('open');
			}).mouseout(function() {
				$(this).removeClass('open');
			});
		}
		</script>

</body>
</html>