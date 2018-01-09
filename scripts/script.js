// ----------------- HAMBURGER MENU -------------------

// HTML elements
const $hamburger = $('.hamburger');
const $nav = $('.main-nav');

$hamburger.click(function(){
	this.classList.toggle("active");
	$nav.animate({width:'toggle'});
});

// ----------------- FRONTPAGE PROJECT THUMBNAIL ANIMATION -------------------

// If page is frontpage...
if( $('body').hasClass('home')){

	// And if on mobile...
	if($(window).width() < 575){

		// Fade in projects when user scrolls
		$(window).scroll(function(){
			fadeInProjects();
		});

	}else{
		// Otherwise, just show projects on normal
		$('.project-thumbnail').css('opacity','1');
	}
}

// Helper function
function fadeInProjects(){
	const $projectCaption = $('.project-caption');
	const $projectThumbnail = $('.project-thumbnail');
	const $projectThumbnailPos = $projectThumbnail.offset().top;
	const $scrollPos = $(window).scrollTop();

	$projectThumbnail.each(function(i){
		if( $(window).scrollTop() > (( $(this).offset().top ) - 300)){
			$(this).css({'opacity':'1'})
				   .parent().next().css('opacity', '1');
		}
	});
}


// ----------------- HERO IMAGE SIZING SCRIPT -------------------
const $hero = $('.hero');

// If page is a project single page...
if( $('body').hasClass('single')){

	// Load the correct hero size
	loadCorrectHeroSize();

	// Incase the user resize the window, also load the correct size
	$(window).resize(function(){
		loadCorrectHeroSize();
	
	});
}

// Helper function to load correct hero container size
function loadCorrectHeroSize(){
	if($(window).width() < 640 ){
		$hero.css({'min-height':$(window).width()/1.5});
	}else{
		$hero.css({'min-height':$(window).width()/2.1});
	}
}

// ----------------- SEE CODE -------------------


var $tab = $('.code-tab');
var $code = $('pre');

$tab.click(function(){

	// Check if this code is already shown
	if($(this).hasClass('open')){
		// If already shown, remove 'open' class and hide answer
		$(this).removeClass('open')
			   .text('Show code')
		       .next($code).slideUp();
	// If it is not open...
	}else{
		// Remove 'open' class from all other questions
		$tab.removeClass('open');
		// Open this answer and add 'open' class
		$(this).addClass('open')
			   .text('Hide code')
		       .next($code).slideDown();
			   
	}
});

// ----------------- ISOTOPE -------------------


$('.grid').isotope({
  // options
  itemSelector: '.grid-item',
  layoutMode: 'fitRows'
});

