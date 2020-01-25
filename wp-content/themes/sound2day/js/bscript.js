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

$(window).on('load', function() {
    setTimeout(function() {
        $('.preloader').remove();
    }, 500);
    $('.preloader').removeClass('active');
});

$(window).on('scroll', function() {
    checkScroll();
});

$(document).ready(function() {
    if ($(this).width() > 1022) {
        const { WOW } = require('wowjs');
        wow = new WOW({
            animateClass: 'animated'
        });
        wow.init();
    }
    var galleryImg = [],
        postImg,
        imgStart;
    $('.fancy__slide').each(function(i) {
        postImg = $(this).attr('href');
        galleryImg[i] = {
            src: postImg,
            opts: {}
        };
        $(this).on('click', function(e) {
            e.preventDefault();
            $.fancybox.open(galleryImg, {
                loop: true,
                focus: false
            });
            imgStart = i;
            $.fancybox.getInstance().jumpTo(imgStart);
        });
    });
    $('.header__hamburger').click(function() {
        $(this).toggleClass('open');
        $('.header__nav').toggleClass('opened');
    });
    $('#slider1').slick({
        dots: false,
        autoplay: true,
        infinite: true,
        speed: 1000,
        autoplaySpeed: 7500,
        slidesToShow: 1,
        slidesToScroll: 1,
        pauseOnFocus: false,
        pauseOnHover: false,
        arrows: false,
        mobileFirst: true,
        draggable: false,
        swipe: false,
        swipeToSlide: false,
        touchMove: false,
        fade: true,
        cssEase: 'linear'
    });
    $('#slider2').slick({
        dots: false,
        autoplay: true,
        infinite: true,
        speed: 1000,
        autoplaySpeed: 7500,
        slidesToShow: 1,
        slidesToScroll: 1,
        pauseOnFocus: false,
        pauseOnHover: false,
        arrows: false,
        mobileFirst: true,
        draggable: false,
        swipe: false,
        swipeToSlide: false,
        touchMove: false,
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
    $('#sliderBig').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        fade: false,
        arrows: false,
        asNavFor: '#sliderSmall',
        responsive: [
            {
                breakpoint: 1023,
                settings: {
                    fade: true
                }
            }
        ]
    });
    $('#sliderSmall').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '#sliderBig',
        prevArrow: '#navRightBig',
        nextArrow: '#navLeftBig',
        focusOnSelect: true,
        centerMode: true,
        centerPadding: '5px',
        responsive: [
            {
                breakpoint: 1022,
                settings: 'unslick'
            }
        ]
    });
});
