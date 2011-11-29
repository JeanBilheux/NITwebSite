$(document).ready(function() {
	
	// $("#showroom_right a").blend();	
		
	$('#showroom_right>div>a').mouseover(function() {
		// $('#showroom_right a').addClass('showroom_not_hover');
		$(this).addClass('showroom_hover');
	});
	
	$('#showroom_right>div>a').mouseover(function() {
		// $('#showroom_right a').addClass('showroom_not_hover');
		$('#showroom_right>div>a').removeClass('showroom_hover');
		$(this).addClass('showroom_hover');
	});

	


});
