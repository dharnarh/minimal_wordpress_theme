    <!-- Carousel section -->
    <div class="container-fluid rmpd">
        <div class="top-banner" style="background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/assets/img/blog.png); background-position: center; background-size: cover; background-repeat: no-repeat; background-origin: initial">
            <div class="postbanner flexbox text-center">
                <h2 class="text-white mx-auto align-self-center bold"><?php the_title(); ?></h2>
            </div>
        </div>
    </div>

    <br><br>

    <!-- Blog container -->
    <div class="container bg-white blog-container">

        <div class="content">
            
            <?php the_content(); ?>

        </div>

        <br>

    </div>

    <br><br>