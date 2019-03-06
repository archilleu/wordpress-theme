(function() {

    window.addEventListener('load', function() {
        jQuery("header .menu-item").mouseover(function() {
            jQuery(this).find(".sub-menu").show();
        });
        jQuery("header .menu-item").mouseout(function() {
            jQuery(this).find(".sub-menu").hide();
        })

        let html = '<div>电话:020-81318105</div>' +
            '<div>E-mail:hytech@gdlhjt.com</div>';
        jQuery("footer nav>div>ul>li:last-child").append(html);
    });

})(jQuery);