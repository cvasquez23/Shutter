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
  <div id="home" class="justify-content-center">
    <h2 class="text-center"><?php echo esc_html(get_the_title()); ?></h2>
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
          <h5 class="card-title">
            <?php echo esc_html(get_the_title(1316)); ?>
          </h5>
          <hr align="left" />
          <p class="card-text">
            Have an upcoming wedding? Relive your special day with the wedding package!
          </p>
          <a
            class="btn btn-primary"
            href="<?php echo esc_html(get_permalink(1316)); ?>"
          >
            Package Details
          </a>
        </div>
      </div>

      <div class="card col-md-4 p-0">
        <?php
        $Image = get_the_post_thumbnail_url(1407);
        echo "<img src='$Image' class='card-img-top' alt='Card Image Top' />";
        ?>
        <div class="card-body">
          <h5 class="card-title">
            <?php echo esc_html(get_the_title(1407)); ?></h5>
          <hr align="left" />
          <p class="card-text">
            Senior year is an exciting time! It’s both an ending and a beginning; it’s warm memories of the past and big dreams for the future!
          </p>
          <a
            class="btn btn-primary"
            href="<?php echo esc_html(get_permalink(1407)); ?>"
          >
            Package Details
          </a>
        </div>
      </div>

      <div class="card col-md-4 p-0">
        <?php
        $Image = get_the_post_thumbnail_url(1456);
        echo "<img src='$Image' class='card-img-top' alt='Card Image Top' />";
        ?>
        <div class="card-body">
          <h5 class="card-title">
            <?php echo esc_html(get_the_title(1456)); ?></h5>
          <hr align="left" />
          <p class="card-text">
            Capture the forever cherished moments of new life with the newborn package!
          </p>
          <a
            class="btn btn-primary"
            href="<?php echo esc_html(get_permalink(1456)); ?>"
          >
            Package Details
          </a>
        </div>
      </div>

    </div>
  </div>
</main>
<!-- .site-main --> 

<?php get_footer(); ?>
