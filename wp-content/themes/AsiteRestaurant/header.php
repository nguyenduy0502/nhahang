<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>
<html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>
<html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
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
    <meta content="telephone=no" name="format-detection"/>
    <meta name="Keywords"
          content="вьетнамская кухня, вьетнамская кухня рецепты, ресторан вьетнамской кухни, блюда вьетнамской кухни, кафе вьетнамской кухни, вьетнамская кухня в москве, суп фо бо, вьетнамский суп фо, фо рецепт, Вьет Хауз, суп фо вьетнамский рецепт, вьетнамская кухня меню, ВьетЛанч, <?php wp_title( '|', true, 'right' );?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="<?php echo TEMPLATE_FOLDER . '/img/logo.jpg' ?>"/>
<!--     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <meta property="fb:app_id" content="273681262992709"/>
    <meta property="fb:admins" content="1099208330101074"/>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-81719881-1', 'auto');
        ga('require', 'linkid', 'linkid.js');
        ga('require', 'displayfeatures');
        ga('send', 'pageview');
    </script>
    <?php wp_head(); ?>
</head>

<body>
<!-- <body class="fp-responsive"> -->
<!-- <div id="fullpage"> -->
<!-- header-->
<!--
	<div class="mobile-display" >
		<h2 class="site-title">
			<a href="#">
				<img src="img/logo.jpg" alt="viethouse" >
			</a>
		</h2>
	</div>-->
<?php get_template_part('includes/navigation/main-menu'); // get template main menu?>
<!--end header-->
