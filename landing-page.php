<?php 
	$pageTitle = "Landing Page | Christel Chan's Portfolio";
	$pageClass = 'single lp';
	include ('templates/header.php');
?>

<main>

<div class="hero">

<!-- 	<picture>
		<source srcset="images/andrews-portfolio/ap-header.jpg" media="(min-width: 40em)">
		<img src="images/andrews-portfolio/ap-header-mobile.jpg" alt="Andrew's Portfolio">
	</picture> -->

</div>

<section class="project-blurb">
	<h1 class="project-title">Landing Page</h1>
	<div class="tools"></div>
	<p>A one-page landing site to showcase my BCIT in-class projects. This was one of the first projects in our BCIT Technical Web Design Program, and we were given much creative freedom. I created a artistic site that illustrated each project as a whimsical house on a street. Though aesthetically pleasing, I have since learnt about accessibility, user-experience and responsive design, and would not create such a graphic-heavy site that relied so much on images as a form of navigation.</p>
	<a class="button" href="http://christelchan.com/landing-page/" target="blank">View Live</a>
	<a href="index.php#work" class="back">&lsaquo; Back to projects</a>

</section>

<section class="process">
	<h2>Process</h2>

	<article>
		<h3>Ideation</h3>
		<p>A large part of why I decided to learn web design was to fuse my artistic background with the technical opportunities of front-end development. Therefore, I saw this project as an opportunity to utilize my illustration background to create an eyecatching website.</p> 
	</article>

	<article>
		<h3>Design</h3>
		<p>I created the houses on Adobe Illustrator, and created a mockup in Photoshop to visualize the design.</p>
		<figure>
			<img src="images/landing-page/lp-mockup.png" alt="Landing Page Mockup">
			<figcaption>Landing Page mockup</figcaption>
		</figure>
	</article>

	<article>
	<h3>Development</h3>
		<h4>Cloud Animation</h4>
		<p>I created subtle cloud animation using css animation. I had ten cloud elements in total, each a different size and moving at a different spend to create the illusion of depth.</p>

		<a class="button code-tab">Show code</a>


		<pre>
			<code class="language-css">
	/*-----------------------CLOUD CSS ANIMATION ---------------*/

	.clouds {
		-webkit-filter: blur(7px);
	}

	/* -- CLOUDS SLIDING RIGHT --*/

	@keyframes slide-right-01 {
		 0% {position: absolute; right: 60%; top: -160px;}
	    100% {position: absolute; right: -250px; top: -160px;}
	}

	#cloud-right-01 {
		opacity: 0.1;
		width: 250px;
		height: 85px;
		animation: slide-right-01 200s linear infinite;
		overflow: hidden;
	}

	@keyframes slide-right-02 {
		 0% {position: absolute; right: 100%; top: 40px}
	    100% {position: absolute; right: -300px; top: 40px}

	 }

	#cloud-right-02 {
		opacity: 0.3;
		width: 350px;
		height: 103px;
		animation: slide-right-02 100s linear infinite;
		overflow: hidden;
	}
			</code>
		</pre>
	</article>
</section>	

<section class="final">
	<h2>Final Website</h2>
	<img src="images/landing-page/lp-screenshot.png" alt="Landing Page Screenshot">
	<a class="button" href="http://christelchan.com/landing-page/"  target="blank">View Live</a>
	<a href="index.php#work" class="back">&lsaquo; Back to projects</a>

</section>
		
</main>

<?php 
	include ('templates/footer.php');
?>
