function checkScroll() {
    if ($(window).scrollTop() > 100) {
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
    $('#slider1').slick({
        dots: false,
        autoplay: true,
        infinite: true,
        speed: 1000,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        pauseOnFocus: false,
        pauseOnHover: false,
        arrows: false,
        mobileFirst: true,
        draggable: false,
        fade: true,
        cssEase: 'linear'
    });
    $('#slider2').slick({
        dots: false,
        autoplay: true,
        infinite: true,
        speed: 1000,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        pauseOnFocus: false,
        pauseOnHover: false,
        arrows: false,
        mobileFirst: true,
        draggable: false,
        fade: true,
        cssEase: 'linear'
    });
    $('#sliderProd').slick({
        autoplay: true,
        arrows: false,
        slidesToShow: 1,
        centerMode: true,
        centerPadding: 0,
        slidesToScroll: 1,
        mobileFirst: true,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 766,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 1022,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 1278,
                settings: {
                    slidesToShow: 5
                }
            }
        ]
    });
});
