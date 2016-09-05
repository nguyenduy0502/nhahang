<?php
/**
 * File Name: home-menu.php
 * Date: 26-07-2016
 * Time: 11:55
 * Description: This is file index menu
 */
?>
<div class="top_line">
<a href="#" class="toggle-menu"><img src="<?php echo TEMPLATE_FOLDER . '/img/logo.jpg' ?>"
                                     alt="<?php bloginfo('description') ?>" title="<?php bloginfo('name'); ?>">

     <h1>Menu</h1>
 </a>
</div>
<!--<a href="#" class="toggle-menu">&#9776;</a>-->
<nav>
    <ul class="nav-list nav-open" id="nav">
        <!-- <li data-menuanchor="about-us" class="active"><a href="#about-us">О нас</a></li>-->
        <li><a href="#about-us">О нас</a></li>
        <li class="has-submenu"><a href="#news">Новости</a></li>
        <!-- <li data-menuanchor="new-food"><a href="#new-food">Новые блюды</a></li> -->
        <li><a href="#new-food">Новые блюды</a></li>


        <li class="has-logo"><a href="<? echo home_url();?>" title="<?php bloginfo('description')?>">
                <h2 class="site-title">
                    <img src="<?php echo TEMPLATE_FOLDER . '/img/logo.jpg' ?>" alt="<?php bloginfo('description') ?>"
                         title="<?php bloginfo('name'); ?>">
                </h2>
            </a></li>
        <!-- <li class="has-submenu" data-menuanchor="food-menu"><a href="#food-menu">Меню</a> -->
        <li class="has-submenu"><a href="#food-menu">Меню</a></li>
        <!-- <li data-menuanchor="booking"><a href="#booking">Бронирование</a></li> -->
        <li><a href="#booking">Бронирование</a></li>
        <!-- <li data-menuanchor="contact-us"><a href="#contact-us">Контакты</a></li> -->
        <li><a href="#contact-us">Контакты</a></li>
    </ul>
</nav>
