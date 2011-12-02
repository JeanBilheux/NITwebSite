$(document).ready(function() {

	// $("#showroom_right a").blend();
	var _current_class;
	var _show_classes = ['lamp', 'iMars', 'lamp', 'iMars', 'lamp', 'iMars'];

	// $('#showroom_right>div>a').mouseover(function() {
	// // $('#showroom_right a').addClass('showroom_not_hover');
	// $(this).addClass('showroom_hover');
	// });

	$('#showroom_right>div>a').mouseover(function() {
		// $('#showroom_right a').addClass('showroom_not_hover');
		$('#showroom_right>div>a').removeClass('showroom_hover');
		$(this).addClass('showroom_hover');
	});

	$('#showroom_legend_1').mouseover(function() {
		var index = 0;
		if(_current_class != _show_classes[index]) {
			$('#showroom_left').addClass(_show_classes[index]).removeClass(_current_class);
			_current_class = _show_classes[index];
		}
	})

	$('#showroom_legend_2').mouseover(function() {
		var index = 1;
		if(_current_class != _show_classes[index]) {
			$('#showroom_left').addClass(_show_classes[index]).removeClass(_current_class);
			_current_class = _show_classes[index];
		}
	})
	$('#showroom_legend_3').mouseover(function() {
		var index = 2;
		if(_current_class != _show_classes[index]) {
			$('#showroom_left').addClass(_show_classes[index]).removeClass(_current_class);
			_current_class = _show_classes[index];
		}
	})
	$('#showroom_legend_4').mouseover(function() {
		var index = 3;
		if(_current_class != _show_classes[index]) {
			$('#showroom_left').addClass(_show_classes[index]).removeClass(_current_class);
			_current_class = _show_classes[index];
		}
	})
	$('#showroom_legend_5').mouseover(function() {
		var index = 4;
		if(_current_class != _show_classes[index]) {
			$('#showroom_left').addClass(_show_classes[index]).removeClass(_current_class);
			_current_class = _show_classes[index];
		}
	})
	$('#showroom_legend_6').mouseover(function() {
		var index = 5;
		if(_current_class != _show_classes[index]) {
			$('#showroom_left').addClass(_show_classes[index]).removeClass(_current_class);
			_current_class = _show_classes[index];
		}
	})
	/* Run this code after the page has loaded..and only 1 time */
	$(window).bind("load", function() {
		$('#showroom_left').addClass('lamp').removeClass('iMars');
		$('#showroom_legend_1').addClass('showroom_hover');
		_current_class = _show_classes[0];
	})
});
