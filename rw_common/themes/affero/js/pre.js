jQuery(window).load(function(){
	if(jQuery("#blog-archives").length) {
		jQuery("#blog-archives").prepend('<h3>Archives</h3>');
		jQuery("#blog-categories").prepend('<h3>Categories</h3>');
		jQuery("#blog-archives").append('<h3>Tags</h3>');
	} else {
		//do nothing
	}	
	if(jQuery(".filesharing-item").length || jQuery(".album-title").length || jQuery(".rw-sitemap").length || jQuery("#monoslideshowHolder").length) {
		jQuery(".affero-padding").css("padding-bottom","50px");
	}	
});