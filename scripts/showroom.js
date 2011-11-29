$(document).ready(function() {
	
	// $("#showroom_right a").blend();	
		
	$('#showroom_right>a').mouseover(function() {
		// $('#showroom_right a').addClass('showroom_not_hover');
		$(this).addClass('showroom_hover');
	});

	$('#showroom_right>a').mouseover(function() {
		// $('#showroom_right a').addClass('showroom_not_hover');
		$('#showroom_right>a').removeClass('showroom_hover');
		$(this).addClass('showroom_hover');
	});




	// $('#showroom_right a').mouseout(function() {
		// $(this).removeClass('showroom_hover');
	// })

	

	
	
});
