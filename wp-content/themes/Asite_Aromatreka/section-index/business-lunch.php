<?php global $asite_options; ?>
<div class="header_widget_bottom">
    <div class="owl-carousel"  id="fast-slider">
        <?php for ($index = 0; $index < count($asite_options['option_business_cat']); $index++): ?>
            <?php
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_rice_pancake', true))) ? $arr_hot_snack = get_post_meta($asite_options['option_business_cat'][$index], 'choose_rice_pancake', true) : $arr_hot_snack = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_salad', true))) ? $arr_salad = get_post_meta($asite_options['option_business_cat'][$index], 'choose_salad', true) : $arr_salad = array();// Салат
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_cold_snack', true))) ? $arr_cold_snack = get_post_meta($asite_options['option_business_cat'][$index], 'choose_cold_snack', true) : $arr_cold_snack = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_soup', true))) ? $arr_soup = get_post_meta($asite_options['option_business_cat'][$index], 'choose_soup', true) : $arr_soup = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_vegetarian', true))) ? $arr_vegetarian = get_post_meta($asite_options['option_business_cat'][$index], 'choose_vegetarian', true) : $arr_vegetarian = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_special_food', true))) ? $arr_special_food = get_post_meta($asite_options['option_business_cat'][$index], 'choose_special_food', true) : $arr_special_food = array();//choose_special_food
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_main_dishes', true))) ? $arr_main_dishes = get_post_meta($asite_options['option_business_cat'][$index], 'choose_main_dishes', true) : $arr_main_dishes = array();// Основные Блюда
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_drink', true))) ? $arr_drinks = get_post_meta($asite_options['option_business_cat'][$index], 'choose_drink', true) : $arr_drinks = array();//Напитки
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_dessert', true))) ? $arr_dessert = get_post_meta($asite_options['option_business_cat'][$index], 'choose_dessert', true) : $arr_dessert = array();//десерты
            //$array_foods= $arr_hot_snack+$arr_salad+$arr_cold_snack+$arr_special_food+$arr_main_dishes+$arr_drinks+$arr_dessert;
            $array_foods = array_merge($arr_hot_snack, $arr_soup, $arr_salad, $arr_cold_snack, $arr_special_food, $arr_main_dishes, $arr_vegetarian, $arr_drinks, $arr_dessert);
            ?>
            <div class="header_widget_bottom_content">
                <div
                    class="header_widget_bottom_content_head"><?php echo get_the_title($asite_options['option_business_cat'][$index]) ?></div>
                <div class="header_widget_bottom_content_price"><?php echo $asite_options['option_business_price'] ?>
                    руб.
                </div>
                <div class="header_widget_bottom_content_subhead">
                    <ul>
                        <?php for ($index_food = 0; $index_food < count($array_foods); $index_food++): ?>
                            <li><?php echo get_the_title($array_foods[$index_food]); ?></li>
                        <?php endfor; ?>
                    </ul>
                </div>
                <div class="widget-bot-img">
                    <?php if (has_post_thumbnail($asite_options['option_business_cat'][$index])): ?>
                        <img
                            src="<?php echo get_the_post_thumbnail_url($asite_options['option_business_cat'][$index], 'large') ?>"
                            alt="<?php bloginfo('description') ?>"
                            title="<?php bloginfo('name'); ?>">
                        >
                    <?php else: ?>
                        <img src="<?php echo IMG_FOLDER . '/food/_DSF4227.jpg' ?>"
                             alt="<?php bloginfo('description') ?>"
                             title="<?php bloginfo('name'); ?>">
                    <?php endif; ?>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
