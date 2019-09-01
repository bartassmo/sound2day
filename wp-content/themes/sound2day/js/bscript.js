$(window).on('load', function() {
	$('h1').html('dziala jqueryyy');

	$('.colorbox').colorbox();
	console.log('color');


	$('#topSlider').slick({
	  dots: true,
	  infinite: false,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1,  
	});

	console.log('kopytko');
})