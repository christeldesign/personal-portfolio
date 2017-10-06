<?php 
	$pageTitle = "Andrew's Portfolio Project | Christel Chan's Portfolio";
	$pageClass = 'single ap';
	include ('templates/header.php');
?>

<main>

<div class="hero"></div>

<section class="project-blurb">
	<h1 class="project-title">Andrew's Portfolio</h1>
	<div class="tools"></div>
	<p>A one-page portfolio website for a local electrical engineer to display his achievements. The scope of this project was to practice developing responsive designs using several techniques we learnt in our BCIT program, such as media queries, picture elements, and more. I developed complex custom animation based on the client’s request, and optimized them for different device sizes using conditional jQuery.</p>
	<a class="button" href="http://ychan.bcitwebdeveloper.ca/andrew-portfolio/">View Live</a>

</section>

<section class="process">
	<h2>Process</h2>

	<article>
		<h3>Ideation</h3>
		<p>I chose to create a website for someone else to gain as much experience as possible working with a client and to practice creating a website that conveyed the right message. A personal portfolio site was simple enough in functionality but still had room for creativity.</p> 
	</article>

	<article>
		<h3>Design</h3>
		<p>The client had a very clear vision of the various animations he wanted on his website, so my wireframes served to plan out the structure of the website as affected by the animations.</p>

		<div class="image wireframe">
			<figure>
				<img src="images/andrews-portfolio/ap-wireframe.png" alt="Andrew's Portfolio Wireframe">
				<figcaption>Wireframe for desktop, tablet and mobile</figcaption>
			</figure>
		</div>

 		<p>He was open to design choices as long as they conveyed a “friendly but professional” vibe. We agreed that the first style tile had a more cohesive colour palette and font choice, so I designed mockups based on it.</p>

 		<div class="container">
 			<div class="row">
 				<div class="col-sm">
 					<figure>
 						<img src="images/andrews-portfolio/ap-styletile-1.jpg" alt="Andrew's Portfolio Style Tile">
 						<figcaption>Style Tile v.1</figcaption>
 					</figure>
 				</div>
 				<div class="col-sm">
 					<figure>
 						<img src="images/andrews-portfolio/ap-styletile-2.png" alt="Andrew's Portfolio Style Tile">
 						<figcaption>Style Tile v.2</figcaption>
 					</figure>
 				</div>
 			</div>
 		</div>

	</article>

	<article>
	<h3>Development</h3>

		<p>The most challenging code to write was for the animations that the client requested:</p>

		<ol>
			<li>On mobile, the client wanted the hero image to shrink and the circular profile picture to minimize into a sticky header when the user scrolls.</li>
			<li>On desktop, the client wanted the circular profile picture to float into the side bar when the user scrolls past the hero image.</li>
		</ol>

		<h4>Responsive Scroll Animations | jQuery</h4>
		<a class="button code-tab">Show code</a>

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
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<img src="images/andrews-portfolio/ap-mobile-screenshot2.png" alt="Andrew's Portfolio Mobile" class="mobile">
				</div>

				<div class="col-sm">
					<img src="images/andrews-portfolio/ap-tablet-screenshot.png" alt="Andrew's Portfolio Tablet" class="tablet">
				</div>
			</div>	
						
			<div class="row">
				<div class="col-sm">
					<img src="images/andrews-portfolio/ap-desktop-screenshot.png" alt="Andrew's Portfolio Desktop" class="desktop">	
				</div>
			</div>			
		</div>
	<a class="button" href="http://ychan.bcitwebdeveloper.ca/andrew-portfolio/" target="blank">View Live</a>
</section>
		
</main>

<?php 
	include ('templates/footer.php');
?>
