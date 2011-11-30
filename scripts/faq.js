$(document).ready(function() {
	$('#faq_div ul > li ul').click(function(e) {
		e.stopPropagation();
	})
	// .filter(':not(:first)')
	.hide();

	$('#faq_div ul > li').click(function() {
		var selfClick = $(this).find('ul:first').is(':visible');
		if(!selfClick) {
			$(this).parent().find('> li ul:visible').slideToggle();
			$('#answers').show();
		} else {
			$('#answers').hide();
		}

		$(this).find('ul:first').stop(true, true).slideToggle();
	});

	$('#answers').hide();
	//at the start, hidden

});
