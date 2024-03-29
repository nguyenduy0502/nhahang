<?php
/**
 * File Name: functions.php
 * Date: 21-06-2016
 * Time: 22:33
 * Description: Main functions
 */
/*******************************************************************
 * ADD PATH
 *****************************************************************
 */
define('THEME_URL',get_template_directory_uri());
define('LANGUAGES_FOLDER',THEME_URL.'/languages');
define('PUBLIC_FOLDER',THEME_URL.'/public');
define('CUSTOM_MENU',THEME_URL.'/AdditionalPlugins/MenuRetaurant');
define('CUSTOM_FOOD',THEME_URL.'/AdditionalPlugins/CustomPostRestaurant');
define('TEMPLATE_FOLDER',THEME_URL.'/template/viethouse');
define('TEMPLATE_LIBS',TEMPLATE_FOLDER.'/libs');
define('BACKEND_URL',THEME_URL.'/backend');
/*******************************************************************
 * ADD PLUGIN CUSTOM POST RESTAURANT
 *****************************************************************
 */

require_once dirname(__FILE__).'/AdditionalPlugins/CustomPostRestaurant/main.php';// custom post food
require_once dirname(__FILE__).'/AdditionalPlugins/MenuRetaurant/main.php';// custom page menu

/*******************************************************************
 * ADD CUSTOM BACKEND
 *****************************************************************
 */
require_once dirname(__FILE__).'/backend/login/login.php';
require_once dirname(__FILE__).'/backend/functions.php';
/*******************************************************************
 * ADD WIDGET
 *****************************************************************
 */
require_once dirname(__FILE__).'/widget/searchform-food.php';
require_once dirname(__FILE__).'/widget/categories-food.php';
require_once dirname(__FILE__).'/widget/new-food.php';
//require_once('includes/relatedpost/cat_food.php');
/***********************************************************
 * ADD HELPERS
 * ********************************************************
 */
require_once dirname(__FILE__).'/helpers/instagram/init.php';
/*******************************************************************
 * REGISTER TEXT DOMAIN, THEME SUPPORTS
 ****************************************************************
 */
load_textdomain('asite',LANGUAGES_FOLDER);
add_post_type_support( 'food', 'comments' );
add_theme_support('post-thumbnails');
add_theme_support( 'post-formats', array(
	'video','gallery'
) );

/*******************************************************************
 * ADDITION FUNCTION FOR CUSTOM POST TYPE=food
 ****************************************************************
 */
function get_quantity_food($post_id) {
    $quantity_food=get_post_meta($post_id,'quantity_food',true);
	$result="";
	switch($quantity_food){
		case 'select-3': $result="3 шт";
			break;
		case 'select-4': $result="4 шт";
			break;
		case 'select-5': $result="5 шт";
			break;
		case 'select-10': $result="10 шт";
			break;
		case 'select-15': $result="15 шт";
			break;
		case 'select-20': $result="20 шт";
			break;
		case 'select-null': $result=null;
			break;
		default:
			$result=null;
	}
	return $result;
}
function get_price_food($post_id) {
	$price_food=get_post_meta($post_id,'price_food',true);
	return(!empty($price_food))?$price_food.' Руб':0;
}
function get_weight_food($post_id) {
	//$get_food_unit=get_post_meta($post_id,'food_unit',true);
	//$weight_food=get_post_meta($post_id,'weight_food',true);
	(!empty(get_post_meta($post_id,'food_unit',true))) ?$get_food_unit=get_post_meta($post_id,'food_unit',true):$get_food_unit='gram';
	(!empty(get_post_meta($post_id,'weight_food',true)))? $weight_food=get_post_meta($post_id,'weight_food',true): $weight_food=0;
	($get_food_unit=='gram')? $weight_unit=$weight_food.' гр':$weight_unit=$weight_food.' мл';
	return $weight_unit;

}
/***********************************************************
 * CREATE PRIMARY & SECOND NAVIGATION (MENU)
 * ********************************************************
 */
add_action('after_setup_theme', 'second_navigation');
function second_navigation()
{
	// register menu
	$location = array(
		'primary-menu' => __('Primary menu'),
		'second-menu'=>__('Second menu')

	);
	register_nav_menus($location);
}

/***********************************************************
 * ADD IN HEADER STYLE SHEET
 * ********************************************************
 */
