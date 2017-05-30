<?php get_header(); ?>
    <!-- Section Menu -->
    <div class="menu-single">
        <div class="container">
            <div class="menu-title-aligner ">
                <h3 class="logo-menu-book-title" id="menu-book-title">Супы</h3>
            </div>
            <section class="menu-book">
                <?php if (have_posts()): while (have_posts()): the_post(); ?>

                    <?php
                    $arr_hot_snack = !empty(get_post_meta($post->ID, 'choose_hot_snack', true)) ? get_post_meta($post->ID, 'choose_hot_snack', true) : $arr_hot_snack = array();
                    $arr_salad = !empty(get_post_meta($post->ID, 'choose_salad', true)) ? get_post_meta($post->ID, 'choose_salad', true) : $arr_salad = array();// Салат
                    $arr_cold_snack = !empty(get_post_meta($post->ID, 'choose_cold_snack', true)) ? get_post_meta($post->ID, 'choose_cold_snack', true) : $arr_cold_snack = array();
                    $arr_soup = !empty(get_post_meta($post->ID, 'choose_soup', true)) ? get_post_meta($post->ID, 'choose_soup', true) : $arr_soup = array();
                    $arr_vegetarian = !empty(get_post_meta($post->ID, 'choose_vegetarian', true)) ? get_post_meta($post->ID, 'choose_vegetarian', true) : $arr_vegetarian = array();
                    $arr_special_food = !empty(get_post_meta($post->ID, 'choose_special_food', true)) ? get_post_meta($post->ID, 'choose_special_food', true) : $arr_special_food = array();//choose_special_food
                    $arr_main_dishes = !empty(get_post_meta($post->ID, 'choose_main_dishes', true)) ? get_post_meta($post->ID, 'choose_main_dishes', true) : $arr_main_dishes = array();// Основные Блюда
                    $arr_drinks = !empty(get_post_meta($post->ID, 'choose_drink', true)) ? get_post_meta($post->ID, 'choose_drink', true) : $arr_drinks = array();//Напитки
                    $arr_dessert = !empty(get_post_meta($post->ID, 'choose_dessert', true)) ? get_post_meta($post->ID, 'choose_dessert', true) : $arr_dessert = array();//десерты
                    //$array_foods= $arr_hot_snack+$arr_salad+$arr_cold_snack+$arr_special_food+$arr_main_dishes+$arr_drinks+$arr_dessert;
                    $array_foods = array_merge($arr_hot_snack, $arr_soup, $arr_salad, $arr_cold_snack, $arr_special_food, $arr_main_dishes, $arr_vegetarian, $arr_drinks, $arr_dessert);
                    //$array_foods = array_chunk($array_foods, 5);
                    $len = count($array_foods);
                    $firsthalf = array_slice($array_foods, 0, $len / 2);
                    $secondhalf = array_slice($array_foods, $len / 2);
                    ?>
                    <div class="dishtype-menu">
                        <div class="dish-list">
                            <div class="first-menu-column">
                                <ul class="leaders">
                                    <?php for ($index = 0; $index < count($firsthalf); $index++): ?>
                                        <li class="product-item">
                                            <div class="product-name">
									<span class="product-line">
									<span class="ellipsis"><?php echo get_the_title($firsthalf[$index]); ?></span>
									<span class="product-price"><?php echo get_price_food($firsthalf[$index]); ?></span>
									</span>
                                            </div>
                                            <div
                                                class="product-description"><?php echo get_post_meta($firsthalf[$index], 'ingredient_food', true); ?></div>
                                        </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>
                            <div class="second-menu-column"></div>
                            <div class="third-menu-column ts-clearfix">
                                <ul class="leaders">
                                    <?php for ($index = 0; $index < count($secondhalf); $index++): ?>
                                        <li class="product-item">
                                            <div class="product-name">
									<span class="product-line">
									<span class="ellipsis"><?php echo get_the_title($secondhalf[$index]); ?></span>
									<span
                                        class="product-price"><?php echo get_price_food($secondhalf[$index]); ?></span>
									</span>
                                            </div>
                                            <div
                                                class="product-description"><?php echo get_post_meta($secondhalf[$index], 'ingredient_food', true); ?></div>
                                        </li>
                                    <?php endfor; ?>

                            </div>
                        </div>
                    </div>
                    <?php $url_thumbnail = get_the_post_thumbnail_url(); endwhile; endif; ?>
            </section>
        </div>
        <div class="menu-single-back">
            <?php if (empty($url_thumbnail)): ?>
                <img src="<?php echo IMG_FOLDER . '/food/_DSF4313.jpg' ?>" alt="<?php bloginfo('name') ?>">
            <?php else: ?>
                <img src="<?php echo $url_thumbnail ?>" alt="<?php bloginfo('name') ?>">

            <?php endif; ?>
        </div>
    </div>
    <!--END Section Menu -->
<?php get_footer(); ?>