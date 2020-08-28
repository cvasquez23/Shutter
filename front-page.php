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
    <div id="home" class="container-fluid p-0">
      <div class="header fadeIn" style="background-image: linear-gradient(rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.55)), url('<?php header_image(); ?>')">
        <div class="display-3">
          <h1> <?php bloginfo('name'); ?> </h1>
          <p class="lead"> <?php bloginfo('description'); ?> </p>
        </div>
      </div>
    </div>
    <div id="about" class="container about">
      <div class="row justify-content-center">
        <div class="col-lg-6 selfie mx-auto"></div>
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


    <div id="portfolio" class="container-fluid tag">
      <div id="portfolio" class="portfolio">
        <?php echo do_shortcode('[modula id="1197"]'); ?>
      </div>
    </div>

    <div id="contact" class="container-fluid tag">
      <div class="row">
        <div class="col-lg-6 form-section">
        <h2>Let's Talk</h2>
        <hr align="left" />
        <p>Kim Giem<br />170 George K Drive<br />Sand Lake, MI 49343<br />Tel: (616) 490-0243<br />kim@giemphotography.com</p>
        <hr align="left" />
          <?php echo do_shortcode(
            '[contact-form-7 id="1244" title="Untitled"]'
          ); ?>
        </div>
        <div class="col-lg-6 contact-photo"></div>
      </div>
    </div>


<?php get_footer(); ?>
