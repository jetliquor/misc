/*
*
*	JS | © Chronos Interactive
*
*/

(function($){
$(document).ready(function() {
	
	// Breadcrumb Visible
	var showBreadcrumbs = ($('#block-chronos-breadcrumbs a.active').length > 0) ? true : false;
	if (!showBreadcrumbs) { $('#block-chronos-breadcrumbs .content > ul.menu').hide(); }
	// Breadcrumb Active
	$('#block-chronos-breadcrumbs a.active').addClass('null').parentsUntil('#block-chronos-breadcrumbs .content > ul.menu', 'li').addClass('active').before('<li class="active spacer"> / </li>');
	
	// Add active classes to menu
	var firstPath = location.pathname.split('/')[1];
	$('.masthead > .wrap > ul.menu > li > a[href="/'+firstPath+'"]').parent().addClass('active');
	
	// Slide Menu Width
	var slideMenuLength = $('#slide-menu .wrap > ul.menu > li').length;
	var slideMenuWidth = 100 / slideMenuLength;
	$('#slide-menu .wrap > ul.menu > li').width(slideMenuWidth+'%');
	// Slider Menu Toggle
	if ($('#slide-menu > .wrap > ul> li > ul li.expanded').length > 0) {
		$('#slide-menu > .wrap > ul> li > ul li.expanded').prepend('<span class="toggle fa fa-caret-right"></span>');
	}
	function slideMenuToggle(object) {
		$(object).toggleClass('fa-caret-right fa-caret-down');
		$(object).parent().children('ul').slideToggle(200);
	}
	$('#slide-menu li.expanded span.toggle').click(function() {
		slideMenuToggle(this);
	});
	
	// Toggle Slide Menu
	$('a.menu-toggle').click(function() {
		$('body').toggleClass('menu-toggle');
		return false;
	});
	
	// Fixed Sub-Menu
	function fixedSubNav(pos) {
		if (pos > 100) {
			if (!$('.masthead > .wrap > ul.menu > li.active > ul').hasClass('fixed')) {
				$('.masthead > .wrap > ul.menu > li.active > ul').addClass('fixed');
			}
		} else {
			if ($('.masthead > .wrap > ul.menu > li.active > ul').hasClass('fixed')) {
				$('.masthead > .wrap > ul.menu > li.active > ul').removeClass('fixed');
			}
		}
	}
	
	// Fire move functions
	function move() {
		var pos = $(window).scrollTop(); //position of the scrollbar
		fixedSubNav(pos);
	}
	$(window).resize(function(){ //if the user resizes the window...
		move();
	});
	$(window).bind('scroll', function(){ //when the user is scrolling...
		move();
	});

});
})(jQuery);
