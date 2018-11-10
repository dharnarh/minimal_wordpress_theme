<?php get_header(); ?>

<?php get_template_part ( 'inc/categoryCarousel' ) ?>

	<!-- Blog container -->
    <div class="container ajaxPost bg-white blog-container">

        <?php

        if ( have_posts () ) : while( have_posts() ) : the_post();

        	get_template_part ( 'content', get_post_format() );

        endwhile; endif;
        // Function to reset post data.
        wp_reset_postdata();
        ?>
    </div>

    <br>

    <!-- Load More Articles -->
    <!--div class="loadp text-center">
        <button type="button" class="btn btn-secondary loadMore">LOAD MORE <span id="sloading" class="fa fa-long-arrow-down"></span></button>
    </div-->

    <br><br>

<?php get_footer(); ?>