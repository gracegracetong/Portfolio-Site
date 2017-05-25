// Javascript Document

// html elements
const $body = $('body');
const $btnMenu = $('.btnMenu');

// show mobile nav
$body.removeClass('show-mobile-nav');

$btnMenu.click(function(){	
	$body.toggleClass('show-mobile-nav');
});


