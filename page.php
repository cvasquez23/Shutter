<?php
/**
* The page template for Giem Photography
*
* @package Giem Photography
* @since Shutter Theme 1.0.0
**/
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php while (have_posts()):
      the_post(); ?>
        <!-- <header class="entry-header text-center">
          <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header>.entry-header -->
          
        <div class="entry-content">
          <?php the_content(); ?>
        </div><!-- .entry-content -->

  <?php
    endwhile; ?>

  </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
