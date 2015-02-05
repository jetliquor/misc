/*
*
*	JS | © Chronos Interactive
*
*/

(function($){
$(document).ready(function() {

	$('#lead_form').submit(function() {
		window['optimizely'] = window['optimizely'] || [];
		window.optimizely.push(["trackEvent", "form_completed"]); 
	});

	// Dynamic Electricity Bill Slider
	function elecBillColors(ui) {
		var elecBillID;
		if (ui.value > 449) {
			elecBillID = 'dead';
		} else if (ui.value > 349) {
			elecBillID = 'lethal';
		} else if (ui.value > 249) {
			elecBillID = 'toohigh';
		} else if (ui.value > 149) {
			elecBillID = 'average';
		} else if (ui.value > 99) {
			elecBillID = 'viable';
		} else {
			elecBillID = 'toolow';
		}
		$('.elec-bill-slider').attr('id', elecBillID);
	}
	function monthlyYearlySet(ui) {
		$('#monthly_bill').html('<strong>' + ui.value + '</strong>' + '/month');
		$('#yearly_bill').html((ui.value * 12)+'/year');
		$('#monthly_usage').val(ui.value);
	}
	if ($('.icon-slider').length > 0) {
		$('.icon-slider').slider({
			range: 'max',
			min: 0,
			max: 500,
			value: 100,
			slide: function( event, ui ) {
				monthlyYearlySet(ui);
				elecBillColors(ui);
			}
		});
	}

	// Check Territory /* Possibly Change API to use Google */
	function checkTerritory(location, inputField) {
		$.ajax({
			type: 'GET',
			url: 'http://ZiptasticAPI.com/'+encodeURIComponent(location),
			dataType: 'json',
			success: function( data ) {
				if (data.state) {
					$('#zip').val(location);
					$('#city').val(data.city.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();} ));
					$('#state').val(data.state);
					if (inputField) { formSubmitCheck(inputField); }
				}
			}
		});
	}
	// Check if zip is serviced by SC
	function solarcityServices(location) {
		$.ajax({
			type: 'GET',
			url: '/api/zipcode/'+location,
			error: function() {
				$('#outside_territory').show();
			},
			success: function(data) {
				if (data === 'yes') {
					$('#outside_territory').hide();
					$('#inside_territory').show();
				} else {
					$('#outside_territory').show();
					hideFormShowContent();
					$('#inside_territory').hide();
				}
			}
		});
	}

	// zip code header input
	$(document).on('keyup', '.zip-tray #zip_in', function(e) {
		var zipInput = $(this).val();
		if ( (zipInput.length == 5) && (zipInput % 1 === 0) ) {
			//_gaq.push(['_trackEvent','Home Page Animation','Input Field Completions','ZIP']);
			//window['optimizely'] = window['optimizely'] || [];
            //window.optimizely.push(["trackEvent", "zipfield_entered"]);
			var formFromTop = $('#prebuilt-2').offset().top - 60;
			$('body').scrollTo( formFromTop, 800, function() {
				$('.zip-tray .input-tray > input').hide();
				$('.zip-tray .input-tray > label').text('');
				$('#prebuilt-2 #first_name').focus();
			});
			checkTerritory(zipInput, false);
			solarcityServices(zipInput);
		}
	});
	

	// zip code on form input
	if ($('#zip').length > 0) {
		$('#zip').keyup(function() {
			var zipInput = $(this).val();
			if ( (zipInput.length == 5) && (zipInput % 1 === 0) ) {
				checkTerritory(zipInput, this);
				solarcityServices(zipInput);
			}
		});
	}

	// Form Submit Disable/Enable
	function formSubmitCheck(inputField) {
		var currentForm = $(inputField).closest('form.validate').validate().checkForm();
		if (currentForm) {
			$('form.validate input[type="submit"]').removeAttr('disabled');
			$('form.validate input[type="submit"]').removeClass('disabled');
		} else {
			$('form.validate input[type="submit"]').attr('disabled', 'disabled');
			$('form.validate input[type="submit"]').addClass('disabled');
		}
	}

	/** This may/should probably be moved to a generic location for use site wide on any form, not just the lead form. It is current designed to run on a form with the class "validate" **/
	if ($('form.validate').length > 0) {
		$('form.validate').validate({
			errorElement: 'span'
		});
		$('form.validate input[type="submit"]').attr('disabled', 'disabled');
		$('form.validate input').keyup(function() {
			formSubmitCheck(this);
		});
		// Overkill for cross browser
		$('form.validate input').change(function() {
			formSubmitCheck(this);
		});
	}
	if ($('form.validate input.required').length > 0) {
		$('form.validate input.required').each(function() {
			$(this).rules('add', {
				required: true,
				messages: {
					required: ''
				}
			});
		});
	}
	
	if ($('form.validate input.form-firstname').length > 0) {
		$('form.validate input.form-firstname').each(function() {
			$(this).rules('add', {
				required: true,
				messages: {
					required: 'Enter your first name'
				}
			});
		});
	}
	
	if ($('form.validate input.form-lastname').length > 0) {
		$('form.validate input.form-lastname').each(function() {
			$(this).rules('add', {
				required: true,
				messages: {
					required: 'Enter your last name'
				}
			});
		});
	}
	
	if ($('form.validate input.form-zip').length > 0) {
		$('form.validate input.form-zip').each(function() {
			$(this).rules('add', {
				required: true,
				messages: {
					required: 'Enter zip code'
				}
			});
		});
	}
	
	if ($('form.validate input.form-phone').length > 0) {
		$('form.validate input.form-phone').each(function() {
			$(this).rules('add', {
				required: true,
				phoneUS: true,
				messages: {
					required: '',
					phoneUS: 'Please enter a valid phone number'
				}
			});
		});
		$('#phone').mask('(999) 999-9999', {
			placeholder: "#"
		});
	}
	if ($('form.validate input.form-email').length > 0) {
		$('form.validate input.form-email').each(function() {
			$(this).rules('add', {
				required: true,
				email: true,
				messages: {
					required: '',
					email: 'Please enter a valid email address'
				}
			});
			$(this).after('<span class="error email-suggestion">Did you mean <a></a> ?</span>');
		});
		// Also Run MailCheck
		var domains = ['gmail.com', 'yahoo.com', 'aol.com', 'hotmail.com', 'me.com', 'mac.com', 'google.com', 'live.com', 'comcast.net', 'googlemail.com', 'msn.com', 'mail.com', 'outlook.com', 'solarcity.com', 'facebook.com', 'verizon.net', 'sbcglobal.net', 'att.net'];
		var topLevelDomains = ["com", "net", "org", 'edu', 'org', 'gov', 'mil'];
		$('form.validate input.form-email').blur(function() {
			$(this).mailcheck({
				domains: domains,
				topLevelDomains: topLevelDomains,
				suggested: function(element, suggestion) {
					element.parent().children('span.email-suggestion').children('a').html(suggestion.full);
					element.parent().children('span.email-suggestion').fadeTo(400, 1);
				},
				empty: function(element) {
					element.parent().children('span.email-suggestion').children('a').html('');
					element.parent().children('span.email-suggestion').fadeTo(400, 0);
				}
			});
		});
		$('span.error.email-suggestion a').click(function() {
			var suggestedEmail = $(this).html();
			$(this).parent().parent().children('input').val(suggestedEmail);
			$(this).parent().parent().children('span.email-suggestion').fadeTo(400, 0);
			return false;
		});
	}

	// Commercial Builder Form
	if ($("#commercial_builder").length > 0) {
		$("#commercial_builder").submit(function() {
			$.ajax({
				type: "POST",
				url: "/api/form/send",
				data: $("#commercial_builder").serialize(),
				success: function (result) {
					if (result == 'success') {
						window.location = "http://www.solarcity.com/commercial/builders/thank-you";
					} else {
						alert('An error occured');
					}
				},
				error: function (xhr, status, error) {
					alert('An error occured');
				}
			});
			return false;
		});
	}

	// Hide the form and show content instead
	function hideFormShowContent() {


		var formReplace = '' +
			'<div id="form_replace" style="display:none;">' +
				'<h2>We\'re not in your area, but you can still earn money with solar</h2>' +
				'<div class="column">' +
					'<p>Introducing Solar Bonds by SolarCity. Solar Bonds are a new way to invest and earn up to 3x your savings account rate.</p>' +
					'<p style="text-align:right;"><img src="/sites/all/themes/solarcity/img/solar-bonds-logo.jpg"></p>' +
					'<p><a id="badzip-learn-more" href="http://solarbonds.solarcity.com" class="button" style="float:right;">Learn more &gt;</a></p>' +
					'<div class="clear" style="padding-bottom:10px;"></div>' +
				'</div>' +
				'<img src="/sites/all/themes/solarcity/img/earn-3x.jpg" class="column second"><!--div class="column second" style="height:231px;background:url(/sites/all/themes/solarcity/img/earn-3x.png);background-size:cover;">' +
					'' +
				'</div-->' +
				'<p style="padding:0 30px;text-align:right;font-size:80%;"><a href="#" id="zipretry">Try a different zipcode</a></p>' +
			'</div>' +
		'';
		if ($('body').hasClass('page-node-1')) {
			if (!$('#form_replace').length > 0) {
				$('#lead_form').after(formReplace);
				$('#lead_form').slideUp(600, function() {
					$('#form_replace').slideDown(600);
					$('#zipretry').click(function() {
						$('#form_replace').slideUp(600, function() {
							$('#form_replace').remove();
							$('#lead_form').slideDown(600);
						});
						return false;
					});
				});
			}
		}

		//ga('send', 'event', 'Out of Territory', 'Solar Bonds', 'Solar Bonds Banner View');
		_gaq.push(['_trackEvent', 'Out of Territory', 'Solar Bonds', 'Solar Bonds Banner View']);
		
		//
		// if($('#bonds-footer').length < 1){
		// 	$('.views-field-field-footer-copy .field-content').append('<div id="bonds-footer"><p>Solar Bonds are debt securities issued by SolarCity. As with any investment, purchasing Solar Bonds involves risk. You must make your own decision about whether and how much to invest in Solar Bonds. SolarCity cannot make any investment recommendations or otherwise provide any investment advice. SolarCity has filed a registration statement (including a prospectus) with the Securities and Exchange Commission (“SEC”) for offerings to which information on this web site relates. Before you invest, you should read the prospectus in that registration statement and other documents SolarCity has filed with the SEC for more complete information about SolarCity and the offerings. You may get these documents for free by visiting EDGAR on the SEC web site at www.sec.gov. Alternatively, you may obtain the prospectus relating to the Solar Bonds, and the pricing supplement relating to a particular series of Solar Bonds, at solarbonds.solarcity.com.</p><p>*Based on 7 year maturity.</p></div>')
		// }
	}


});
})(jQuery);
