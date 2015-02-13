<!DOCTYPE html>
<html>
<head>
<title>国翰 | 充电桩</title>
<link rel="shortcut icon" href="favicon.ico">
<meta charset="utf-8">

<?php
$css_dir = get_css_path ();
$js_dir = get_js_path ();
$img_dir = get_img_path ();
?>
<link href="<?php echo $css_dir;?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $css_dir;?>common.css" rel="stylesheet">
<link href="<?php echo $css_dir;?>tesla.css" rel="stylesheet">

</head>

<body>
	<header id="the_header">
		<div class="wrap">
			<a href="/ghstatic/home" title="SolarCity" id="logo"><img
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

	<!--  tesla页面-begin   -->

	<div class="wrapper">
		<div id="content-wrapper">
			<div id="page">
				<!-- Content ($content)-->
				<div data-role="content" data-inset="true">

					<!-- Hero Area -->
					<div id="hero" class="">
						<div class="panel-pane pane-custom pane-1">
							<div class="pane-content">
								<div id="hero-background">
									<div id="hero-scaler">
										<img src="<?php echo $img_dir;?>tesla_supercharger_hero.jpg"
											alt="SUPERCHARGER 超级充电站" />
									</div>
								</div>
							</div>


						</div>
					</div>
					<!-- / Hero Area -->
					<div id="content-body" class="">
						<div class="panel-pane pane-custom pane-2">
							<div class="pane-content">
								<style>
.dshadow #contentAS-2 {
	background: url('../<?php echo $img_dir;?>tesla_charge_time.png')
		no-repeat 480px 50%;
}
</style>
								<div class="dshadow">
									<div id="content-1" class="clear-block">
										<div class="copy-column-left">
											<h3>轻松旅途，尽在掌握</h3>
											<p class="subtitle">
												短时间完成充电，电费全免<br />
											</p>
											<p>Tesla（特斯拉）超级充电站能够使 Model S
												车主在北美、欧洲和亚洲城市间交通繁忙的高速公路上享受免费充电服务。超级充电器仅需 20
												分钟就能为您充入一半电量，而且通过合理的战略布局，最大程度地减少了停靠充电站充电的次数。</p>
											<p>
												<span class="road-trips-heading">覆盖范围</span><br /> <b
													style="padding-top: 6px; display: inline-block;">亚洲</b><br />
												目前 – 66 座<br /> <b
													style="padding-top: 6px; display: inline-block;">欧洲</b><br />
												目前 – 123 座<br /> <b
													style="padding-top: 6px; display: inline-block;">北美</b><br />
												目前 – 151 座<br /> 覆盖从大西洋海岸到太平洋海岸之间的旅程<br /> 2014年 – 将覆盖美国 80%
												的人口和加拿大部分地区<br /> 2015年 – 将覆盖美国 98% 的人口和加拿大部分地区<br />
											</p>
											<p>超级充电站均处于便利地点，周围有路边餐馆、咖啡馆和购物中心。</p>

										</div>
										<!-- End copy-column-left -->

										<div id="contentAS-2"></div>
									</div>
									<!-- End content-1 -->

								</div>
							</div>
						</div>
						<div class="panel-region-separator"></div>
						<div class="panel-pane pane-custom pane-3 dshadow">
							<div class="pane-content">
								<style>
#schargelist td.sc-address span {
	color: #cc0000;
	font-size: 12px;
}

#schargelist td.sc-address {
	padding: 10px 0 10px 275px;
}

#schargelist td.charger-num {
	padding: 10px 295px 10px 21px;
	vertical-align: middle;
}

.picker-bar .legend span {
	padding-right: 10px;
	text-indent: 5px;
	margin-right: 12px;
}
</style>

								<!-- 地图 -->
								<!-- 
								<div id="super-map"></div>
								<div class="picker-bar">
		    						<div class="legend">
								        <span>
								            <img src="<?php echo $img_dir;?>tesla_icon-supercharger.png">
								                                
								        </span>
								        <span>
								            <img src="<?php echo $img_dir;?>tesla_icon-supercharger-comingsoon.png">
								           	 即将推出
		    						</div>
		    						<div class="address-dropdown-wrapper">
								        <span class="address-dropdown-label" id="city_text">请选择</span>
								        <div class="address-select-box">
								        	<select id="city"></select>
								        </div>
		    						</div>
								    <div class="address-dropdown-wrapper">
								        <span class="address-dropdown-label" id="province_text">全国</span>
								        <div class="address-select-box">
								        	<select id="province"></select>
								        </div>
								    </div>
								</div>
								<div class="roadside-providers clear-block" style="padding-bottom: 20px;">
								    <div style="text-align: center;padding: 10px 0 16px 0px;font-size: 16px;">超级充电站信息列表</div>
								    <table>
								        <thead>
								            <tr>
								                <td class="sc-address" style="padding-left: 276px;font-weight: bold;font-size: 16px;">地点</td><td style="padding-right: 270px;font-size: 16px;font-weight: bold;" class="charge-num">充电桩</td>
								            </tr>
								        </thead>
								        <tbody id="schargelist">
								        </tbody>
								    </table>
								</div>
<link type='text/css' rel='stylesheet' href='css/tesla2.css' />


<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&amp;ak=bjg1yDf5Z8k0BwYbpNpHRILL"></script>


<script type="text/javascript" src="js/tesla1.js"></script>
<script type="text/javascript">
    var superChargers = 

