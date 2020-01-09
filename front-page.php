<?php
/**
 * The font-page for Giem Photography Theme
 *
 * @package Giem Photography
 * @since Giem Photography Theme 1.0.0
 */
?>

<?php get_header(); ?>

    <!-- Header -->
    <div id="home" class="header fadeIn" style="background-image: linear-gradient(rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.55)), url('<?php header_image(); ?>')">
      <div class="display-3">
        <h1> <?php bloginfo( 'name' ); ?> </h1>
        <p class="lead"> <?php bloginfo( 'description' ); ?> </p>
      </div>
    </div>

    <!-- The Loop -->
    <!-- <div id="portfolio" class="container-fluid tag"> -->
      <?php if( have_posts() )  : ?> 

          <?php while ( have_posts() ) : the_post(); ?>

              <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>'); ?>
              <?php the_content(); ?>

          <?php endwhile; ?>

      <?php endif; ?>
    <!-- </div> -->

<?php get_footer(); ?>