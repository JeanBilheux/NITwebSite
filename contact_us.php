<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>ORNL Neutron Imaging Team</title>
		<link rel="stylesheet" type="text/css" href="styles/index.css" />
		<link rel="stylesheet" type="text/css" href="styles/jquery-ui-1.7.2.custom.css" />
		<!-- 		<link rel="stylesheet" type="text/css" href="styles/tabs.css" /> -->
		<!-- 		<link rel="stylesheet" type="text/css" href="styles/showroom.css" /> -->
		<link rel="stylesheet" type="text/css" href="styles/contact.css" />
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
			<div id="form">
				<h2 id="contact_us">Contact Us</h2>
				<br />
				<form method="post" action="send_contact_us.php">
					<label for="name">Your name:</label>
					<input type="text" id="name" name="name" />
					<br />
					<label for="email">Your email address:</label>
					<input type="text" id="email" name="email" /><span id='mandatory'>*</span>
					<label for="email2">Confirm email:</label>
					<input type="text" id="email2" name="email2" /><span id='mandatory'>*</span>
					<br />
					<label for="institute">Institute:</label>
					<input type="text" id="institute" name="institute" />
					<br />
					<label for="neutronfamiliar">Are you familiar with neutron imaging?</label>
					Yes
					<input id="neutronfamiliar" name="neutronfamiliar" type="radio" value="yes" />
					No
					<input id="neutronfamiliar" name="neutronfamiliar" type="radio" value="no" />
					<br />
					<br />
					<br />
					<label for="comments">Comments / Questions:</label>
					<textarea id="comments" name="comments"></textarea>
					<label for="verify">Verification:</label>
					<input type='text' id='verify' name='verify' value='Enter the pass-phrase.' />
					<img src="captcha.php" alt='Verification pass-phrase' / align="center" align="middle">
					<br />
					<br />
					<br />
					<input type="submit" value="Send Message" name="submit" />
				</form>
			</div>
			<!-- end of form -->
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
		<script src="scripts/jquery.js" type="text/javascript"></script>
		<script src="scripts/animated_background.js" type="text/javascript"></script>
		<script src="scripts/jquery-1.3.2.min.js" type="text/javascript"></script>
		<!-- 		<script src="scripts/my_scripts.js" type="text/javascript"></script> -->
		<script src="scripts/menu_buttons.js" type"text/javascript"></script>
		<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="scripts/jquery.kwicks-1.5.1.pack.js" type="text/javascript"></script>
		<!-- 		<script src="scripts/tab_scripts.js" type="text/javascript"></script> -->
		<script src="scripts/jquery.blend-min.js" type="text/javascript"></script>
		<script src="scripts/jquery.hoverIntent.minified.js" type="text/javascript"></script>
		<script src="scripts/jquery-ui-1.7.2.custom.min.js" type="text/javascript"></script>
	</body>
</html>