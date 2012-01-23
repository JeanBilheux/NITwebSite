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
			div #missing {
				color: red;
				padding-left: 10px;
				font-size: 1.5em;
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
session_start();
echo "<div id='missing'><br/>";
$success=true;
$name=$_POST['name'];
if ($name == '') {
	echo "Please enter your name.<br />";
	$success=false;
}

$email=trim($_POST['email']);
if($email=='') {
	echo "Please enter a valid email!<br />";
	$success=false;
}

if($success) {
$email_confirm=trim($_POST['email2']);
if($email!=$email_confirm) {
echo "Emails do not match !";
$success=false;
}
}

if($success) {
	$pass_phrase=$_SESSION['pass_phrase'];
	$user_pass_phrase=sha1($_POST['verify']);
	if(!$success&&$user_pass_phrase!=$pass_phrase) {
		echo "Invalid pass-phrase !";
		$success=false;
	}
}

$institute=$_POST['institute'];
$familiar=$_POST['neutronfamiliar'];
$comments=$_POST['comments'];
$to='bilheuxjm@ornl.gov';
$subject='email test from '.$name;
$msg="Contact: email:".$email."\r\n".'Institute: '.$institute."\r\n Are you familiar with neutron imaging: ".$familiar."\r\n Comments: ".$comments;
echo "</div>";

if ($success)  {
	
	echo '<h2>Thanks for Contacting us!</h2>';
	echo 'We will email you using the contact information you provided';
	echo '<br /><br />';

} else {

echo '<div id="form">';
echo '<h2 id="contact_us">Contact Us</h2><br />';
echo '<form method="post" action="send_contact_us.php">';
echo '<label for="name">Your name:</label>';
echo '<input type="text" id="name" name="name" value="' . $name . '"/><span id="mandatory">*</span>';
echo '<br />';
echo '<label for="email">Your email address:</label>';
echo '<input type="text" id="email" name="email" value="' . $email . '"/><span id="mandatory">*</span>';
echo '<label for="email2">Confirm email:</label>';
echo '<input type="text" id="email2" name="email2" value="' . $email_confirm . '" /><span id="mandatory">*</span>';
echo '<br />';
echo '<label for="institute">Institute:</label>';
echo '<input type="text" id="institute" name="institute" value="' . $institute . '" />';
echo '<br />';
echo '<label for="neutronfamiliar">Are you familiar with neutron imaging?</label>';

if ($familiar == 'yes') {
	echo 'Yes';
	echo '<input id="neutronfamiliar" name="neutronfamiliar" type="radio" value="yes" checked="yes" />';
	echo 'No';
	echo '<input id="neutronfamiliar" name="neutronfamiliar" type="radio" value="no" />';
} else {
	echo 'Yes';
	echo '<input id="neutronfamiliar" name="neutronfamiliar" type="radio" value="yes" />';		
	echo 'No';
	echo '<input id="neutronfamiliar" name="neutronfamiliar" type="radio" value="no" checked="yes" />';
}
	
echo '<br />';
echo '<br />';
echo '<br />';
echo '<label for="comments">Comments / Questions:</label>';
echo '<textarea id="comments" name="comments">' . $comments . '</textarea>';
echo '<label for="verify">Verification:</label>';
echo '<input type="text" id="verify" name="verify" value="Enter the pass-phrase." />';
echo '<img src="captcha.php" alt="Verification pass-phrase" / align="center" align="middle">';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<input type="submit" value="Send Message" name="submit" />';
echo '</form>';
echo '</div>';

}

if($success) {
mail($to,$subject,$msg,'From: '.$email);
}
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
<!-- 			<script src="scripts/my_scripts.js" type="text/javascript"></script> -->
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
