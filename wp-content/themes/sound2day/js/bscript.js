$(document).ready(function() {
    $('.header__hamburger').click(function() {
        $(this).toggleClass('open');
        $('.header__nav').toggleClass('opened');
    });
});
