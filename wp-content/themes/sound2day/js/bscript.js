function checkScroll() {
    if ($(window).scrollTop() > 100) {
        //abuse 0 == false :)
        if (!$('.header').hasClass('scrolled')) {
            $('.header').addClass('scrolled');
        }
    } else {
        if ($('.header').hasClass('scrolled')) {
            $('.header').removeClass('scrolled');
        }
    }
}

$(window).on('scroll', function() {
    checkScroll();
    wWdth = $(window).width();
});

$(document).ready(function() {
    $('.header__hamburger').click(function() {
        $(this).toggleClass('open');
        $('.header__nav').toggleClass('opened');
    });
});
