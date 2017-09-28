// jQuery Hamburger menu

// HTML elements

$hamburger = $('.hamburger');
$nav = $('.main-nav');

$hamburger.click(function(){
	this.classList.toggle("active");
	$nav.animate({width:'toggle'});
});