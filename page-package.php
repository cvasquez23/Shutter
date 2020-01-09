<?php
/**
* Template Name: Package Page
* Template Post Type: page
* The package page template for Giem Photography
*
* @package Giem Photography
* @since Giem Photography Theme 1.0
**/
?>

<?php get_header(); ?>

<main id="main" class="site-main" role="main">
  <?php while (have_posts()):
    the_post(); ?>          
    <?php the_content(); ?>
  <?php
  endwhile; ?>

</main><!-- .site-main -->

<?php get_footer(); ?>
