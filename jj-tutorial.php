<?php 
	$pageTitle = "jQuery Tutorial Website | Christel Chan's Portfolio";
	$pageClass = 'single jj';
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
	<h1 class="project-title">jQuery Tutorial Website</h1>
	<div class="tools"></div>
	<p>A four page website with interactive jQuery functionality that simulates folding and flying a paper airplane. The cope of this project was to create three Javascript/jQuery tutorials with embedded code snippets to teach the user how to develop any type of functionality. I wanted my tutorials to be well integrated into a theme and not isolated, so I developed the idea of folding an origami paper airplane. The result was a four-page website, teaching users how to code a slideshow, show sequential images on a click event handler, and move an object in a projectile motion on scroll. The website is not responsive as we had not learnt responsive design at the point of this project.</p>
	<a class="button" href="#" target="blank">View Live</a>

</section>

<section class="process">
	<h2>Process</h2>

	<article>
		<h3>Ideation</h3>
		<p>I wanted the concept of the website to drive the development, so that the final result would have a cohesive storyline. I thought of ideas like a dimsum restaurant…etc. In the end I settled on the concept of flying a paper airplane with the following tutorials:</p>

		<ol>
			<li>A slideshow to allow users to choose the origami paper of their choice</li>
			<li>A function that “folds” the origami paper on each click to fold a paper airplane</li>
			<li>A function that “flies” the paper airplane in a projectile motion by scrolling</li>
		</ol>

	</article>

	<article>
		<h3>Design</h3>
		<p>I was very inspired by Japanese origami paper, so I created the patterns on Adobe Illustrator, as well as choose Japanese inspired fonts. I created each step of the folding process in each paper colour for tutorial 2. I also drew a fan for tutorial 3</p>
	</article>

	<article>
	<h3>Development</h3>
		<p><strong>Tutorial 1:</strong></p>
		<p>I used the Cycle2 jQuery library to create my slideshow. One customized trick I had to code was to store the origami pattern choice of the user in Session to be used in the second tutorial.</p>

		<pre>
			<code class="language-javascript">
	
			</code>
		</pre>
	</article>
</section>	

<section class="final">
	<h2>Final Website</h2>
	<img src="images/jj-tutorial/jj-screenshot-2.png" alt="jQuery Tutorial Screenshot">
	<a class="button" href="christelchan.com/andrews-portfolio">View Live</a>
</section>
		
</main>

<?php 
	include ('templates/footer.php');
?>
