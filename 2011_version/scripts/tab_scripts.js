$(document).ready(function(){
  $( '#info p:not(:first)' ).hide();
  
  $('#info-nav li').click(function(e) {
    $('#info p').hide();
    $('#info-nav .current').removeClass("current");
    $(this).addClass('current');
    
    var clicked = $(this).find('a:first').attr('href');
    $('#info ' + clicked).fadeIn('fast');
    e.preventDefault();
  }).eq(0).addClass('current');
  
    /* to switch between tabs */
  	// $('#info').tabs().tabs('rotate',3500);
	$('#info').tabs().tabs('rotate',0);

});