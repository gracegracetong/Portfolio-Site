// Javascript Document

// HTML elements
const $body = $('body');
const $btnMenu = $('.btnMenu');


// Show mobile nav
$body.removeClass('show-mobile-nav');

$btnMenu.click(function(){	
	$body.toggleClass('show-mobile-nav');
});


// Hide nav menu after clicking a link
$('#mainNav a').click(function() {
	if($body.hasClass('show-mobile-nav')){
		$body.removeClass('show-mobile-nav');
	};
});


// Smooth scroll 
$('a[href^="#"]').on('click',function (e) {
	e.preventDefault();

	const target = this.hash;
	const $target = $(target);

	$('html, body').stop().animate({
	  'scrollTop': $target.offset().top - 70
	}, 900, 'swing', function () {
	  window.location.hash = 1+ target;
	});
	});


// Init Masonry
$('.grid').masonry({
	// options
	itemSelector: '.grid-item',
	columnWidth: '.grid-sizer',
	percentPosition: true
});

// Layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
	$grid.masonry('layout');
});

