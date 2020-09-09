<?php
/**
* The 404 page for Shutter
*
* @package Shutter
* @since Shutter Theme 1.0
**/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
      <?php if (is_singular() && get_option( 'thread_comments' )) wp_enqueue_script( 'comment-reply' ); ?>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <?php wp_head(); ?>
      <link rel="stylesheet" href="https://giemphotography.com/wp-content/themes/shutter/404.css">
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
      <nav class="navbar navbar-expand-md navbar-dark fixed-top">
         <div class="container-fluid">
         <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ) ?></a>

         </div>
      </nav>


      <div class="all-wrap">  
         <div class="all">
            <div class="yarn"></div>
            <div class="cat-wrap">    
            <div class="cat">
               <div class="cat-upper">
                  <div class="cat-leg"></div>
                  <div class="cat-leg"></div>
                  <div class="cat-head">
                  <div class="cat-ears">
                     <div class="cat-ear"></div>
                     <div class="cat-ear"></div>
                  </div>
                  <div class="cat-face">
                     <div class="cat-eyes"></div>
                     <div class="cat-mouth"></div>
                     <div class="cat-whiskers"></div>
                  </div>
                  </div>
               </div>
               <div class="cat-lower-wrap">
                  <div class="cat-lower">
                  <div class="cat-leg">
                     <div class="cat-leg">
                        <div class="cat-leg">
                        <div class="cat-leg">
                           <div class="cat-leg">
                              <div class="cat-leg">
                              <div class="cat-leg">
                                 <div class="cat-leg">
                                    <div class="cat-leg">
                                    <div class="cat-leg">
                                       <div class="cat-leg">
                                          <div class="cat-leg">
                                          <div class="cat-leg">
                                             <div class="cat-leg">
                                                <div class="cat-leg">
                                                <div class="cat-leg">
                                                   <div class="cat-paw"></div>
                                                </div>
                                                </div>
                                             </div>
                                          </div>
                                          </div>
                                       </div>
                                    </div>
                                    </div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>
                        </div>
                     </div>
                  </div>
                  <div class="cat-leg">
                     <div class="cat-leg">
                        <div class="cat-leg">
                        <div class="cat-leg">
                           <div class="cat-leg">
                              <div class="cat-leg">
                              <div class="cat-leg">
                                 <div class="cat-leg">
                                    <div class="cat-leg">
                                    <div class="cat-leg">
                                       <div class="cat-leg">
                                          <div class="cat-leg">
                                          <div class="cat-leg">
                                             <div class="cat-leg">
                                                <div class="cat-leg">
                                                <div class="cat-leg">
                                                   <div class="cat-paw"></div>
                                                </div>
                                                </div>
                                             </div>
                                          </div>
                                          </div>
                                       </div>
                                    </div>
                                    </div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>
                        </div>
                     </div>
                  </div>
                  <div class="cat-tail">
                     <div class="cat-tail">
                        <div class="cat-tail">
                        <div class="cat-tail">
                           <div class="cat-tail">
                              <div class="cat-tail">
                              <div class="cat-tail">
                                 <div class="cat-tail">
                                    <div class="cat-tail">
                                    <div class="cat-tail">
                                       <div class="cat-tail">
                                          <div class="cat-tail">
                                          <div class="cat-tail">
                                             <div class="cat-tail">
                                                <div class="cat-tail">
                                                <div class="cat-tail -end"></div>
                                                </div>
                                             </div>
                                          </div>
                                          </div>
                                       </div>
                                    </div>
                                    </div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
            </div>
         </div>
      </div>
      <div class="text">
         <p>Hang in there, this is still a work in progress!</p>
      </div>
      <div class="credit">
         <p>Cat animation made by <a href="https://codepen.io/davidkpiano">David Khourshid</a></p>
      </div>


      <?php wp_footer(); ?>
   </body>
</html>