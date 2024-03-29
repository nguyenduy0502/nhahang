<?php
/*******************************************************************
 * ADD PATH
 *****************************************************************
 */
define('THEME_URL', get_template_directory_uri());
define('LANGUAGES_FOLDER', THEME_URL . '/languages');
define('TEMPLATE_FOLDER', THEME_URL . '/template/dist');
define('CSS_FOLDER', TEMPLATE_FOLDER . '/css');
define('JS_FOLDER', TEMPLATE_FOLDER . '/js');
define('FONT_FOLDER', TEMPLATE_FOLDER . '/font');
define('IMG_FOLDER', TEMPLATE_FOLDER . '/img');
define('CUSTOM_MENU',THEME_URL.'/AdditionalPlugins/MenuRestaurant');
define('CUSTOM_FOOD',THEME_URL.'/AdditionalPlugins/FoodRestaurant');
define('BACKEND_URL',THEME_URL.'/backend');


/*******************************************************************
 * ADD PLUGIN CUSTOM POST RESTAURANT
 *****************************************************************
 */
require_once dirname(__FILE__) . '/AdditionalPlugins/init.php';

/*******************************************************************
 * ADD CUSTOM BACKEND
 *****************************************************************
 */
require_once dirname(__FILE__) . '/backend/login/login.php';
require_once dirname(__FILE__) . '/backend/init.php';
/*******************************************************************
 * REGISTER TEXT DOMAIN, THEME SUPPORTS
 ****************************************************************
 */
load_textdomain('asite', LANGUAGES_FOLDER);
add_post_type_support('food', 'comments');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array(
    'video', 'gallery'
));
/************************************************
 * PUBLICIZE SUPPORT
 ************************************************
 */
add_action('init', 'publicize_support');
function publicize_support(){
    add_post_type_support('food', 'publicize');
    add_post_type_support('menu', 'publicize');
}

/***********************************************************
 * ADD IN HEADER STYLE SHEET
 * ********************************************************
 */
add_action('wp_enqueue_scripts', 'add_header_stylesheet');
function add_header_stylesheet(){
    wp_register_style('main-min-style', CSS_FOLDER . '/main.min.css');
    wp_enqueue_style('main-min-style');

}

/***********************************************************
 * ADD IN FOOTER JS SHEET
 * ********************************************************
 */
add_action('wp_enqueue_scripts', 'add_footer_js');
function add_footer_js(){
    wp_register_script('main-min-scripts', JS_FOLDER . '/scripts.min.js', array(), '', true);
    wp_enqueue_script('main-min-scripts');

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
function get_ingredient_food($post_id){
    $ingredient_food=get_post_meta($post_id,'ingredient_food',true);
    return (!empty($ingredient_food)) ? $ingredient_food :'';
}
?>