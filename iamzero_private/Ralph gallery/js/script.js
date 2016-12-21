jQuery('.photo-thumbnails .thumbnail').click(function() {
		jQuery('.photo-thumbnails .thumbnail').removeClass('current'); //The above is used to Setting class “current” to the thumbnail that was clicked.
		jQuery(this).addClass('current');
		var path = jQuery(this).find('img').attr('src'); //The above line is used to get the “src” attribute of the image that was clicked.
		jQuery('#big-photo img').attr('src', path); //The above code is used to Set the “src” attribute of the big image
	});