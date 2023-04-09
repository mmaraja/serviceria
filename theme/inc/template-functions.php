<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package serviceria
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function tw_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'tw_pingback_header' );




/*
* Custom CPT Serviceria projects
*/
  
function custom_post_type() {
  
	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Projects', 'Projects', 'serviceria' ),
		'singular_name'       => _x( 'Project', 'Project', 'serviceria' ),
		'menu_name'           => __( 'Projects', 'serviceria' ),
	);
		  
	// Set other options for Custom Post Type
		  
	$args = array(
		'label'               => __( 'projects', 'serviceria' ),
		'description'         => __( 'Serviceria projects', 'serviceria' ),
		'labels'              => $labels,
		// Features CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'taxonomies'          => array( 'category' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
	
	);
		
	// Registering Custom Post Type
	register_post_type( 'projects', $args );
	  
}
	  
add_action( 'init', 'custom_post_type', 0 );

function custom_post_type_home() {
  
	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Home Slides', 'Home Slides', 'serviceria' ),
		'singular_name'       => _x( 'Slide', 'Slide', 'serviceria' ),
		'menu_name'           => __( 'Home Slides', 'serviceria' ),
	);
		  
	// Set other options for Custom Post Type
		  
	$args = array(
		'label'               => __( 'slides', 'serviceria' ),
		'description'         => __( 'Serviceria home slides', 'serviceria' ),
		'labels'              => $labels,
		// Features CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'taxonomies'          => array( 'category' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
	
	);
		
	// Registering Custom Post Type
	register_post_type( 'slides', $args );
	  
}
	  
add_action( 'init', 'custom_post_type_home', 0 );
remove_filter ('acf_the_content', 'wpautop');