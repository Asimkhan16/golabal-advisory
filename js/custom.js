$(window).on("load", function() {
    $(".bg_load").fadeOut("slow")
}), $(document).ready(function() {
    var o = $.find(".animation-element"),
        e = $(window);
    $(window).on("scroll resize", function() {
        var a, l, r;
        a = e.height(), r = (l = e.scrollTop()) + a, $.each(o, function() {
            var o = $(this),
                e = $(o).outerHeight(),
                a = $(o).offset().top;
            a + e >= l && a <= r ? o.addClass("in-view") : o.removeClass("in-view");
            // if(a + e >= l && a <= r){
            //     o.addClass("in-view")
            // }
        })
    }), $(window).trigger("scroll")
}), $(".scrollToTop").hide(), $(window).scroll(function() {
    768 > $(window).width() ? $(this).scrollTop() > 160 ? ($(".scrollToTop").fadeIn(), $(".header-area").addClass("sticky_header")) : ($(".scrollToTop").fadeOut(), $(".header-area").removeClass("sticky_header")) : $(this).scrollTop() > 300 ? ($(".scrollToTop").fadeIn(), $(".header-area").addClass("sticky_header")) : ($(".scrollToTop").fadeOut(), $(".header-area").removeClass("sticky_header"))
}), $(".scrollToTop").click(function() {
    return $("html, body").animate({
        scrollTop: 0
    }, 1e3), jQuery("html").css("scroll-behavior", "auto"), !1
});