<?php get_header(); ?>

<?php get_template_part ( 'inc/indexCarousel' ) ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part ( 'content-single', get_post_format() );

    endwhile; endif; ?>

<?php get_footer(); ?>