{"110000":{"cities":{"110101":{"providers":[{"sup_id":"86","province":"110000","city":"110101","address":"\u5317\u4eac\u5e02\u4e1c\u57ce\u533a\u5efa\u56fd\u95e8\u5185\u5927\u88578\u53f7\uff0c\u4e2d\u7cae\u5e7f\u573a   ","parkingnum":"2","longitude":"116.43686","latitude":"39.91345","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5317\u4eac\u5e02\u4e1c\u57ce\u533a\u5efa\u56fd\u95e8\u5185\u5927\u88578\u53f7\uff0c\u4e2d\u7cae\u5e7f\u573a   ","opened":"1","detailpage":""}],"name":"\u4e1c\u57ce","longitude":"116.421885","latitude":"39.938574"},"110102":{"providers":[{"sup_id":"26","province":"110000","city":"110102","address":"\u5317\u4eac\u5e02\u897f\u57ce\u533a\u5ba3\u6b66\u95e8\u5185\u5927\u8857\u897f\u7ed2\u7ebf\u80e1\u540c28\u53f7\uff0c\u5929\u5b89\u5929\u5730","parkingnum":"2","longitude":"116.38263","latitude":"39.909605","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5317\u4eac\u5e02\u897f\u57ce\u533a\u5ba3\u5185\u5927\u8857\u897f\u7ed2\u7ebf\u80e1\u540c28\u53f7\uff0c\u5929\u5b89\u5929\u5730","opened":"1","detailpage":"\/supercharger\/beijingtianantiandi"}],"name":"\u897f\u57ce","longitude":"116.37319","latitude":"39.93428"},"110105":{"providers":[{"sup_id":"1","province":"110000","city":"110105","address":"\u9152\u4ed9\u6865\u8def10\u53f7\u6052\u901a\u5546\u52a1\u56edB12D\uff0c\u7279\u65af\u62c9\u4e2d\u56fd\u603b\u90e8","parkingnum":"2","longitude":"116.499252","latitude":"39.983353","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u671d\u9633\u533a\u9152\u4ed9\u6865\u8def 10 \u53f7\u6052\u901a\u5546\u52a1\u56ed B12D\uff0c\u7279\u65af\u62c9\u4e2d\u56fd\u603b\u90e8","opened":"1","detailpage":"\/supercharger\/beijingubp"}],"name":"\u671d\u9633","longitude":"116.521695","latitude":"39.958953"},"110108":{"providers":[{"sup_id":"21","province":"110000","city":"110108","address":"\u677f\u4e95\u8def69-1\u53f7","parkingnum":"2","longitude":"116.288194","latitude":"39.957437","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5317\u4eac\u5e02\u6d77\u6dc0\u533a\u677f\u4e95\u8def69-1\uff0c\u9ed1\u767d\u683c\u6d17\u8f66\u5e97 ","opened":"1","detailpage":"\/supercharger\/beijingbwc"},{"sup_id":"29","province":"110000","city":"110108","address":"\u5317\u4eac\u5e02\u6d77\u6dc0\u533a\u590d\u5174\u8def69\u53f7\uff0c\u5353\u5c55\u8d2d\u7269\u4e2d\u5fc3","parkingnum":"6","longitude":"116.282413","latitude":"39.918406","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5317\u4eac\u5e02\u6d77\u6dc0\u533a\u590d\u5174\u8def69\u53f7\uff0c\u5353\u5c55\u8d2d\u7269\u4e2d\u5fc3","opened":"1","detailpage":""},{"sup_id":"113","province":"110000","city":"110108","address":"\u5317\u4eac\u5e02\u6d77\u6dc0\u533a\u6e05\u6cb3\u9547\u6e05\u6cb3\u8def155\u53f7\uff0c\u6e05\u6cb3\u6e7e\u9ad8\u5c14\u592b\u4ff1\u4e50\u90e8","parkingnum":"4","longitude":"116.397479","latitude":"40.039114","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5317\u4eac\u5e02\u6d77\u6dc0\u533a\u6e05\u6cb3\u9547\u6e05\u6cb3\u8def155\u53f7\uff0c\u6e05\u6cb3\u6e7e\u9ad8\u5c14\u592b\u4ff1\u4e50\u90e8","opened":"1","detailpage":""}],"name":"\u6d77\u6dc0","longitude":"116.239678","latitude":"40.033162"},"110115":{"providers":[{"sup_id":"8","province":"110000","city":"110115","address":"\u4ea6\u5e84\u7ecf\u6d4e\u6280\u672f\u5f00\u53d1\u533a\u4e2d\u548c\u885716\u53f7","parkingnum":"4","longitude":"116.524237","latitude":"39.8061","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5927\u5174\u533a\u4ea6\u5e84\u4e2d\u548c\u885716\u53f7\uff0c\u7279\u65af\u62c9\u670d\u52a1\u4e2d\u5fc3","opened":"1","detailpage":"\/supercharger\/beijingharmony"}],"name":"\u5927\u5174","longitude":"116.425195","latitude":"39.65279"}},"name":"\u5317\u4eac","longitude":"116.395645","latitude":"39.929986"},"120000":{"cities":{"120102":{"providers":[{"sup_id":"125","province":"120000","city":"120102","address":"\u5929\u6d25\u5e02\u897f\u9752\u533a\u5de5\u534e\u9053\u548c\u6995\u82d1\u8def\u8def\u53e3\uff0c\u667a\u6167\u5c71\u865a\u62df\u4ea7\u4e1a\u56ed","parkingnum":"4","longitude":"117.126363","latitude":"39.099381","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5929\u6d25\u5e02\u897f\u9752\u533a\u5de5\u534e\u9053\u548c\u6995\u82d1\u8def\u8def\u53e3\uff0c\u667a\u6167\u5c71\u865a\u62df\u4ea7\u4e1a\u56ed","opened":"1","detailpage":""}],"name":"\u6cb3\u4e1c","longitude":"117.261693","latitude":"39.126626"}},"name":"\u5929\u6d25","longitude":"117.210813","latitude":"39.14393"},"130000":{"cities":{"130900":{"providers":[{"sup_id":"105","province":"130000","city":"130900","address":"\u6cb3\u5317\u7701\u6ca7\u5dde\u5e02\u8fce\u5bbe\u5927\u905318\u53f7\uff0c\u6ca7\u5dde\u91d1\u72ee\u56fd\u9645\u9152\u5e97","parkingnum":"4","longitude":"116.819753","latitude":"38.310492","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6cb3\u5317\u7701\u6ca7\u5dde\u5e02\u8fce\u5bbe\u5927\u905318\u53f7\uff0c\u6ca7\u5dde\u91d1\u72ee\u56fd\u9645\u9152\u5e97","opened":"1","detailpage":""},{"sup_id":"107","province":"130000","city":"130900","address":"\u6cb3\u5317\u7701\u6ca7\u5dde\u5e02\u8fce\u5bbe\u5927\u9053\u9890\u548c\u5e84\u56ed\u5185\uff0c\u6ca7\u5dde\u9890\u548c\u5927\u9152\u5e97","parkingnum":"2","longitude":"116.819218","latitude":"38.282375","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6cb3\u5317\u7701\u6ca7\u5dde\u5e02\u8fce\u5bbe\u5927\u9053\u9890\u548c\u5e84\u56ed\u5185\uff0c\u6ca7\u5dde\u9890\u548c\u5927\u9152\u5e97","opened":"1","detailpage":""}],"name":"\u6ca7\u5dde","longitude":"116.863806","latitude":"38.297615"}},"name":"\u6cb3\u5317","longitude":"116.629486","latitude":"40.643126"},"210000":{"cities":{"210100":{"providers":[{"sup_id":"37","province":"210000","city":"210100","address":"\u8fbd\u5b81\u7701\u6c88\u9633\u5e02\u6c88\u6cb3\u533a\u54c8\u5c14\u6ee8\u8def168-1\u53f7\uff0c\u534e\u5e9c\u65b0\u5929\u5730","parkingnum":"4","longitude":"123.443291","latitude":"41.816967","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u8fbd\u5b81\u7701\u6c88\u9633\u5e02\u6c88\u6cb3\u533a\u54c8\u5c14\u6ee8\u8def168-1\u53f7\uff0c\u534e\u5e9c\u65b0\u5929\u5730","opened":"1","detailpage":"\/supercharger\/shenyanghuafu"}],"name":"\u6c88\u9633","longitude":"123.432791","latitude":"41.808645"},"210200":{"providers":[{"sup_id":"36","province":"210000","city":"210200","address":"\u8fbd\u5b81\u7701\u5927\u8fde\u5e02\u4e2d\u5c71\u533a\u6ee8\u6d77\u4e1c\u8def66\u53f7\uff0c\u6e14\u4eba\u7801\u5934","parkingnum":"4","longitude":"121.692027","latitude":"38.882793","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u8fbd\u5b81\u7701\u5927\u8fde\u5e02\u4e2d\u5c71\u533a\u6ee8\u6d77\u4e1c\u8def66\u53f7\uff0c\u6e14\u4eba\u7801\u5934","opened":"1","detailpage":"\/supercharger\/dalianfisherman"}],"name":"\u5927\u8fde","longitude":"121.593478","latitude":"38.94871"}},"name":"\u8fbd\u5b81","longitude":"122.753592","latitude":"41.6216"},"310000":{"cities":{"310105":{"providers":[{"sup_id":"92","province":"310000","city":"310105","address":"\u4e0a\u6d77\u5e02\u957f\u5b81\u533a\u5ef6\u5b89\u897f\u8def3162\u53f7\uff0c\u91d1\u94b1\u8c79\u5927\u9152\u5e97","parkingnum":"2","longitude":"121.382212","latitude":"31.19396","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u4e0a\u6d77\u5e02\u957f\u5b81\u533a\u5ef6\u5b89\u897f\u8def3162\u53f7\uff0c\u91d1\u94b1\u8c79\u5927\u9152\u5e97","opened":"1","detailpage":""}],"name":"\u957f\u5b81","longitude":"121.387616","latitude":"31.213301"},"310108":{"providers":[{"sup_id":"121","province":"310000","city":"310108","address":"\u4e0a\u6d77\u5e02\u95f8\u5317\u533a\u5e73\u578b\u5173\u8def\uff08\u8fd1\u5f6d\u6c5f\u8def\uff09,\u91d1\u8302\u5e9c","parkingnum":"2","longitude":"121.462419","latitude":"31.291635","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u4e0a\u6d77\u5e02\u95f8\u5317\u533a\u5e73\u578b\u5173\u8def\uff08\u8fd1\u5f6d\u6c5f\u8def\uff09,\u91d1\u8302\u5e9c","opened":"1","detailpage":""}],"name":"\u95f8\u5317","longitude":"121.487899","latitude":"31.249162"},"310112":{"providers":[{"sup_id":"15","province":"310000","city":"310112","address":"\u83b2\u82b1\u5357\u8def2338\u53f7","parkingnum":"2","longitude":"121.434575","latitude":"31.076287","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u4e0a\u6d77\u5e02\u95f5\u884c\u533a\u83b2\u82b1\u5357\u8def2338\u53f7\uff0c\u7279\u65af\u62c9\u670d\u52a1\u4e2d\u5fc3","opened":"1","detailpage":"\/supercharger\/shanghaiminhang"}],"name":"\u95f5\u884c","longitude":"121.466362","latitude":"31.210503"},"310114":{"providers":[{"sup_id":"13","province":"310000","city":"310114","address":"\u5b89\u4ead\u4e0a\u6d77\u56fd\u9645\u6c7d\u8f66\u57ce","parkingnum":"6","longitude":"121.173937","latitude":"31.285578","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u4e0a\u6d77\u5e02\u5609\u5b9a\u533a\u5b89\u4ead\u535a\u56ed\u8def7555\u53f7\uff0c\u4e0a\u6d77\u56fd\u9645\u6c7d\u8f66\u57ce","opened":"1","detailpage":"\/supercharger\/jiading"}],"name":"\u5609\u5b9a","longitude":"121.251014","latitude":"31.364338"},"310115":{"providers":[{"sup_id":"14","province":"310000","city":"310115","address":"\u84dd\u5929\u8def 518 \u53f7\uff0c\u7279\u65af\u62c9\u91d1\u6865\u5c55\u793a\u5385","parkingnum":"6","longitude":"121.586339","latitude":"31.247074","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u4e0a\u6d77\u5e02\u6d66\u4e1c\u65b0\u533a\u84dd\u5929\u8def518\u53f7\uff0c\u7279\u65af\u62c9\u91d1\u6865\u5c55\u793a\u5385","opened":"1","detailpage":"\/supercharger\/jinqiao"}],"name":"\u6d66\u4e1c","longitude":"119.30358","latitude":"26.066213"},"310118":{"providers":[{"sup_id":"31","province":"310000","city":"310118","address":"\u4e0a\u6d77\u5e02\u9752\u6d66\u533a\u5609\u677e\u4e2d\u8def5999\u53f7\uff0c\u7c73\u683c\u5929\u5730","parkingnum":"6","longitude":"121.236863","latitude":"31.156717","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u4e0a\u6d77\u5e02\u9752\u6d66\u533a\u5609\u677e\u4e2d\u8def5999\u53f7\uff0c\u7c73\u683c\u5929\u5730","opened":"1","detailpage":""}],"name":"\u9752\u6d66","longitude":"121.091425","latitude":"31.130862"}},"name":"\u4e0a\u6d77","longitude":"121.487899","latitude":"31.249162"},"320000":{"cities":{"320100":{"providers":[{"sup_id":"16","province":"320000","city":"320100","address":"\u96e8\u82b1\u53f0\u533a\u8f6f\u4ef6\u5927\u9053119\u53f7\uff0c\u4e30\u76db\u5546\u6c47","parkingnum":"6","longitude":"118.767322","latitude":"31.981574","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5357\u4eac\u5e02\u96e8\u82b1\u53f0\u533a\u8f6f\u4ef6\u5927\u9053119\u53f7\uff0c\u4e30\u76db\u5546\u6c47","opened":"1","detailpage":"\/supercharger\/nanjingfullshare"},{"sup_id":"25","province":"320000","city":"320100","address":"\u534e\u535a\u667a\u6167\u56ed","parkingnum":"2","longitude":"118.781667","latitude":"31.980275","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5357\u4eac\u5e02\u96e8\u82b1\u53f0\u533a\u82b1\u795e\u5927\u905317\u53f7\uff0c\u534e\u535a\u667a\u6167\u56ed","opened":"1","detailpage":"\/supercharger\/nanjingyuhuatai"},{"sup_id":"148","province":"320000","city":"320100","address":"\u6c5f\u82cf\u7701\u5357\u4eac\u5e02\u5efa\u90ba\u533a\u6c5f\u4e1c\u4e2d\u8def222\u53f7\uff0c\u5357\u4eac\u5965\u4f53\u4e2d\u5fc3","parkingnum":"2","longitude":"118.729787","latitude":"32.012654","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5357\u4eac\u5e02\u5efa\u90ba\u533a\u6c5f\u82cf\u7701\u5357\u4eac\u5e02\u5efa\u90ba\u533a\u6c5f\u4e1c\u4e2d\u8def222\u53f7\uff0c\u5357\u4eac\u5965\u4f53\u4e2d\u5fc3","opened":"1","detailpage":""}],"name":"\u5357\u4eac","longitude":"118.778074","latitude":"32.057236"},"320200":{"providers":[{"sup_id":"87","province":"320000","city":"320200","address":"\u6c5f\u82cf\u7701\u65e0\u9521\u5e02\u592a\u6e56\u4e1c\u5927\u905368\u53f7\uff0c\u65e0\u9521\u4e16\u8d38\u4e2d\u5fc3","parkingnum":"4","longitude":"120.315698","latitude":"31.559952","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6c5f\u82cf\u7701\u65e0\u9521\u5e02\u592a\u6e56\u4e1c\u5927\u905368\u53f7\uff0c\u65e0\u9521\u4e16\u8d38\u4e2d\u5fc3","opened":"1","detailpage":""}],"name":"\u65e0\u9521","longitude":"120.305456","latitude":"31.570037"},"320300":{"providers":[{"sup_id":"98","province":"320000","city":"320300","address":"\u6c5f\u82cf\u7701\u5f90\u5dde\u5e02\u6cc9\u5c71\u533a\u6e56\u897f\u8def1\u53f7\uff0c\u5f00\u5143\u540d\u90fd\u5927\u9152\u5e97","parkingnum":"2","longitude":"117.14087","latitude":"34.251358","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6c5f\u82cf\u7701\u5f90\u5dde\u5e02\u6cc9\u5c71\u533a\u6e56\u897f\u8def1\u53f7\uff0c\u5f00\u5143\u540d\u90fd\u5927\u9152\u5e97","opened":"1","detailpage":""}],"name":"\u5f90\u5dde","longitude":"117.188107","latitude":"34.271553"},"320400":{"providers":[{"sup_id":"96","province":"320000","city":"320400","address":"\u6c5f\u82cf\u7701\u5e38\u5dde\u5e02\u6b66\u8fdb\u533a\u5e7f\u7535\u4e2d\u8def29\u53f7\uff0c\u8fbe\u8bda\u6c7d\u8f66\u4ff1\u4e50\u90e8","parkingnum":"2","longitude":"119.95211","latitude":"31.719761","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6c5f\u82cf\u7701\u5e38\u5dde\u5e02\u6b66\u8fdb\u533a\u5e7f\u7535\u4e2d\u8def29\u53f7\uff0c\u8fbe\u8bda\u6c7d\u8f66\u4ff1\u4e50\u90e8","opened":"1","detailpage":""},{"sup_id":"101","province":"320000","city":"320400","address":"\u6c5f\u82cf\u7701\u5e38\u5dde\u5e02\u65b0\u5317\u533a\u9ec4\u6cb3\u8def106\u53f7\uff0c\u8fbe\u8bda\u6c7d\u8f66\u4ff1\u4e50\u90e8","parkingnum":"2","longitude":"119.980117","latitude":"31.843939","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6c5f\u82cf\u7701\u5e38\u5dde\u5e02\u65b0\u5317\u533a\u9ec4\u6cb3\u8def106\u53f7\uff0c\u8fbe\u8bda\u6c7d\u8f66\u4ff1\u4e50\u90e8","opened":"1","detailpage":""}],"name":"\u5e38\u5dde","longitude":"119.981861","latitude":"31.771397"},"320500":{"providers":[{"sup_id":"97","province":"320000","city":"320500","address":"\u6c5f\u82cf\u7701\u82cf\u5dde\u5e02\u9ad8\u65b0\u533a\u5854\u56ed\u8def379\u53f7\uff0c\u82cf\u5dde\u5b9d\u94c1\u9f99\u4e4b\u661f","parkingnum":"2","longitude":"120.557648","latitude":"31.327595","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6c5f\u82cf\u7701\u82cf\u5dde\u5e02\u9ad8\u65b0\u533a\u5854\u56ed\u8def379\u53f7\uff0c\u82cf\u5dde\u5b9d\u94c1\u9f99\u4e4b\u661f","opened":"1","detailpage":""}],"name":"\u82cf\u5dde","longitude":"120.619907","latitude":"31.317987"}},"name":"\u6c5f\u82cf","longitude":"119.368489","latitude":"33.013797"},"330000":{"cities":{"330100":{"providers":[{"sup_id":"9","province":"330000","city":"330100","address":"\u4e0b\u57ce\u533a\u767d\u77f3\u8def129\u53f7\uff0c\u57ce\u5317\u4f53\u80b2\u516c\u56ed","parkingnum":"8","longitude":"120.171229","latitude":"30.319473","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u676d\u5dde\u5e02\u4e0b\u57ce\u533a\u767d\u77f3\u8def129\u53f7\uff0c\u57ce\u5317\u4f53\u80b2\u516c\u56ed","opened":"1","detailpage":"\/supercharger\/hangzhouxiacheng"},{"sup_id":"10","province":"330000","city":"330100","address":"\u897f\u6e56\u533a\u66d9\u5149\u8def 120\u53f7, \u676d\u5dde\u9ec4\u9f99\u996d\u5e97","parkingnum":"6","longitude":"120.15048","latitude":"30.272788","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u676d\u5dde\u5e02\u897f\u6e56\u533a\u66d9\u5149\u8def120\u53f7\uff0c\u676d\u5dde\u9ec4\u9f99\u996d\u5e97","opened":"1","detailpage":"\/supercharger\/hangzhouhuanglong"},{"sup_id":"11","province":"330000","city":"330100","address":"\u6ee8\u6c5f\u533a\u6c5f\u9675\u8def88\u53f7","parkingnum":"4","longitude":"120.224582","latitude":"30.184287","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6d59\u6c5f\u7701\u676d\u5dde\u5e02\u6ee8\u6c5f\u533a\u6c5f\u9675\u8def88\u53f7\uff0c\u7279\u65af\u62c9\u670d\u52a1\u4e2d\u5fc3","opened":"1","detailpage":"\/supercharger\/hangzhouservicecenter"},{"sup_id":"12","province":"330000","city":"330100","address":"\u897f\u6e56\u533a\u6559\u5de5\u8def18\u53f7\uff0c\u6b27\u7f8e\u4e2d\u5fc3","parkingnum":"2","longitude":"120.144231","latitude":"30.278947","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u676d\u5dde\u5e02\u897f\u6e56\u533a\u6559\u5de5\u8def18\u53f7\uff0c\u6b27\u7f8e\u4e2d\u5fc3","opened":"1","detailpage":"\/supercharger\/hangzhoueac"}],"name":"\u676d\u5dde","longitude":"120.219375","latitude":"30.259244"},"330200":{"providers":[{"sup_id":"38","province":"330000","city":"330200","address":"\u6d59\u6c5f\u7701\u5b81\u6ce2\u5e02\u6c5f\u4e1c\u533a\u4e2d\u5c71\u4e1c\u8def1999\u53f7\uff0c\u5b81\u6ce2\u6587\u5316\u5e7f\u573a","parkingnum":"2","longitude":"121.625263","latitude":"29.86197","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6d59\u6c5f\u7701\u5b81\u6ce2\u5e02\u6c5f\u4e1c\u533a\u4e2d\u5c71\u4e1c\u8def1999\u53f7\uff0c\u5b81\u6ce2\u6587\u5316\u5e7f\u573a","opened":"1","detailpage":""}],"name":"\u5b81\u6ce2","longitude":"121.579006","latitude":"29.885259"},"330900":{"providers":[{"sup_id":"103","province":"330000","city":"330900","address":"\u6d59\u6c5f\u7701\u821f\u5c71\u5e02\u666e\u9640\u533a\u4e1c\u6e2f\u5174\u666e\u5927\u9053338\u53f7\uff0c\u6d77\u4e2d\u6d32\u56fd\u9645\u5927\u9152\u5e97","parkingnum":"4","longitude":"122.32252","latitude":"29.972572","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6d59\u6c5f\u7701\u821f\u5c71\u5e02\u666e\u9640\u533a\u4e1c\u6e2f\u5174\u666e\u5927\u9053338\u53f7\uff0c\u6d77\u4e2d\u6d32\u56fd\u9645\u5927\u9152\u5e97","opened":"1","detailpage":""}],"name":"\u821f\u5c71","longitude":"122.169872","latitude":"30.03601"}},"name":"\u6d59\u6c5f","longitude":"119.957202","latitude":"29.159494"},"350000":{"cities":{"350100":{"providers":[{"sup_id":"30","province":"350000","city":"350100","address":"\u798f\u5efa\u7701\u798f\u5dde\u5e02\u53f0\u6c5f\u533a\u9ccc\u6c5f\u8def2\u53f7\uff0c\u798f\u5dde\u4e7e\u5764\u8f66\u57ce   ","parkingnum":"2","longitude":"119.350868","latitude":"26.058406","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u798f\u5efa\u7701\u798f\u5dde\u5e02\u53f0\u6c5f\u533a\u9ccc\u6c5f\u8def2\u53f7\uff0c\u798f\u5dde\u4e7e\u5764\u8f66\u57ce   ","opened":"1","detailpage":""}],"name":"\u798f\u5dde","longitude":"119.330221","latitude":"26.047125"},"350200":{"providers":[{"sup_id":"88","province":"350000","city":"350200","address":"\u798f\u5efa\u7701\u53a6\u95e8\u5e02\u601d\u660e\u533a\u91d1\u5c71\u8def\u4e0e\u5415\u5cad\u8def\u4ea4\u53c9\u53e3\u897f\u5317\u4fa7\uff0c\u5b9d\u9f99\u4e00\u57ce","parkingnum":"2","longitude":"118.178568","latitude":"24.491099","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u798f\u5efa\u7701\u53a6\u95e8\u5e02\u601d\u660e\u533a\u91d1\u5c71\u8def\u4e0e\u5415\u5cad\u8def\u4ea4\u53c9\u53e3\u897f\u5317\u4fa7\uff0c\u5b9d\u9f99\u4e00\u57ce","opened":"1","detailpage":""}],"name":"\u53a6\u95e8","longitude":"118.103886","latitude":"24.489231"}},"name":"\u798f\u5efa","longitude":"117.984943","latitude":"26.050118"},"370000":{"cities":{"370100":{"providers":[{"sup_id":"102","province":"370000","city":"370100","address":"\u5c71\u4e1c\u7701\u6d4e\u5357\u5e02\u5929\u6865\u533a\u84dd\u7fd4\u8def15\u53f7\uff0c\u65f6\u4ee3\u603b\u90e8\u57fa\u5730","parkingnum":"6","longitude":"116.963366","latitude":"36.713286","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5c71\u4e1c\u7701\u6d4e\u5357\u5e02\u5929\u6865\u533a\u84dd\u7fd4\u8def15\u53f7\uff0c\u65f6\u4ee3\u603b\u90e8\u57fa\u5730","opened":"1","detailpage":""}],"name":"\u6d4e\u5357","longitude":"117.024967","latitude":"36.682785"},"370200":{"providers":[{"sup_id":"91","province":"370000","city":"370200","address":"\u5c71\u4e1c\u7701\u9752\u5c9b\u5e02\u5e02\u5357\u533a\u56db\u5ddd\u8def25\u53f7\uff0c\u91d1\u8302\u6e7e","parkingnum":"2","longitude":"120.307284","latitude":"36.070448","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5c71\u4e1c\u7701\u9752\u5c9b\u5e02\u5e02\u5357\u533a\u56db\u5ddd\u8def25\u53f7\uff0c\u91d1\u8302\u6e7e","opened":"1","detailpage":"\u5c71\u4e1c\u7701\u9752\u5c9b\u5e02\u5e02\u5357\u533a\u56db\u5ddd\u8def25\u53f7\uff0c\u91d1\u8302\u6e7e"}],"name":"\u9752\u5c9b","longitude":"120.384428","latitude":"36.105215"}},"name":"\u5c71\u4e1c","longitude":"118.527663","latitude":"36.09929"},"410000":{"cities":{"410100":{"providers":[{"sup_id":"93","province":"410000","city":"410100","address":"\u6cb3\u5357\u7701\u90d1\u5dde\u5e02\u7ba1\u57ce\u533a\u5546\u90fd\u8def\u4e0e\u8c2d\u5357\u8857\u4ea4\u53c9\u53e3\u5411\u5317500\u7c73\uff0c\u4e2d\u946b\u4e4b\u5b9d\u8386\u7530\u5e97","parkingnum":"4","longitude":"113.803585","latitude":"34.748685","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6cb3\u5357\u7701\u90d1\u5dde\u5e02\u7ba1\u57ce\u533a\u5546\u90fd\u8def\u4e0e\u8c2d\u5357\u8857\u4ea4\u53c9\u53e3\u5411\u5317500\u7c73\uff0c\u4e2d\u946b\u4e4b\u5b9d\u8386\u7530\u5e97","opened":"1","detailpage":""}],"name":"\u90d1\u5dde","longitude":"113.649644","latitude":"34.75661"}},"name":"\u6cb3\u5357","longitude":"113.486804","latitude":"34.157184"},"420000":{"cities":{"420100":{"providers":[{"sup_id":"35","province":"420000","city":"420100","address":"\u6e56\u5317\u7701\u6b66\u6c49\u5e02\u6b66\u660c\u533a\u548c\u5e73\u5927\u9053840\u53f7\uff0c\u6b66\u6c49\u7eff\u5730\u4e2d\u5fc3","parkingnum":"4","longitude":"114.3317","latitude":"30.587778","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6e56\u5317\u7701\u6b66\u6c49\u5e02\u6b66\u660c\u533a\u548c\u5e73\u5927\u9053840\u53f7\uff0c\u6b66\u6c49\u7eff\u5730\u4e2d\u5fc3","opened":"1","detailpage":""},{"sup_id":"94","province":"420000","city":"420100","address":"\u6e56\u5317\u7701\u6b66\u6c49\u5e02\u6b66\u660c\u533a\u4e2d\u5317\u8def171\u53f7\uff0c\u6b66\u6c49\u4e2d\u592e\u6587\u5316\u533a\u5c55\u793a\u4e2d\u5fc3","parkingnum":"2","longitude":"114.350975","latitude":"30.564687","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6e56\u5317\u7701\u6b66\u6c49\u5e02\u6b66\u660c\u533a\u4e2d\u5317\u8def171\u53f7\uff0c\u6b66\u6c49\u4e2d\u592e\u6587\u5316\u533a\u5c55\u793a\u4e2d\u5fc3","opened":"1","detailpage":""}],"name":"\u6b66\u6c49","longitude":"114.3162","latitude":"30.581084"}},"name":"\u6e56\u5317","longitude":"112.410562","latitude":"31.209316"},"430000":{"cities":{"430100":{"providers":[{"sup_id":"27","province":"430000","city":"430100","address":"\u5f00\u798f\u533a\u9752\u7af9\u6e56\u5927\u9053699\u53f7\uff0c\u592a\u9633\u661f\u57ce","parkingnum":"6","longitude":"112.986119","latitude":"28.353669","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u957f\u6c99\u5e02\u5f00\u798f\u533a\u9752\u7af9\u6e56\u5927\u9053699\u53f7\uff0c\u592a\u9633\u661f\u57ce","opened":"1","detailpage":"\/supercharger\/changshafountainvalley"},{"sup_id":"28","province":"430000","city":"430100","address":"\u5929\u5fc3\u533a\u6e58\u5e9c\u8def198\u53f7\uff0c\u8c6a\u5e03\u65af\u5361\u9152\u5e97","parkingnum":"2","longitude":"113.002371","latitude":"28.118471","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u957f\u6c99\u5e02\u5929\u5fc3\u533a\u6e58\u5e9c\u8def198\u53f7\uff0c\u8c6a\u5e03\u65af\u5361\u9152\u5e97","opened":"1","detailpage":"\/supercharger\/changshahaobusika"}],"name":"\u957f\u6c99","longitude":"112.979353","latitude":"28.213478"}},"name":"\u6e56\u5357","longitude":"111.720664","latitude":"27.695864"},"440000":{"cities":{"440100":{"providers":[{"sup_id":"44","province":"440000","city":"440100","address":"\u5e7f\u4e1c\u7701\u5e7f\u5dde\u5e02\u6d77\u73e0\u533a\u5e7f\u5dde\u5927\u9053\u53571601-1603\u53f7\uff0c\u534e\u5357\u6c7d\u8d38\u5e7f\u573a","parkingnum":"4","longitude":"113.319826","latitude":"23.076611","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5e7f\u4e1c\u7701\u5e7f\u5dde\u5e02\u6d77\u73e0\u533a\u5e7f\u5dde\u5927\u9053\u53571601-1603\u53f7\uff0c\u534e\u5357\u6c7d\u8d38\u5e7f\u573a","opened":"1","detailpage":""},{"sup_id":"90","province":"440000","city":"440100","address":"\u5e7f\u4e1c\u7701\u5e7f\u5dde\u5e02\u5929\u6cb3\u533a\u4e34\u6c5f\u5927\u9053\u6d77\u5fc3\u6c99P4\u4e1c\u505c\u8f66\u573a","parkingnum":"8","longitude":"113.334789","latitude":"23.118598","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5e7f\u4e1c\u7701\u5e7f\u5dde\u5e02\u5929\u6cb3\u533a\u4e34\u6c5f\u5927\u9053\u6d77\u5fc3\u6c99P4\u4e1c\u505c\u8f66\u573a","opened":"1","detailpage":""},{"sup_id":"99","province":"440000","city":"440100","address":"\u5e7f\u4e1c\u7701\u5e7f\u5dde\u5e02\u5357\u6c99\u533a\u4e1c\u6d8c\u9547\u9c7c\u7a9d\u5934\u5927\u905368\u53f7\uff0c\u76db\u6797\u5927\u53a6","parkingnum":"2","longitude":"113.459282","latitude":"22.853185","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5e7f\u4e1c\u7701\u5e7f\u5dde\u5e02\u5357\u6c99\u533a\u4e1c\u6d8c\u9547\u9c7c\u7a9d\u5934\u5927\u905368\u53f7\uff0c\u76db\u6797\u5927\u53a6","opened":"1","detailpage":""},{"sup_id":"106","province":"440000","city":"440100","address":"\u5e7f\u4e1c\u7701\u5e7f\u5dde\u5e02\u5929\u6cb3\u533a\u5e7f\u56ed\u4e1c\u8def\u535a\u6c47\u88576\u53f7\uff0c\u4e2d\u68ee\u98df\u535a\u6c47","parkingnum":"4","longitude":"113.382671","latitude":"23.147219","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5e7f\u4e1c\u7701\u5e7f\u5dde\u5e02\u5929\u6cb3\u533a\u5e7f\u56ed\u4e1c\u8def\u535a\u6c47\u88576\u53f7\uff0c\u4e2d\u68ee\u98df\u535a\u6c47","opened":"1","detailpage":""}],"name":"\u5e7f\u5dde","longitude":"113.30765","latitude":"23.120049"},"440300":{"providers":[{"sup_id":"17","province":"440000","city":"440300","address":"\u9f99\u534e\u65b0\u533a\u6c11\u6cbb\u6c11\u5eb7\u8def1\u53f7\u534e\u5357\u7269\u6d41\u56ed\uff0c\u7279\u65af\u62c9\u670d\u52a1\u4e2d\u5fc3","parkingnum":"6","longitude":"114.061229","latitude":"22.623199","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6df1\u5733\u5e02\u9f99\u534e\u65b0\u533a\u6c11\u6cbb\u6c11\u5eb7\u8def1\u53f7\u534e\u5357\u7269\u6d41\u56ed\uff0c\u7279\u65af\u62c9\u670d\u52a1\u4e2d\u5fc3","opened":"1","detailpage":"\/supercharger\/shenzhen"},{"sup_id":"33","province":"440000","city":"440300","address":"\u5e7f\u4e1c\u7701\u6df1\u5733\u5e02\u5357\u5c71\u533a\u6ee8\u6d77\u5927\u90533001\u53f7\uff0c\u6df1\u5733\u6e7e\u4f53\u80b2\u4e2d\u5fc3","parkingnum":"8","longitude":"113.956392","latitude":"22.525521","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5e7f\u4e1c\u7701\u6df1\u5733\u5e02\u5357\u5c71\u533a\u6ee8\u6d77\u5927\u90533001\u53f7\uff0c\u6df1\u5733\u6e7e\u4f53\u80b2\u4e2d\u5fc3","opened":"1","detailpage":""},{"sup_id":"34","province":"440000","city":"440300","address":"\u5e7f\u4e1c\u7701\u6df1\u5733\u5e02\u798f\u7530\u533a\u7687\u5c97\u53e3\u5cb87\u697c","parkingnum":"6","longitude":"114.080375","latitude":"22.524472","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5e7f\u4e1c\u7701\u6df1\u5733\u5e02\u798f\u7530\u533a\u7687\u5c97\u53e3\u5cb87\u697c","opened":"1","detailpage":""}],"name":"\u6df1\u5733","longitude":"114.025974","latitude":"22.546054"},"440400":{"providers":[{"sup_id":"203","province":"440000","city":"440400","address":"\u5e7f\u4e1c\u7701\u73e0\u6d77\u5e02\u9999\u6d32\u533a\u6e2f\u6e7e\u5927\u9053\u79d1\u6280\u4e00\u8def3\u53f7\uff0c\u8fdc\u5149\u8f6f\u4ef6\u56ed","parkingnum":"2","longitude":"113.567859","latitude":"22.379412","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u5e7f\u4e1c\u7701\u73e0\u6d77\u5e02\u9999\u6d32\u533a\u6e2f\u6e7e\u5927\u9053\u79d1\u6280\u4e00\u8def3\u53f7\uff0c\u8fdc\u5149\u8f6f\u4ef6\u56ed","opened":"1","detailpage":""}],"name":"\u73e0\u6d77","longitude":"113.562447","latitude":"22.256915"}},"name":"\u5e7f\u4e1c","longitude":"113.394818","latitude":"23.408004"},"500000":{"cities":{"500112":{"providers":[{"sup_id":"23","province":"500000","city":"500112","address":"\u6d2a\u6e56\u4e1c\u8def9\u53f7\uff0c\u8d22\u5bcc\u5927\u53a6","parkingnum":"6","longitude":"106.515881","latitude":"29.613812","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u91cd\u5e86\u5e02\u6e1d\u5317\u533a\u6d2a\u6e56\u4e1c\u8def9\u53f7\uff0c\u8d22\u5bcc\u5927\u53a6","opened":"1","detailpage":"\/supercharger\/chongqingfp"}],"name":"\u6e1d\u5317","longitude":"106.753799","latitude":"29.816264"}},"name":"\u91cd\u5e86","longitude":"117.292878","latitude":"31.827336"},"510000":{"cities":{"510100":{"providers":[{"sup_id":"20","province":"510000","city":"510100","address":"\u9ad8\u65b0\u533a\u5929\u5e9c\u5927\u9053\u5317\u6bb516\u53f7\u8054\u901a\u8425\u4e1a\u5385","parkingnum":"2","longitude":"104.073777","latitude":"30.598984","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6210\u90fd\u5e02\u9ad8\u65b0\u533a\u5929\u5e9c\u5927\u9053\u5317\u6bb516\u53f7\uff0c\u8054\u901a\u8425\u4e1a\u5385","opened":"1","detailpage":"\/supercharger\/chengduunicom"},{"sup_id":"22","province":"510000","city":"510100","address":"\u9526\u6c5f\u533a\u4eba\u6c11\u5357\u8def\u4e8c\u6bb51\u53f7\uff0c\u4ec1\u6052\u7f6e\u5730\u5e7f\u573a","parkingnum":"4","longitude":"104.073464","latitude":"30.657641","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u6210\u90fd\u4eba\u6c11\u5357\u8def\u4e8c\u6bb51\u53f7\uff0c\u4ec1\u6052\u7f6e\u5730\u5e7f\u573a","opened":"1","detailpage":"\/supercharger\/chengdurenheng"},{"sup_id":"24","province":"510000","city":"510100","address":"\u9ad8\u65b0\u533a\u5929\u5e9c\u5927\u9053\u5317\u6bb51199\u53f7\uff0c\u94f6\u6cf0\u4e2d\u5fc3","parkingnum":"6","longitude":"104.075149","latitude":"30.591775","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u56db\u5ddd\u7701\u6210\u90fd\u5e02\u9ad8\u65b0\u533a\u5929\u5e9c\u5927\u9053\u5317\u6bb51199\u53f7\uff0c\u94f6\u6cf0\u4e2d\u5fc3","opened":"1","detailpage":"\/supercharger\/chengduhitech"},{"sup_id":"100","province":"510000","city":"510100","address":"\u56db\u5ddd\u7701\u6210\u90fd\u5e02\u9ad8\u65b0\u533a\u706b\u8f66\u5357\u7ad9\u897f\u8def1777\u53f7\uff0c\u7279\u65af\u62c9\u670d\u52a1\u4e2d\u5fc3","parkingnum":"4","longitude":"104.034902","latitude":"30.594185","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u56db\u5ddd\u7701\u6210\u90fd\u5e02\u9ad8\u65b0\u533a\u706b\u8f66\u5357\u7ad9\u897f\u8def1777\u53f7\uff0c\u7279\u65af\u62c9\u670d\u52a1\u4e2d\u5fc3","opened":"1","detailpage":""},{"sup_id":"104","province":"510000","city":"510100","address":"\u56db\u5ddd\u7701\u90fd\u6c5f\u5830\u5e02\u7fe0\u6708\u6e56\u9547\u805a\u9752\u8def18\u53f7\uff0c\u9759\u6708\u6e56\u5bbe\u9986","parkingnum":"4","longitude":"103.651499","latitude":"30.905114","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u56db\u5ddd\u7701\u90fd\u6c5f\u5830\u5e02\u7fe0\u6708\u6e56\u9547\u805a\u9752\u8def18\u53f7\uff0c\u9759\u6708\u6e56\u5bbe\u9986","opened":"1","detailpage":""}],"name":"\u6210\u90fd","longitude":"102.89916","latitude":"30.367481"}},"name":"\u56db\u5ddd","longitude":"102.89916","latitude":"30.367481"},"530000":{"cities":{"530100":{"providers":[{"sup_id":"173","province":"530000","city":"530100","address":"\u4e91\u5357\u7701\u6606\u660e\u5e02\u76d8\u9f99\u533a\u5317\u4eac\u8def\u5ef6\u957f\u7ebf987\u53f7\uff0c\u4fca\u53d1\u4e2d\u5fc3","parkingnum":"6","longitude":"102.729749","latitude":"25.06967","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u4e91\u5357\u7701\u6606\u660e\u5e02\u76d8\u9f99\u533a\u5317\u4eac\u8def\u5ef6\u957f\u7ebf987\u53f7\uff0c\u4fca\u53d1\u4e2d\u5fc3","opened":"1","detailpage":""}],"name":"\u6606\u660e","longitude":"102.714601","latitude":"25.049153"}},"name":"\u4e91\u5357","longitude":"101.592952","latitude":"24.864213"},"610000":{"cities":{"610100":{"providers":[{"sup_id":"89","province":"610000","city":"610100","address":"\u9655\u897f\u7701\u897f\u5b89\u5e02\u96c1\u5854\u533a\u6ca3\u60e0\u5357\u8def\u4e0e\u79d1\u6280\u4e8c\u8def\u4ea4\u6c47\u5904\u897f\u5357\u89d2\uff0c \u6cf0\u534e\u91d1\u8d38\u56fd\u9645  ","parkingnum":"4","longitude":"108.894146","latitude":"34.230591","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u9655\u897f\u7701\u897f\u5b89\u5e02\u96c1\u5854\u533a\u6ca3\u60e0\u5357\u8def\u4e0e\u79d1\u6280\u4e8c\u8def\u4ea4\u6c47\u5904\u897f\u5357\u89d2\uff0c \u6cf0\u534e\u91d1\u8d38\u56fd\u9645  ","opened":"1","detailpage":""},{"sup_id":"181","province":"610000","city":"610100","address":"\u9655\u897f\u7701\u897f\u5b89\u5e02\u9ad8\u65b0\u533a\u4e08\u516b\u4e09\u8def26\u53f7\uff0c\u7279\u65af\u62c9\u670d\u52a1\u4e2d\u5fc3","parkingnum":"4","longitude":"108.882323","latitude":"34.191731","time":"24\u5c0f\u65f6\/\u5929","is_delete":"0","detailedaddress":"\u9655\u897f\u7701\u897f\u5b89\u5e02\u9ad8\u65b0\u533a\u4e08\u516b\u4e09\u8def26\u53f7\uff0c\u7279\u65af\u62c9\u670d\u52a1\u4e2d\u5fc3","opened":"1","detailpage":""}],"name":"\u897f\u5b89","longitude":"108.953098","latitude":"34.2778"}},"name":"\u9655\u897f","longitude":"109.503789","latitude":"35.860026"}};
    var map = new BMap.Map("super-map");
    var loaded = false;
    var searchInfoWindow = null;
    map.addControl(new BMap.MapTypeControl({mapTypes: [BMAP_NORMAL_MAP,BMAP_HYBRID_MAP],anchor: BMAP_ANCHOR_BOTTOM_RIGHT}));
    map.centerAndZoom(new BMap.Point(108.480748,34.22044), 5);
    map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT}));
    map.addControl(new BMap.ScaleControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT}));
	map.enableScrollWheelZoom();   //启用滚轮放大缩小，默认禁用
	map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用
    superCharger(map);

    function superCharger(){
        if (!loaded) {
            map.clearOverlays();
        }
        $('#province option').remove();
        $('#province').append('<option value="0">全国</option>');
        $('#province_text').html('全国');
        $('#city_text').html('<font color="#d3d3d3">请选择</font>');
        $('#city option').remove();
        $('#schargelist').empty();
        map.centerAndZoom(new BMap.Point(108.480748,34.22044), 5);
        var counter = 0;
        $.each(superChargers, function (provinceId, province) {
            $('#province').append('<option value="' + provinceId +'">' + province.name + '</option>');
            $.each(province.cities, function(cityId, city) {
                $.each(city.providers, function (index, item) {
                    if (!loaded) {
                        addMarker(item);
                    }
                    var oddClass = counter % 2 ? '' : 'odd';
                    var areaName = province.name + city.name;
                    if (province.name == city.name) {
                        areaName = province.name;
                    }
                    $('#schargelist').append('<tr class="' + oddClass + '" onclick="javascript:locateProvider(' + item.province + ',' + item.city + ',' + item.sup_id + ');"><td class="sc-address">' + areaName + '<br/><span>' + item. detailedaddress +  '</span></td><td class="charger-num">' + item. parkingnum +'</td></tr>');
                    counter++;
                });
            });
        });
        loaded = true;
    }
    function addMarker(provider) {
        var point=new BMap.Point(provider.longitude, provider.latitude);
        var iconImage = provider.opened == 1 ? '' : '-comingsoon';
        var myIcon = new BMap.Icon('/sites/all/themes/tesla/findus/app/assets/icon-supercharger' + iconImage + '.png', new BMap.Size(23, 33));
        var marker=new BMap.Marker(point, {icon: myIcon});
        map.addOverlay(marker);
        marker.addEventListener('click', function(){
            $('#province').val(provider.province);
            $('#province').trigger('change');
            $('#city').val(provider.city);
            $('#city').trigger('change');
            var viewport=map.getViewport([provider.longitude, provider.latitude]);
            map.centerAndZoom(point,viewport.zoom);
            var content = '<div class="info-window">' +
                    '地址：' + provider.address + '<br />' +
                    '充电桩：'  + provider.parkingnum;// + '<br />' +
                  //  '时间: ' + provider.time;
            if (provider.opened == '1') {
                   content += '<a href="' + provider.detailpage + '">详细信息》</a>';
            }
            content += '</div>';
            searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
                title: '特斯拉超级充电站',
          width: 290,
          panel: "panel",
          enableAutoPan: true,
          searchTypes: [
              BMAPLIB_TAB_SEARCH,
              BMAPLIB_TAB_TO_HERE,
              BMAPLIB_TAB_FROM_HERE
          ]
             });
             searchInfoWindow.open(marker);
             $('.BMapLib_sendToPhone').remove();
        });
        provider.marker = marker;
    }

    $('#province').change(function(){
        if (searchInfoWindow) {
            searchInfoWindow.close();
        }
        var selectedProvince = $("#province").val();
        if ( selectedProvince == 0 ){
            superCharger();
        } else {
            map.centerAndZoom(new BMap.Point(superChargers[selectedProvince].longitude, superChargers[selectedProvince].latitude), 9);
            $('#schargelist').empty();
            var counter = 0;
            var province = superChargers[selectedProvince];
            $.each(province.cities, function(cityId, city) {
                $.each(city.providers, function (index, item) {
                    var oddClass = counter % 2 ? '' : 'odd';
                    var areaName = province.name + city.name;
                    if (province.name == city.name) {
                        areaName = province.name;
                    }
                    $('#schargelist').append('<tr class="' + oddClass + '" onclick="javascript:locateProvider(' + item.province + ',' + item.city + ',' + item.sup_id + ');"><td class="sc-address">' + areaName + '<br/><span>' + item. detailedaddress +  '</span></td><td class="charger-num">' + item. parkingnum +'</td></tr>');
                    counter++;
                });
            });
            $('#province_text').html(superChargers[selectedProvince].name);
            $('#city_text').html('请选择');
            $('#city option').remove();
            $('#city').append('<option value="0">请选择</option>');
            $.each(superChargers[selectedProvince].cities, function(cityId, city) {
                $('#city').append('<option value="' + cityId + '">' + city.name + '</option>');
            });
        }
    });
    $('#city').change(function(){
        if (searchInfoWindow) {
            searchInfoWindow.close();
        }
        $('#schargelist').empty();
        var province = superChargers[$('#province').val()];
        if ($('#city').val() == 0) {
            $('#province').trigger('change');
        } else {
            var city = province.cities[$('#city').val()];
            map.centerAndZoom(new BMap.Point(city.longitude, city.latitude), 12);
            $('#city_text').html(city.name);
            map.centerAndZoom(new BMap.Point(city.longitude, city.latitude), 12);
            $.each(city.providers, function (index, item) {
                var oddClass = index % 2 ? '' : 'odd';
                var areaName = province.name + city.name;
                if (province.name == city.name) {
                    areaName = province.name;
                }
                $('#schargelist').append('<tr class="' + oddClass + '" onclick="javascript:locateProvider(' + item.province + ',' + item.city + ',' + item.sup_id + ');"><td class="sc-address">' + areaName + '<br/><span>' + item. detailedaddress +  '</span></td><td class="charger-num">' + item. parkingnum +'</td></tr>');
            });
        }
    });

    function locateProvider(provinceId, cityId, providerId) {
        var providers = superChargers[provinceId].cities[cityId].providers;
        var targetProvider = null;
        for(var i = 0, l = providers.length; i < l; i++) {
            if (providers[i].sup_id == providerId) {
                targetProvider = providers[i];
                break;
            }
        }
        targetProvider.marker.dispatchEvent('click');
window.scrollTo(0, $('#super-map').offset().top)
    };
