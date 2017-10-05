<?php 
	$pageTitle = "Personal Portfolio | Christel Chan's Portfolio";
	$pageClass = 'single pp';
	include ('templates/header.php');
?>

<main>

<div class="hero"></div>

<section class="project-blurb">
	<h1 class="project-title">Personal Portfolio</h1>
	<div class="tools"></div>
	<p>A portfolio website to showcase my web development and design projects. My vision was to create a clean, user-friendly website while still integrating subtle, unique elements, such as the logo animation, hand-drawn patterns, and hover effects . I also used this opportunity to develop a mobile-first experience, experiment with Bootstrap for layout,  as well as continue practicing Github for version control. </p>
	<a class="button" href="">View Live</a>

</section>

<section class="process">
	<h2>Process</h2>

	<article>
		<h3>Ideation</h3>
		<p>My initial sketches and brainstorms were aiming to showcase as much of my artistic background as possible, with ideas of fancy animated artwork and bold colours. After looking through examples of successful portfolio websites from past students, I realized usability and content were most important.  I scratched ambitious ideas in favour of a clean, well-designed and developed website that functioned well and most importantly, highlighted the actual work in my portfolio.</p> 
	</article>

	<article>
		<h3>Design</h3>
		<p>With the focus on showcasing the work, I designed a clean and simple wireframe.</p>

		<div class="image wireframe">
			<img src="images/andrews-portfolio/ap-wireframe.png" alt="Andrew's Portfolio Wireframe">
		</div>

 		<p>He was open to design choices as long as they conveyed a “friendly but professional” vibe. We agreed that the first style tile had a more cohesive colour palette and font choice, so I designed mockups based on it.</p>

		<div class="image mockup">
			<img src="images/andrews-portfolio/ap-styletile-1.jpg" alt="Andrew's Portfolio Style Tile">
		</div>

		<div class="image mockup">
			<img src="images/andrews-portfolio/ap-styletile-2.png" alt="Andrew's Portfolio Style Tile">
		</div>

	</article>

	<article>
	<h3>Development</h3>

		<p>The most challenging code to write was for the animations that the client requested:</p>

		<ol>
			<li>On mobile, the client wanted the hero image to shrink and the circular profile picture to minimize into a sticky header when the user scrolls.</li>
			<li>On desktop, the client wanted the circular profile picture to float into the side bar when the user scrolls past the hero image.</li>
		</ol>

		<pre>
			<code class="language-javascript">
	// --------JAVASCRIPT/JQUERY CODE----------

	// Header scroll event handler

	const $window = $(window);

	$window.scroll(function(){

		const windowWidth = $window.width();

		if(windowWidth >= 1024){

			desktopScroll();

		}else{

			mobileScroll();
		}
	});


	// Scroll helper functions

	const $header = $('header');
	const $title = $('.title');
	const $profilePic = $('.profile-pic');
	const $main = $('main');

	// Desktop scroll function

	function desktopScroll(){

		const pos = $window.scrollTop();
		const $stickyTitle = $('.sticky-title');

		$header.css({"header": 400 - pos});

		if(pos > 170){
			$profilePic.addClass('sticky-pic');
			$title.hide()
				  .addClass('sticky-title');
			$stickyTitle.show();
			$header.fadeOut();
			$main.addClass('main-side');
		}
	}

	// Mobile scroll function

	function mobileScroll(){

		const headerHeight = $('header').height();
		const pos = $window.scrollTop();

		if(pos > headerHeight){
			$profilePic.addClass('sticky-pic');
			$title.addClass('sticky-title');
		}else{
			$profilePic.removeClass('sticky-pic');
			$title.removeClass('sticky-title');
		}
	}
			</code>
		</pre>
	</article>
</section>	

<section class="final">
	<h2>Final Website</h2>
	<img src="images/andrews-portfolio/ap-mobile-screenshot2.png" alt="Andrew's Portfolio Mobile" class="mobile">
	<img src="images/andrews-portfolio/ap-tablet-screenshot.png" alt="Andrew's Portfolio Tablet" class="tablet">
	<img src="images/andrews-portfolio/ap-desktop-screenshot.png" alt="Andrew's Portfolio Desktop" class="desktop">
	<a class="button" href="christelchan.com/andrews-portfolio">View Live</a>
</section>
		
</main>

<?php 
	include ('templates/footer.php');
?>
