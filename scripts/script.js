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

	// Fade in projects when user scrolls
	$(window).scroll(function(){
		fadeInProjects();
	});
}

// Helper function
function fadeInProjects(){
	const $projectCaption = $('.project-caption');
	const $projectThumbnail = $('.project-thumbnail');
	const $projectThumbnailPos = $projectThumbnail.offset().top;
	const $scrollPos = $(window).scrollTop();

	$projectThumbnail.each(function(i){
		if( $(window).scrollTop() > (( $(this).offset().top ) - 300)){
			$(this).css({'opacity':'1'});
				   // .parent().next().slideDown();
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
};