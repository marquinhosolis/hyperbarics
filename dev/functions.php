<?php
function register_my_menus() {
	register_nav_menus(
		array(
		'header-menu' => __( 'Header Menu' ),
		'extra-menu' => __( 'Extra Menu' )
	)
	);
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


add_action('init', 'type_post_videos');

function type_post_videos() { 
	$labels = array(
		'name' => _x('Videos', 'post type general name'),
		'singular_name' => _x('Video', 'post type singular name'),
		'add_new' => _x('Add Novo', 'New item'),
		'add_new_item' => __('New Item'),
		'edit_item' => __('Edit Item'),
		'new_item' => __('New Item'),
		'view_item' => __('See Item'),
		'search_items' => __('Search Items'),
		'not_found' =>  __('No records found'),
		'not_found_in_trash' => __('No video on trash'),
		'parent_item_colon' => '',
		'menu_name' => 'Videos'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,           
		'query_var' => true,
		'menu_icon' => 'dashicons-format-video',
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'public' => true,
		'hierarchical' => false,
		'menu_position' => 5, 
		'taxonomies' => array( 'category' ),
		'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks', 'thumbnail'),
		'cptp_permalink_structure' => ''
	);

	register_post_type( 'videos' , $args );
	flush_rewrite_rules();
}
?>