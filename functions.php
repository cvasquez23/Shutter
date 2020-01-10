<?php
// Load Styles & Scripts
function enqueue_shutter_styles()
{
  wp_enqueue_style(
    'bootstrap',
    '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
  );
  wp_enqueue_style(
    'fontawesome',
    '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'
  );
  wp_enqueue_style(
    'googlefont',
    '//fonts.googleapis.com/css?family=Montserrat|Old+Standard+TT|Spectral:400,600&display=swap'
  );
  wp_enqueue_style(
    'hamburger',
    get_template_directory_uri() . '/css/hamburgers.min.css'
  );
  wp_enqueue_style('shutter-style', get_stylesheet_uri());

  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js');
  wp_enqueue_script(
    'popper',
    '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'
  );
  wp_enqueue_script(
    'bootstrap-js',
    '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
    array('jquery')
  );
  wp_enqueue_script(
    'script',
    get_template_directory_uri() . '/js/script.js',
    array('jquery')
  );
}
add_action('wp_enqueue_scripts', 'enqueue_shutter_styles');

// Custom Header & Featured Images
function shutter_custom_header_setup()
{
  $args = array(
    'default-image' => get_template_directory_uri() . 'img/default-img.jpg',
    'header-text' => true,
    'default-text-color' => '000',
    'width' => 1000,
    'height' => 250,
    'flex-width' => true,
    'flex-height' => true
  );
  add_theme_support('custom-header', $args);
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'shutter_custom_header_setup');

function shutter_setup()
{
  //Register a primary nav menu
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'shutter'),
    'secondary' => __('Secondary Menu', 'shutter')
  ));
  // Register Custom Navigation Walker
  require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
  //Add theme support for document title tag
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'shutter_setup');
//Add Anchor Class
add_filter(
  'nav_menu_link_attributes',
  function ($atts, $item, $args) {
    if ('nav-item' === $item->classes[0]) {
      $atts['class'] = 'nav-link text-uppercase';
    }
    return $atts;
  },
  10,
  3
);

// Add About Metabox
function add_about_box($meta_boxes)
{
  $meta_boxes[] = array(
    'id' => 'about',
    'title' => esc_html__('About', 'about-box'),
    'post_types' => array('post', 'page'),
    'context' => 'advanced',
    'priority' => 'high',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => 'about-box',
        'type' => 'textarea',
        'name' => esc_html__('About', 'about-box'),
        'placeholder' => esc_html__('About text here', 'about-box'),
        'rows' => 10
      )
    )
  );

  return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'add_about_box');

?>
