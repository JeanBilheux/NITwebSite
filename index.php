<?php 
  require_once('appvars.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>Welcome to the ORNL NIT website</title>
		<link rel="stylesheet" type="text/css" href="styles/index.css" />
		<link rel="stylesheet" type="text/css" href="styles/jquery-ui-1.7.2.custom.css" />
		<link rel="stylesheet" type="text/css" href="styles/tabs.css" />
<!-- 		<link rel="stylesheet" type="text/css" href="styles/showroom.css" /> -->
		<!-- used by the accordion -->
		<!-- 		<link rel="stylesheet" href="slidorion/css/style.css" /> -->
		<link rel="stylesheet" href="slidorion/css/slidorion.css" />
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,700' rel='stylesheet' type='text/css'>
		<!-- 		<link rel="stylesheet" type="text/css" href="styles/index.css" /> -->
	</head>
	<body>
		<!-- turn this on to see the page flip at the top right corner of the window -->
		<!-- 		<div id="pageflip">
		<img src="images/page_flip.png" alt="" />
		<span class="msg_block">My message here</span>
		</div> -->
		<div id="container">
			<div id="body">
				<div id="header">
					<div id="menu">
						<!--Add the interactive menu here -->
						<ul id="nav-shadow">
							<li class="button-color-1">
								<a href="publications.php" title="Publications"></a>
							</li>
							<li class="button-color-2">
								<a href="faq.php" title="Q&As"></a>
							</li>
							<li class="button-color-3">
								<a href="multimedia.php" title="Multimedia"></a>
							</li>
							<li class="button-color-4">
								<a href="team.php" title="Meet the team"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- 			<div id="showroom"> -->
			<div id="slidorion">
				<div id="slider">
					<div class="slider-image" rel="section1">
						<a href="imars.php"><img src="images/showroom_iMars_left.png" width="500" height="400" /></a>
					</div>
					<div class="slider-image" rel="section2">
						<a href="ancient_lamp.php"><img src="images/showroom_lamp_left.png" width="500" height="400" /></a>
					</div>
					<div class="slider-image" rel="section3">
						<a href="ejectors.php"><img src="images/showroom_ejectors_left.png" width="500" height="400" /></a>
					</div>
				</div>
				<div id="accordion">
					<!-- First tab -->
					<div class="header">
						<a class="slider-link" rel="section1">iMars</a>
					</div>
					<div class="content">
						<!-- CONTENT GOES HERE -->
						<div id='title'>
							iMars (<b>iM</b>aging <b>R</b>eduction <b>S</b>oftware)
							<br/>
							<br/>
						</div>
						<div id='description'>
							This program has been developed to reduce a full set of data in just a few
							seconds. Users can now quickly visualize the normalized data and can leave
							the facility with the files of interest (pictures) in their pocket.
						</div>
						<br/>
						<br/>
						<a href="imars.php">Read more...</a>
					</div>
					<!-- second tab -->
					<div class="header">
						<a class="slider-link" rel="section2">Magic Lamp</a>
					</div>
					<div class="content">
						<!-- CONTENT GOES HERE -->
						<div id='title'>
							<b>Ancient Lamps, Earrings Yeild Their Secrets Under Neutron Imaging</b>
							<br/>
							<br/>
						</div>
						<div id='description'>
							For the first time at ORNL, neutron images in three dimensions (3-D) have been taken of rare archaeological artifacts.
							Bronze and brass artifacts excavated at the ancient city of Petra, in present day Jordan, were recently imaged in 3-D using
							neutrons at the High Flux Isotope Reactor's CG-1D neutron imaging instrument.
						</div>
						<br/>
						<br/>
						<a href="ancient_lamp.php">Read more...</a>
					</div>
					<!-- third tab -->
					<div class="header">
						<a class="slider-link" rel="section3">Ejectors</a>
					</div>
					<div class="content">
						<!-- CONTENT GOES HERE -->
						<div id='title'>
							<b>Scientist and Industry Use Neutron Imaging to Improve Energy Efficiency</b>
							<br/>
							<br/>
						</div>
						<div id='description'>
							Neutron scientists are partnering with industry to enhance engine and commercial
							cooling technologies in hopes of making	improvements that will optimize fuel and energy efficiency.
						</div>
						<br/>
						<br/>
						<a href="ejectors.php">Read more...</a>
					</div>
				</div>
			</div>
			<div id="bottom_right">
				<a href="tutorial.php"><div id="tutorial">
					<div class="title">
						Tutorial
					</div>
					<div class="text_info">
					</div>
				</div></a>
				<a href="cg1d.php"><div id="cg1d">
					<div class="title">
						CG1D
					</div>
					<div class="text_info">
						Neutron
						<br />
						imaging
						<br />
						beam line
						<br />
						<b>prototype</b>
						<br />
						at HFIR.
					</div>
				</div></a>
				<a href="tutorial.php"><div id="venus">
					<div class="title">
						Venus
					</div>
					<div class="text_info">
						<b>Future</b>
						<br />
						neutron
						<br />
						imaging
						<br />
						beam line
						<br />
						at the SNS
					</div>
				</div></a>
			</div>
			<!-- bottom left tab -->
			<div id="tab">
				<div id="info">
					<ul>
						<li>
							<a href="#intro">In the news</a>
						</li>
						<li>
							<a href="on_the_road_again.php">On the road again</a>
						</li>
						<li>
							<a href="user_corner.php">User corner</a>
						</li>
					</ul>
					<div id="intro">
						<p>
							<a href="ancient_lamp.php"> <img src="images/articles/ArchaeologyMagazine.png" alt="January/February 2012 edition of Archeology Magazine" width=75% height=75% />
							<div id="contain">
								The January/February edition of Archaeology Magazine features
								<br />
								an article about the "Genie lamp experiment"
							</div> </a>
						</p>
					</div>
				</div>
			</div>
			<!-- end of showroom -->
			<!-- bottom right tab -->
			<br/>
			<hr width="95%">
			<div id="contact">
				<a id="ornl_link" href="http://www.ornl.gov/"></a>
				<a id="us_energy_link" href="http://science.energy.gov/"></a>
				<!-- 				<a href="index.html"><img src='images/home.png' alt='Home' align=center width="30" /></a> -->
				<!-- 				&nbsp;&nbsp;&nbsp;<b>-</b>&nbsp;&nbsp;&nbsp; -->
				<a href="contact_us.php">Contact us</a> | <a href="http://www.ornl.gov/ornlhome/disclaimrs.shtml">Security Notice</a> | <a href="http://www.oakridge.doe.gov/external/">DOE</a> | <a href="http://ut-battelle.org/">UT-Battelle</a>
				<br/>
				<br/>
				<div id="bottom_message">
					SNS and HFIR are Office of Science user facilities operated for the <a href="http://energy.gov/">U.S. Department of Enegy</a>
					<a href="http://www.science.doe.gov/"> Office of Science</a>
					<br/>
					by <a href="http://www.ornl.gov/">Oak Ridge National Laboratory</a>, which is managed by the <a href="http://www.ut-battelle.org/">UT-Battelle, LLC</a>.
					<br/><br/><span id="last_update">Last updated: <?php echo LAST_UPDATE ?></span>
				</div>
				<br/>
				<br/>
				<br/>
			</div>
		</div>
		<!-- end of container -->
		<script src="scripts/jquery.js" type="text/javascript"></script>
		<script src="scripts/animated_background.js" type="text/javascript"></script>
		<script src="scripts/jquery-1.3.2.min.js" type="text/javascript"></script>
		<script src="scripts/my_scripts.js" type="text/javascript"></script>
		<script src="scripts/menu_buttons.js" type"text/javascript"></script>
		<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="scripts/jquery.kwicks-1.5.1.pack.js" type="text/javascript"></script>
		<script src="scripts/tab_scripts.js" type="text/javascript"></script>
		<script src="scripts/jquery.blend-min.js" type="text/javascript"></script>
		<script src="scripts/jquery.hoverIntent.minified.js" type="text/javascript"></script>
		<script src="scripts/jquery-ui-1.7.2.custom.min.js" type="text/javascript"></script>
		<script src="scripts/bottom_right.js" type="text/javascript"></script>
		<script src="scripts/showroom.js" type="text/javascript"></script>
		<!-- necessary for the accordion showroom -->
		<script src="slidorion/js/jquery.slidorion.min.js"></script>
	</body>
</html>