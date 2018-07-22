<?php
/**
 * Template Name: Blog
 *
 * @package WordPress
 * @subpackage portfolio
 */
?>
<?php get_header(); ?>
<div class="title-bar">Blog</div>
	<div class="blog-grid">
		<?php $posts = get_posts(array('numberposts' => 16)); $i = 0; ?>
		<?php foreach ($posts as $post) : setup_postdata($post); if ($i == 0) {$big = ' big';} else {$big = '';} ?>

			<a class="blog-card<?php echo $big; $i++; ?>" href="<?php echo str_replace('http://','http://',get_permalink()); ?>">

				<img class="blog-image" src="<?php echo get_the_post_thumbnail_url(); ?>">
				<div class="blog-copy">
					<div class="blog-chip"><?php echo get_the_category()[0]->name; ?></div>
					<h3><?php echo get_the_title(); ?></h3>
					<div><?php echo get_the_excerpt(); ?></div>
				</div>
			</a>
		<?php endforeach; wp_reset_postdata(); ?>
	</div>


<?php get_footer(); ?>
