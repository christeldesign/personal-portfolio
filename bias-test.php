<?php 
	$pageTitle = "HRx  Bias Test | Christel Chan's Portfolio";
	$pageClass = 'single bt';
	include ('templates/header.php');
?>

<main>

<div class="hero"></div>

<section class="project-blurb">
	<h1 class="project-title">HRx Bias Test | React App</h1>
	<div class="tools">
		<img src="images/icons/sketch.svg" class="svg" alt="sketch icon">
		<img src="images/icons/github.svg" class="svg" alt="github icon">
		<img src="images/icons/react.svg" class="svg" alt="html icon">
		<img src="images/icons/css.svg" class="svg" alt="css icon">
	</div>
	<p>A multi-screen React.js web application created for HRx, a local company that provides workplace diversity consulting. The app is a hidden bias test where users have to categorize a series of words and/or pictures. The app uses the response time of the user to calculate whether they have unconscious bias. I worked in a team of 4 for this project, and we used Github, npm, RESTful API's and the Contentful CMS to complete it. </p>
	<a class="button" href="https://hrx-biastest.firebaseapp.com/" target="blank">View live</a>
	<a href="index.php#work" class="back">&lsaquo; Back to projects</a>

</section>

<section class="process">
	<h2>Process</h2>

	<article>
		<h3>Planning</h3>
		<p>With the concept of the application pretty much in place, planning the logic flow that would help the technical development was crucial. It was unexpectedly a big challenge, and what we originally thought was a simple application was much more complex. To help the team agree on the same logic flow, I took the initiative to create a flow chart.</p> 

		<figure>
			<img src="images/bias-test/logicflow.png" alt="HRx Bias Test Logic Flow Chart" style="max-width: 50%;" class="">
			<figcaption>Logic Flow Chat</figcaption>
		</figure>

	</article>

	<article>
		<h3>Design</h3>
		<p>Compared to the Harvard Implicit Association Test, a similar web bias test, we wanted ours to look less 'academic', more modern and more user-friendly. Luckily, we also had a HRx brand style guide to follow to maintain consistency with the company brand.</p>

		<div class="container">
			<div class="row">
				<div class="col-sm">
					<figure>
						<img src="images/bias-test/harvard-iat-screenshot.png" alt="Harvard IAT" style="padding: 0 1em;">
						<figcaption>Harvard Implicit Association Test Homepage</figcaption>
					</figure>
				</div>

				<div class="col-sm">
					<figure>
						<img src="images/bias-test/bt-screenshot-desktop.png" alt="HRx Bias Test Desktop" style="padding: 0 1em;" class="">
						<figcaption>Our Bias Test Homepage</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</article>

	<article>
	<h3>Development</h3>

		<p>All our content was stored on the Contentful CMS, and could be retrieved via an API call using their Javascript SDK. The content is conveniently returned as an object, and we stored a lot of that information in the state to be used where necessary throughout the application. </p>

		<p>Since the application was built on React without using Redux, it meant a lot of states had to be managed. A lot of the logic was handled in one component, which dictated which components to show depending on which state the application was in.</p>

		<h4>Test Landing Component Logic</h4>
		<p>For example, in the Test Landing Component, if the user had finished all test blocks, the app would show them the Form component to enter their information; if the user is supposed to be doing the test, the app would show them the correct test block; otherwise the app will return the Test Landing Page. </p>
		<a class="button code-tab">Show code</a>

		<pre>
			<code class="language-javascript">
	// --------JSX CODE----------

		render() {

        // Loader...
        if (this.state.isLoading) {
            return (
                &lt;div className="loading-spinner">&lt;/div	&gt;
            )
        }

        // Form...
        if (this.state.finishedAllTests) {
            return (
                &lt;Form
                    testTitle={this.state.testTitle}
                    testId={this.state.testId}
                    r1={this.state.r1}
                    r2={this.state.r2}
                    r3={this.state.r3}
                    r4={this.state.r4}
                    cBlock={this.state.cBlock}
                    iBlock={this.state.iBlock}
                /	&gt;
            )
        }

        // Get current block 
        let currentBlock = (this.state.isFirstRound ? this.state.iBlock : this.state.cBlock);

        // Test Block...
        if (this.state.isDoingTest) {
            return (
                &lt;TestBlock
                    testTitle={this.state.testTitle}
                    blockData={currentBlock}
                    testFinished={this.testFinished} /	&gt;
            )
        }

        return ( // Regular Test Landing Content... )
			</code>
		</pre>
	</article>
</section>	

<section class="final">
	<h2>Final Website</h2>
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<img src="images/bias-test/bt-screenshot-mobile.png" alt="HRx Bias Test Mobile" class="mobile">
			</div>
			<div class="col-sm">
				<img src="images/bias-test/bt-screenshot-tablet.png" alt="HRx Bias Test Tablet" class="tablet">
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<img src="images/bias-test/bt-screenshot-desktop.png" alt="HRx Bias Test Desktop" class="desktop">
			</div>
		</div>
	</div>
	<a class="button" href="https://hrx-biastest.firebaseapp.com/" target="blank">View live</a>
	<a href="index.php#work" class="back">&lsaquo; Back to projects</a>

</section>
		
</main>

<?php 
	include ('templates/footer.php');
?>
