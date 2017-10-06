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
	<a class="button" href="http://christelchan.com/">View Live</a>

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

	</article>

	<article>
	<h3>Development</h3>

		<p>I coded a few subtle animation using jQuery and CSS transitions to add a little interactivity to the website, but I wanted to the website to be overall quite static to be lighter and less distracting from the portfolio pieces.</p>

		<h4>Subtle fade in effect on scroll | jQuery</h4>
		<a class="button code-tab">Show code</a>

		<pre>
			<code class="language-javascript">
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
				$(this).css({'opacity':'1'});
					   // .parent().next().slideDown();
			}
		});
	}
			</code>
		</pre>

		<h4>Hero image container dynamic resize | jQuery</h4>
		<p>I wanted to try a parallax effect for my hero/header image, but I wanted more control over how the css background hero image would appear in the container, so I coded a function to determine the height of the hero image container to ensure the whole photo would show even while resizing.</p>

		<a class="button code-tab">Show code</a>

		<pre>
			<code class="language-javascript">
	/ ----------------- HERO IMAGE SIZING SCRIPT -------------------
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
			</code>
		</pre>

		<h4>Roll out text effect | CSS</h4>
		<p>I have been quite obsessed with css pseudo elements lately, and I used an :after element to create the illusion that the thumbnail captions are being 'rolled out'. They key was to position the :after element 'right: 0' to 'roll' it out from left to right.</p>

		<a class="button code-tab">Show code</a>

		<pre>
			<code class="language-css">
	.project-caption:after {
		content: "";
		display: block;
		background-color: white;
		height: 1.5em;
		width: 100%;
		position: absolute;
		bottom: 0;
		right: 0;
		transition: all 1s ease;
		float: right;
		text-align: right;
	}

	.col-sm a:hover ~ .project-caption:after {
		width: 0%;
	}
			</code>
		</pre>

		<h4>Show/Hide code | jQuery</h4>

		<a class="button code-tab">Show code</a>

		<pre>
			<code class="language-css">
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
			</code>
		</pre>

	</article>
</section>	

<section class="final">
	<h2>Final Website</h2>
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<img src="" alt="Personal Portfolio Mobile" class="mobile">
				</div>

				<div class="col-sm">
					<img src="" alt="Personal Portfolio Tablet" class="tablet">
				</div>
			</div>	
						
			<div class="row">
				<div class="col-sm">
					<img src="" alt="Personal Portfolio Desktop" class="desktop">	
				</div>
			</div>			
		</div>

	<a class="button" href="http://christelchan.com/">View Live</a>
</section>
		
</main>

<?php 
	include ('templates/footer.php');
?>
