/*
*
*	JS | © Chronos Interactive
*
*/

(function($){
$(document).ready(function() {
	
	var photoGallery;
	var imageTotal;
	var currentSlide;
	var gallerySlide = 1;
	
	// Slide Processing
	function isSlideProcessing(photoGallery) {
		if ($(photoGallery).hasClass('processing')) {
			return true;
		} else {
			return false
		}
	}
	
	// Update Buttons
	function updateButtons(photoGallery, gallerySlide) {
		gallerySlide = parseInt(gallerySlide);
		imageTotal = $(photoGallery).find('.field-name-field-image.field-type-file .field-items .field-item img').length;
		var nextSlide = (gallerySlide + 1);
		var prevSlide = (gallerySlide - 1);
		if (nextSlide > imageTotal) { nextSlide = 1; }
		if (prevSlide < 1) { prevSlide = imageTotal; }
		$(photoGallery).find('.gallery-next').attr('data-slide', nextSlide);
		$(photoGallery).find('.gallery-prev').attr('data-slide', prevSlide);
	}
	
	// Update Thumbs
	function updateThumbs(gallerySlide) {
		if ($(photoGallery).find('.field-name-field-image.field-type-file .field-items .thumb-wrap[data-count="'+gallerySlide+'"]').length > 0 && !$(photoGallery).find('.field-name-field-image.field-type-file .field-items .thumb-wrap[data-count="'+gallerySlide+'"]').is(':visible')) {
			$(photoGallery).find('.field-name-field-image.field-type-file .field-items .thumb-wrap:visible').hide();
			$(photoGallery).find('.field-name-field-image.field-type-file .field-items .thumb-wrap[data-count="'+gallerySlide+'"]').show();
		}
	}
	
	// Change/Set Slide
	function changeSlide(photoGallery, gallerySlide) {
		currentSlide = parseInt($(photoGallery).attr('data-current'));
		if ($(photoGallery).find('.view-photo-gallery-large-image img[data-slide="'+currentSlide+'"]').is(':visible')) {
			$(photoGallery).find('.view-photo-gallery-large-image img[data-slide="'+currentSlide+'"]').hide();
		}
		slideDirection = (gallerySlide > currentSlide) ? 'right' : 'left';
		$(photoGallery).find('.view-photo-gallery-large-image img[data-slide="'+gallerySlide+'"]').show("slide",{direction: slideDirection});
		$(photoGallery).attr('data-current', gallerySlide);
		updateButtons(photoGallery, gallerySlide);
		updateThumbs(gallerySlide);
		$(photoGallery).removeClass('processing');
	}
	
	// Slide Buttons
	function galleryButtons(photoGallery, imageTotal) {
		$(photoGallery).find('.view-photo-gallery-large-image').before('<a href="#" class="gallery-button gallery-prev" data-slide="'+imageTotal+'"></a><a href="#" class="gallery-button gallery-next" data-slide="2"></a>');
		$('.gallery-button').click(function() {
			photoGallery = $(this).parent();
			if (!isSlideProcessing(photoGallery)) {
				$(photoGallery).addClass('processing');
				gallerySlide = $(this).attr('data-slide');
				changeSlide(photoGallery, gallerySlide);
			}
			return false;
		});
	}
	
	// Gallery Thumbnails
	function setupThumbnails(photoGallery) {
		var thumbCount = 0;
		$(photoGallery).find('.field-name-field-image.field-type-file .field-items .field-item img').each(function() {
			thumbCount++;
			$(this).attr('data-count', thumbCount);
		});
		$('.field-name-field-image.field-type-file .field-items .field-item img').click(function() {
			photoGallery = $(this).parent().parent().parent().parent().parent().parent().parent();
			if (!isSlideProcessing(photoGallery)) {
				$(photoGallery).addClass('processing');
				gallerySlide = $(this).attr('data-count');
				changeSlide(photoGallery, gallerySlide);
			}
		});
		var galleryThumbs = $(photoGallery).find('.field-name-field-image.field-type-file .field-items .field-item');
		for (var i = 0; i < galleryThumbs.length; i += 6) {
			galleryThumbs.slice(i, i + 6).wrapAll('<div class="thumb-wrap" data-count="'+(i + 1)+'" />');
		}
	}
	
	// Setup the galleries
	function setupGallery(photoGallery) {
		$(photoGallery).find('.view-photo-gallery-large-image img').each(function(index) {
			$(this).attr('data-slide', (index+1));
		});
		imageTotal = $(photoGallery).find('.field-name-field-image.field-type-file .field-items .field-item img').length;
		$(photoGallery).attr({'data-current':'1', 'data-max':imageTotal});
		changeSlide(photoGallery, gallerySlide);
		if (imageTotal > 1) {
			galleryButtons(photoGallery, imageTotal);
		}
	}
	
	// Run setup on each gallery
	$('.field-collection-item-field-photo-gallery').each(function() {
		photoGallery = this;
		setupThumbnails(photoGallery);
		setupGallery(photoGallery);
	});

});
})(jQuery);
