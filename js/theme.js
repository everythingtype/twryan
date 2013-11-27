(function($) {

$(document).ready(function() {

	if ($('#wpadminbar').length != 0) {
		$('body').addClass('wpadmin');
	}

	// Homepage

	$('.viewtoggle').show();
	$('.imageslink').addClass('active');

	$('.projectthumb img').after(function() {
	    return $(this).clone().addClass('gray');
	});

	$('.imageslink a').on( "click", function(event) {
		event.preventDefault();

		$('.imageslink').addClass('active');
		$('a.projectthumb').show();

		$('.listlink').removeClass('active');
		$('.categorytable').hide();

		$('.viewtoggle').removeClass('short');

	});

	$('.listlink a').on( "click", function(event) {
		event.preventDefault();

		$('.listlink').addClass('active');
		$('.categorytable').show();

		$('.imageslink').removeClass('active');
		$('a.projectthumb').hide();

		$('.viewtoggle').addClass('short');

	});

	$('.categorytable tbody').addClass('clickable');

	$('.categorytable tbody tr').on( "click", function(event) {
	    window.location = $(this).find('a').attr('href');
	});


	// About

	$('.abouttoggle').show();
	$('.peoplelink').addClass('active');
	$('#office').hide();
		
	$('.officelink a').on( "click", function(event) {
		event.preventDefault();

		$('.officelink').addClass('active');
		$('#office').show();

		$('.peoplelink').removeClass('active');
		$('#people').hide();


	});

	$('.peoplelink a').on( "click", function(event) {
		event.preventDefault();

		$('.peoplelink').addClass('active');
		$('#people').show();

		$('.officelink').removeClass('active');
		$('#office').hide();

	});

	// Portfolio

	$('.caption').hide();
	$('#infolink').addClass('clickable');
	$('#infolink').after('<a id="closelink" class="clickable">Close</a>');
	$('#closelink').hide();
	
	$('#infolink').on( "click", function(event) {
		event.preventDefault();
		$(this).hide();
		$('#closelink').show();
		$('body').scrollTop(0);
		$('#projectheader').removeClass('pinned');
		$('.gallery').hide();
		$('.caption').show();

	});

	$('#closelink').on( "click", function(event) {
		event.preventDefault();
		$(this).hide();
		$('#projectheader').addClass('pinned');

		$('.caption').hide();
		$('.gallery').show();

		$('#infolink').show();

	});

});

})(jQuery);
