<?php
/**
 * File Name: functions.php
 * Date: 16-07-2016
 * Time: 1:28
 * Description: Admin functions
 */

function add_type_menu_style() {
	wp_register_style('type-menu',CUSTOM_MENU.'/css/type-menu.css');
	wp_register_style('info-food',CUSTOM_FOOD.'/css/info-food.css');
	wp_register_script('livesreach',BACKEND_URL.'/js/livesearch.js');
	wp_enqueue_script('livesreach');
	wp_enqueue_style('info-food');
	wp_enqueue_style('type-menu');
}
require_once dirname( __FILE__ ) . '/core/init.php';
require_once dirname(__FILE__).'/metabox/meta-box.php';
/* ====================================================
// Add Thumbnails in Manage Posts/Pages List
 ====================================================*/


function AddThumbColumn($cols) {

	$cols['thumbnail'] = __('Thumbnail');

	return $cols;
}

function AddThumbValue($column_name, $post_id) {

	$width = (int)50;
	$height = (int)50;

	if ( 'thumbnail' == $column_name ) {
		// thumbnail of WP 2.9

		$thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
		// image from gallery

		$attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );

		if ($thumbnail_id)

			$thumb = wp_get_attachment_image($thumbnail_id, array($width, $height),true);

		elseif ($attachments) {

			foreach ( $attachments as $attachment_id => $attachment ) {
				$thumb = wp_get_attachment_image( $attachment_id, array($width, $height), true );
			}
		}

		if ( isset($thumb) && $thumb ) {

			echo $thumb;

		} else {

			echo __('None');
		}
	}
}

// for posts

add_filter('manage_posts_columns','AddThumbColumn');

add_action('manage_posts_custom_column','AddThumbValue',10, 2);

// for pages

add_filter('manage_pages_columns','AddThumbColumn');

add_action('manage_pages_custom_column','AddThumbValue',10,2);
?>