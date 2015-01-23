jQuery(document).ready(function(){
	
	jQuery('.menu-item').click(function(){
		jQuery(this).children('.sub-menu').animate({display: 'block'}, 750 );
	});

});