<?php
require_once ('header_part1.php');
?>

<link rel="stylesheet" type="text/css" href="prettyPhoto_compressed_3.1.3/styles/jquery-ui-1.7.2.custom.css" />
<link rel="stylesheet" href="prettyPhoto_compressed_3.1.3/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="prettyPhoto_compressed_3.1.3/js/jquery-1.6.1.min.js" type="text/javascript"></script>
<style type="text/css">
	#container {
		height: 1285px;
	}
	#body {
		height: 1000px;
	}
	#real_body {
		height: 860px;
	}
	li {
		list-style: none;
	}
	#title h3{
		position: relative;
		left: 260px;
		top: 30px;		
		color: red;
	}
	#real_body {
		position: relative;
		top: -50px;
	}
</style>
<?php
require_once ('header_part2.php');
?>

<div id="title">
	<h3>Click any of the 4 filmstrip to preview the corresponding video.</h3>
</div>
<div id="real_body">
	<!-- body really starts -->
	<map name="planetmap">
		<area shape="poly" coords="140,94,606,182,612,330,137,435" href="movies/filter.mov?width=470&height=272" rel="prettyPhoto" />
		<area shape="poly" coords="642,163,790,108,786,214,636,309" href="movies/video2.mov?width=640&height=360" rel="prettyPhoto" />
		<area shape="poly" coords="801,101,871,74,869,153,796,203" href="movies/video3.mov?width=640&height=360" rel="prettyPhoto" />
		<area shape="poly" coords="880,72,919,103,915,168,874,152" href="movies/video4.mov?width=640&height=360" rel="prettyPhoto" />
	</map>
	<div class="gallery clearfix">
		<img src="images/multimedia_background.png" alt="film strip" usemap="#planetmap"/>
	</div>
	<!-- end of real body -->
</div>
<br/>
<hr width="90%">
<?php
require_once ('footer_part1.php');
?>

<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		$("area[rel^='prettyPhoto']").prettyPhoto();

		$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
			animation_speed : 'normal',
			theme : 'light_square',
			// slideshow : 3000,
			// autoplay_slideshow : true
		});
		$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
			animation_speed : 'fast',
			// slideshow : 10000,
			hideflash : true
		});

		$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
			custom_markup : '<div id="map_canvas" style="width:260px; height:265px"></div>',
			changepicturecallback : function() { initialize();
			}
		});

		$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
			custom_markup : '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
			changepicturecallback : function() {
				_bsap.exec();
			}
		});
	});

</script>
<script src="prettyPhoto_compressed_3.1.3/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
</body> </html>