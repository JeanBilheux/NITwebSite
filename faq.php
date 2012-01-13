<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>ORNL Neutron Imaging Team</title>
		<link rel="stylesheet" type="text/css" href="styles/index.css" />
		<link rel="stylesheet" type="text/css" href="styles/jquery-ui-1.7.2.custom.css" />
		<link rel="stylesheet" type="text/css" href="styles/tabs.css" />
		<link rel="stylesheet" type="text/css" href="styles/showroom.css" />
		<link rel="stylesheet" type="text/css" href="styles/faq.css" />
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
								<a href="#" title="Q&As"></a>
							</li>
							<li class="button-color-3">
								<a href="#" title="Links"></a>
							</li>
							<li class="button-color-4">
								<a href="team.php" title="Meet the team"></a>
							</li>
						</ul>
					</div>
				</div>
				<div id="contact_top">
					<a href="index.php"><img src='images/home.png' alt='Home' align=center width="30" /></a>
				</div>
			</div>
			<!-- faq really starts -->
			<div id="accordion_faq">
				<div>
					<h3><a href="#">Proposal submission</a></h3>
					<ul id='categorie1'>
						<li id='#1'>
							<a href="#">Who should I contact to get help in writing my proposal?</a>
						</li>
						<li id='#2'>
							<a href="#">What is the format of a proposal and how do I submit one?</a>
						</li>
						<li id='#3'>
							<a href="#">How long does it take between the time I submit a proposal and the time I receive notification it is approved or not?</a>
						</li>
					</ul>
				</div>
				<div>
					<h3><a href="#">Access to data/facility</a></h3>
					<ul id='categorie2'>
						<li id="#1">
							<a href="#">How do I get access to the neutron facility?</a>
						</li>
						<li id="#2">
							<a href="#">How do I access my data?</a>
						</li>
						<li id="#3">
							<a href="#">How do I get access to neutron imaging capabilities?</a>
						</li>
						<li id="#4">
							<a href="#">How do I request access to a Chem. Lab?</a>
						</li>
					</ul>
				</div>
				<div>
					<h3><a href="#">At the instrument</a></h3>
					<ul id='categorie3'>
						<li id='#1'>
							<a href="#">When does my beam time start?</a>
						</li>
						<li id='#2'>
							<a href="#">How many people will be available to help us at the beamline?</a>
						</li>
						<li id='#3'>
							<a href="#">How long does a radiograph take?</a>
						</li>
						<li id='#4'>
							<a href="#">How long does a CT scan take?</a>
						</li>
					</ul>
				</div>
				<div>
					<h3><a href="#">Post processing</a></h3>
					<ul id='categorie4'>
						<li id='#1'>
							<a href="#">How do I reconstruct my data?</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="answers">
			</div>
			<br/>
			<hr width="90%">
			<div id="contact">
						<a id="ornl_link" href="http://www.ornl.gov/"></a>
						<a id="us_energy_link" href="http://science.energy.gov/"></a>
						<!-- 				<a href="index.html"><img src='images/home.png' alt='Home' align=center width="30" /></a> -->
						<!-- 				&nbsp;&nbsp;&nbsp;<b>-</b>&nbsp;&nbsp;&nbsp; -->
						<a href="index.php"><img src='images/home.png' alt='Home' align=center width="30" /></a>
					&nbsp;&nbsp;&nbsp;<b>|</b>&nbsp;&nbsp;&nbsp; 
					<a href="contact_us.php">Contact us</a> | <a href="http://www.ornl.gov/ornlhome/disclaimrs.shtml">Security Notice</a> | <a href="http://www.oakridge.doe.gov/external/">DOE</a> | <a href="http://ut-battelle.org/">UT-Battelle</a>
						<br/>
						<br/>
						<div id="bottom_message">
							SNS and HFIR are Office of Science user facilities operated for the <a href="http://energy.gov/">U.S. Department of Enegy</a>
							<a href="http://www.science.doe.gov/"> Office of Science</a>
							<br/>
							by <a href="http://www.ornl.gov/">Oak Ridge National Laboratory</a>, which is managed by the <a href="http://www.ut-battelle.org/">UT-Battelle, LLC</a>.
					<br/><br/><span id="last_update">Last updated: <?php require_once('appvars.php'); echo LAST_UPDATE ?></span>
						</div>
						<br/>
						<br/>
						<br/>
					</div>
		</div>
		<!-- script files -->
		<script src="scripts/jquery.js" type="text/javascript"></script>
		<script src="scripts/animated_background.js" type="text/javascript"></script>
		<script src="scripts/jquery-1.3.2.min.js" type="text/javascript"></script>
		<!-- 		<script src="scripts/my_scripts.js" type="text/javascript"></script> -->
		<script src="scripts/menu_buttons.js" type"text/javascript"></script>
		<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="scripts/jquery.kwicks-1.5.1.pack.js" type="text/javascript"></script>
		<script src="scripts/tab_scripts.js" type="text/javascript"></script>
		<script src="scripts/jquery.blend-min.js" type="text/javascript"></script>
		<script src="scripts/jquery.hoverIntent.minified.js" type="text/javascript"></script>
		<script src="scripts/jquery-ui-1.7.2.custom.min.js" type="text/javascript"></script>
		<!-- 		<script src="scripts/bottom_right.js" type="text/javascript"></script> -->
		<script src="scripts/showroom.js" type="text/javascript"></script>
		<script src="scripts/jquery.blend-min.js" type="text/javascript"></script>
		<!-- local script files -->
		<script src="scripts/faq.js" type="text/javascript"></script>
	</body>
</html>