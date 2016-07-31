<?php
/**
 * File Name: home-menu.php
 * Date: 26-07-2016
 * Time: 11:55
 * Description: This is file index menu
 */
?>
<div class="top_line">
</div>
<a href="#" class="toggle-menu"><img src="<?php echo TEMPLATE_FOLDER . '/img/logo.jpg' ?>"
                                     alt="<?php bloginfo('description') ?>" title="<?php bloginfo('name'); ?>"></a>
<!--<a href="#" class="toggle-menu">&#9776;</a>-->
<nav>
    <ul class="nav-list nav-open" id="nav">
        <li><a href="#about-us">О нас</a></li>
        <li><a href="#new-food">Новые блюды</a></li>
        <li class="has-submenu"><a href="#food-menu">Меню</a>
            <!--<ul>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">UI Designing</a></li>
                <li><a href="#">Back End Development</a></li>
                <li><a href="#">Front End Development</a></li>
            </ul>-->
        </li>

        <li class="has-logo"><a href="<? echo home_url();?>" title="<?php bloginfo('description')?>">
                <h2 class="site-title">
                    <img src="<?php echo TEMPLATE_FOLDER . '/img/logo.jpg' ?>" alt="<?php bloginfo('description') ?>"
                         title="<?php bloginfo('name'); ?>">
                </h2>
            </a></li>
        <li class="has-submenu"><a href="#news">Новости</a>
            <!--<ul>
                <li><a href="#">Web Designing</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">UI Designing</a></li>
                <li><a href="#">Back End Development</a></li>
                <li><a href="#">Front End Development</a></li>
            </ul>-->
        </li>
        <li><a href="#booking">Бронирование</a></li>
        <li><a href="#contact-us">Контакты</a></li>
    </ul>
</nav>
