//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

$(window).scroll(function() {
    if ($(".navbar").offset().top > 200) {
    	$(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".navbar-fixed-top").addClass("top-nav-collapse2");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse2");
    }
});