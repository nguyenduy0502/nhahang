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
	wp_enqueue_style('type-menu');
}

?>