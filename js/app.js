$(document).on('ready', function(){
	var header_height = $('#nav').outerHeight();

	$('ul').on('click', '.og-close', function(){
		console.log('hola');
		$('html, body').animate({
	        scrollTop: $('#portafolio').offset().top - header_height
	    }, 500);
	});
});