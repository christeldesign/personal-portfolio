<?php 
	$pageTitle = "Work - Christel Chan's Portfolio";
	$pageClass = 'home';
	include ('templates/header.php');
?>

<main>

<section class="hero">

		<article class="about-blurb">
			<img src="images/welcome-mobile.png" alt="Hello and welcome message" class="welcome-banner">
			<p>My name is Christel and I am an enthusiastic front-end developer with hands-on project experience and a fervent desire to create highly functional and customized websites that are also beautiful. A graduate of the Technical Web Designer program at BCIT, a six-month, intensive program exploring front-end design, responsive design, custom Wordpress theme development and more. A lover of being creative, art & design, and big dogs.
			</p>
			<a href='my-story.php' class="button">More About Me</a>
		</article>
	
</section>

<section class="work">

	<h1>Work</h1>
	<div class="container">
		<div class="row">

			<div class="col-sm">
		    	<a href="http://christelchan.com/"><img src="images/maximus/mh-mockup.jpg" alt="Maximus Hair Salon Thumbnail" class="project-thumbnail"></a>
		    	<h3><a href="#" class="project-caption">Maximus Hair Salon</a></h3>
		    </div>

		    <div class="col-sm">
		    	<a href="http://christelchan.com/"><img src="images/portfolio/cc-thumbnail.png" alt="My Personal Portfolio Thumbnail" class="project-thumbnail"></a>
		    	<h3><a href="http://christelchan.com/" class="project-caption">Christel Chan's Portfolio</a></h3>
		    </div>

		    <div class="col-sm">
		    	 <a href="andrews-portfolio.php"><img src="images/andrews-portfolio/ap-mockup-2.jpg" alt="Andrew's Portfolio Thumbnail" class="project-thumbnail"></a>
		    	<h3><a href="andrews-portfolio.php" class="project-caption">Andrew's Portfolio</a></h3>
		    </div>

		 </div>

		 <div class="row">

		 	<div class="col-sm">
		    	<a href="http://steamwox.ca/"><img src="images/steamwox/sw-mockup-2.jpg" alt="SteamWox Products Thumbnail" class="project-thumbnail"></a>
		    	<h3><a href="http://steamwox.ca/" class="project-caption">SteamWox Products Ltd.</a></h3>
		    </div>

		    <div class="col-sm">
		    	<a href="http://ychan.bcitwebdeveloper.ca/jj-tutorial/index.html"><img src="images/jj-tutorial/jj-mockup-2.jpg" alt="jQuery Tutorial Thumbnail" class="project-thumbnail" ></a>
		    	<h3><a href="http://ychan.bcitwebdeveloper.ca/jj-tutorial/index.html" class="project-caption">jQuery Tutorial</a></h3>
		    </div>

		    <div class="col-sm">
		    	<a href="http://ychan.bcitwebdeveloper.ca/"><img src="images/landing-page/lp-mockup-2.jpg" alt="Landing Page Thumbnail" class="project-thumbnail"></a>
		    	<h3><a href="http://ychan.bcitwebdeveloper.ca/" class="project-caption">Landing Page</a></h3>
		    </div>

		 </div>
	</div>
</section>	
		
</main>

<?php 
	include ('templates/footer.php');
?>
