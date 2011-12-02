$(document).ready(function() {
	// $('#faq_div ul > li ul')
	// .click(function(e) {
	// e.stopPropagation();
	// })
	// // .filter(':not(:first)')
	// .hide();
	//
	// $('#faq_div > ul > li, #faq_div ul > li > ul > li').click(function() {
	// var selfClick = $(this).find('ul:first').is(':visible');
	// if(!selfClick) {
	// $('#faq_div > ul > li').css('background-position', 'right top');
	// $(this).parent().find('> li ul:visible').slideToggle();
	// $('#answers').show();
	// // $(this).css('background-position', 'right -20px');
	// } else {
	// $('#answers').hide();
	// // $(this).css('background-position', 'right top');
	// }
	// $(this).find('ul:first').stop(true, true).slideToggle();
	// });

	$('#accordion').accordion({
		header : 'h3'
	});

	$('div ul li#me').click(function() {
		alert("I have been clicked");
	});
	
	// $('#accordion > h3').click(function() {
	// var selfClick = $(this).find('ul:first').is(':visible');
	// if(!selfClick) {
	// $('#answers').show();
	// } else {
	// $('#answers').hide();
	// }
	// });
	//
	// $('#answers').hide();
	//at the start, hidden

});
