<!DOCTYPE html>
<html lang="ru">
<?php global $asite_options?>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <title>
        <?php
        $cat_name = get_the_category();
        if (is_home()) {
            // Title home
            bloginfo('name');
            echo " - ";
            bloginfo('description');
        }
        if (is_single()) {
            // Title single
            the_title();
            echo " - ";
            bloginfo('name');
        }
        if (is_category()) {
            // title category
            echo $cat_name[0]->cat_name;
            echo "|";
            bloginfo('name');
        }
        if (is_404()) {
            // title 404
            echo 'Ошибка 404. Не найдено.' . '|';
            bloginfo('name');
        }
        if (is_page()) {
            // title page
            the_title();
            echo " - ";
            bloginfo('description');
        }
        if (is_search()) {
            // title search
            echo 'Результаты поиска' . ' - ';
            bloginfo('name');
        }
        if (is_author()) {
            // title author
            echo 'Наш шеф-повар' . ' - ';
            bloginfo('name');
        }
        if (is_post_type_archive('food')) {
            // title archive company
            echo "Новые блюда в нашем ресторане" . " - ";
            bloginfo('name');
        }
        if (is_post_type_archive('menu')) {
            // title archive event
            echo "Меню нашего ресторана" . " - ";
            bloginfo('name');
        }
        if (is_tax('cuisine')) {
            $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
            echo $term->name;
            echo " - ";
            bloginfo('name');
        }

        ?>
    </title>
    <meta name="author" content="<?php bloginfo('name');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="Keywords"
          content="вьетнамская кухня, вьетнамская кухня рецепты, ресторан вьетнамской кухни, блюда вьетнамской кухни, кафе вьетнамской кухни, вьетнамская кухня в москве, суп фо бо, вьетнамский суп фо, фо рецепт, Вьет Хауз, суп фо вьетнамский рецепт, вьетнамская кухня меню, ВьетЛанч, <?php wp_title( '|', true, 'right' );?>"/>
    <link rel="shortcut icon" href="<?php echo IMG_FOLDER.'/favicon/favicon.ico'?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo IMG_FOLDER . '/favicon/apple-touch-icon.png' ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo IMG_FOLDER . '/favicon/apple-touch-icon-72x72.png' ?>">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php echo IMG_FOLDER . '/favicon/apple-touch-icon-114x114.png'; ?>">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">

    <style>body {
            opacity: 0;
            overflow-x: hidden;
        }

        html {
            background-color: #fff;
        }</style>
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.36.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.36.0/mapbox-gl.css' rel='stylesheet'/>
    <?php wp_head(); ?>
</head>
<body>

<!-- Section Header -->
<div class="header">
    <div class="container">
        <div class="header_content">
            <div class="row">
                <div class="col-md-7">
                    <!-- Header Left -->
                    <?php get_template_part('navigation/primary-menu');?>
                    <!-- END Header Left -->
                </div>
                <div class="col-md-5">
                    <!-- Header right -->
                    <div class="header_right">
                        <div class="header_widget">

                            <!-- Header widget top -->
                            <?php get_template_part('section-index/stock-lunch');?>
                            <!-- END Header widget top -->

                            <!-- Header widget bottom -->
                            <?php get_template_part('section-index/business-lunch');?>
                            <!-- END Header widget bottom -->

                        </div>
                    </div>
                    <!-- Header right -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Arrow down -->
                        <div class="arrow animated bounce infinite">
                            <a href="#menu">
                                <img width="40" height="40" src="<?php echo IMG_FOLDER.'/arrowswhite.png'?>">
                            </a>
                        </div>
                        <!-- END Arrow down -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Section Header -->
