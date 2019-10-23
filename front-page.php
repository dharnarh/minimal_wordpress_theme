<?php get_header(); ?>

<?php get_template_part ( 'inc/indexCarousel' ) ?>

  <!-- About me container -->
  <div class="container bg-white blog-container">

    <h3 class="bold text-black uf-fl" style="line-height: 1">
      <span class="fa fa-user uf-fl"></span> About Me
    </h3>
    <div class="content text-justify">
      <p>
        Personal? Full name: Umar Farouq Mohammed, citizen of Ghana and Nigeria, I am still trying to 
        figure out my full potential and might just end up a SUPERMAN so here's a many few things about me, I am more interested in 
        knowledge but hates Mathematics plus School and gets curious enough to learn how things work, loves psychology, a 
        bit introvert, friendly, always ready to help others in anyway. Getting a BSc in Computer
        Science by 2021 at AIT University in Ghana.
      </p>
      <p>
        Profession? I am a full stack software developer working web development 
        to cross-platform mobile development using technologies such as HTML, CSS, 
        JavaScript, PHP, Node.js, little Java, Python, C++ and frameworks such as 
        Bootstrap, Laravel, WordPress for CMS, Vue, React, React Native and Git for 
        version control also an intermediate UI designer using software such as 
        Adobe XD, Adobe Illustrator, Adobe Photoshop, Figma.
      </p>
    </div>

  </div>

  <br><br>

	<!-- Blog container -->
  <div class="container bg-white blog-container">

  <h3 class="bold text-black uf-fl" style="line-height: 1">
    <span class="fa fa-thumb-tack uf-fl"></span> Pinned Articles
  </h3>

    <?php
      // Argument that defines how many posts is outputted.
      $args = array('posts_per_page' => 5, 'meta_key' => 'meta-pinned', 'meta_value' => 'yes' );
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
      <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ?>"><button type="button" class="btn btn-outline-secondary">All Articles <span class="fa fa-long-arrow-right"></span></button></a>
    </div>
  </div>

  <br><br>

<?php get_footer(); ?>