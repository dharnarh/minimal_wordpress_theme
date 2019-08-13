<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">

    <?php wp_head(); ?>
  </head>
  <body>

    <!-- 404 Carousel section -->
    <div class="container-fluid rmpd">
      <div class="c404 flexbox">
        <div class="text-white mx-auto align-self-center">
          <h1 class="bold text-center">404</h1>
          <p class="text-center roboto">Finally, someone gets to see this page. Thumbs up</p>
          <p class="text-center roboto">Now head back to <a href="<?php echo get_bloginfo( 'wpurl' );?>">HOME</a></p>
        </div>
      </div>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>