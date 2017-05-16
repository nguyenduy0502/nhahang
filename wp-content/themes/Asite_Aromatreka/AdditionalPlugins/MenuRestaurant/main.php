<?php
/**
 * File Name: main.php
 * Date: 21-07-2016
 * Time: 19:49
 * Description: Main plugin
 */

function wpc_add_admin_cpt_script( $hook ) {

    global $post;

    if ( $hook == 'post-new.php' || $hook == 'post.php' ) {
        if ( 'menu' === $post->post_type ) {
            wp_register_style('type-menu',CUSTOM_MENU.'/css/type-menu.css');
            wp_register_style('info-food',CUSTOM_FOOD.'/css/info-food.css');
            wp_register_script('livesreach',CUSTOM_MENU.'/js/livesearch.js');
            wp_enqueue_script('livesreach');
            wp_enqueue_style('info-food');
            wp_enqueue_style('type-menu');
        }
    }
}
add_action( 'admin_enqueue_scripts', 'wpc_add_admin_cpt_script', 10, 1 );

require_once('TypeMenu/meta-box-menu.php');
require_once('TypeMenu/construct-menu.php');
?>