jQuery(document).ready(function($){

	// responsive menu hamburger
	var menuContent=$('.responsive-menu-content');

	$('.hamburger-menu').on('click', function() {
		$('.hamburger-menu').toggleClass('animate');
		menuContent.slideToggle();
		$('body').toggleClass('overflow-hidden');
	});


});
