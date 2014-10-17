jQuery(document).ready(function(){
	jQuery(window).scroll(function(){
		
		if(jQuery(window).scrollTop() > 100){
			jQuery('a.dream-scroll').fadeIn();
		}
		else if(jQuery(window).scrollTop() <= 100){
			jQuery('a.dream-scroll').fadeOut();
		}
	});

	
	
	jQuery('.dream-scroll').click(function(){
		jQuery('html, body').animate({scrollTop:0},800, "swing");
		
		return false;
	});


});