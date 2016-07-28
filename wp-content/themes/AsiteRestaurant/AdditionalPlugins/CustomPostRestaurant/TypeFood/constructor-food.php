<?php
/**
 * File Name: contruct-dishes.php
 * Date: 22-06-2016
 * Time: 0:11
 * Description: Custom post type dish
 */
add_action('init','custom_post_food',0);
// Register Custom Post Type
function custom_post_food() {

	$labels = array(
		'name'                  => _x( 'Блюда', 'Post Type General Name', 'asite' ),
		'singular_name'         => _x( 'Блюда', 'Post Type Singular Name', 'asite' ),
		'menu_name'             => __( 'Блюда', 'asite' ),
		'name_admin_bar'        => __( 'Блюда', 'asite' ),
		'archives'              => __( 'Item Archives', 'asite' ),
		'parent_item_colon'     => __( 'Parent Item:', 'asite' ),
		'all_items'             => __( 'Все Блюда', 'asite' ),
		'add_new_item'          => __( 'Добовить', 'asite' ),
		'add_new'               => __( 'Добовить', 'asite' ),
		'new_item'              => __( 'New Item', 'asite' ),
		'edit_item'             => __( 'Sửa', 'asite' ),
		'update_item'           => __( 'Cập nhật', 'asite' ),
		'view_item'             => __( 'Xem', 'asite' ),
		'search_items'          => __( 'Tìm kiếm', 'asite' ),
		'not_found'             => __( 'Not found', 'asite' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'asite' ),
		'featured_image'        => __( 'Hình ảnh', 'asite' ),
		'set_featured_image'    => __( 'Cài đặt hình ảnh', 'asite' ),
		'remove_featured_image' => __( 'Xóa hình ảnh', 'asite' ),
		'use_featured_image'    => __( 'Chọn hình ảnh', 'asite' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'asite' ),
		'items_list'            => __( 'Items list', 'asite' ),
		'items_list_navigation' => __( 'Items list navigation', 'asite' ),
		'filter_items_list'     => __( 'Filter items list', 'asite' ),
	);
	$args = array(
		'label'                 => __( 'Post Type', 'asite' ),
		'description'           => __( 'Post Type Description', 'asite' ),
		'labels'                => $labels,
		'supports'              => array( 'thumbnail','title','editor','title','revisions'),
		'taxonomies'            => array('type_food'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => THEME_URL.'/AdditionalPlugins/CustomPostRestaurant/icon/icon-food.png',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'food', $args );
}
?>