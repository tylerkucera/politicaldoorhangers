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

	$("#contact").submit(function(e){
        e.preventDefault();

        $("#contact-submit").html("Sending...");

        var formData = {
        	name: $("#form-name").val(),
        	email: $("#form-email").val(),
        	phone: $("#form-phone").val(),
        	message: $("#form-message").val()
        }
        console.log(formData);

        var $inputs = $("#contact").find("input, select, button, textarea");
        $inputs.prop("disabled", true);

        request = $.ajax({
	        url: "/contact_post.php",
	        type: "post",
	        data: formData
	    });

	    // Callback handler that will be called on success
		request.done(function (response, textStatus, jqXHR){
			$("#contact-container").addClass("hidden");
			$("#contact-success").removeClass("hidden");
		});

		// Callback handler that will be called on failure
		request.fail(function (jqXHR, textStatus, errorThrown){
			// Log the error to the console
			console.error(
				"The following error occurred: "+
				textStatus, errorThrown
			);


		});
    });

	$("#just-the-facts-img").elevateZoom(
		{
			zoomType: "lens",
			lensShape: "round",
			lensSize: 300
		}
	);

});

function responsiveNav(){
	// Hamburger button
	if($(window).width() < 625){
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