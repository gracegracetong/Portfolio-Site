<?php include('templates/header.php');  ?>

<body>
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	
	<header class="project-header">
		<?php include('templates/nav.php');  ?>

		<div class="project-header-img">
		<h1 class="title-underline">Mason Architects</h1>
			<picture class="header-img">
				<source media="(min-width: 1020px)" 
						srcset="images/project-mason/white-minimalist-concrete-architecture-wide.jpg">
				<source media="(min-width: 650px)" 
						srcset="images/project-mason/white-minimalist-concrete-architecture.jpg">	
				<img src="images/project-mason/white-minimalist-concrete-architecture-crop.jpg" alt="Image of White Industrial Building Design">
			</picture>
		</div>
	</header>

	<main id="content" role="main" class="main-mason">

		<section class="project-overview centered" id="overview">
			<h2>
				A responsive, one-page scrolling website for Mason Architects, a fictious <span class="no-break">architecture studio.</span> 
			</h2>
			<h3 class="tools">
				HTML | CSS | JQUERY | PHOTOSHOP
			</h3>
			<p>To reflect the studio's clean and modern architectural style, the website design is layed out in a way that emphasizes whitespace and minimalist elements. The color palette was selected to give a simple and calm ambience to the site, which is further reflected in the imagery used.</p>

			<a href="http://gtong.htpwebdesign.ca/mason-architects" class="view-live">view live</a>
		</section>

		<section class="project-styles">
			<h2>Color Palette</h2>
			<div class="color-palette">
				<div class="tertiary-color color"><p>#B6C6D6</p></div>
				<div class="main-color color"><p>#000000</p></div>
				<div class="secondary-color color"><p>#FFFFF</p></div>		
			</div>

			<h2>Style Tile</h2>
			<div class="style-tile">
				<img src="images/project-mason/styletile-mason-arch.png" alt="Mason Architects Style Tile">
			</div>	
		</section>		

		<section class="project-layouts">
			<h2>Layout + Design</h2>
			<div class="screenshot-container">
				<img class="white-bg-shadow" src="images/project-mason/full-screenshot-mason-architects.png" alt="Fullpage screenshot of Mason Architects website design">
			</div>
		</section>

		<section class="responsive-layouts">
			<h2>Mobile & Tablet</h2>
			<img src="images/project-mason/tablet-iphone-mockup.png" alt="Tablet and Mobile View of the Website Design">
			<img src="images/project-mason/responsive-mockups.png" alt="Image of responsive website on multiple screen sizes">

			<a href="index.php#work" class="view-live view-more">view more projects</a>
		</section>

	<!-- Scroll to Top -->
	<a href="javascript:" class="scroll-to-top" id="top" aria-hidden="true">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105 105"><title>arrow-top</title><g id="2571c954-cd39-4e0b-848f-7c609354301c" data-name="Layer 2"><g id="025c20be-3612-4f8d-9544-558bd6a12832" data-name="Layer 1"><circle cx="52.5" cy="52.5" r="51" fill="none" stroke="#59545e" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><polyline points="70.93 49.62 52.5 29.1 34.07 49.62" fill="none" stroke="#59545e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.83" fill-rule="evenodd"/><line x1="52.4" y1="29.1" x2="52.4" y2="75.9" fill="none" stroke="#59545e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.83"/></g></g></svg>
	</a>

	</main>

<?php include('templates/footer.php'); ?>