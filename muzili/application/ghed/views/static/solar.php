<!DOCTYPE html>
<html>
<head>
<title>国翰 | 光伏</title>
<link rel="shortcut icon" href="favicon.ico">
<meta charset="utf-8">
		
<?php
$css_dir = get_css_path ();
$js_dir = get_js_path ();
$img_dir = get_img_path ();
?>
<link href="<?php echo $css_dir;?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $css_dir;?>common.css" rel="stylesheet">
<link href="<?php echo $css_dir;?>solar.css" rel="stylesheet">
</head>

<body>
	<header id="the_header">
		<div class="wrap">
			<a href="/ghstatic/home" id="logo"><img
				src="<?php echo $img_dir;?>gh_logo.png" alt="SolarCity"></a>
			<ul class="menu">
				<li class="first expanded"><a href="/ghstatic/tesla"><?php echo lang('nav_charger');?></a></li>
				<li class="expanded"><a href="#"><?php echo lang('nav_dist_sys');?></a></li>
				<!-- <li class="leaf"><a href="/invest">储能</a></li>  -->
				<li class="expanded"><a data-toggle="modal"
					data-target="#gh_contact"><?php echo lang('nav_contact');?></a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</header>

	<div id="the_content" class="container">
		<div id="gh_slides" style="padding-top: 80px;">
			<div class="gh-slide-front">
				<h2>更便宜的能源,而且成本更低。</h2>
			</div>
			<div class="gh-slide show" slide-id="1" style="display: none;">
				<div class="ap-content show" show-delay="1300"
					style="display: block;"></div>
			</div>
			<div id="slide_dummy">
				<img alt="front" src="<?php echo $img_dir;?>guangfujianjie.jpg" />
			</div>
		</div>

		<div id="gh_desc">
			<div id="field-items">
				<div class="field-item even">
					<div class="field-item even">
						<div id="hpContent"></div>
						<h2>在国翰，我们期望以更好的方式为家庭和企业提供更低成本的能源，以此来美化我们的地球。</h2>
						<p>通过产生，而不是支付电费来获取您自己的清洁能源。太阳能发电实际上可以花费更少、稳定的支出，获得可观的收益！没有前期成本，您只需要的只是一个良好的屋顶，因为太阳能电池板安装在后期不需要开销。</p>
					</div>
				</div>

				<div class="field-item odd">
					<div id="quote_wrap" class="row">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<div class="quote-block quote-1">
								<div class="quote-slide">"你能帮助环境和节约资金"</div>
							</div>
						</div>

						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<div class="quote-block quote-2">
								<div class="quote-slide">"我们与国翰能源公司和的经历比我们预期的要好"</div>
							</div>
						</div>

						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<div class="quote-block quote-3">
								<div class="quote-slide">"我们不仅为环境保护作出贡献, 还能节省电费"</div>
							</div>
						</div>

						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<div class="quote-block quote-4">
								<div class="quote-slide">"在国翰能源的帮助下，我们可以了解到我们家未来二十年的能源需求"</div>
							</div>
						</div>
					</div>
				</div>

				<div class="field-item even">
					<div class="content-block-title wrap">
						<h2>为什么选择国翰?</h2>
					</div>

					<div
						class="field field-name-field-two-column field-type-field-collection field-label-hidden">
						<div class="field-items">
							<div class="field-item even">
								<div
									class="entity entity-field-collection-item field-collection-item-field-two-column desktop-mobile clearfix"
									id="none" style="">
									<div
										class="field field-name-field-two-column-copy field-type-text-long field-label-hidden">
										<div class="field-items">
											<div class="field-item odd">
												<p>
													<strong>我们让一切变得简单</strong>.
												</p>
												<p>
													您的体验是我们的最高目标。一开始是您联系我们，接下来我们将接管一切。一旦计划完成，您的太阳能发电系统将在一天内得到安装。
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- 
				<div class="field-item odd">
					<div class="content-block-title wrap">
						<h2>全方位提供太阳能发电系统</h2>
						<div>
							<p></p>
						</div>
					</div>
				</div>
 -->
				<div class="field-item even">
					<div class="content-block-title wrap">
						<h2>分布式家庭太阳能供电系统</h2>
					</div>
					<div id="gallery" class="carousel slide" data-ride="carousel">

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="<?php echo $img_dir;?>ssr-gallery-01.jpg"
									alt="太阳能分布式发电" data-holder-rendered="true">
								<div class="carousel-caption">...</div>
							</div>
							<div class="item">
								<img src="<?php echo $img_dir;?>ssr-gallery-02.jpg"
									alt="太阳能分布式发电" data-holder-rendered="true">
								<div class="carousel-caption">...</div>
							</div>
							<div class="item">
								<img src="<?php echo $img_dir;?>ssr-gallery-03.jpg"
									alt="太阳能分布式发电" data-slide="3">
								<div class="carousel-caption">...</div>
							</div>
							<div class="item">
								<img src="<?php echo $img_dir;?>ssr-gallery-04.jpg"
									alt="太阳能分布式发电" data-slide="4">
								<div class="carousel-caption">...</div>
							</div>
							<div class="item">
								<img src="<?php echo $img_dir;?>ssr-gallery-05.jpg"
									alt="太阳能分布式发电" data-slide="5">
								<div class="carousel-caption">...</div>
							</div>
							<div class="item">
								<img src="<?php echo $img_dir;?>ssr-gallery-06.jpg"
									alt="太阳能分布式发电" data-slide="6">
								<div class="carousel-caption">...</div>
							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#gallery" role="button"
							data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
							aria-hidden="true"></span> <span class="sr-only">Previous</span>
						</a> <a class="right carousel-control" href="#gallery"
							role="button" data-slide="next"> <span
							class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>

					<div id="gallery_thumb">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<img src="<?php echo $img_dir;?>ssr-gallery-01.jpg"
									alt="太阳能分布式发电" title="" data_count="0">
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" data-extra='1'>
								<img src="<?php echo $img_dir;?>ssr-gallery-02.jpg"
									alt="太阳能分布式发电" title="" data_count="1">
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" data-extra='2'>
								<img src="<?php echo $img_dir;?>ssr-gallery-03.jpg"
									alt="太阳能分布式发电" title="" data_count="2">
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" data-extra='3'>
								<img src="<?php echo $img_dir;?>ssr-gallery-04.jpg"
									alt="太阳能分布式发电" title="" data_count="3">
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" data-extra='4'>
								<img src="<?php echo $img_dir;?>ssr-gallery-05.jpg"
									alt="太阳能分布式发电" title="" data_count="4">
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" data-extra='5'>
								<img src="<?php echo $img_dir;?>ssr-gallery-06.jpg"
									alt="太阳能分布式发电" title="" data_count="5">
							</div>
						</div>
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
		$(document)
				.ready(
						function() {
							var hw = window.innerHeight;
							var hd = document.body.scrollHeight;
							if (hd <= hw) {
								var footer = $('#the_footer');
								var offset = footer.offset();
								var h = footer.outerHeight();
								footer.css('margin-top', hw - offset.top - h);
							}

							$('#gallery').carousel({
								interval : 6000
							});

							$('#gallery_thumb .row div[class^="col-"] img')
									.on(
											'click',
											function(e) {
												$('#gallery')
														.carousel(
																parseInt(this.attributes.data_count.value));
											});

							$('.quote-block').hover(function() {
								$(this).find('.quote-slide').animate({top: '0px'});
							}, function() {
								$(this).find('.quote-slide').animate({top: $(this).height()+'px'});
							});
						});
	</script>

	<!-- Modal -->
	<div class="modal fade" id="gh_contact" role="dialog"
		aria-labelledby="myModalLabel" aria-hidden="true"
		style="padding-top: 70px;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">联系方式</h4>
				</div>
				<div class="modal-body" style="text-align: left; margin: 30px;">
					<p>电话：</p>
					<p>邮箱：</p>
					<p>地址：</p>
				</div>
				<!-- <div class="modal-footer"> -->
				<!-- </div> -->
			</div>
		</div>
	</div>

</body>

</html>