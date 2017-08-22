$(window).resize(function() {
	responsiveNav();
});

$(document).ready(function() {
	responsiveNav();
	$('.hamburger').click(function() {
		$('.hamburger').toggleClass('is-active');

		if($('.slider-menu').hasClass('slide-out')){
			$('.slider-menu').animate({right: '-250px'});
		}else{
			$('.slider-menu').animate({right: '0px'});
		}

		$('.slider-menu').toggleClass('slide-out');
	});



});

function responsiveNav(){
	// Hamburger button
	if($(window).width() < 680){
		$('.nav-link').addClass('hidden');
		$('.hamburger-button').removeClass('hidden');
		$('.slider-menu').css('top', $('.nav-bar').height() + 'px');
	}else{
		$('.nav-link').removeClass('hidden');
		$('.hamburger-button').addClass('hidden');
		$('.slider-menu').css('right', '-250px');
		$('.slider-menu').removeClass('slide-out');
		$('.hamburger').removeClass('is-active');
	}
}