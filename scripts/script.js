// jQuery Hamburger menu

// HTML elements

const $hamburger = $('.hamburger');
const $nav = $('.main-nav');

$hamburger.click(function(){
	this.classList.toggle("active");
	$nav.animate({width:'toggle'});
});

// Frontpage project name animation
$(window).scroll(function(){

	const $projectCaption = $('.project-caption');
	const $projectThumbnail = $('.project-thumbnail');
	const $projectThumbnailPos = $projectThumbnail.offset().top;
	const $scrollPos = $(window).scrollTop();

	$projectThumbnail.each(function(i){
		if( $(window).scrollTop() > (( $(this).offset().top ) - 300)){
			$(this).css({'opacity':'1'})
				   .parent().next().slideDown();
		}

	});

});
