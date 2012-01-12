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
		<link rel="stylesheet" type="text/css" href="styles/user_corner_page.css" />
		<!-- 		<link rel="stylesheet" type="text/css" href="styles/index.css" /> -->
		<style type="text/css">
			#text_box {
				position: relative;
				height: 885px;
				top: 160px;
				left: 160px;
				width: 600px;
			}
			#logo {
				position: relative;
				top: 140px;
				left: 730px;
			}
			#contact {
				left: 3px;
			}
			#accordion_faq {
				padding: 20px;
				height: 850px;
			}
			#logo {
				float: left;
			}
			table tr td:first-child {
				font-weight: bold;
				text-align: right;
				vertical-align: text-top;
				width: 230px;
			}
			table {
				border-spacing: 10px;
			}
			#container {
				height: 1230px;
			}
			#body {
				height: 1000px;
			}

		</style>
	</head>
	<body>
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
				<?php
// $value = $_GET['id'];
// if ($value == 'TexasTechUniversity') {
$pi='J. Horita';
$pi_institute='Texas Tech Iniversity';
$pi_contact='Department of Geosciences - Texas Tech University <br/> '.'Lubbock, Texas 79409-1053 <br/> Tel: (806)742-3109 <br/>Fax: (806)742-0100';
$research='Understanding fluid-rock interactions under subsurface conditions, including several DOE-relevant issues such as geologic CO2 sequestration, fluid migration in salt deposits, and contaminant migration in the vadose zone.';
$why='Neutron imaging is particularly useful for visualizing and understanding the fluid-rock interactions discussed above, because of its sensitivity to water and other natural fluids, and of deep penetration into porous geologic media.';
$goal='In collaboration with UT Knoxville and Oak Ridge National Laboratory, we have initiated a novel neutron imaging project for in-situ observation and monitoring of fluids (water, CO2) in geologic porous media at ambient conditions. We plan to expand to high-pressure and high-temperature conditions, relevant to deep subsurface environments.';
				?>
				<div id="accordion_faq">
					<div>
						<h3><a href="#"><img src="images/user_corner/TexasTechUniversity.png" height="35px"></a></h3>
						<ul>
							<table>
								<tr>
									<td>PI name:</td><td><?php echo $pi;?></td>
								</tr>
								<tr>
									<td>PI Institution:</td><td><?php echo $pi_institute;?></td>
								</tr>
								<tr>
									<td>PI contact information:</td><td><?php echo $pi_contact;?></td>
								</tr>
								<tr>
									<td>Research application(s):</td><td><?php echo $research;?></td>
								</tr>
								<tr>
									<td>Why neutrons:</td><td><?php echo $pi;?><?php echo $why;?></td>
								</tr>
								<tr>
									<td>Goal:</td><td><?php echo $goal;?></td>
								</tr>
							</table>
						</ul>
					</div>
					<?php
$pi='J. Warren';
$pi_institute='ORNL - Environmental Sciences Division';
$pi_contact='Environmental Sciences Division<br/>Oak Ridge National Laboratory</br/>Oak Ridge, TN  37831-6301<br/>Tel: (865) 241-3150';
$research='soil-plant water relations, plant morphology, plant root dynamics';
$why='Unique in its ability to study water distribution and movement through a system';
$goal='Water flux dynamics through roots under varying environmental conditions';
					?>
					<div>
						<h3><a href="#"><img src="images/user_corner/ESD_ORNL.png" height="35px"></a></h3>
						<ul>
							<table>
								<tr>
									<td>PI name:</td><td><?php echo $pi;?></td>
								</tr>
								<tr>
									<td>PI Institution:</td><td><?php echo $pi_institute;?></td>
								</tr>
								<tr>
									<td>PI contact information:</td><td><?php echo $pi_contact;?></td>
								</tr>
								<tr>
									<td>Research application(s):</td><td><?php echo $research;?></td>
								</tr>
								<tr>
									<td>Why neutrons:</td><td><?php echo $pi;?><?php echo $why;?></td>
								</tr>
								<tr>
									<td>Goal:</td><td><?php echo $goal;?></td>
								</tr>
							</table>
						</ul>
					</div>
					<?php
