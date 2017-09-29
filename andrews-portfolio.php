<?php 
	$pageTitle = "Andrew's Portfolio Project - Christel Chan's Portfolio";
	$pageClass = 'single ap';
	include ('templates/header.php');
?>

<main>

<section class="hero">

	<img src="images/andrews-portfolio/ap-header-mobile.jpg" alt="Andrew's Portfolio">

</section>

<section class="project-blurb">
	<h1>Andrew's Portfolio</h1>
	<div class="tools"></div>
	<p>A one-page portfolio website for a local electrical engineer to display his achievements. The scope of this project was to practice developing responsive designs using several techniques we learnt in our BCIT program, such as media queries, picture elements, and more. I developed complex custom animation based on the client’s request, and optimized them for different device sizes using conditional jQuery.</p>
	<a class="button" href="">View Live</a>

</section>

<section class="process">
	<h1>Process</h1>

	<article>
		<h2>Ideation</h2>
		<p>I chose to create a website for someone else to gain as much experience as possible working with a client and to practice creating a website that conveyed the right message.</p> 
	</article>

	<article>
		<h2>Design</h2>
		<p>The client had a clear vision of the various animations he wanted on his website, but was open to design choices as long as they conveyed a “friendly but professional” vibe. We agreed that the first style tile had a more cohesive colour palette and font choice, so I designed mockups based on it. </p>
	</article>

	<h2>Development</h2>
</section>	

<section class="final">
	<h1>Final Website</h1>
	<a class="button" href="">View Live</a>
</section>
		
</main>

<?php 
	include ('templates/footer.php');
?>