add_action('wp_enqueue_scripts','add_header_stylesheet');
function add_header_stylesheet() {
    wp_register_style('bootstrap-grid',TEMPLATE_LIBS.'/bootstrap/bootstrap-grid-3.3.1.min.css');
	wp_register_style('font-awesome.min',TEMPLATE_LIBS.'/font-awesome/css/font-awesome.min.css');
	wp_register_style('jquery.fancybox',TEMPLATE_LIBS.'/fancybox/jquery.fancybox.css');
	wp_register_style('owl-carousel-css',TEMPLATE_LIBS.'/owl-carousel/owl.carousel.css');
	wp_register_style('countdown',TEMPLATE_LIBS.'/countdown/jquery.countdown.css');
	wp_register_style('fonts',TEMPLATE_FOLDER.'/css/fonts.css');
	wp_register_style('main',TEMPLATE_FOLDER.'/css/main.css');
	wp_register_style('media-theme',TEMPLATE_FOLDER.'/css/media.css');
	wp_register_style('owl.carousel',TEMPLATE_FOLDER.'/css/owl.carousel.css');
	wp_register_style('jquery.fullPage',TEMPLATE_FOLDER.'/css/jquery.fullPage.css');
	wp_register_style('ihover.min',TEMPLATE_FOLDER.'/css/ihover.min.css');

	wp_enqueue_style('bootstrap-grid');
	wp_enqueue_style('font-awesome.min');
	wp_enqueue_style('jquery.fancybox');
	wp_enqueue_style('owl-carousel-css');
	wp_enqueue_style('countdown');
	wp_enqueue_style('fonts');
	wp_enqueue_style('main');
	wp_enqueue_style('media-theme');
	wp_enqueue_style('owl.carousel');
	wp_enqueue_style('ihover.min');
	//wp_enqueue_style('jquery.fullPage');
}
/***********************************************************
 * ADD IN FOOTER JS SHEET
 * ********************************************************
 */
add_action('wp_enqueue_scripts','add_footer_js');
function add_footer_js() {
    wp_register_script('jquery-1.11.1',TEMPLATE_LIBS.'/jquery/jquery-1.11.1.min.js',array(),'',true);
    wp_register_script('jquery-mousewheel',TEMPLATE_LIBS.'/jquery-mousewheel/jquery.mousewheel.min.js',array(),'',true);
    wp_register_script('fancybox',TEMPLATE_LIBS.'/fancybox/jquery.fancybox.pack.js',array(),'',true);
    wp_register_script('waypoints',TEMPLATE_LIBS.'/waypoints/waypoints-1.6.2.min.js',array(),'',true);
    wp_register_script('scrollto',TEMPLATE_LIBS.'/scrollto/jquery.scrollTo.min.js',array(),'',true);
    wp_register_script('owl-carousel',TEMPLATE_LIBS.'/owl-carousel/owl.carousel.min.js',array(),'',true);
    wp_register_script('jquery.countdown.min',TEMPLATE_LIBS.'/countdown/jquery.countdown.min.js',array(),'',true);
    wp_register_script('jquery.countdown-ru',TEMPLATE_LIBS.'/countdown/jquery.countdown-ru.js',array(),'',true);
    wp_register_script('jquery.plugin',TEMPLATE_LIBS.'/countdown/jquery.plugin.js',array(),'',true);
    wp_register_script('navigation',TEMPLATE_LIBS.'/landing-nav/navigation.js',array(),'',true);
    wp_register_script('bootstrap-toolkit.min',TEMPLATE_LIBS.'/bootstrap-toolkit/bootstrap-toolkit.min.js',array(),'',true);
    wp_register_script('maskedinput',TEMPLATE_LIBS.'/maskedinput/jquery.maskedinput.min.js',array(),'',true);
    wp_register_script('equalheight',TEMPLATE_LIBS.'/equalheight/jquery.equalheight.js',array(),'',true);
    wp_register_script('stellar',TEMPLATE_LIBS.'/stellar/jquery.stellar.min.js',array(),'',true);
    wp_register_script('common',TEMPLATE_FOLDER.'/js/common.js',array(),'',true);
    wp_register_script('owl.carousel',TEMPLATE_FOLDER.'/js/owl.carousel.js',array(),'',true);
    wp_register_script('owl.carousel.min',TEMPLATE_FOLDER.'/js/owl.carousel.min.js',array(),'',true);

	wp_enqueue_script('jquery-1.11.1');
	wp_enqueue_script('jquery-mousewheel');
	wp_enqueue_script('waypoints');
	wp_enqueue_script('scrollto');
	wp_enqueue_script('owl-carousel');
	wp_enqueue_script('jquery.plugin');
	wp_enqueue_script('jquery.countdown.min');
	wp_enqueue_script('jquery.countdown-ru');
	wp_enqueue_script('navigation');
	wp_enqueue_script('bootstrap-toolkit.min');
	wp_enqueue_script('maskedinput');
	wp_enqueue_script('equalheight');
	wp_enqueue_script('stellar');
	wp_enqueue_script('common');
	//wp_enqueue_script('owl.carousel');
	wp_enqueue_script('owl.carousel.min');
}
/***********************************************************
 * ADD IN HEADER JS
 * ********************************************************
 */