$pi = 'Andrea Strzelec';
$pi_institute = 'Texas A&M University';
$pi_contact = 'astrzelec@tamu.edu<br/>Tel: 979-862-3367<br/>http://andreastrzelec.tamu.edu/';
$research = 'Diesel Particulate Filters, Sprays (fuel and urea), Engine Parts, EGR Coolers (fouling)';
$why = 'Neutron imaging is a non-destructive, non-invasive technique that allows for some unique new insight into these systems. Since neutrons have a different interaction cross section than X-rays, the information that we gain from imaging complements and extends other techniques.';
$goal = 'Diesel Particulate Filter Loading Profiles (publication SAE 2009-01-2735)<br/>EGR Cooler Fouling Profiles<br/>Spray details</br>Oil or Coolant Pathways<br/>Combustion Imaging<br/>'
					?>
					<div>
						<h3><a href="#"><img src="images/user_corner/TexasA&MUniversity.png" height="35px"></a></h3>
						<ul>
							<table>
								<tr>
									<td>PI name:</td><td><?php echo $pi;?></td>
								</tr>
								<tr>
									<td>PI Institution:</td><td><?php echo $pi_institute;?></td>
								</tr>
								<tr>
									<td>PI contact information:</td><td><?php echo $pi_contact;?></td>
								</tr>
								<tr>
									<td>Research application(s):</td><td><?php echo $research;?></td>
								</tr>
								<tr>
									<td>Why neutrons:</td><td><?php echo $pi;?><?php echo $why;?></td>
								</tr>
								<tr>
									<td>Goal:</td><td><?php echo $goal;?></td>
								</tr>
							</table>
						</ul>
					</div>
					<?php
$pi = 'Fei Ren';
$pi_institute = 'MSTD - ORNL';
$pi_contact = 'renf@ornl.gov<br/>Tel: 865-241-7553';
$research = 'Investigation of hydrous phase distribution in ultra high performance concretes.';
$why = 'Neutron imaging is preferred due to its sensitivity to hydrogen atoms.';
$goal = 'Quantitative three-dimensional distribution of hydrous phase(s) in bulk concrete materials.';
					?>
					<div>
						<h3><a href="#"><img src="images/user_corner/MSTD_ORNL.png" height="35px"></a></h3>
						<ul>
							<table>
								<tr>
									<td>PI name:</td><td><?php echo $pi;?></td>
								</tr>
								<tr>
									<td>PI Institution:</td><td><?php echo $pi_institute;?></td>
								</tr>
								<tr>
									<td>PI contact information:</td><td><?php echo $pi_contact;?></td>
								</tr>
								<tr>
									<td>Research application(s):</td><td><?php echo $research;?></td>
								</tr>
								<tr>
									<td>Why neutrons:</td><td><?php echo $pi;?><?php echo $why;?></td>
								</tr>
								<tr>
									<td>Goal:</td><td><?php echo $goal;?></td>
								</tr>
							</table>
						</ul>
					</div>
				</div>
				<hr width=95%>
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
					<br/><br/><span id="last_update">Last updated: <?php require_once('appvars.php'); echo LAST_UPDATE ?></span>
					</div>
					<br/>
					<br/>
					<br/>
				</div>
			</div>
		</div>
		</div> <!-- end of container -->
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
		<script src="scripts/bottom_right.js" type="text/javascript"></script>
		<script src="scripts/showroom.js" type="text/javascript"></script>
		<script src="scripts/user_corner_page.js" type="text/javascript"></script>

		<?php
		$index;
		$value = $_GET['id'];
		if ($value == 'TexasTechUniversity') {
			$index=0;
		}
		if ($value == 'ORNL_ESD') {
			$index=1;
		}
		if ($value == 'TexasA&MUniversity') {
			$index=2;
		}
		if ($value == 'ORNL_MSTD') {
			$index=3;
		}
		echo '<script type="text/javascript"> $(document).ready(function() { ' .
		' $("#accordion_faq").accordion("activate",' . $index . ') }); </script>'
		?>
	</body>
</html>