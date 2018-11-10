<?php get_header(); ?>

<?php get_template_part ( 'inc/tutorialCarousel' ) ?>

	<!-- Blog container -->
    <div class="container ajaxPost bg-white blog-container">

        <h1 class="bold" style="line-height: 1">Latest tutorials<br><small class="small text-secondary">My recent tutorials and articles</small></h1>

        <?php
        // Argument that defines how many posts is outputted.
        $args = array('posts_per_page' => 5, 'paged' => 1 );
        // Variable to call WP_Query.
        $query = new WP_Query ( $args );

        if ( $query->have_posts () ) : while( $query->have_posts() ) : $query->the_post();

        	get_template_part ( 'content', get_post_format() );

        endwhile; endif;
        // Function to reset post data.
        wp_reset_postdata();
        ?>

    </div>

    <br>

    <!-- Load More Articles -->
    <div class="loadp text-center">
        <button type="button" class="btn btn-secondary loadMore">LOAD MORE <span id="sloading" class="fa fa-long-arrow-down"></span></button>
    </div>

    <br><br>

<?php get_footer(); ?>