<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>Welcome to the ORNL NIT website</title>
		<link rel="stylesheet" type="text/css" href="styles/index.css" />
		<link rel="stylesheet" type="text/css" href="styles/jquery-ui-1.7.2.custom.css" />
		<link rel="stylesheet" type="text/css" href="styles/tabs.css" />
		<link rel="stylesheet" type="text/css" href="styles/showroom.css" />
		<link rel="stylesheet" type="text/css" href="styles/user_corner_page.css" />
		<!-- 		<link rel="stylesheet" type="text/css" href="styles/index.css" /> -->
		<style type="text/css">
			#text_box {
				position:relative;
				height: 785px;
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
				height: 825px;
			}
			#logo {
				float: left;
			}
			div#TexasTechUniversity {
				background: url('images/TexasTechUniversity.png');
			}
			table tr td:first-child {
				text-align: right;
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
								<a href="#" title="Publications"></a>
							</li>
							<li class="button-color-2">
								<a href="faq.html" title="Q&As"></a>
							</li>
							<li class="button-color-3">
								<a href="#" title="Links"></a>
							</li>
							<li class="button-color-4">
								<a href="team.html" title="Meet the team"></a>
							</li>
						</ul>
					</div>
				</div>
				<div id="contact_top">
					<a href="index.html"><img src='images/home.png' alt='Home' align=center width="30" /></a>
				</div>
<!-- 				
				<div id="message">
					<div id="logo">
						<?php
						$value = $_GET['id'];
							if ($value == 'TexasTechUniversity') {
								echo "<img src='images/TexasTechUniversity.png' width='90px'";
							}
							if ($value == 'EnvScienceDivi') {
						echo "<img src='images/WatermarkORNL.png' width='90px'";		
							}
						?>
					</div>
					<div id="text_box">
						
						<?php
						if ($value == 'TexasTechUniversity') {							
						}
						?>
					</div>
				</div> -->

			<?php
				$value = $_GET['id'];
				echo $value;
				if ($value == 'TexasTechUniversity') {
					$pi = 'pi field';
					$pi_institute = 'pi institute field';
					$pi_contact = 'pi contact';
					$research = 'research field';
					$why = 'why field';
					$goal = 'goal field';
				}
				if ($value == 'EnvScienceDivi') {
					
				}
				if ($value == 'TexasA&MUniversity') {
					
				}
			
			
			
			?>



			<div id="accordion_faq">
				<div>
					<h3><a href="#"><img src="images/user_corner/TexasTechUniversity.png" height="35px"></a></h3>
						<table>
							<tr><td>PI name:</td><td><?php echo $pi; ?></td></tr>
							<tr><td>PI Institution:</td><td><?php echo $pi_institute; ?></td></tr>
							<tr><td>PI contact information:</td><td><?php echo $pi_contact; ?></td></tr>
							<tr><td>Research application(s):</td><td><?php echo $research; ?></td></tr>
							<tr><td>Why neutrons:</td><td><?php echo $pi; ?><?php echo $why; ?></td></tr>
							<tr><td>Goal:</td><td><?php echo $goal; ?></td></tr>
						</table>
						
						
						<!-- <ul>
						<li>	
							<a href="#">Question #1</a>
						</li>
						<li>
							<a href="#">Question #2</a>
						</li>
						<li>
							<a href="#">Question #3</a>
						</li>
						<li>
							<a href="#">Question #4</a>
						</li>
					</ul> -->
				</div>
				<div>
					<h3><a href="#"><img src="images/user_corner/OakRidgeNationalLaboratory.png" height="35px"></a></h3>
					<ul>
						<li>
							<a href="#">Question #1</a>
						</li>
						<li>
							<a href="#">Question #2</a>
						</li>
					</ul>
				</div>
				<div>
					<h3><a href="#"><img src="images/user_corner/TexasA&MUniversity.png" height="35px"></a></h3>
					<ul>
						<li>
							<a href="#">Question #1</a>
						</li>
						<li>
							<a href="#">Question #2</a>
						</li>
					</ul>
				</div>
				<!-- <div>
					<h3><a href="#">Category #4</a></h3>
					<ul>
						<li>
							<a href="#">Question #1</a>
						</li>
						<li>
							<a href="#">Question #2</a>
						</li>
					</ul>
				</div> -->
			</div>






				<hr width=95%>
				<div id="contact">
					<a id="ornl_link" href="http://www.ornl.gov/"></a>
					<a id="us_energy_link" href="http://science.energy.gov/"></a>
					<!-- 				<a href="index.html"><img src='images/home.png' alt='Home' align=center width="30" /></a> -->
					<!-- 				&nbsp;&nbsp;&nbsp;<b>-</b>&nbsp;&nbsp;&nbsp; -->
					<a href="index.html"><img src='images/home.png' alt='Home' align=center width="30" /></a>
					&nbsp;&nbsp;&nbsp;<b>|</b>&nbsp;&nbsp;&nbsp; <a href="contact_us.html">Contact us</a> | <a href="http://www.ornl.gov/ornlhome/disclaimrs.shtml">Security Notice</a> | <a href="http://www.oakridge.doe.gov/external/">DOE</a> | <a href="http://ut-battelle.org/">UT-Battelle</a>
					<br/>
					<br/>
					<div id="bottom_message">
						SNS and HFIR are Office of Science user facilities operated for the <a href="http://energy.gov/">U.S. Department of Enegy</a>
						<a href="http://www.science.doe.gov/"> Office of Science</a>
						<br/>
						by <a href="http://www.ornl.gov/">Oak Ridge National Laboratory</a>, which is managed by the <a href="http://www.ut-battelle.org/">UT-Battelle, LLC</a>.
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
	</body>
</html>