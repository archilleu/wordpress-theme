$(function() {

    navClickBind();

    function navClickBind() {
        var $links = $(".col-md-3>ul>li>a");
        var $subLinks = $(".col-md-3>ul>li>ul");
        $links.click(function() {
            $links.removeClass("active");
            $(this).addClass("active");

            $subLinks.hide();
            $(this).next().show();
        });
    }
});