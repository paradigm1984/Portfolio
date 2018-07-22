<?php
	// wordpress function to grab the header.php file.
	get_header();
?>
<div class="modal">
	<span class="close-modal"> Close </span>
</div>
<div id="smallHero" class="small-hero">
	<div class="small-hero-text-container">
		<span class="small-hero-text"> Hello, my name is Daniel Blanco. </span>
	</div>
	<div class="small-card-splitter">
		<div class="small-card">
			<span class="small-card-header"> Graphic Designer </span>
			<!-- <img class="small-img" src="http://localhost:8888/portfolio/wp-content/uploads/2018/05/guide-icons-01.png"> -->
			<img class="small-img" src="<?php echo site_url()?>/wp-content/uploads/2018/05/guide-icons-01.png">

		</div>
		<div class="small-card">
			<span class="small-card-header"> Web Developer </span>
			<img class="small-img" src="<?php echo site_url()?>/wp-content/uploads/2018/05/guide-icons-02.png">
		</div>
	</div>
</div>
<!-- hero section for large screens -->
<div id="largeHero" class="computer-container">
	<div class="loader-wrapper" id="loaderWrapper">
		<div class="hero-text-container">
			<p class="hero-text hidden" id="heroText"> Hello, my name is Daniel Blanco. </p>
		</div>
		<div class="computer-wrapper">
			<div class="computer-text-container dev-text-container" id="developerTextContainer">
				<div class="blurb-text blurb-text-dev">
					<h3 class="blurb-header-left"> Frontend Developer. </h3>
					<h4> Skills: </h4>
					<ul class="dev-list">
						<li> HTML5 </li>
						<li> CSS3 </li>
						<li> Javascript </li>
						<li> jQuery </li>
						<li> PHP </li>
						<li> React JS </li>
						<li> Node.JS </li>
					</ul>
				</div>
			</div>
			<!-- invisible div for hover effect -->
			<div id="webdevHover"></div>
			<!-- icon for dev side -->
			<img id="devIcon" src="http://localhost:8888/portfolio/wp-content/uploads/2018/05/guide-icons-01.png" alt="devIcon"/>
			<div class="img-wrapper" class="compImgWrapper">
				<!-- .computer-hero is applied to image with jQuery -->
				<img id="computerHero" src="http://localhost:8888/portfolio/wp-content/uploads/2018/05/joined-comp-01.png" alt="comp"/>
			</div>
			<!-- icon for design side -->
			<img id="designIcon" src="http://localhost:8888/portfolio/wp-content/uploads/2018/05/guide-icons-02.png" alt="designIcon"/>
			<!-- invisible div for hover effect -->
			<div id="designHover"></div>
			<div class="computer-text-container design-text-container" id="designerTextContainer">
				<div class="blurb-text blurb-text-design">
					<h3 class="blurb-header-right"> Graphic Designer. </h3>
					<h4> Skills: </h4>
					<ul class="design-list">
						<li> Adobe Photoshop </li>
						<li> Adobe Illustrator </li>
						<li> Adobe Indesign </li>
						<li> Logo Design </li>
						<li> Icon Design </li>
						<li> Apparel Design </li>
						<li> Print layout </li>
					</ul>
				</div>
			</div>
		</div>
		<div class="down-arrow down-arrow-top">
			<a href="#firstRecentContainer" class="anchor-link">
				<i class="fas fa-chevron-down chevron-pink fa-3x" id="downArrow"></i>
			</a>
		</div>
	</div>
</div> <!-- END computer-container -->

<div id="firstRecentContainer" class="recent-container">
	<div class="recent-title-container">
		<span class="accent-line"></span>
		<h2> Development Work </h2>
		<span class="accent-line"></span>
	</div>
	<div class="single-work-container">
	<?php
	$args = array(
  'category_name' => 'Graphic Design',
	'posts_per_page' => '3',
	);
	$arr_posts = new WP_Query( $args );

	if($arr_posts->have_posts()) {
		while($arr_posts->have_posts()) {
			$arr_posts->the_post();
	?>
	<div id="" class="single-work">
		<span class="single-work-thumb">
		<?php
		if(has_post_thumbnail()) {
			the_post_thumbnail();
		}
		?>
	</span>
		<h5> <?php the_title(); ?></h5>
		<span class="single-description"> <?php the_content(); ?> </span>
		<!-- <a class="single-more" href="<?php // the_permalink() ?>"> More </a> -->
	</div>
	<?php
		}
	}
	?>
	</div><!-- END single-work-container -->
	<a class="more" href="<?php echo site_url("Graphic Design") ?>"<button class="more"> See More </button></a>
	<div class="down-arrow">
		<i class="fas fa-chevron-down chevron-gray fa-3x" onClick="document.getElementById('secondRecentContainer').scrollIntoView();"></i>
	</div>
</div><!-- END recent-container -->
<div id="secondRecentContainer" class="recent-container">
	<div class="recent-title-container">
		<span class="accent-line"></span>
		<h2> Design Work </h2>
		<span class="accent-line"></span>
	</div>
	<div class="single-work-container">
	<?php
	$args = array(
	'category_name' => 'Web Development',
	'posts_per_page' => '3',
	);
	$arr_posts = new WP_Query( $args );

	if($arr_posts->have_posts()) {
		while($arr_posts->have_posts()) {
			$arr_posts->the_post();
	?>
	<div id="localWeather" class="single-work">
		<span class="single-work-thumb">
		<?php
		if(has_post_thumbnail()) {
			the_post_thumbnail();
		}
		?>
	</span>
		<h5> <?php the_title(); ?></h5>
		<span class="single-description"> <?php the_content(); ?> </span>
		<!-- <a class="single-more" href="<?php // the_permalink() ?>"> More </a> -->
	</div>
	<?php
		}
	}
	?>
	</div><!-- END single-work-container -->
	<a href="<?php echo site_url("Web Development") ?>"<button class="more"> See More </button></a>
	<div class="down-arrow down-arrow-bottom">
		<i class="fas fa-chevron-down chevron-gray fa-3x" onClick="document.getElementById('contact').scrollIntoView();"></i>
	</div>
</div><!-- END recent-container -->
<div id="contact" class="contact">
	<div class="contact-container">
		<h2> Let's get in touch. </h2>
		<form class="contact-form">
			<div>
				<input class="input-text" type="text" name="name" placeholder="Name">
			</div>
			<div >
				<input class="input-text" type="number" name="phone" placeholder="Phone Number">
			</div>
			<div>
				<input class="input-text" type="email" name="e-mail" placeholder="E-mail">
			</div>
			<div>
				<textarea class="input-text input-textarea" rows="4" placeholder="Your message (optional)"></textarea>
			</div>
		</form>
		<button class="form-submit"> Submit </button>
	</div>
</div>
<?php
// wordpress function for grabbing the footer.php file.
get_footer();
?>
