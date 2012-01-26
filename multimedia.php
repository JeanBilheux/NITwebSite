<?php
require_once ('header_part1.php');
?>

<link rel="stylesheet" type="text/css" href="prettyPhoto_compressed_3.1.3/styles/jquery-ui-1.7.2.custom.css" />
<link rel="stylesheet" href="prettyPhoto_compressed_3.1.3/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="prettyPhoto_compressed_3.1.3/js/jquery-1.6.1.min.js" type="text/javascript"></script>
<style type="text/css">
	#container {
		height: 1330px;
	}
	#body {
		height: 1100px;
	}
	#real_body {
		height: 930px;
	}
	li {
		list-style: none;
	}
	#real_body {
		position: relative;
		top: 0px;
	}
	#title {
		color: red;
		font-size: 1.3em;
		text-align: center;
	}
</style>
<?php
require_once ('header_part2.php');
?>

<br/>
<div id="title">Click any of the filmstrip to see the video.</div>
<br/>
<div id="real_body">
	<!-- body really starts -->

	<!-- 	
	<map name="planetmap">
		<area shape="poly" coords="54,75,263,39,262,193,54,226" href="movies/filter.mov?width=470&height=272" rel="prettyPhoto" />
		<area shape="poly" coords="272,38,481,76,481,230,271,193" href="movies/video2.mov?width=640&height=360" rel="prettyPhoto" />
		<area shape="poly" coords="489,77,699,113,701,268,490,231" href="movies/video3.mov?width=640&height=360" rel="prettyPhoto" />
		<area shape="poly" coords="707,114,917,78,918,232,707,268" href="movies/video4.mov?width=640&height=360" rel="prettyPhoto" />
	</map>
	<div class="gallery clearfix">
		<img src="movies/filmstrip_version1.png" alt="film strip" usemap="#planetmap"/>
	</div> -->	
	<map name="planetmap">
		<area shape="poly" coords="87,38,238,38,201,247,47,247" href="movies/filter.mov?width=470&height=272" rel="prettyPhoto" />
		<area shape="poly" coords="47,255,201,255,243,465,87,465" href="movies/video2.mov?width=640&height=360" rel="prettyPhoto" />
		<area shape="poly" coords="88,473,242,473,284,687,127,687" href="movies/video5.mov?width=640&height=360" rel="prettyPhoto" />
		<area shape="poly" coords="127,691,283,691,247,900,92,900" href="movies/video4.mov?width=640&height=360" rel="prettyPhoto" />
	</map>
	<div class="gallery clearfix">
		<img src="movies/filmstrip_version2.png" alt="film strip" usemap="#planetmap"/>
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