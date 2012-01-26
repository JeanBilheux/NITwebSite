<?php
require_once ('header_part1.php');
?>
<link rel="stylesheet" type="text/css" href="styles/imars.css" />
<style type="text/css">
	#container {
		height: 1150px;
	}
	#body {
		height: 1000px;
	}
	#abstract strong {
		color: red;
	}
	#abstract {
		padding-top: 10px;
		padding-left: 55px;
		padding-right: 55px;
	}
</style>
<?php
require_once ('header_part2.php');
?>
<div id="content">
	<div class="article">
		<div id='abstract'>
			<br />
			<strong>Abstract</strong>
			<p>
				Imaging beam line such as CG1D or Venus attract scientists but also industrials users from various
				fields (biology, mechanical, botanic, archeology, art, agro...).
				Users mostly interested by final plot, not process to get it. Reduction process, also called
				normalization for a set of runs is straightforward but is time consuming if done manually.
				Some of the measurements done required the full analyze of the previous image to move on to the
				next settings. It's important to minimize this analyze time in order to minimize the beam time lost.
				iMars has been developed to reduce a single, or full set of data in just a few seconds.
				Users can then quickly visualize the normalized data and take action for the next acquisition.
			</p>
			<p>
				This article will describe the principal features of this application
				and demonstrate its use with various examples.
			</p>
		</div>
		<img src="images/coming_soon_imars.png" width="100%" alt="Coming soon iMars description"/>
		<p>
			<!-- 			<a id="top_of_page" href="#">Top of page</a> -->
		</p>
	</div>
</div>
<br/>
<hr width="90%">
<?php
require_once ('footer_part1.php');
?>

<script src="scripts/ejectors_scripts.js" type="text/javascript"></script>
</body>
</html> 