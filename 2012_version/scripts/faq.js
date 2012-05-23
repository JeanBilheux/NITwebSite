$(document).ready(function() {
	
	$answers_value = ''
		
	$('#accordion_faq').accordion({
		header : 'h3'
	});

	$('div ul li').click(function() {
	
			console.log("here");

		
		$Id = $(this).attr('id');
		$parentId = $(this).parent().attr('id');
	
		$parentId_Id = $parentId + '_' + $Id;
	
		switch ($parentId_Id)
		{
			case 'categorie1_#1':
			$answer_value = 'The <a href="team.html"><span id="link">instrument scientist</span></a> is the person you should contact to discuss your research. He/she can help you write your proposal.';
			break;
			case 'categorie1_#2':
			$answer_value = "The proposal format can be found <a href='http://neutrons.ornl.gov/users/become.shtml#register'><span id='link'>here</span></a>.";
			break;
			case 'categorie1_#3':
			$answer_value = 'The neutron facilities have proposal calls twice a year.<br/>' +
			'Proposals are reviewed by an external scientific committee who allocates beam time.<br/>' + 
			'Proposals due in February are for the following June-December beam time.<br/>' + 
			'Proposals due in August are for the following January-May beam time.<br/>' +
			'Notifications of beam time approval are sent several weeks before beam time.' + 
			'<p>If you need fast access or are trying to do a proof-of-concept measurements (a few hours of beam time), please contact the <a href="team.html"><span id="link">instrument scientist</span></a>.</p>';
			break;
			case 'categorie2_#1':
			$answer_value = 'Once your proposal has been successfully approved, the user office will contact you by email to arrange your online and on-site training.<br/>' +
			'The online training is required prior to the on-site training (2 to 3 hr class at the neutron facility).<br/>' +
			'Before you are allowed to operate the facility (shutter, equipment, etc.), <a href="team.html"><span id="link">the instrument team</span></a> will give you an additional training.';
			break;
			case 'categorie2_#2':
			$answer_value = 'Your data is located on a server at HFIR and the <a href="team.html"><span id="link">beam staff</span></a> will provide information on how to access it on and off site.';
			break;
			case 'categorie2_#3':
			$answer_value = 'Access to our capabilities is obtained via a <a href="http://neutrons.ornl.gov/users/become.shtml#register"><span id="link">user proposal</span></a>. For proprietary research, please contact the <a href="team.html"><span id="link">instrument scientist</span></a>.';
			break;
			case 'categorie2_#4':
			$answer_value = 'Do let us know at least a month ahead of time that you need access to a Chem. Lab. We will contact the Laboratory Manager with the request. You will need to fill out a Job Hazard Analysis (JHA) to explain';
			break;
			case 'categorie3_#1':
			$answer_value = 'We usually schedule a team time to start at 8:00 AM on the day of your beam time. For example if you have 3 days of beam time and you are schedule to start on a Wednesday morning, the beamline will be dedicated to your research from Wednesday 8:00 AM to Saturday 8:00 AM.';
			break;
			case 'categorie3_#2':
			$answer_value = '<a href="team.html"><span id="link">The instrument team</span></a> is available to help you at any time. Please make sure that you bring the appropriate level of support to make sure you are utilizing the facility 24/7.';
			break;
			case 'categorie3_#3':
			$answer_value = 'A radiograph is a shadow image of your sample and all depends on how transparent/dark your sample is. At CG1D, an image usually take 60 s to 3 min.';
			break;
			case 'categorie3_#4':
			$answer_value = 'Depending on the needed spatial resolution, a CT scan can take 15 hrs to 24 hrs.';
			break;
			case 'categorie4_#1':
			$answer_value = '<a href="team.html"><span id="link">The instrument staff</span></a> will make every effort to reconstruct your sample(s) in 3D. If you are familiar with tomography and would prefer to do this yourself, let the <a href="team.html"><span id="link">the beam staff</span></a> know.';
			break;
		}
		
		$final_answer = '<h3>Question</h3>' + $(this).text() + '<p>' + '<br/><h3>Answer</h3>'
		$('div#answers').html($final_answer + $answer_value);
	
	});
	
	$('div#accordion_faq h3').click(function() {
		$('div#answers').html('');		
	})
	
	
});
