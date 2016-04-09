<?php
// Register Custom Taxonomy
// Register Custom Taxonomy
function type_brochure_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Types brochure', 'Taxonomy General Name', 'musique' ),
		'singular_name'              => _x( 'Type brochure', 'Taxonomy Singular Name', 'musique' ),
		'menu_name'                  => __( 'Type brochure', 'musique' ),
		'all_items'                  => __( 'All Type brochure', 'musique' ),
		'parent_item'                => __( 'Parent Type brochure', 'musique' ),
		'parent_item_colon'          => __( 'Parent Type brochure:', 'musique' ),
		'new_item_name'              => __( 'New Type brochure Name', 'musique' ),
		'add_new_item'               => __( 'Add New Type brochure', 'musique' ),
		'edit_item'                  => __( 'Edit Type brochure', 'musique' ),
		'update_item'                => __( 'Update Type brochure', 'musique' ),
		'view_item'                  => __( 'View Item', 'musique' ),
		'separate_items_with_commas' => __( 'Separate Type brochure with commas', 'musique' ),
		'add_or_remove_items'        => __( 'Add or remove Type brochure', 'musique' ),
		'choose_from_most_used'      => __( 'Choose from the most used Type brochure', 'musique' ),
		'popular_items'              => __( 'Popular Type brochure', 'musique' ),
		'search_items'               => __( 'Search Type brochure', 'musique' ),
		'not_found'                  => __( 'Not Type brochure Found', 'musique' ),
		'no_terms'                   => __( 'No items', 'musique' ),
		'items_list'                 => __( 'Items list', 'musique' ),
		'items_list_navigation'      => __( 'Items list navigation', 'musique' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'type_brochure', array( 'brochures' ), $args );

}
add_action( 'init', 'type_brochure_taxonomy', 0 );
