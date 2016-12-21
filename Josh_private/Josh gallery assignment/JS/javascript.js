jQuery('.photo-thumbnails .thumbnail').click(function() {
		jQuery('.photo-thumbnails .thumbnail').removeClass('current'); 
		jQuery(this).addClass('current');
		var path = jQuery(this).find('img').attr('src');
		jQuery('#big-photo img').attr('src', path); 
	});p