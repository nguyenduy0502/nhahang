<?php
/**
 * File Name: second-menu.php
 * Date: 26-07-2016
 * Time: 11:57
 * Description: This is file second menu
 */
?>
<div class="top_line">
</div>
<a href="#" class="toggle-menu has-logo"><img src="<?php echo TEMPLATE_FOLDER . '/img/logo.jpg' ?>"
                                     alt="<?php bloginfo('description') ?>" title="<?php bloginfo('name'); ?>"></a>
<!--<a href="#" class="toggle-menu">&#9776;</a>-->
<?php
$args_menu=array(
    'theme_location'=>'second-menu',
    'container'=>'nav',
    'items_wrap'=>'<ul id="nav" class="nav-list nav-open">%3$s</ul>'
);
wp_nav_menu($args_menu);
?>
