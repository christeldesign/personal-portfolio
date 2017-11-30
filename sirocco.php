<?php 
	$pageTitle = "Sirocco Products Website | Christel Chan's Portfolio";
	$pageClass = 'single src';
	include ('templates/header.php');
?>

<main>

<div class="hero"></div>

<section class="project-blurb">
	<h1 class="project-title">Sirocco Products</h1>
	<div class="tools">
		<img src="images/icons/sketch.svg" class="svg" alt="sketch icon">
		<img src="images/icons/photoshop.svg" class="svg" alt="photoshop icon">
		<img src="images/icons/illustrator.svg" class="svg" alt="illustrator icon">
		<img src="images/icons/html.svg" class="svg" alt="html icon">
		<img src="images/icons/css.svg" class="svg" alt="css icon">
		<img src="images/icons/wordpress.svg" class="svg" alt="wordpress icon">
	</div>
	<p>A multipage website for a Beijing based manufacturer of commercial vacuums and parts. I designed and developed a custom WordPress theme with the company's brand of sophistication in mind. I also used this project as a chance to practice CSS grid, and also incorporated the isotope library for the gallery page.</p>
	<p><strong>Note, the website is at my staging domain, but has been approved by the client while the Beijing team figures out hosting.</strong><p>
	<a class="button" href="http://staging.christelchan.com/" target="blank">View staging</a>
	<a href="index.php#work" class="back">&lsaquo; Back to projects</a>

</section>

<section class="process">
	<h2>Process</h2>

	<article>
		<h3>Planning & Design</h3>
		<p>There were two important details to incorporate into the website structure. Firstly, although the website showcased all Sirocco products, they wouldn't list the price. Therefore, it was important to include Call to Actions to prompt the user to contact the company for quotes. Another detail was that Sirocco potentially carries other brands and the CEO would like to include those products. Therefore, I planned to use a filtering system on the products page.</p> 

		<div class="container">
			<div class="row">
				<div class="col-sm">
					<figure>
						<img src="images/sirocco/src-wireframe.png" alt="Sirocco Website Wireframe">
						<figcaption>Sirocco Website Wireframe</figcaption>
					</figure>
				</div>
				<div class="col-sm">
					<figure>
						<img src="images/sirocco/src-mockup.png" alt="Sirocco Website Wireframe">
						<figcaption>Sirocco Website Mockup</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</article>

</section>	

<section class="final">
	<h2>Final Website</h2>
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<img src="images/sirocco/src-screenshot-mobile.png" alt="Sirocco Products Mobile" class="mobile">
			</div>
			<div class="col-sm">
				<img src="images/sirocco/src-screenshot-tablet.png" alt="Sirocco Products Tablet" class="tablet">
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<img src="images/sirocco/src-screenshot-desktop.png" alt="Sirocco Products Desktop" class="desktop">
			</div>
		</div>
	</div>
	<a class="button" href="http://staging.christelchan.com/" target="blank">View staging</a>
	<a href="index.php#work" class="back">&lsaquo; Back to projects</a>

</section>
		
</main>

<?php 
	include ('templates/footer.php');
?>
