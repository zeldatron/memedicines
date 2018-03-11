/* js/home.js */

(function($) {
	$(document).ready(function() {
	    $('.scroll-down').on('click',function(e){
			$('html, body').animate({
		    scrollTop: $(".scroll-to-me").offset().top - 50
		    }, 1000);
	    });
	 }); //end document ready
})( jQuery );
