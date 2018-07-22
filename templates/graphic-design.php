<?php
/**
 * Template Name: Graphic Design
 *
 * @package WordPress
 * @subpackage portfolio
 */
?>
<?php get_header(); ?>
<div class="modal">
	<span class="close-modal"> close </span>
</div>
<div class="page-title"> Graphic Design Portfolio </div>
<div class="recent-title-container">
  <div class="single-work-container">
  <?php
  $args = array(
  'category_name' => 'Graphic Design',
  'posts_per_page' => '16',
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
      <p class="single-description"> <?php the_content(); ?> </p>
      <!-- <a class="single-more" href="<?php // the_permalink() ?>"> More </a> -->
    </div>
  <?php
    }
  }
  ?>
  </div><!-- END single-work-container -->
</div><!-- END recent-title-container -->

<?php get_footer(); ?>
