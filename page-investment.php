<?php
/**
* Template Name: Investment Page
* Template Post Type: page
* The investment page template for Giem Photography
*
* @package Giem Photography
* @since Giem Photography Theme 1.0
**/
?>

<?php get_header(); ?>

<main id="main" class="site-main" role="main">
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
      <div class="justify-content-center">
        <h2 class="text-center"><?php echo get_the_title(); ?></h2>
        <hr />
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="card col-md-4 p-0">
            <img
              class="card-img-top"
              src="https://placekitten.com/g/480/480"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title"><?php echo esc_html(
                get_the_title(1316)
              ); ?>
              </h5>
              <hr align="left" />
              <p class="card-text">
                Have an upcoming wedding? Relive your special day with our
                wedding package!
              </p>
              <a
                class="btn btn-primary"
                href="<?php echo get_permalink(1316); ?>"
                >Package Details
              </a>
            </div>
          </div>
          <div class="card col-md-4 p-0">
            <img
              class="card-img-top"
              src="https://placekitten.com/g/480/480"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title">Senior Package</h5>
              <hr align="left" />
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Praesent sem sem, sodales a feugiat non.
              </p>
              <a
                class="btn btn-primary"
                href="https://www.giemphotography.com/investment/senior-package/"
                >Package Details
              </a>
            </div>
          </div>
          <div class="card col-md-4 p-0">

            <?php
            $babyImage = get_the_post_thumbnail_url(1456);
            echo "<img src='$babyImage' class='card-img-top' alt='Card Image Top' />";
            ?>
    
            <div class="card-body">
              <h5 class="card-title"><?php echo esc_html(
                get_the_title(1456)
              ); ?></h5>
              <hr align="left" />
              <p class="card-text">
                Capture the forever cherished moments of new life with our newborn package!
              </p>
              <a
                class="btn btn-primary"
                href="<?php echo get_permalink(1456); ?>"
                >Package Details</a
              >
            </div>
          </div>
        </div>
      </div>
    </>
    <!-- .site-main --> 

<?php get_footer(); ?>

