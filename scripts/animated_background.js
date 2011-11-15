var scrollSpeed = 70;
// Speed in milliseconds
var step = 1;
// How many pixels to move per step
var current = 0;
// The current pixel row
var imageHeight = 544;
// Background image height
var headerHeight = 100;
// How tall the header is.

//The pixel row where to start a new loop
var restartPosition = -(imageHeight - headerHeight);

function scrollBg() {

	//Go to next pixel row.
	current -= step;

	//If at the end of the image, then go to the top.
	if(current == restartPosition) {
		current = 0;
	}

	//Set the CSS of the header.
	$('#header').css("background-position", "0 " + current + "px");

}

//Calls the scrolling function repeatedly
var init = setInterval("scrollBg()", scrollSpeed);
