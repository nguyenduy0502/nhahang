<?php
/**
 * File Name: constructor-taxonomy.php
 * Date: 22-06-2016
 * Time: 23:58
 * Description: Constructor taxonomy for custom post type food. Name taxonomy: cuisine
 */
add_action( 'init', 'custom_taxonomy_food', 0 );
// Register Custom Taxonomy
function custom_taxonomy_food() {

	$labels = array(
		'name'                       => _x( 'Категория', 'Taxonomy General Name', 'asite' ),
		'singular_name'              => _x( 'Категория', 'Taxonomy Singular Name', 'asite' ),
		'menu_name'                  => __( 'Категория', 'asite' ),
		'all_items'                  => __( 'All Items', 'asite' ),
		'parent_item'                => __( 'Parent Item', 'asite' ),
		'parent_item_colon'          => __( 'Parent Item:', 'asite' ),
		'new_item_name'              => __( 'New Item Name', 'asite' ),
		'add_new_item'               => __( 'Add New Item', 'asite' ),
		'edit_item'                  => __( 'Edit Item', 'asite' ),
		'update_item'                => __( 'Update Item', 'asite' ),
		'view_item'                  => __( 'View Item', 'asite' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'asite' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'asite' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'asite' ),
		'popular_items'              => __( 'Popular Items', 'asite' ),
		'search_items'               => __( 'Search Items', 'asite' ),
		'not_found'                  => __( 'Not Found', 'asite' ),
		'no_terms'                   => __( 'No items', 'asite' ),
		'items_list'                 => __( 'Items list', 'asite' ),
		'items_list_navigation'      => __( 'Items list navigation', 'asite' ),
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
	register_taxonomy( 'cuisine', array( 'food' ), $args );

}


?>