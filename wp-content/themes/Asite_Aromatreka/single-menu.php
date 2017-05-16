<?php get_header(); ?>
    <!-- Section Menu -->
    <div class="menu" id="menu">
        <div class="inner-top">
        </div>
        <div class="inner-middle">
            <div class="container">
                <div class="owl-carousel">
                    <?php if (have_posts()): while (have_posts()):
                    the_post(); ?>
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
                    $array_foods = array_chunk($array_foods, 8);
                    ?>
                    <?php for ($index = 1; $index < count($array_foods) + 1; $index++): ?>
                        <div class="menu-content" data-hash="menupage<?php echo $index ?>">
                            <div class="row">
                                <?php $args = array(
                                    'post__in' => $array_foods[$index-1],
                                    'post_type' => 'food',
                                    'orderby' => 'rand',
                                );
                                $query = new WP_Query($args);
                                ?>
                                <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="menu-content-item">
                                            <div class="menu-content-item-head">
                                                <span><?php the_title()?></span>
                                            </div>
                                            <div class="menu-content-item-subhead">
                                                <span>Lorem ipsum next food</span>
                                            </div>
                                            <div class="menu-content-item-price">
                                                135 руб.
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; endif; // end loop get data?>
                            </div>
                        </div>
                    <?php endfor; // loop get container div
                    ?>
                </div>
                <div class="menu-nav">
                    <?php for ($i = 1; $i < count($array_foods) + 1; $i++): ?>
                        <a href="#menupage<?php echo $i ?>"> <?php echo $i ?></a>
                    <?php endfor; ?>
                </div>
                <?php endwhile;
                endif; ?>
                <div class="im-img">
                    <img src="<?php echo IMG_FOLDER . '/food/_DSF4313.jpg' ?>">
                </div>
            </div>
        </div>
        <div class="inner-bot">
        </div>
    </div>
    <!--END Section Menu -->
<?php get_footer(); ?>