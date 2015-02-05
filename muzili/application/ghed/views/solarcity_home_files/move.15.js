/*
*
*	JS | © Chronos Interactive
*
*/

(function($){
$(document).ready(function() {



	// Fire move functions
	function move() {
		var pos = $(window).scrollTop(); //position of the scrollbar
		modalResize();
	}
	$(window).resize(function(){ //if the user resizes the window...
		move();
	});
	$(window).bind('scroll', function(){ //when the user is scrolling...
		move();
	});

});
})(jQuery);
