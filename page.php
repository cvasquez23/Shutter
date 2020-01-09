<?php
/**
* The page template for Giem Photography
*
* @package Giem Photography
* @since Giem Photography Theme 1.0
**/
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();
    ?>
        <!-- <header class="entry-header text-center">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header>.entry-header -->
          
        <div class="entry-content">
          <?php the_content(); ?>
        </div><!-- .entry-content -->

  <?php
    // End of the loop.
    endwhile;
    ?>

  </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>