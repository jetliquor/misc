<html>
<head>
	<meta http-equiv=Content-Type content="text/html;charset=utf-8">
	<title>SangSang</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
		font-family: 微软雅黑;
	}

	.container{
		text-align: center;
	}
	#left{
		background: #0AA;		
	}
	#right{
		background: #EE0;
	}
	.parts{
		font-size: 120px;
	}
	.whole{
		font-size: 240px;
	}

	</style>
</head>
<body>
<?php
	echo "<p><h3>".$base_url."</h3></p>"; 
?>
<div class="container">
<div class="row">
	<div id="left" class="col-xs-6 col-sm-offset-2 col-sm-4">
		<span class="whole">李</span>
	</div>
	<div id="right" class="col-xs-6 col-sm-4">
		<div class="row">
			<span class="parts col-xs-12">木</span>
			<span class="parts col-xs-12">子</span>
		</div>
	</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body></html>
