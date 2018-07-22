<?php get_header(); ?>
	<div class="main">
    <div class="title-bar">Blog</div>
		<?php //////
    // getting all posts in an associative array setting the number of posts to 16
    $posts = get_posts(array('numberposts' => 16));
    $i = 0;

    // creating an associative array out of each post
    foreach ($posts as $post) : setup_postdata($post);
    if ($i == 0) {
      $big = ' big';
    } else {
      $big = '';
    }
    ?>
      <!-- the a tag makes the whole div clickable to take you to the main post -->
			<a class="blog-link<?php echo $big; $i++; ?>" href="<?php echo str_replace('http://','http://',get_permalink()); ?>">
        <div class="blog-card">
					<!-- cannot find post thumbnail -->
  				<img class="blog-image" src="<?php the_post_thumbnail_url(); ?>">
  				<div class="blog-copy">
  					<div class="blog-chip"></div>
  					<h3><?php echo get_the_title(); ?></h3>
            <p><?php echo get_the_category()[0]->name; ?></p>
  					<div><?php echo get_the_excerpt(); ?></div>
  				</div>
        </div>
			</a>
		<?php endforeach; wp_reset_postdata(); ?>
	</div>


<?php get_footer(); ?>
