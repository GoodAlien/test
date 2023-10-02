$(window).on('scroll', function() {
	var scrollCoef = 0.0014;

	$('.shadow').css({
		opacity: $(window).scrollTop() * scrollCoef
	})
});