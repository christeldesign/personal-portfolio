<?php 
	$pageTitle = "My Story | Christel Chan's Portfolio";
	$pageClass = 'about';	include ('templates/header.php');
?>

<main>

<section>
	<div class="profile-pic">
		<img src="images/about/christel-profile-pic.jpg" alt="Christel's Profile Picture">
	</div>
	<article>
		<h1>Hello!</h1>
		<p>My name is Christel and I am a front-end web developer. After graduating with a Bachelor in Fine Arts (Illustration concentration), I was yearning for a new challenge where I could incorporate my art & design background with something technical and digital. Graduating from the Technical Web Developer program at BCIT dispelled any former fear of coding, and I am now very passionate in developing highly functional, and customized websites, while still maintaining creative flair.</p>
	</article>

</section>

<section class="my-story">
	<h2>My Story</h2>

	<article>
		<p>Here is some of my work outside of web development.</p>
			<img src="images/about/night.png" alt="Painting">

			<img src="images/about/car2go.png" alt="Painting on Car2Go">

			<img src="images/about/dayoff.png" alt="Painting">

			<img src="images/about/panda.jpg" alt="Painting">

	</article>
</section>
<a class="button" href="index.php#work">View Projects</a>

</main>

<?php 
	include ('templates/footer.php');
?>
