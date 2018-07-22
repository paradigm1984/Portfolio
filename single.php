<?php
	// wordpress function to grab the header.php file.
	get_header();
?>
<div class="body">
	<h1 class=""> <?php the_title(); ?>. </h1>
	<a class="" href="<?php echo site_url("index.php/blog") ?>">
</div>

<?php
	// wordpress function for grabbing the footer.php file.
	get_footer();
?>
