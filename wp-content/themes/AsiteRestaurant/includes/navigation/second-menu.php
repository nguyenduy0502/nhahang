<?php
/**
 * File Name: second-menu.php
 * Date: 26-07-2016
 * Time: 11:57
 * Description: This is file second menu
 */
?>
<?php global $asite_options;?>
<div class="top_line2">
<a href="#" class="toggle-menu">
    <?php if(!empty($asite_options['option_logo']['url']) && isset($asite_options['option_logo']['url'])):?>
        <img src="<?php echo $asite_options['option_logo']['url'] ?>"
             alt="<?php bloginfo('description') ?>" title="<?php bloginfo('name'); ?>">
    <?php else: ?>
    <img src="<?php echo TEMPLATE_FOLDER . '/img/logo.png' ?>"
                                     alt="<?php bloginfo('description') ?>" title="<?php bloginfo('name'); ?>">
    <?php endif; ?>
<h1>Меню</h1></a>
</div>

<!--<a href="#" class="toggle-menu">&#9776;</a>-->
<?php
$args_menu=array(
    'theme_location'=>'second-menu',
    'container'=>'nav',
    'items_wrap'=>'<ul id="nav" class="nav-list nav-open">%3$s</ul>'
);
wp_nav_menu($args_menu);
?>