add_action('wp_enqueue_scripts','add_header_js');
function add_header_js() {
    wp_register_script('maps',TEMPLATE_LIBS.'/maps/maps.js','',array(),true);
    wp_register_script('maps-load','https://maps.googleapis.com/maps/api/js?key=AIzaSyB4cW0wCPb-bt-Ieckbr7aW_lKuQNI1lIY&#038;callback=initialize&#038;ver=4.5.2');
	//wp_register_script('maps-load',TEMPLATE_LIBS.'/maps/maps-load.js');
	//wp_deregister_script( 'jquery' );
	wp_register_script('jquery.easings.min',TEMPLATE_FOLDER.'/js/jquery.easings.min.js');
	wp_register_script('scrolloverflow.min',TEMPLATE_FOLDER.'/js/scrolloverflow.min.js');
	wp_register_script('jquery.fullPage.min',TEMPLATE_FOLDER.'/js/jquery.fullPage.min.js');
	wp_register_script('jquery.scrollify',TEMPLATE_FOLDER.'/js/jquery.scrollify.js');
	wp_register_script('jquery.mobile.custom.min',TEMPLATE_FOLDER.'/js/svgslidercd/jquery.mobile.custom.min.js');
	wp_register_script('snap.svg-min',TEMPLATE_FOLDER.'/js/svgslidercd/snap.svg-min.js');
	wp_register_script('svgslider',TEMPLATE_FOLDER.'/js/svgslidercd/svgslider.js');
	wp_register_script('viewport-units-buggyfill',TEMPLATE_FOLDER.'/js/viewport-units-buggyfill.js');
	wp_register_script('jquery.nicescroll.min',TEMPLATE_FOLDER.'/js/jquery.nicescroll.min.js');

	wp_enqueue_script('maps-load');
	if(is_home()){
		wp_enqueue_script('maps');

	}
	//wp_enqueue_script( 'jquery-2.2.3', TEMPLATE_LIBS.'/jquery/jquery-2.2.3.min.js');
	// wp_enqueue_script('jquery.easings.min');
	// wp_enqueue_script('scrolloverflow.min');
	// wp_enqueue_script('jquery.fullPage.min');

	// wp_enqueue_script('jquery.easings.min');
	// wp_enqueue_script('scrolloverflow.min');
	// wp_enqueue_script('jquery.fullPage.min');
	//wp_enqueue_script('jquery.easings.min');
	//wp_enqueue_script('scrolloverflow.min');
	//wp_enqueue_script('jquery.fullPage.min');
	//wp_enqueue_script('jquery.scrollify');
	wp_enqueue_script('jquery.mobile.custom.min');
	wp_enqueue_script('snap.svg-min');
	wp_enqueue_script('svgslider');
	wp_enqueue_script('viewport-units-buggyfill');
	wp_enqueue_script('jquery.nicescroll.min');

}


/*******************************************************************
 * REGISTER WIDGET
 *****************************************************************
 */
if (function_exists('register_sidebar')) {
	/*$args_booking=array(
		'name' => __('Booking widget', 'asite'),
		'id' => 'booking-sidebar',
		'description' => 'Booking sidebar',
		'class' => '',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>'
	);
	$args_hours=array(
		'name' => __('Hours widget', 'asite'),
		'id' => 'hours-sidebar',
		'description' => 'Show information hours in index',
		'class' => '',
		'before_widget' => '<div class="about-us-time">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>'
	);

	$args_new_food=array(

		'name' => __('New food in index', 'asite'),
		'id' => 'new-food-index',
		'description' => 'Show food in index ',
		'class' => '',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>'
	);*/
	$args_food=array(
		'name' => __('Left food sidebar', 'asite'),
		'id' => 'left-food-sidebar',
		'description' => 'Show information in left food sidebar ',
		'class' => '',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>'

	);
	//register_sidebar($args_booking);
	//register_sidebar($args_hours);
	register_sidebar($args_food);
	//register_sidebar($args_new_food);
}
/***********************************************************
 * CREATE CUSTOM EXCERPT
 * ********************************************************
 */
function nguyenduy_excerpt($text, $chars = 1620)
{
	$text = $text . " ";
	$text = substr($text, 0, $chars);
	$text = substr($text, 0, strrpos($text, ' '));
	$text = $text . "...";
	return $text;
}
/***********************************************************
 * SHORTEN POST TITLE
 * ********************************************************
 */
function short_title($after = '', $length)
{
	$mytitle = explode(' ', get_the_title(), $length);
	if (count($mytitle) >= $length) {
		array_pop($mytitle);
		$mytitle = implode(" ", $mytitle) . $after;
	} else {
		$mytitle = implode(" ", $mytitle);
	}
	return $mytitle;

}
/************************************************
 * PAGINATION
 ************************************************
 */
function pagination($prev = '&laquo;', $next = '&raquo;')
{
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	$pagination = array(
		'base' => @add_query_arg('paged', '%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'prev_text' => $prev,
		'next_text' => $next,
		'type' => 'list'
	);
	if ($wp_rewrite->using_permalinks())
		$pagination['base'] = user_trailingslashit(trailingslashit(remove_query_arg('s', get_pagenum_link(1))) . 'page/%#%/', 'paged');

	if (!empty($wp_query->query_vars['s']))
		$pagination['add_args'] = array('s' => get_query_var('s'));

	echo paginate_links($pagination);
}
/************************************************
 * PUBLICIZE SUPPORT
 ************************************************
 */
add_action('init','publicize_support');
function publicize_support() {
	add_post_type_support( 'food', 'publicize' );
	add_post_type_support( 'menu', 'publicize' );
}
?>