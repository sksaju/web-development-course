/*! Custom jQuery by Saju  */

$(function() {
	
	 $("#myCarousel").carousel({
         interval : 2600,
         pause: false
	});
	
	$('#alertMe').click(function(e) {
		
		e.preventDefault();
		$('#successAlert').slideDown();
	
	});
	
	$('a.pop').click(function(e) {
		e.preventDefault();
	});
	$('a.pop').popover();
	
	$('[rel="tooltip"]').tooltip();

});