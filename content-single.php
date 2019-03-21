    <!-- Carousel section -->
    <div class="container-fluid rmpd">
        <div class="top-banner" style="background-image: url(<?php echo get_bloginfo( 'template_directory' );?>/assets/img/blog.png); background-position: center; background-size: cover; background-repeat: no-repeat; background-origin: initial">
            <div class="postbanner flexbox text-center">
                <div class="mx-auto align-self-center">
                <h2 class="text-white align-middle bold wd-p-t"><?php the_title(); ?></h2>
                <p class="text-white date roboto">Posted on <?php the_date(); ?> in <span class="bold text-success text-uppercase"><?php the_category(' '); ?></span></p>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <!-- Blog container -->
    <div class="container bg-white blog-container">

        <div class="content">
            
            <?php
            the_content();

		        if ( comments_open() || get_comments_number() ) :
	    	        comments_template();
	  	        endif;
		    ?>

        </div>

        <br>

        <!-- Button to load more post using ajax -->
        <div class="loadp text-center">
            <span class="bold">SHARE IF YOU LIKE THIS POST</span><br>
            <button type="button" class="btn btn-fb"><span class="fa fa-facebook"></span></button>
            <button type="button" class="btn btn-tw"><span class="fa fa-twitter"></span></button>
            <button type="button" class="btn btn-lk"><span class="fa fa-linkedin"></span></button>
        </div>

        <!--Post pager-->
    </div>

    <br><br>