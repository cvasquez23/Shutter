<?php
/**
   * The header for Giem PhotoGraphy Theme
   *
   * @package Giem PhotoGraphy
   * @since Giem PhotoGraphy Theme 1.0
**/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
      <?php if (is_singular() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
      } ?>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
      <!-- WP Admin Bar Overlapping Fix -->
      <?php if (is_admin_bar_showing()) { ?>
         <style>
            .navbar {
               top: 32px;
            }
            @media screen and (max-width: 782px) {
               .navbar {
                  top: 46px;
               }
            }
         </style>
      <?php } ?>

      <!-- Navbar -->
      <!-- WORDPRESS -->
      <nav id="home" class="navbar navbar-expand-lg navbar-light bg-light fadeIn">
         <div class="social-media d-lg-none">
            <a href="https://www.facebook.com/pages/category/Photographer/Kim-Zuidema-Giems-Photography-392580977567305/" target="_blank"><i class="fab fa-facebook-f fa-3x"></i></a>
            <a href="" target="_blank"><i class="fab fa-twitter fa-3x"></i></a>
            <a href="" target="_blank"><i class="fab fa-pinterest-p fa-3x"></i></a>
            <a href="" target="_blank"><i class="fab fa-instagram fa-3x"></i></a>
         </div>
         <button class="hamburger hamburger--slider d-lg-none" type="button" data-toggle="slide-collapse" data-target="#slidingNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="hamburger-box">
            <span class="hamburger-inner"></span>
         </span>
         </button>


         <?php if (is_page($page = '1182')) { ?>
            <div class="collapse navbar-collapse justify-content-center" id="slidingNav">
            <?php wp_nav_menu(array(
              'theme_location' => 'primary',
              'depth' => 2,
              'container' => 'ul',
              // 'container_class'   => 'navbar-nav nav ml-auto',
              // 'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class' => 'navbar-nav nav',
              // 'before'            => '<span class="nav-link">',
              // 'after'             => '</span>',
              // 'items_wrap'        => '<li class="nav-item">%3$s</li>',
              'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
              'walker' => new WP_Bootstrap_Navwalker()
            )); ?>
            </div>
         <?php } else { ?>
            <div class="collapse navbar-collapse justify-content-center" id="slidingNav">
            <?php wp_nav_menu(array(
              'theme_location' => 'secondary',
              'depth' => 2,
              'container' => 'ul',
              // 'container_class'   => 'navbar-nav nav ml-auto',
              // 'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class' => 'navbar-nav nav',
              // 'before'            => '<span class="nav-link">',
              // 'after'             => '</span>',
              // 'items_wrap'        => '<li class="nav-item">%3$s</li>',
              'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
              'walker' => new WP_Bootstrap_Navwalker()
            )); ?>
            </div>
         <?php } ?>
      </nav>
