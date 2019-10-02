<?php

// Wordpress HTML5 support
add_theme_support ( 'html5' );

// WordPress title tag support
add_theme_support ( 'title-tag' );

// Wordpress HTML5 support
add_theme_support('html5');

// Add scripts and styles to theme
function wp_styles_n_scripts () {
	wp_enqueue_style( 'bootstrapCSS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
	wp_enqueue_style( 'fontAwesomeCSS', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'mainCSS', get_template_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'styleCSS', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'Jquery', 'https://code.jquery.com/jquery-3.3.1.min.js' );
	wp_enqueue_script( 'PopperJS', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' );
	wp_enqueue_script( 'bootstrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' );
	wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/assets/js/main.js' );
}
add_action ( 'wp_enqueue_scripts', 'wp_styles_n_scripts' );

// Add google fonts to theme
function wp_google_fonts () {
	wp_register_style('Oswald', 'https://fonts.googleapis.com/css?family=Oswald:400,700&display=swap|Roboto');
	wp_enqueue_style( 'Oswald');
}
add_action ( 'wp_print_styles', 'wp_google_fonts' );

// Function to register menu to theme
function reg_my_menu () {
	register_nav_menus (
		array( 'header-menu' => __( 'Header Menu' ), )
	);
}
add_action ( 'init', 'reg_my_menu' );

// Add classes to wp_menu ul li
function li_class ( $class, $items, $args ) {
	$class[] = 'nav-item';
	return $class;
}
add_filter ( 'nav_menu_css_class', 'li_class', 1,3 );

// Add classes to wp_menu li a
function li_a_class ( $class ) {
	$class['class'] = 'nav-link text-white a-hover';
	return $class;
}
add_filter ( 'nav_menu_link_attributes', 'li_a_class' );

// Ajax function call to load more post()
function load_posts_by_ajax_callback() {

	//check_ajax_referer('load_more_posts', 'security');

	$paged = $_POST['page'];
	$args = array( 'posts_per_page' => 5, 'paged' => $paged );
	$query = new WP_Query( $args );

	if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

    get_template_part ( 'content', get_post_format() );

  endwhile; endif;
  // Function to reset post data.
	wp_reset_postdata();
	wp_die();
				
}

add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');


// Ajax function call to search for articles on ajax_fetch()
function ajax_fetch() {

	$query = new WP_Query (
		array (
			'posts_per_page' => -1,
			's' => esc_attr( $_POST['keyword'] ),
			'post_type' => 'post', 'data'
		)
	);

	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<h4 class="bold"><a class="text-body" href="<?php echo esc_url( the_permalink() ); ?>"><?php the_title(); ?></a>
		<br><small class="small text-secondary"><?php echo get_the_date(); ?></small></h4>
	<?php endwhile; endif;
	// Function to reset post data.
	wp_reset_postdata();
	die();

}

add_action('wp_ajax_ajax_fetch', 'ajax_fetch');
add_action('wp_ajax_nopriv_ajax_fetch', 'ajax_fetch');

// Function to activate pinned box checkbox icon
function pinned_post_box() {
	add_meta_box(
		'sm_meta', __( 'Pin Post', 'sm-text-domain' ), 'sm_pinned_post_callback', 'post'
	);
}

// Function to show pinned checkbox icon
function sm_pinned_post_callback( $post ) {
	$pinned = get_post_meta( $post->ID ); ?>
	<p>
    <div class="sm-row-content">
      <label for="meta-pinned">
        <input type="checkbox" name="meta-pinned" value="yes" id="meta-pinned"
        <?php if ( isset( $pinned['meta-pinned'] ) ) checked ( $pinned['meta-pinned'][0], 'yes' ); ?>>
        <?php _e( 'Pin this post' ); ?>
      </label>
    </div>
  </p>
<?php	
}

add_action ( 'add_meta_boxes', 'pinned_post_box' );

// Function to save meta pinned post
function sm_meta_save ( $post_id ) {
  // Check save status
  $is_autosave = wp_is_post_autosave ( $post_id );
  $is_revision = wp_is_post_revision ( $post_id );
  $is_valid_nonce = ( isset( $_POST['sm_nonce'] )
    && wp_verify_nonce ( $_POST['sm_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

  // Exit script on post type status
  if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
    return;
  }

  // Check for input and saves
  if ( isset( $_POST['meta-pinned'] ) ) {
    update_post_meta ( $post_id, 'meta-pinned', 'yes' );
  } else {
    update_post_meta ( $post_id, 'meta-pinned', '' );
  }
}

add_action ( 'save_post', 'sm_meta_save' );