<?php 
	$pageTitle = "jQuery Tutorial Website | Christel Chan's Portfolio";
	$pageClass = 'single jj';
	include ('templates/header.php');
?>

<main>

<div class="hero"></div>

<section class="project-blurb">
	<h1 class="project-title">jQuery Tutorial Website</h1>
	<div class="tools">
		<img src="images/icons/photoshop.svg" class="svg" alt="photoshop icon">
		<img src="images/icons/illustrator.svg" class="svg" alt="illustrator icon">
		<img src="images/icons/html.svg" class="svg" alt="html icon">
		<img src="images/icons/css.svg" class="svg" alt="css icon">
		<img src="images/icons/jquery.svg" class="svg" alt="jquery icon">
	</div>
	<p>A four page website with interactive jQuery functionality that simulates folding and flying a paper airplane. The scope of this project was to create three Javascript/jQuery tutorials with embedded code snippets to teach the user how to develop any type of functionality.</p>
	<p>I wanted my tutorials to be well integrated into a theme and not isolated, so I developed the idea of folding an origami paper airplane. The result was a four-page website, teaching users how to code a slideshow, show sequential images on a click event handler, and move an object in a projectile motion on scroll. The website is not responsive as we had not learnt responsive design at the point of this project.</p>
	<a class="button" href="http://christelchan.com/jj-tutorial/" target="blank">View Live</a>
	<a href="index.php#work" class="back">&lsaquo; Back to projects</a>

</section>

<section class="process">
	<h2>Process</h2>

	<article>
		<h3>Ideation</h3>
		<p>I wanted the concept of the website to drive the development, so that the final result would have a cohesive storyline. I thought of ideas like a dimsum restaurant…etc. In the end I settled on the concept of flying a paper airplane with the following tutorials:</p>

			<p>1. A slideshow to allow users to choose the origami paper of their choice</p>
			<p>2. A function that “folds” the origami paper on each click to fold a paper airplane</p>
			<p>3. A function that “flies” the paper airplane in a projectile motion by scrolling</p>

	</article>

	<article>
		<h3>Design</h3>
		<p>I was very inspired by Japanese origami paper, so I created the patterns on Adobe Illustrator, as well as choose Japanese inspired fonts. I created each step of the folding process in each paper colour for tutorial 2. I also drew a fan for tutorial 3</p>

	<div class="container">
		<div class="row airplane-steps">
			<div class="col-sm">
				<img src="images/jj-tutorial/origami-paper-02.png" alt="Origami Paper">
			</div>
			<div class="col-sm">
				<img src="images/jj-tutorial/steps-2-04.png" alt="Airplane Folding Step">
			</div>
		</div>
	</div>
		
		
	</article>

	<article>
	<h3>Development</h3>
		<h4>Tutorial 1 | jQuery</h4>
		<p>I used the Cycle2 jQuery library to create my slideshow. One customized trick I had to code was to store the origami pattern choice of the user in Session to be used in the second tutorial.</p>

		<a class="button code-tab">Show code</a>

		<pre>
			<code class="language-javascript">

	// HTML elements from Tutorial 1
		const $pattern1 = $('.pattern-01');
		const $pattern2 = $('.pattern-02');
		const $pattern3 = $('.pattern-03');
		const $allPatterns = $('.pattern');

		// Store in session which origami pattern was clicked, and add selected class to show selected style
		$pattern1.click(function(){

			 sessionStorage.setItem('pattern','pattern1');
			 $allPatterns.removeClass('selected');
			 $pattern1.toggleClass('selected');

		});

		// Repeated for all origami pattern choices...

		// Show the right pattern paper in Tutorial 2 according to which one was clicked in tutorial 1
		if(sessionStorage.getItem('pattern') === 'pattern1') {
			$('.steps-1').show();

		}else if(sessionStorage.getItem('pattern') === 'pattern2'){
			$('.steps-2').show();

		}else{
			$('.steps-3').show();
		}
	
			</code>
		</pre>

		<h4>Tutorial 2 | jQuery</h4>
		<p>I built a function on click event to show the next image in a array of images.</p>

		<a class="button code-tab">Show code</a>

		<pre>
			<code class="language-javascript">

	// HTML elements from fold.html
	const $stepsContainer = $('.steps-container');

	//Steps Array
	const steps = [];

		steps[0] = $('.step-1');
		steps[1] = $('.step-2');
		steps[2] = $('.step-3');
		steps[3] = $('.step-4');
		steps[4] = $('.step-5');
		steps[5] = $('.step-6');

	let i=0;

	steps[0].show();

	// Show next step
	$stepsContainer.click(function(){

		if(i < steps.length-1){

			steps[i].hide();
			i++;
			steps[i].show();
		}

	});
	
			</code>
		</pre>

		<h4>Tutorial 3 | jQuery</h4>
		<p>I coded a scroll event function that moves an element in a projective motion according to the scroll position. I used cos and sin math functions for the equation.</p>

		<a class="button code-tab">Show code</a>

		<pre>
			<code class="language-javascript">

	// Fly the airplane in a projectile motion according to scroll position 
	$(window).scroll(function(){

		const $airplane = $('.airplane');
		const airplanePos = $airplane.offset().top;
		const pos = $(window).scrollTop();
		const $fanBlade = $('#fan-blades');

		$fanBlade.css({'transform': 'rotate(' + (pos) + 'deg)'});

		if(airplanePos < 2600){

		$airplane.css('left', 2*(120 + 2.5 * (pos / 7) * Math.sin(pos * 0.0009)))
									.css('bottom', (300 + 2.5 * (pos / 7) * Math.cos(pos * 0.0009)));

	  }else if(airplanePos >= 2600) {
	  
	  $airplane.css('left', (pos - 350));
	  }

	});

			</code>
		</pre>

	</article>
</section>	

<section class="final">
	<h2>Final Website</h2>
	<img src="images/jj-tutorial/jj-screenshot-2.png" alt="jQuery Tutorial Screenshot">
	<a class="button" href="http://christelchan.com/jj-tutorial/"  target="blank">View Live</a>
	<a href="index.php#work" class="back">&lsaquo; Back to projects</a>

</section>
		
</main>

<?php 
	include ('templates/footer.php');
?>
