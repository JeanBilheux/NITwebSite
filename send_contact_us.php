<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>ORNL Neutron Imaging Team</title>
		<link rel="stylesheet" type="text/css" href="styles/index.css" />
		<link rel="stylesheet" type="text/css" href="styles/jquery-ui-1.7.2.custom.css" />
		<link rel="stylesheet" type="text/css" href="styles/contact.css" />
		<style type='text/css'>
			#confirmation {
				height: 400px;
			}
		</style>
	</head>
	<body>
		<!-- turn this on to see the page flip at the top right corner of the window -->
		<div id="container">
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
							<a href="#" title="Links"></a>
						</li>
						<li class="button-color-4">
							<a href="team.php" title="Meet the team">Meet the team</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contact_top">
				<a href="index.php"><img src='images/home.png' alt='Home' align=center width="30" /></a>
			</div>
			<div id="spacer"></div>
			<div id="confirmation">
				<?php
					$first_name=$_POST['firstname'];
					$last_name=$_POST['lastname'];
					$email=$_POST['email'];
					$institute=$_POST['institute'];
					$familiar=$_POST['yes'];
					$comments=$_POST['comments'];
					echo $first_name;
					echo $last_name;
					echo $email;
					echo $institute;
					echo $familiar;
					echo $comments;
					$to='bilheuxjm@ornl.gov';
					$subject='email test from '.$first_name.' '.$last_name;
					$msg="Contact: email:" . $email . "\r\n" . 'Institute: ' . $institute . "\r\n Are you familiar with neutron imaging: " . $familiar . "\r\n Comments: " .$comments; 
					mail($to,$subject,$msg,'From: '.$email);
				?>
				<br/>
				<hr>
				<div id="contact">
					<a id="ornl_link" href="http://www.ornl.gov/"></a>
					<a id="us_energy_link" href="http://science.energy.gov/"></a>
					<!-- 				<a href="index.html"><img src='images/home.png' alt='Home' align=center width="30" /></a> -->
					<!-- 				&nbsp;&nbsp;&nbsp;<b>-</b>&nbsp;&nbsp;&nbsp; -->
					<a href="index.php"><img src='images/home.png' alt='Home' align=center width="30" /></a>
					&nbsp;&nbsp;&nbsp;<b>|</b>&nbsp;&nbsp;&nbsp; <a href="contact_us.php">Contact us</a> | <a href="http://www.ornl.gov/ornlhome/disclaimrs.shtml">Security Notice</a> | <a href="http://www.oakridge.doe.gov/external/">DOE</a> | <a href="http://ut-battelle.org/">UT-Battelle</a>
					<br/>
					<br/>
					<div id="bottom_message">
						SNS and HFIR are Office of Science user facilities operated for the <a href="http://energy.gov/">U.S. Department of Enegy</a>
						<a href="http://www.science.doe.gov/"> Office of Science</a>
						<br/>
						by <a href="http://www.ornl.gov/">Oak Ridge National Laboratory</a>, which is managed by the <a href="http://www.ut-battelle.org/">UT-Battelle, LLC</a>.
						<br/>
						<br/>
						<span id="last_update">Last updated: <?php require_once('appvars.php'); echo LAST_UPDATE
							?></span
					</div>
					<br/>
					<br/>
					<br/>
				</div>
			</div>
			<!-- end of container -->
			<script src="scripts/jQuery.js" type="text/javascript"></script>
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
	</body>
</html>
