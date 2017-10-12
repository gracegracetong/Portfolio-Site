<?php include('templates/header.php');  ?>

<body class="about-page">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	
	<header class="project-header">
		<?php include('templates/nav.php');  ?>

		<div class="project-header-img dark-header about-header">
			<h1 class="title-underline">About Me</h1>
			<picture class="header-img">
				<source media="(min-width: 1020px)" 
						srcset="images/about-me-header-wide.svg">
				<source media="(min-width: 650px)" 
						srcset="images/about-me-header.svg">
				<img src="images/about-me-header-crop.svg" alt="Header Image of Javascript Tutorials Project Page">
			</picture>
		</div>
	</header>

	<main id="content" role="main" class="main-about">
		
		<section class="about-me centered">
			<h2>Hi there!</h2>
			<p>
				I'm Grace, a Front-End Developer and Designer from rainy Vancouver, B.C. I started off as a <span class="underline">graphic designer</span> and grew increasingly interested in web development until I made the leap to enter the Technical Web Designer program at BCIT. 
			</p>
			<p>
				In addition to writing clean <span class="underline">semantic code</span>, I enjoy experimenting with subtle CSS and Javascript animations. 
				<span class="underline">Efficiency</span> drives me to constantly look for better ways to do things, and I could not imagine life without all my keyboard shortcuts and productivity apps! I am always grateful that I discovered my passion for design and tech early on in my life, and that I am able to <span class="underline">do what I love</span> as a profession. 
			</p>
			<p>
				When I am not working on web projects, I can be found creating illustrations and graphics, looking up the latest technologies and gadgets, hanging out at coffee shops, biking around Stanley Park, and checking out new ramen spots. 
			</p>
			<br>

		</section>
		
		<a href="https://gracetongdesign.com" class="view-live">back to home</a>


<?php include('templates/footer.php'); ?>