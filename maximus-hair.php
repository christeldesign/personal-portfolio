<?php 
	$pageTitle = "Maximus Hair Studio Website | Christel Chan's Portfolio";
	$pageClass = 'single mh';
	include ('templates/header.php');
?>

<main>

<div class="hero"></div>

<section class="project-blurb">
	<h1 class="project-title">Maximus Hair Studio</h1>
	<div class="tools">
		<img src="images/icons/sketch.svg" class="svg" alt="sketch icon">
		<img src="images/icons/photoshop.svg" class="svg" alt="photoshop icon">
		<img src="images/icons/illustrator.svg" class="svg" alt="illustrator icon">
		<img src="images/icons/github.svg" class="svg" alt="github icon">
		<img src="images/icons/html.svg" class="svg" alt="html icon">
		<img src="images/icons/css.svg" class="svg" alt="css icon">
		<img src="images/icons/wordpress.svg" class="svg" alt="wordpress icon">
		<img src="images/icons/sass.svg" class="svg" alt="sass icon">
		<img src="images/icons/jquery.svg" class="svg" alt="jquery icon">
	</div>
	<p>A five page website for a local hair salon looking to expand their business with a new location and new website. I worked in a team of 4 for this project, and worked with gulp.js, SASS and Github to streamline our workflow. We communicated with the client frequently and collaborated effectively to create a well-functioning and modern responsive WordPress website. In this project, I worked extensively on both design and development, including registering all Custom Post Types and Taxonomies, building interactive scripts such as the hamburger menu and accordion FAQ, and more.</p>
	<a class="button" href="https://hrx-biastest.firebaseapp.com/" target="blank">View live</a>
	<a href="index.php#work" class="back">&lsaquo; Back to projects</a>

</section>

<section class="process">
	<h2>Process</h2>

	<article>
		<h3>Planning</h3>
		<p>The client particularly wanted the website to include a gallery page with photos of past work, a FAQ to answer questions about specialty perms, as well as areas of the website that convey that the salon is welcoming of everyone and pets.</p> 

		<figure>
			<img src="images/maximus-hair/cardsorting.jpg" alt="Maximus Hair Studio Website Card Sorting" style="padding: 0 1em;" class="">
			<figcaption>Card sorting to form the initial information architecture</figcaption>
		</figure>

		<figure>
			<img src="images/maximus-hair/site-map.png" alt="Maximus Hair Studio Website Site Map" style="padding: 0 1em;" class="">
			<figcaption>Sitemap created from initial information architecture</figcaption>
		</figure>

	</article>

	<article>
		<h3>Design</h3>
		<p>We had two styles for the client to choose. Since the salon and the logo had a bit of a retro feel, we envisioned the website to infuse modern and retro together to reflect the atmosphere of the salon. We also created a version in a trendy, clean and minimalistic style. The clients chose the latter version.</p>

		<div class="container">
			<div class="row">
				<div class="col-sm">
					<figure>
						<img src="images/maximus-hair/mockup-retro.jpg" alt="Maximus Hair Studio Mockup Retro">
						<figcaption>Mockup retro version</figcaption>
					</figure>
				</div>
				<div class="col-sm">
					<figure>
						<img src="images/maximus-hair/mockup-modern.jpg" alt="Maximus Hair Studio Mockup Modern">
						<figcaption>Mockup modern version</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</article>

	<article>
	<h3>Development</h3>

		<p>This was byfar the largest project I had been involved in, and building a WordPress custom theme was the most obvious choice for a number of reasons: Though a small site, the sheer volume of content, from the list of services to gallery images, would greatly benefit from the organization of a CMS; the client would be able to control the content and edit anything on the front-end if necessary.</p>

		<p>Here is an example of one of the more interesting things that I coded for the project:</p>

		<h4>Accordion FAQ Section</h4>
		<a class="button code-tab">Show code</a>

		<pre>
			<code class="language-javascript">
	// --------JAVASCRIPT/JQUERY CODE----------

		jQuery(function ($) {

		var $question = $('.question');
		var $answer = $('.answer');

		$question.click(function(){

			// Hide all answers
			$answer.slideUp();

			// Check if this answer is already open
			if($(this).hasClass('open')){
				// If already open, remove 'open' class and hide answer
				$(this).removeClass('open')
				       .next($answer).slideUp();
			// If it is not open...
			}else{
				// Remove 'open' class from all other questions
				$question.removeClass('open');
				// Open this answer and add 'open' class
				$(this).addClass('open')
				       .next($answer).slideDown();
					   
			}
		});

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
				<img src="images/maximus-hair/mh-screenshot-mobile.png" alt="Maximus Hair Mobile" class="mobile">
			</div>
			<div class="col-sm">
				<img src="images/maximus-hair/mh-screenshot-tablet.png" alt="Maximus Hair Tablet" class="tablet">
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<img src="images/maximus-hair/mh-screenshot-desktop.png" alt="Maximus Hair Desktop" class="desktop">
			</div>
		</div>
	</div>
	<a class="button" href="https://maximushairdavie.com/" target="blank">View live</a>
	<a href="index.php#work" class="back">&lsaquo; Back to projects</a>

</section>
		
</main>

<?php 
	include ('templates/footer.php');
?>
