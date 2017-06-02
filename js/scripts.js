// Javascript Document

// HTML elements
const $body = $('body');
const $btnMenu = $('.btnMenu');
const $grid = $('.grid');


// Show mobile dropdown nav
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
$grid.masonry({
	// options
	itemSelector: '.grid-item',
	columnWidth: '.grid-sizer',
	gutter: '.gutter-sizer',
	percentPosition: true
});

// Layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
	$grid.masonry('layout');
});



// Scroll to top button
$(window).scroll(function() {
    if ($(this).scrollTop() >= 100) {
        $('#top').fadeIn('fast');
    } 
    else {
        $('#top').fadeOut('fast');
    }
});

$('#top').click(function() {           
    $('body,html').animate({
        scrollTop : 0                   
    }, 500);
});





