/* js/modal.js */

(function($) {
    
    $(document).ready(function() {

    	$(".pop-it-up").on("click", function(){
    	  $(".mask").addClass("active");
    	});
    	
    	
    	function closeModal(){
    	  $(".mask").removeClass("active");
    	}
    	
    	
    	$(".close, .mask").on("click", function(){
    	  closeModal();
    	});
    	
    	$(document).keyup(function(e) {
    	  if (e.keyCode == 27) {
    	    closeModal();
    	  }
    	});
    });

})( jQuery );
