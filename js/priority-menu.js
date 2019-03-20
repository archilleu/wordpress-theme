(function() {

    window.addEventListener('load', function() {
        jQuery("header .menu-item").mouseover(function() {
            jQuery(this).find(".sub-menu").show();
        });
        jQuery("header .menu-item").mouseout(function() {
            jQuery(this).find(".sub-menu").hide();
        })
    });

})(jQuery);