<?php 
	$pageTitle = "Work - Christel Chan's Portfolio";
	$pageClass = 'home';
	include ('templates/header.php');
?>

<main>

<div class="hero">
<!-- 	<img src="images/pattern.svg" alt="" class="pattern-svg">
 -->	<article class="about-blurb">
			<h1>Christel Chan</h1>
			<h2>Front-End Web Developer</h2>
			<p>My name is Christel and I am an enthusiastic front-end developer with hands-on project experience and a fervent desire to create highly functional and customized websites that are also beautiful. A graduate of the Technical Web Designer program at BCIT, a six-month, intensive program exploring front-end design, responsive design, custom Wordpress theme development and more. A lover of being creative, art & design, and big dogs.
			</p>
			<a href='my-story.php' class="button btn-primary" data-toggle="modal" data-target="#exampleModal">More About Me</a>
			<a href='#work' class="button">View Projects</a>


			<!-- About Me Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="profile-pic">
						<img src="images/about/christel-profile-pic.jpg" alt="Christel's Profile Picture">
					</div>
					<article>
						<h1>Hello!</h1>
						<p>My name is Christel and I am a front-end web developer. After graduating with a Bachelor in Fine Arts (Illustration concentration), I was yearning for a new challenge where I could incorporate my art & design background with something technical and digital. Graduating from the Technical Web Developer program at BCIT dispelled any former fear of coding, and I am now very passionate in developing highly functional, and customized websites, while still maintaining creative flair.</p>
					</article>
					<article>
						<p>Here is some of my work outside of web development.</p>


						<div id="slider" class="carousel slide" data-ride="carousel">

						  <ol class="carousel-indicators">
						    <li data-target="#slider" data-slide-to="0" class="active"></li>
						    <li data-target="#slider" data-slide-to="1"></li>
						    <li data-target="#slider" data-slide-to="2"></li>
						    <li data-target="#slider" data-slide-to="3"></li>
						  </ol>

						  <div class="carousel-inner">

						    <div class="carousel-item active">
								<img src="images/about/night.png" alt="Painting">
						    </div>
						    <div class="carousel-item">
								<img src="images/about/car2go.png" alt="Painting on Car2Go">
						    </div>
						    <div class="carousel-item">
								<img src="images/about/dayoff.png" alt="Painting">

						    </div>
						    <div class="carousel-item">
								<img src="images/about/panda.jpg" alt="Painting">
						    </div>

						  </div>

						</div>

					</article>

					<button type="button" class="button" data-dismiss="modal">Close</button>

			      </div>
			    </div>
			  </div>
			</div>
		</article>
</div>

<section class="work">

	<h1 id="work">Work</h1>
	<div class="container">
		<div class="row">

			<div class="col-sm">
		    	<a href="bias-test.php"><img src="images/bias-test/bt-mockup.jpg" alt="Bias Test Thumbnail" class="project-thumbnail"></a>
		    	<a href="bias-test.php" class="project-caption">HRx Bias Test (Staging)</a>
		    </div>

			<div class="col-sm">
		    	<a href="sirocco.php"><img src="images/sirocco/src-mockup.jpg" alt="Sirocco Products Thumbnail" class="project-thumbnail"></a>
		    	<a href="sirocco.php" class="project-caption">Sirocco Products (Staging)</a>
		    </div>

			<div class="col-sm">
		    	<a href="maximus-hair.php"><img src="images/maximus-hair/mh-mockup.jpg" alt="Maximus Hair Salon Thumbnail" class="project-thumbnail"></a>
		    	<a href="maximus-hair.php" class="project-caption">Maximus Hair Salon</a>
		    </div>


		</div>

		<div class="row">

		    <div class="col-sm">
		    	<a href="http://christelchan-todoapp.surge.sh/" target="blank"><img src="images/todo-app/td-mockup.jpg" alt="React To Do App" class="project-thumbnail"></a>
		    	<a href="http://christelchan-todoapp.surge.sh/" class="project-caption" target="blank">React.js To Do App</a>
		    </div>

			<div class="col-sm">
		    	<a href="http://christelchan-weatherapp.surge.sh/" target="blank"><img src="images/weather-app/wa-mockup.jpg" alt="React Weather App" class="project-thumbnail"></a>
		    	<a href="http://christelchan-weatherapp.surge.sh/" class="project-caption" target="blank">React.js Weather App</a>
		    </div>

			<div class="col-sm">
		    	<a href="personal-portfolio.php"><img src="images/portfolio/pp-mockup.jpg" alt="My Personal Portfolio Thumbnail" class="project-thumbnail"></a>
		    	<a href="personal-portfolio.php" class="project-caption">Personal Portfolio</a>
		    </div>

		</div>

		<div class="row">

			<div class="col-sm">
		    	<a href="steamwox.php"><img src="images/steamwox/sw-mockup-2.jpg" alt="SteamWox Products Thumbnail" class="project-thumbnail"></a>
		    	<a href="steamwox.php" class="project-caption">SteamWox Products</a>
		    </div>

			<div class="col-sm">
		    	<a href="andrews-portfolio.php"><img src="images/andrews-portfolio/ap-mockup-2.jpg" alt="Andrew's Portfolio Thumbnail" class="project-thumbnail"></a>
		    	<a href="andrews-portfolio.php" class="project-caption">Andrew's Portfolio</a>
		    </div>

			<div class="col-sm">
		    	<a href="jj-tutorial.php"><img src="images/jj-tutorial/jj-mockup-2.jpg" alt="jQuery Tutorial Thumbnail" class="project-thumbnail" ></a>
		    	<a href="jj-tutorial.php" class="project-caption">jQuery Tutorial</a>
		    </div>


		</div>

		<div class="row">

		    <div class="col-sm">
		    	<a href="landing-page.php"><img src="images/landing-page/lp-mockup-2.jpg" alt="Landing Page Thumbnail" class="project-thumbnail"></a>
		    	<a href="landing-page.php" class="project-caption">Landing Page</a>
		    </div>

		    <div class="col-sm">

		    </div>
		    <div class="col-sm">

		    </div>
		    

		</div>
	</div>
</section>	
		
</main>

<?php 
	include ('templates/footer.php');
?>
