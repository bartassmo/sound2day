function checkScroll() {
    if ($(window).scrollTop() > 60) {
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
});

$(document).ready(function() {
    $('.header__hamburger').click(function() {
        $(this).toggleClass('open');
        $('.header__nav').toggleClass('opened');
    });
    $('#sliderProd').slick({
        arrows: false,
        infinite: true,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 5000,
        cssEase: 'linear'
    });
    $('.wpcf7-form-control').after('<span class="contact__after"></span>');
});
