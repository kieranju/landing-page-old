var listingDetails = $('.listing_details');

var buttonDetails = $('.button_details');

var reineerBody = $('body');

var escapeDetails = $('.escape');

	escapeDetails.click(function(){
		
		listingDetails.slideUp(500);
		
		reineerBody.removeClass('darken_body', 500);
		
});

buttonDetails.click(function(){
	
	 $('.listing_details.group-' + $(this).data('group')).slideDown(500);
	 
	 reineerBody.addClass('darken_body', 500);
	 
});

$(function() {
    $( "#datepicker" ).datepicker();
  });