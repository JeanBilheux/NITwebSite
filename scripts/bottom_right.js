$(document).ready(function() {

	$('#venus').hover(function() {
		// $(this).css({'background':'url(../images/bottom_right/venus_on.png)'})
		$(this).css({
			'background-image' : 'url(images/bottom_right/venus_on.png)'
		})
	}, function() {
		$(this).css({
			'background' : 'url(images/bottom_right/venus_off.png)'
		})
	});

$('#tutorial').hover(function() {
		// $(this).css({'background':'url(../images/bottom_right/venus_on.png)'})
		$(this).css({
			'background-image' : 'url(images/bottom_right/tutorial_on.png)'
		})
	}, function() {
		$(this).css({
			'background' : 'url(images/bottom_right/tutorial_off.png)'
		})
	});
	
	
	$('#cg1d').hover(function() {
		// $(this).css({'background':'url(../images/bottom_right/venus_on.png)'})
		$(this).css({
			'background-image' : 'url(images/bottom_right/cg1d_on.png)'
		})
	}, function() {
		$(this).css({
			'background' : 'url(images/bottom_right/cg1d_off.png)'
		})
	});
	
	});
