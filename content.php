<div class="media md-line">
  <div class="media-body">
    <h5 class="mt-0 bold"><a href="<?php the_permalink(); ?>" class="text-body a-hover"><?php the_title(); ?></a></h5>
    <p class="date">Posted on <?php echo get_the_date(); ?></p>
    <div class="text-secondary roboto"><?php the_excerpt(); ?></div>
    <a href="<?php the_permalink(); ?>"><button class="btn btn-outline-danger btn-cs">Read post</button></a>
  </div>
</div>
