<?php
require_once ('header_part1.php');
?>
		<link rel="stylesheet" type="text/css" href="styles/jquery-ui-1.7.2.custom.css" />
		<link rel="stylesheet" type="text/css" href="styles/tabs.css" />
		<link rel="stylesheet" type="text/css" href="styles/showroom.css" />
		<!-- local css files -->
		<link rel="stylesheet" type="text/css" href="styles/team.css" />
		<!-- end of local css files -->
<?php
require_once ('header_part2.php');
?>
				<!-- body really starts -->
				<div id="title">
					Meet the team
				</div>
				<div id='member_1' class='member'>
					<div id='picture'>
						<img src='team_pictures/hassina.png' alt='Member1' width='100px' />
					</div>
					<div id='description'>
						<p id='name'>
							Hassina Bilheux, phD - <span>Instrument Scientist</span>
							<br>
							<span style="color:black;font-size:0.7em">bilheuxhn@ornl.gov</span>
						</p>
						<p>
							I am the instrument scientist in charge of neutron imaging capabilities
							at the High Flux Reactor Isotope (HFIR) and
							Spallation Neutron Source (SNS) facilities.
						</p>
						<p>
							I obtained my Ph.D. (Physics) in 2003 from the University of Versailles-St-Quentin,
							France while performing my research project at the ORNL Physics Division,
							working on electron cyclotron resonance (ECR) ion sources.
							I'm interested in exploring the novel use of energy selective neutron imaging
							in different research areas such as engineering (Bragg edge imaging),
							energy, biological and forensic applications, and  environmental areas as well.
							I'm PI on a National Institute of Justice research project and co-PI on several DOE
							Energy Efficiency and Renewable Energy (EERE) projects.
							I'm one of the book editors of the Neutron Imaging and Applications book, published by Springer,
							and had authored and co-authored publications in the field of neutron imaging.
						</p>
					</div>
				</div>
				<div id='member_3' class='member'>
					<div id='picture'>
						<img src='team_pictures/lakeisha.jpg' width="100px" alt='Member3' />
					</div>
					<div id='description'>
						<p id='name'>
							Lakeisha Walker - <span>Scientif Associate</span>
							<br>
							<span style="color:black;font-size:0.7em">walkerl@ornl.gov</span>
						</p>
						<p>
							Serve as responsible person for the operation of instrument, user scheduling,
							equipment testing and approval, in short I am the Paperwork Nazi.
						</p>
						<p>
							I am an introvert who loves order and a well thought out plan which has led to my enjoyment of jigsaw puzzles, Yeshua, and math.
						</p>
					</div>
				</div>
				<div id='member_5' class='member'>
					<div id='picture'>
						<img src='team_pictures/member_2.png' alt='Member5' />
					</div>
					<div id='description'>
						<p id='name'>
							Jean Bilheux, phD - <span>Software engineer</span>
							<br>
							<span style="color:black;font-size:0.7em">bilheuxjm@ornl.gov</span>
						</p>
						<p>
							I'm a computer scientist in charge of writing tools to help normalize, analyze
							the data produced at CG1D and that will be produced at VENUS. I'm also in charge of
							maintaining this web site.
							<br/>
							<br/>
							I got my thesis (French PhD) in Physics in 2003. Then decided to focus on computing instead
							after a short post-doc at the Physics division here in Oak Ridge. Since then I learned a lot
							of things such as IDL, python, HTML5 (CSS-JavaScript), jQuery, PHP, MySQL...etc. I wrote the
							iMars application in IDL to help normalize the data. Please contact me for any computing related
							questions, and if I can't help, I will surely find the person that knows the answer.
						</p>
					</div>
				</div>
				<div id='member_2' class='member'>
					<div id='picture'>
						<img src='team_pictures/sophie.jpg' width="100px" alt='Member2' />
					</div>
					<div id='description'>
						<p id='name'>
							Sophie Voisin, phD - <span>Post-Doc</span>
						</p>
						I love Dijon.
						<br/>
						<br/>
						<br/>
					</div>
				</div>
				<div id='member_4' class='member'>
					<div id='picture'>
						<img src='team_pictures/misun.png' alt='Misun Kang' width="100px" />
					</div>
					<div id='description'>
						<p id='name'>
							Misun Kang - <span>phD student</span>
							<br>
							<span style="color:black;font-size:0.7em">kangm@ornl.gov</span>
							<p>
								Ph.D. student in Department of Earth and Planetary Sciences at University
								of Tennessee, Knoxville.
							</p>
							<p>
								I have mainly worked on the study of water in porous media using
								neutron imaging for my thesis. I also helps to do some of
								image processing for other projects.
							</p>
							<p>
								I am excited to see neutron imaging reveal the unknown
								in science.
							</p>
						</p>
					</div>
				</div>
				<br />
				<div id="title">
					Present and past students/post-docs
				</div>
				<br/>
				<ul>
					<li>
						<b>Felix Kim</b>, Ph.D. Student, October 2007-October 2009
						University of Tennessee, Knoxville
					</li>
					<li>
						<b>Misun Kang</b>, Ph. D. Student, January 2010 - present
						University of Tennessee, Knoxville
					</li>
					<li>
						<b>Keely Willis</b>, Ph.D. Student, May-October 2010
						University of Wisconsin, Madison
					</li>
					<!-- 					<li>
					<b>Sophie Voisin</b>, Post-doc, September 2010-present
					University of Tennessee, Knoxville
					</li> -->
					<li>
						<b>Granger Endsley</b>, Undergrad. Student, May-August 2011
						Tennessee Tech University, Knoxville
					</li>
					<li>
						<b>Vincenzo Finocchiaro</b>, Ph. D. Student, January- March 2012
						University of Messina, Messina, Italy
					</li>
				</ul>
				<br/>
				<hr width="90%">
<?php
require_once ('footer_part1.php');
?>
		<script type="text/javascript">
			//turn off bottom border for last team member
			$('div.member').last().css({
				'border-bottom' : 'none'
			});

		</script>
		<!-- local script files -->
		<!-- end of local script files -->
	</body>
</html>