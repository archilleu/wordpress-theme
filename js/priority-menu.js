(function() {

	window.addEventListener( 'load', function() {
		jQuery(".menu-item").mouseover(function() {
			jQuery(this).find(".sub-menu").show();
		});
		jQuery(".menu-item").mouseout(function() {
			jQuery(this).find(".sub-menu").hide();
		})
	});

})(jQuery);