<?php
require_once('header_part1.php');
?>
		<link rel="stylesheet" type="text/css" href="styles/jquery-ui-1.7.2.custom.css" />
		<link rel="stylesheet" type="text/css" href="styles/tabs.css" />
		<link rel="stylesheet" type="text/css" href="styles/showroom.css" />
		<link rel="stylesheet" type="text/css" href="styles/faq.css" />
<?php
require_once('header_part2.php');
?>
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
<?php
require_once('footer_part1.php');
?>
		<script src="scripts/faq.js" type="text/javascript"></script>
	</body>
</html>