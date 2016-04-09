<?php
// Register Custom Post Type

// Register Custom Post Type
// Register Custom Post Type
function brochure_type() {

	$labels = array(
		'name'                  => _x( 'brochures', 'Post Type General Name', 'musique' ),
		'singular_name'         => _x( 'brochure', 'Post Type Singular Name', 'musique' ),
		'menu_name'             => __( 'brochures', 'musique' ),
		'name_admin_bar'        => __( 'brochure', 'musique' ),
		'archives'              => __( 'Item brochures', 'musique' ),
		'parent_item_colon'     => __( 'Parent brochure:', 'musique' ),
		'all_items'             => __( 'Toutes les brochures', 'musique' ),
		'add_new_item'          => __( 'Ajouter brochures', 'musique' ),
		'add_new'               => __( 'Ajouter brochures', 'musique' ),
		'new_item'              => __( 'New Item', 'musique' ),
		'edit_item'             => __( 'Edit brochure', 'musique' ),
		'update_item'           => __( 'Update brochure', 'musique' ),
		'view_item'             => __( 'View brochure', 'musique' ),
		'search_items'          => __( 'Search brochure', 'musique' ),
		'not_found'             => __( 'Not brochure found', 'musique' ),
		'not_found_in_trash'    => __( 'Not brochure found in Trash', 'musique' ),
		'featured_image'        => __( 'Featured Image', 'musique' ),
		'set_featured_image'    => __( 'Set featured image', 'musique' ),
		'remove_featured_image' => __( 'Remove featured image', 'musique' ),
		'use_featured_image'    => __( 'Use as featured image', 'musique' ),
		'insert_into_item'      => __( 'Insert into item', 'musique' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'musique' ),
		'items_list'            => __( 'Items list', 'musique' ),
		'items_list_navigation' => __( 'Items list navigation', 'musique' ),
		'filter_items_list'     => __( 'Filter items list', 'musique' ),
	);
	$args = array(
		'label'                 => __( 'brochure', 'musique' ),
		'description'           => __( 'brochure du Label', 'musique' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'brochure', $args );

}
add_action( 'init', 'brochure_type', 0 );
