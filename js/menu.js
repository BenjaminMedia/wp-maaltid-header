jQuery(window).ready(function(){

	jQuery('#menu-trigger').click(function(){
		jQuery('#maaltid-menu').addClass('active');
	});

	jQuery('.cancel').click(function(){
		jQuery('#maaltid-menu').removeClass('active');
	});
});