/*
*
*	JS | © Chronos Interactive
*
*/

(function($){

function bondsModalSetup(){

	var modalOpen = false;
	var $modal = $('#invest-modal');
	if($modal.length < 1) return;

	$(document).delegate('a[href="http://solarbonds.solarcity.com"]', 'click', function(e){
		if(!$(e.currentTarget).hasClass('invest-redirect')){
			e.preventDefault();
			$modal.show();
			modalOpen = true;
			setTimeout(function(){
				if(modalOpen === true){
					window.location.href = $modal.find('.invest-redirect').attr('href');
				}
			}, 30000);
		} else {
			$modal.hide();
			modalOpen = false;
		}
	});

	$('.modal-close').click(function(){
		modalOpen = false;
		$modal.hide();
	});
	
	$('.invest-redirect').click(function(){
		modalOpen = false;
		$modal.hide();
	});

}

$(document).ready(function() {

myscgallerycounter = 1;

	function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
	}

	$('input.form-text').placeholder();

	// Newsroom Report Image links to PDF
	if ($('.node-news.node-teaser.news-type-reports').length > 0) {
		$('.node-news.node-teaser.news-type-reports').each(function() {
			if ($(this).find('.field-name-field-content-photo img').length > 0 && $(this).find('.field-name-field-report-pdf a').length) {
				var PDFlink = $(this).find('.field-name-field-report-pdf a').attr('href');
				$(this).find('.field-name-field-content-photo img').wrap('<a href="'+PDFlink+'" target="_blank"></a>');
			}
		});
	}

	// Banner Lead Tools
	if ($('#banner-lead-tool-zip').length > 0) {
		$('.banner-lead-tool > div a#banner-lead-tool').click(function() {
			var banner_lead_zip = $('#banner-lead-tool-zip').val();
			if (banner_lead_zip != '') {
				$(this).attr('href', $(this).attr('href') + '?zip='+banner_lead_zip);
			} else {
				return false;
			}
		});
	}

	// News Filter PLaceholders
	if ($('.view-press-releases').length > 0) {
		$('#edit-title').attr('placeholder', 'Search...');
		$('#edit-year-value-year option[value=""]').text('All Years');
	}

	//Expand and collapse FAQ Q&A's
	/*$(".faqs dd").hide();
	$(".faqs dt").click(function () {
		$(this).next(".faqs dd").slideToggle(500);
        $(this).toggleClass("expanded");
    });*/
    
    //Gallery carrousel for MySC page
    function moveMySCGallery(){
		myscgallerycounter++;
		if (myscgallerycounter > 2){
			myscgallerycounter=1;
			$(".myscPhoneGalleryimages").animate({left: "-=97"}, 800);
		}
		else {
			if (myscgallerycounter >= 1 && myscgallerycounter <= 2){
   				$(".myscPhoneGalleryimages").animate({left: "+=97"}, 800);
   			}
   		}
	}

	bondsModalSetup();
	setInterval(moveMySCGallery,6000);
	
	// Vimeo Video Modal
	function vimeoModal(videoID) {
		$('body').append('<div id="vimeo-overlay"></div><div id="vimeo-modal"><div class="video-size"></div><iframe src="http://player.vimeo.com/video/'+videoID+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe><div class="video-close"></div></div>');
		$('#vimeo-overlay,.video-close').click(function() {
			$('#vimeo-overlay,#vimeo-modal').remove();
		});
	}
	window.modalResize = function() {
		if ($('.ratio9x16').length > 0) {
			var videoModalHeight = $(window).height();
			var modalHeight = videoModalHeight * 0.80;
			var modalWidth = modalHeight * 0.5625;
			var modalleft = (modalWidth / 2) * -1;
			$('#vimeo-modal').height(modalHeight).width(modalWidth).css('margin-left', modalleft);
;
		}
	};
	function vimeoRatio(data) {
		var vimeoWidth = data[0].width;
		var vimeoHeight = data[0].height;
		var vimeoVideoRatio = vimeoHeight / vimeoWidth;
		// Only change the modal size if it is a 9x16 or 4x3 video
		if (vimeoVideoRatio == 1.77777777778 || vimeoVideoRatio == 1.7777777777777777) {
			$('#vimeo-modal').addClass('ratio9x16');
			modalResize();
		} else if (vimeoVideoRatio == 0.75) {
			$('#vimeo-modal').addClass('ratio4x3');
		}
	}
	$('.vimeo-popup[data-videoid]').click(function(e) {
		var videoID = $(this).attr('data-videoid');
		$.ajax({
			url: 'http://vimeo.com/api/v2/video/'+videoID+'.json',
			type: 'GET',
			success: function(data) {
			   vimeoRatio(data);
			},
			error: function(data) {
				// Do Nothing
			}
		});
		vimeoModal(videoID);
		e.preventDefault();
		
	});

});
})(jQuery);
