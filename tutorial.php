<?php
require_once ('header_part1.php');
?>
<!-- <link rel="stylesheet" type="text/css" href="styles/ancient_lamp.css " /> -->
<link rel="stylesheet" media="screen" type="text/css" href="spacegallery/css/spacegallery.css" />
<link rel="stylesheet" media="screen" type="text/css" href="spacegallery/css/custom.css" />
<script src="scripts/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="spacegallery/js/eye.js"></script>
<script type="text/javascript" src="spacegallery/js/utils.js"></script>
<script type="text/javascript" src="spacegallery/js/spacegallery.js"></script>
<script type="text/javascript" src="spacegallery/js/layout.js"></script>
<style type="text/css">
	#container {
		height: 1230px;
	}
	#body {
		height: 1000px;
	}
	#real_body {
		height: 860px;
	}
	#myGallery {
		height: 750px;
	}
	
	.description {
		position: relative;
		top: -100px;
		font-size: 1.2em;
		text-align: center;
		display:none;
	}
	
	#description1 {
		display:block;
	}
	
</style>

<?php
require_once ('header_part2.php');
?>

<!-- body really starts -->
<div id="real_body">
	<div class="tab">
		<div id="myGallery" class="spacegallery">
			<img src="images/tutorial/tutorial11.png" alt=""/>
			<img src="images/tutorial/tutorial10.png" alt=""/>
			<img src="images/tutorial/tutorial9.png" alt=""/>
			<img src="images/tutorial/tutorial8.png" alt=""/>
			<img src="images/tutorial/tutorial7.png" alt=""/>
			<img src="images/tutorial/tutorial6.png" alt=""/>
			<img src="images/tutorial/tutorial5.png" alt=""/>
			<img src="images/tutorial/tutorial4.png" alt=""/>
			<img src="images/tutorial/tutorial3.png" alt=""/>
			<img src="images/tutorial/tutorial2.png" alt=""/>
			<img src="images/tutorial/tutorial1.png" alt=""/>
		</div>
	</div>

	<div id="comments">
		<div id="description1" class="description">This is for slide 1</div>	
		<div id="description2" class="description">This is for slide 2</div>	
		<div id="description3" class="description">This is for slide 3</div>	
		<div id="description4" class="description">This is for slide 4</div>	
		<div id="description5" class="description">This is for slide 5</div>	
		<div id="description6" class="description">This is for slide 6</div>	
		<div id="description7" class="description">This is for slide 7</div>	
		<div id="description8" class="description">This is for slide 8</div>	
		<div id="description9" class="description">This is for slide 9</div>	
		<div id="description10" class="description">This is for slide 10</div>	
		<div id="description11" class="description">This is for slide 11</div>	
	</div>

	<!-- end of real body -->
</div>
<hr width=95%>

<?php
require_once ('footer_part1.php');
?>

<!-- <script type="text/javascript">
		$('#myGallery').spacegallery({loadingClass : 'loading' });
</script> -->

</body>
</html>