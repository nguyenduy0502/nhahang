<?php
/**
 * File Name: functions.php
 * Date: 16-07-2016
 * Time: 1:28
 * Description: Admin functions
 */
add_action('admin_enqueue_scripts','add_type_menu_style');
function add_type_menu_style() {
	wp_register_style('type-menu',CUSTOM_MENU.'/css/type-menu.css');
	wp_register_style('info-food',CUSTOM_FOOD.'/css/info-food.css');
	wp_register_script('livesreach',BACKEND_URL.'/js/livesearch.js');
	wp_enqueue_script('livesreach');
	wp_enqueue_style('info-food');
	wp_enqueue_style('type-menu');
}
require_once('metabox/meta-box.php');
?>