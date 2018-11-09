<?php get_header(); ?>

<?php get_template_part ( 'inc/indexCarousel' ) ?>

	<!-- Blog container -->
    <div class="container bg-white blog-container">

        <h1 class="bold" style="line-height: 1">Latest tutorials<br><small class="small text-secondary">My recent tutorials and articles</small></h1>

        <?php
        // Argument that defines how many posts is outputted.
        $args = array('posts_per_page' => 5 );
        // Variable to call WP_Query.
        $query = new WP_Query ( $args );

        if ( $query->have_posts () ) : while( $query->have_posts() ) : $query->the_post();

        	get_template_part ( 'content', get_post_format() );

        endwhile; endif;
        // Function to reset post data.
        wp_reset_postdata();
        ?>

        <br>

        <!-- Go to Articles -->
        <div class="loadp text-center">
            <a href="/tutorials"><button type="button" class="btn btn-outline-secondary">ALL TUTORIALS <span class="fa fa-long-arrow-right"></span></button></a>
        </div>
    </div>

    <br><br>

<?php get_footer(); ?>