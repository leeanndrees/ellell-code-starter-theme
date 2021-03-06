<?php

/********** Enqueuing Styles **************************************************/

function ellelltheme_styles() {
  // Load stylesheets:
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
  wp_enqueue_style( 'defaults', get_template_directory_uri()."/defaults.css" );
  wp_enqueue_style( 'main', get_stylesheet_uri() );
  // wp_enqueue_style("style-full", get_template_directory_uri()."/style-full.css"); //
}
add_action( 'wp_enqueue_scripts', 'ellelltheme_styles' );

/********** Featured Images ****************************************************/

// Add theme support for Featured Images
add_theme_support('post-thumbnails', array(
'post',
'page',
'custom-post-type-name',
));


/********** Registering menus **************************************************/

function ellelltheme_menus() {
  register_nav_menu( 'main-menu',__( 'Main Menu' ) );
}
add_action( 'init', 'ellelltheme_menus' );

/********** Custom Excerpt **************************************************/

// function ellelltheme_excerpt($more) {
//   return ' &hellip; <a href="'.get_permalink().'">Continue Reading &rarr;</a>';
// }
// add_filter('excerpt_more', 'ellelltheme_excerpt');


/********** Registering widget areas **************************************************/

function ellelltheme_custom_sidebars() {

  $args = array(
		'id'            => 'sidebar',
		'name'          => __( 'Sidebar' ),
		'description'   => __( 'Page sidebar' ),
	);
	register_sidebar( $args );

  // $args = array(
	// 	'id'            => 'footer1',
	// 	'name'          => __( 'Footer 1' ),
	// 	'description'   => __( 'Footer widget area 1 – appears in left column' ),
	// );
	// register_sidebar( $args );
  //
  // $args = array(
	// 	'id'            => 'footer2',
	// 	'name'          => __( 'Footer 2' ),
	// 	'description'   => __( 'Footer widget area 2 – appears in middle column' ),
	// );
	// register_sidebar( $args );
  //
  // $args = array(
	// 	'id'            => 'footer3',
	// 	'name'          => __( 'Footer 3' ),
	// 	'description'   => __( 'Footer widget area 3 – appears in right column' ),
	// );
	// register_sidebar( $args );
}
add_action( 'widgets_init', 'ellelltheme_custom_sidebars' );

?>
