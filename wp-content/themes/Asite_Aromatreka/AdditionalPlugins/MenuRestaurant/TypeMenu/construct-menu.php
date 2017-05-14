<?php
/**
 * File Name: construct-menu.php
 * Date: 23-06-2016
 * Time: 23:03
 * Description:  Custom page menu
 */
add_action('init','custom_page_menu',0);
// Register Custom Post Type
function custom_page_menu() {

	$labels = array(
		'name'                  => _x( 'Ланч', 'Post Type General Name', 'asite' ),
		'singular_name'         => _x( 'Ланч', 'Post Type Singular Name', 'asite' ),
		'menu_name'             => __( 'Ланч', 'asite' ),
		'name_admin_bar'        => __( 'Ланч', 'asite' ),
		'archives'              => __( 'Item Archives', 'asite' ),
		'parent_item_colon'     => __( 'Parent Item:', 'asite' ),
		'all_items'             => __( 'Все Ланч', 'asite' ),
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
		'taxonomies'            => array(''),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => THEME_URL.'/AdditionalPlugins/MenuRetaurant/icon/menu-icon.png',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'menu', $args );
}
?>