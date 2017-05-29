<?php
/**
 * File Name: login.php
 * Date: 16-07-2016
 * Time: 0:16
 * Description:
 */
function remove_footer_admin ()
{
	echo '<span id="footer-thankyou">Developed by <a href="http://www.asite.it" target="_blank">asite.it</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

add_filter('login_headerurl', 'my_url_login');
function my_url_login()
{

	return 'http://asite.it';
}

add_filter('login_headertitle', 'my_login_title');
function my_login_title()
{
	return 'Website developed by asite.it';
}

// CHANGE LOGO ADMIN
function login_css()
{
	wp_enqueue_style('login.css', THEME_URL.'/backend/login/css/login.css');

}
add_action('login_head', 'login_css');
?>