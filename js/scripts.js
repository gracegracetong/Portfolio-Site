// Javascript Document

// html elements
const $body = $('body');
const $btnMenu = $('.btnMenu');


// show mobile nav
$body.removeClass('show-mobile-nav');

$btnMenu.click(function(){	
	$body.toggleClass('show-mobile-nav');
});


// hide nav menu after clicking a link
$('#mainNav a').click(function() {
	if($body.hasClass('show-mobile-nav')){
		$body.removeClass('show-mobile-nav');
	};
});


// smooth scroll 
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