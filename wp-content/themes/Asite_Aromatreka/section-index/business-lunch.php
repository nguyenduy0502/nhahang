<?php global $asite_options; ?>
<div class="header_widget_bottom">
    <div class="owl-carousel"  id="fast-slider">
        <?php for ($index = 0; $index < count($asite_options['option_business_cat']); $index++): ?>
            <?php
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_rice_pancake', true))) ? $choose_rice_pancake = get_post_meta($asite_options['option_business_cat'][$index], 'choose_rice_pancake', true) : $choose_rice_pancake = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_rice_fish', true))) ? $choose_rice_fish = get_post_meta($asite_options['option_business_cat'][$index], 'choose_rice_fish', true) : $choose_rice_fish = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_rice_pancake', true))) ? $choose_salad = get_post_meta($asite_options['option_business_cat'][$index], 'choose_rice_pancake', true) : $choose_salad = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_soup', true))) ? $choose_soup = get_post_meta($asite_options['option_business_cat'][$index], 'choose_soup', true) : $choose_soup = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_fish', true))) ? $choose_fish = get_post_meta($asite_options['option_business_cat'][$index], 'choose_fish', true) : $choose_fish = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_shrimp', true))) ? $choose_shrimp = get_post_meta($asite_options['option_business_cat'][$index], 'choose_shrimp', true) : $choose_shrimp = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_frog_eel', true))) ? $choose_frog_eel = get_post_meta($asite_options['option_business_cat'][$index], 'choose_frog_eel', true) : $choose_frog_eel = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_chicken_quail', true))) ? $choose_chicken_quail = get_post_meta($asite_options['option_business_cat'][$index], 'choose_chicken_quail', true) : $choose_chicken_quail = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_duck', true))) ? $choose_duck = get_post_meta($asite_options['option_business_cat'][$index], 'choose_duck', true) : $choose_duck = array();//десерты
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_pork_beef', true))) ? $choose_pork_beef = get_post_meta($asite_options['option_business_cat'][$index], 'choose_pork_beef', true) : $choose_pork_beef = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_beef_goat', true))) ? $choose_beef_goat = get_post_meta($asite_options['option_business_cat'][$index], 'choose_beef_goat', true) : $choose_beef_goat = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_squid', true))) ? $choose_squid = get_post_meta($asite_options['option_business_cat'][$index], 'choose_squid', true) : $choose_squid = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_spinach', true))) ? $choose_spinach = get_post_meta($asite_options['option_business_cat'][$index], 'choose_spinach', true) : $choose_spinach = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_snails', true))) ? $choose_snails = get_post_meta($asite_options['option_business_cat'][$index], 'choose_snails', true) : $choose_snails = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_dessert', true))) ? $choose_dessert = get_post_meta($asite_options['option_business_cat'][$index], 'choose_dessert', true) : $choose_dessert = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_gas_drink', true))) ? $choose_gas_drink = get_post_meta($asite_options['option_business_cat'][$index], 'choose_gas_drink', true) : $choose_gas_drink = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_cafe_tea', true))) ? $choose_cafe_tea = get_post_meta($asite_options['option_business_cat'][$index], 'choose_cafe_tea', true) : $choose_cafe_tea = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_beer', true))) ? $choose_beer = get_post_meta($asite_options['option_business_cat'][$index], 'choose_beer', true) : $choose_beer = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_vodka', true))) ? $choose_vodka = get_post_meta($asite_options['option_business_cat'][$index], 'choose_vodka', true) : $choose_vodka = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_champagne', true))) ? $choose_champagne = get_post_meta($asite_options['option_business_cat'][$index], 'choose_champagne', true) : $choose_champagne = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_whiskey', true))) ? $choose_whiskey = get_post_meta($asite_options['option_business_cat'][$index], 'choose_whiskey', true) : $choose_whiskey = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_cognac', true))) ? $choose_cognac = get_post_meta($asite_options['option_business_cat'][$index], 'choose_cognac', true) : $choose_cognac = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_wine', true))) ? $choose_wine = get_post_meta($asite_options['option_business_cat'][$index], 'choose_wine', true) : $choose_wine = array();
            (!empty(get_post_meta($asite_options['option_business_cat'][$index], 'choose_rice_vermicelli', true))) ? $choose_rice_vermicelli = get_post_meta($asite_options['option_business_cat'][$index], 'choose_rice_vermicelli', true) : $choose_rice_vermicelli = array();



            $array_foods = array_merge($choose_rice_pancake, $choose_rice_fish, $choose_salad, $choose_soup, $choose_fish, $choose_shrimp, $choose_frog_eel, $choose_chicken_quail, $choose_duck,
                $choose_pork_beef, $choose_beef_goat, $choose_squid, $choose_spinach, $choose_snails, $choose_dessert, $choose_gas_drink, $choose_cafe_tea, $choose_beer, $choose_vodka,
                $choose_champagne, $choose_whiskey, $choose_cognac, $choose_wine, $choose_rice_vermicelli
            );
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
