<?php
/**
   * The header for Giem PhotoGraphy
   *
   * @package Giem PhotoGraphy
   * @since Shutter Theme 1.0.0
**/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
      <link rel="shortcut icon" href="/kim-giem.ico" type="image/x-icon" />
      <?php if (is_singular() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
      } ?>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <?php wp_head(); ?>
   </head>
   <body data-spy="scroll" data-target=".navbar" data-offset="85" <?php body_class(); ?>>
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
      <nav id="" class="navbar navbar-expand-lg navbar-light fixed-top fade-in">
         <div class="social-media d-lg-none">
            <a href="https://www.facebook.com/pages/category/Photographer/Kim-Zuidema-Giems-Photography-392580977567305/" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
			<a href="https://www.instagram.com/kim_giem_photography/" target="_blank"><i class="fab fa-instagram fa-3x"></i></a>
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
                 'menu_class' => 'navbar-nav nav',
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
                 'menu_class' => 'navbar-nav nav',
                 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                 'walker' => new WP_Bootstrap_Navwalker()
               )); ?>
            </div>
         <?php } ?>
      </nav>
