<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<title>jli's test</title>

<?php
$css = get_css_path ();
$js = get_js_path ();
$img = get_img_path ();
?>

<link rel="stylesheet" href="<?php echo $css.'test.css'?>">
</head>

<body>
	<div id="mommy">
		<p id="child1">C1</p>
		<p id="child2"><a>C2</a></p>
		<p id="child3"><a>C3</a></p>
		<p id="child4">C4</p>
		<p id="child5">C5</p>
	</div>
</body>