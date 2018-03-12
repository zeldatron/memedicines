/* js/header.js */

(function($) {
	$(document).ready(function() {
	    
	    $(window).scroll(function() {
		    var scrolledHeight = 200;
		    if ($(window).width() >= 750) {
                if ($(window).scrollTop() > scrolledHeight) {
                    $('body').addClass('scrolled');
                }
                else {
                    $('body').removeClass('scrolled');
                }
            }
		 
		 });
	 }); //end document ready
})( jQuery );
