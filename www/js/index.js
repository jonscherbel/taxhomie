$(function(){
 
	$(document).on( 'scroll', function(){
 
		if ($(window).scrollTop() > 135) {
			$('.btn-to-top').addClass('show');
		} else {
			$('.btn-to-top').removeClass('show');
		}
	});
 
	$('.btn-to-top').on('click', scrollToTop);
	$('.navbar-brand').on('click', scrollToTop);
});
 
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 1000, 'linear');
}