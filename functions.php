<?php

// Enqueuing Styles
function ellelltheme_styles() {
  // Load stylesheets:
  wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
  wp_enqueue_style( 'defaults', get_template_directory_uri()."/defaults.css" );
  wp_enqueue_style( 'main', get_stylesheet_uri() );
  // wp_enqueue_style("style-full", get_template_directory_uri()."/style-full.css"); //
}
add_action( 'wp_enqueue_scripts', 'ellelltheme_styles' );

// Registering menus
function ellelltheme_menus() {
  register_nav_menu( 'main-menu',__( 'Main Menu' ) );
}
add_action( 'init', 'ellelltheme_menus' );

// Registering widget areas
function ellelltheme_custom_sidebars() {
	$args = array(
		'id'            => 'sidebar-right',
		'name'          => __( 'Right Sidebar' ),
		'description'   => __( 'Appears on the right-hand side of pages & posts' ),
	);
	register_sidebar( $args );
  $args = array(
		'id'            => 'footer',
		'name'          => __( 'Footer' ),
		'description'   => __( 'Footer widget area' ),
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'ellelltheme_custom_sidebars' );

// Custom Excerpt
// function ellelltheme_excerpt($more) {
//   return ' &hellip; <a href="'.get_permalink().'">Continue Reading &rarr;</a>';
// }
// add_filter('excerpt_more', 'ellelltheme_excerpt');

?>