</script>  
 -->
							</div>
						</div>
						<div class="panel-region-separator"></div>
						<div class="panel-pane pane-custom pane-4">
							<div class="pane-content">
								<div id="how_it_works" class="dshadow clear-block">

									<div id="explanation">
										<h2>工作原理</h2>
										<p>Tesla（特斯拉）超级充电器代表了当今世界最先进的充电技术，它为 Model S 充电的速度远快于大多数充电站。仅需
											20 分钟就可以充满一半电量，且电费全免。它通过特制电缆绕过车载充电设备，直接将直流电输入电池。</p>
										<p>选择使用覆盖着太阳能电池板遮阳棚的充电站，既可以抵消能源消耗又能够遮阳。在接下来几年中，我们计划在阳光充足的地点建设更多的充电站，使用太阳能遮阳棚，为保护环境尽我们一份承诺。
										</p>
										<p>与在加油站加油需要付费不同，经过适当配置的 Model S
											可以在任何开放充电站免费充电。您只需将车停靠在充电站旁，插入电源插座，就可以去洗手间或去享用快餐，一刻钟左右就可以重新上路了。
										</p>
										<p>
											<span class="bold">如有问题或建议</span>, 请发电子邮件至 <a
												href="mailto:Supercharger-China@teslamotors.com">Supercharger-China@teslamotors.com
											</a>
										</p>
									</div>
									<div id="optimal_charging">
										<p>
											<span class="bold">最佳充电方法</span>为您的 Model S 补充电量的最快方法是每次充 80%
											电量，这足以保证您自如地在许多超级充电站之间接力行驶。充满最后 20% 电量所需时间与充入前 80%
											电量所需时间基本相同，原因是充满电芯时需要减小充电电流。这有点类似于给杯子加满水时要关小水龙头避免溢出。
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="panel-region-separator"></div>
						<div class="panel-pane pane-custom pane-5">
							<div class="pane-content">
								<div id="content-5" class="dshadow">
									<img src="<?php echo $img_dir;?>tesla_closeup.jpg" width="960"
										height="520" alt="Model S at Supercharger" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- / Content -->
			</div>
			<!-- / page -->
		</div>
		<!-- End content wrapper-->
	</div>
	<!-- End wrapper -->
	<!--  tesla页面-end   -->




	<footer class="container" style="margin-top: 220px">
		<div id="the_footer">
			<span>Copyright © 2015 国翰能源 Inc. 渝ICP备xxxxxx号</span>
		</div>
	</footer>

</body>

</html>