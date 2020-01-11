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
        <h1> <?php bloginfo('name'); ?> </h1>
        <p class="lead"> <?php bloginfo('description'); ?> </p>
      </div>
    </div>
    <div id="about" class="container about">
      <div class="row justify-content-center">
        <div class="col-lg-6 selfie"></div>
        <div class="col-lg-6 text">
          <h2>About Me</h2>
          <hr align="left" />
          <p>
          <?php echo get_post_meta($post->ID, 'about-box', true); ?>
          </p>
          <div class="book-me">
            <a href="#contact">
              Book a Session &nbsp;<i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <?php while (have_posts()):
      the_post(); ?>          
          <?php the_content(); ?>
    <?php
    endwhile; ?>
    </div>

<?php get_footer(); ?>
