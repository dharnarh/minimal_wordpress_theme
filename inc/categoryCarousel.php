  <!-- Carousel section -->
  <div class="container-fluid rmpd">
    <div class="top-banner" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/assets/img/black.jpg); background-position: center; background-size: cover; background-repeat: no-repeat; background-origin: initial">
      <div class="banner flexbox text-center">
        <div class="mx-auto align-self-center">
          <h2 class="text-white bold uf-fl"><?php single_cat_title('', true); ?></h2>
          <?php if (category_description()) : ?>
          <div class="text-white"><?php echo category_description(); ?></div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <br><br> 