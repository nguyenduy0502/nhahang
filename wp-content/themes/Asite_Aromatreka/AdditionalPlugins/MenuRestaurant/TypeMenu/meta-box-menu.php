<?php
/**
 * File Name: meta-box-menu.php
 * Date: 23-06-2016
 * Time: 23:07
 * Description: Meta box menu show foods and categories
 */
add_action('add_meta_boxes', 'metabox_menu');
function metabox_menu()
{
    add_meta_box('metabox_menu', 'Выбор блюд для меню', 'form_menu_output', 'menu');
}

function form_menu_output($post)
{

    $choose_food = array(get_post_meta($post->ID, 'choose_food', true));

    $choose_rice_pancake = array(get_post_meta($post->ID, 'choose_rice_pancake', true));//// Rice and Pancakes
    $choose_rice_fish = array(get_post_meta($post->ID, 'choose_rice_fish', true)); //// Rice and Fish
    $choose_salad = array(get_post_meta($post->ID, 'choose_salad', true)); //choose_salad
    $choose_soup = array(get_post_meta($post->ID, 'choose_soup', true));//Soup
    $choose_fish = array(get_post_meta($post->ID, 'choose_fish', true));//// fish
    $choose_shrimp = array(get_post_meta($post->ID, 'choose_shrimp', true)); // Shrimp
    $choose_frog_eel = array(get_post_meta($post->ID, 'choose_frog_eel', true)); //// Frog's Feet and Eel
    $choose_chicken_quail = array(get_post_meta($post->ID, 'choose_chicken_quail', true));//// Chicken and Quail
    $choose_duck = array(get_post_meta($post->ID, 'choose_duck', true)); //Duck
    $choose_pork_beef = array(get_post_meta($post->ID, 'choose_pork_beef', true)); //Pork and Beef
    $choose_beef_goat = array(get_post_meta($post->ID, 'choose_beef_goat', true)); //Beef and Goat
    $choose_squid = array(get_post_meta($post->ID, 'choose_squid', true)); // Squid
    $choose_rice_vermicelli = array(get_post_meta($post->ID, 'choose_rice_vermicelli', true)); // Rice vermicelli
    $choose_spinach = array(get_post_meta($post->ID, 'choose_spinach', true)); // Spinach
    $choose_snails = array(get_post_meta($post->ID, 'choose_snails', true)); // Snails
    $choose_dessert = array(get_post_meta($post->ID, 'choose_dessert', true)); // Dessert
    $choose_gas_drink = array(get_post_meta($post->ID, 'choose_gas_drink', true)); // Gas Drink
    $choose_cafe_tea = array(get_post_meta($post->ID, 'choose_cafe_tea', true)); //  Coffee and tea
    $choose_beer = array(get_post_meta($post->ID, 'choose_beer', true)); //  Beer
    $choose_vodka = array(get_post_meta($post->ID, 'choose_vodka', true)); //Vodka
    $choose_champagne = array(get_post_meta($post->ID, 'choose_champagne', true)); // Champagne
    $choose_whiskey = array(get_post_meta($post->ID, 'choose_whiskey', true)); // Whiskey
    $choose_cognac = array(get_post_meta($post->ID, 'choose_cognac', true)); // Cognac
    $choose_wine = array(get_post_meta($post->ID, 'choose_wine', true)); // Wine


    wp_nonce_field('save_choose_food_nonce', 'info_choose_food_nonce');
    wp_nonce_field('save_choose_rice_pancake_nonce', 'info_choose_rice_pancake_nonce');
    wp_nonce_field('save_choose_rice_fish_nonce', 'info_choose_rice_fish_nonce');
    wp_nonce_field('save_choose_salad_nonce', 'info_choose_salad_nonce');
    wp_nonce_field('save_choose_soup_nonce', 'info_choose_soup_nonce');
    wp_nonce_field('save_choose_fish_nonce', 'info_choose_fish_nonce');
    wp_nonce_field('save_choose_shrimp_nonce', 'info_choose_shrimp_nonce');
    wp_nonce_field('save_choose_frog_eel_nonce', 'info_choose_frog_eel_nonce');
    wp_nonce_field('save_choose_chicken_quail_nonce', 'info_choose_chicken_quail_nonce');
    wp_nonce_field('save_choose_duck_nonce', 'info_choose_duck_nonce');
    wp_nonce_field('save_choose_pork_beef_nonce', 'info_choose_pork_beef_nonce');
    wp_nonce_field('save_choose_beef_goat_nonce', 'info_choose_beef_goat_nonce');
    wp_nonce_field('save_choose_squid_nonce', 'info_choose_squid_nonce');
    wp_nonce_field('save_choose_rice_vermicelli_nonce', 'info_choose_rice_vermicelli_nonce');
    wp_nonce_field('save_choose_spinach_nonce', 'info_choose_spinach_nonce');
    wp_nonce_field('save_choose_snails_nonce', 'info_choose_snails_nonce');
    wp_nonce_field('save_choose_dessert_nonce', 'info_choose_dessert_nonce');
    wp_nonce_field('save_choose_gas_drink_nonce', 'info_choose_gas_drink_nonce');
    wp_nonce_field('save_choose_beer_nonce', 'info_choose_beer_nonce');
    wp_nonce_field('save_choose_vodka_nonce', 'info_choose_vodka_nonce');
    wp_nonce_field('save_choose_champagne_nonce', 'info_choose_champagne_nonce');
    wp_nonce_field('save_choose_whiskey_nonce', 'info_choose_whiskey_nonce');
    wp_nonce_field('save_choose_cognac_nonce', 'info_choose_cognac_nonce');
    wp_nonce_field('save_choose_wine_nonce', 'info_choose_wine_nonce');
    if (empty($choose_rice_pancake[0])) {
        // set default data for array
        $choose_rice_pancake[0] = array(145123);
    }
    if (empty($choose_rice_fish[0])) {
        // set default data for array
        $choose_rice_fish[0] = array(145123);
    }
    if (empty($choose_salad[0])) {
        // set default data for array
        $choose_salad[0] = array(145123);
    }
    if (empty($choose_soup[0])) {
        // set default data for array
        $choose_soup[0] = array(145123);
    }
    if (empty($choose_fish[0])) {
        // set default data for array
        $choose_fish[0] = array(145123);
    }
    if (empty($choose_shrimp[0])) {
        // set default data for array
        $choose_shrimp[0] = array(145123);
    }
    if (empty($choose_frog_eel[0])) {
        // set default data for array
        $choose_frog_eel[0] = array(145123);
    }
    if (empty($choose_chicken_quail[0])) {
        // set default data for array
        $choose_chicken_quail[0] = array(145123);
    }
    if (empty($choose_duck[0])) {
        // set default data for array
        $choose_duck[0] = array(145123);
    }
    if (empty($choose_pork_beef[0])) {
        // set default data for array
        $choose_pork_beef[0] = array(145123);
    }
    if (empty($choose_beef_goat[0])) {
        // set default data for array
        $choose_beef_goat[0] = array(145123);
    }
    if (empty($choose_squid[0])) {
        // set default data for array
        $choose_squid[0] = array(145123);
    }
    if (empty($choose_rice_vermicelli[0])) {
        // set default data for array
        $choose_rice_vermicelli[0] = array(145123);
    }
    if (empty($choose_spinach[0])) {
        // set default data for array
        $choose_spinach[0] = array(145123);
    }
    if (empty($choose_snails[0])) {
        // set default data for array
        $choose_snails[0] = array(145123);
    }
    if (empty($choose_dessert[0])) {
        // set default data for array
        $choose_dessert[0] = array(145123);
    }
    if (empty($choose_gas_drink[0])) {
        // set default data for array
        $choose_gas_drink[0] = array(145123);
    }
    if (empty($choose_cafe_tea[0])) {
        // set default data for array
        $choose_cafe_tea[0] = array(145123);
    }
    if (empty($choose_beer[0])) {
        // set default data for array
        $choose_beer[0] = array(145123);
    }
    if (empty($choose_vodka[0])) {
        // set default data for array
        $choose_vodka[0] = array(145123);
    }
    if (empty($choose_champagne[0])) {
        // set default data for array
        $choose_champagne[0] = array(145123);
    }
    if (empty($choose_whiskey[0])) {
        // set default data for array
        $choose_whiskey[0] = array(145123);
    }
    if (empty($choose_cognac[0])) {
        // set default data for array
        $choose_cognac[0] = array(145123);
    }
    if (empty($choose_wine[0])) {
        // set default data for array
    $choose_wine[0] = array(145123);
    }
    ?>
    <?php $args_cats = array('taxonomy' => 'cuisine'); // get category cuisine
    $cats = get_categories($args_cats)// set list categories
    ?>
    <input class="form-control" id="livesearch" placeholder="Поиск блюдо" type="text" style="width: 300px"/>
    <div class="menu-choose" style="">

        <table id="List-User"><!-- table Rice and Pancakes -->
            <?php $cat_rice_pancake = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'рис-и-блинчики-нем', // Rice and Pancakes
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_rice_pancake = new WP_Query($cat_rice_pancake);
            ?>
            <tr>
                <th>Рис и Блинчики Нем</th>
            </tr>
            <?php if ($query_rice_pancake->have_posts()): while ($query_rice_pancake->have_posts()):$query_rice_pancake->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_rice_pancake_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_rice_pancake[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif; // end query for cat 53
            ?>
        </table>
        <!-- end table Rice and Pancakes -->
        <table id="List-User"><!-- table Rice and Fish-->
            <?php $cat_rice_fish = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'рис-и-рыба', //Rice and Fish
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_rice_fish = new WP_Query($cat_rice_fish);
            ?>
            <tr>
                <th>Рис и Рыба</th>
            </tr>
            <?php if ($query_rice_fish->have_posts()):while ($query_rice_fish->have_posts()):$query_rice_fish->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_rice_fish_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_rice_fish[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif // end query for cat 55
            ?>
        </table>
        <!-- end table Rice and Fish -->
        <table id="List-User"><!-- table Салаты -->
            <?php $cat_salad = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'салаты', //Салаты
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_salad = new WP_Query($cat_salad);
            ?>
            <tr>
                <th>Салаты</th>
            </tr>
            <?php if ($query_salad->have_posts()):while ($query_salad->have_posts()):$query_salad->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_salad_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_salad[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif // end query for cat 50
            ?>
        </table>
        <!-- end table Салаты -->
        <table id="List-User"><!-- table Супы -->
            <?php $cat_soup = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'супы', //Супы
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_soup = new WP_Query($cat_soup);
            ?>
            <tr>
                <th>Супы</th>
            </tr>
            <?php if ($query_soup->have_posts()):while ($query_soup->have_posts()):$query_soup->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_soup_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_soup[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif // end query for cat 52
            ?>
        </table>
        <!-- end table Супы -->
        <table id="List-User"><!-- table Рыба -->
            <?php $cat_fish = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'рыба', // Рыба
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_fish = new WP_Query($cat_fish);
            ?>
            <tr>
                <th>Рыба</th>
            </tr>
            <?php if ($query_fish->have_posts()):while ($query_fish->have_posts()):$query_fish->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_fish_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_fish[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif // end query for cat 51
            ?>
        </table>
        <!-- end table Рыба -->
        <table id="List-User"> <!-- table Креветки -->
            <?php $cat_shrimp = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'креветки', // Креветки
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_shrimp = new WP_Query($cat_shrimp);
            ?>
            <tr>
                <th>Креветки</th>
            </tr>
            <?php if ($query_shrimp->have_posts()):while ($query_shrimp->have_posts()):$query_shrimp->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_shrimp_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_shrimp[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif // end query for cat 54
            ?>
        </table>
        <!-- end table Креветки-->
        <table id="List-User"> <!-- table Лапки лягушки и Угорь -->
            <?php $cat_frog_eel = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'лапки-лягушки-и-угорь', // Лапки лягушки и Угорь
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_frog_eel = new WP_Query($cat_frog_eel);
            ?>
            <tr>
                <th>Лапки лягушки и Угорь</th>
            </tr>
            <?php if ($query_frog_eel->have_posts()):while ($query_frog_eel->have_posts()):$query_frog_eel->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_frog_eel_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_frog_eel[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>

                </tr>
                <?php wp_reset_query(); endwhile; endif // end query for cat 56
            ?>
        </table>
        <!-- end table Лапки лягушки и Угорь -->
        <table id="List-User"> <!-- table Курицы и Перепелки -->
            <?php $cat_chicken_quail = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'курицы-и-перепелки', // курицы-и-перепелки
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_chicken_quail = new WP_Query($cat_chicken_quail);
            ?>
            <tr>
                <th>Курицы и Перепелки</th>
            </tr>
            <?php if ($query_chicken_quail->have_posts()):while ($query_chicken_quail->have_posts()):$query_chicken_quail->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_chicken_quail_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_chicken_quail[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif // end query for cat 57
            ?>
        </table>
        <table id="List-User">
            <?php $cat_duck = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'утка', //Утка
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_duck = new WP_Query($cat_duck);
            ?>
            <tr>
                <th>Утка</th>
            </tr>
            <?php if ($query_duck->have_posts()):while ($query_duck->have_posts()):$query_duck->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_duck_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_duck[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif // end query for cat 12
            ?>
        </table>
        <!-- end table Курицы и Перепелки -->
        <table id="List-User"> <!-- table Свинина и Говядина -->
            <?php $cat_pork_beef = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'свинина-и-говядина', //Утка
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_pork_beef = new WP_Query($cat_pork_beef);
            ?>
            <tr>
                <th>Свинина и Говядина</th>
            </tr>
            <?php if ($query_pork_beef->have_posts()):while ($query_pork_beef->have_posts()):$query_pork_beef->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_pork_beef_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_pork_beef[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif ?>
        </table>
        <!-- end table Свинина и Говядина  -->
        <table id="List-User"> <!-- table Говядина и Козел -->
            <?php $cat_beef_goat = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'говядина-и-козел', //Говядина и Козел
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_beef_goat = new WP_Query($cat_beef_goat);
            ?>
            <tr>
                <th>Говядина и Козел</th>
            </tr>
            <?php if ($query_beef_goat->have_posts()):while ($query_beef_goat->have_posts()):$query_beef_goat->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_beef_goat_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_beef_goat[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif ?>
        </table>
        <!-- end table Говядина и Козел -->
        <table id="List-User"> <!-- table Кальмар -->
            <?php $cat_squid = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'кальмар', // Кальмар
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_squid = new WP_Query($cat_squid);
            ?>
            <tr>
                <th>Кальмар</th>
            </tr>
            <?php if ($query_squid->have_posts()):while ($query_squid->have_posts()):$query_squid->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_squid_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_squid[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif ?>
        </table>

        <table id="List-User"> <!-- table Кальмар -->
            <?php $cat_rice_vermicelli = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'рисовая-вермишель', // Рисовая Вермишель
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_rice_vermicelli = new WP_Query($cat_rice_vermicelli);
            ?>
            <tr>
                <th>Рисовая Вермишель</th>
            </tr>
            <?php if ($query_rice_vermicelli->have_posts()):while ($query_rice_vermicelli->have_posts()):$query_rice_vermicelli->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_rice_vermicelli_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_rice_vermicelli[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif ?>
        </table>

        <table id="List-User"> <!-- table Шпинат -->
            <?php $cat_spinach = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'шпинат', // Шпинат
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_spinach = new WP_Query($cat_spinach);
            ?>
            <tr>
                <th>Шпинат</th>
            </tr>
            <?php if ($query_spinach->have_posts()):while ($query_spinach->have_posts()):$query_spinach->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_spinach_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_spinach[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif ?>
        </table>


        <table id="List-User"> <!-- table Утка -->
            <?php $cat_snails = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'улитки', // улитки
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_snails = new WP_Query($cat_snails);
            ?>
            <tr>
                <th>Улитки</th>
            </tr>
            <?php if ($query_snails->have_posts()):while ($query_snails->have_posts()):$query_snails->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_snails_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_snails[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif ?>
        </table>
        <table id="List-User">
            <?php $cat_dessert = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'десерты', // десерты
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_dessert = new WP_Query($cat_dessert);
            ?>
            <tr>
                <th>Десерты</th>
            </tr>
            <?php if ($query_dessert->have_posts()):while ($query_dessert->have_posts()):$query_dessert->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_dessert_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_dessert[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif ?>
        </table>
        <table id="List-User">
            <?php $cat_gas_drink = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'газированные-напитки', // газированные-напитки
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_gas_drink = new WP_Query($cat_gas_drink);
            ?>
            <tr>
                <th>Газированные напитки</th>
            </tr>
            <?php if ($query_gas_drink->have_posts()):while ($query_gas_drink->have_posts()):$query_gas_drink->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_gas_drink_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_gas_drink[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif ?>
        </table>
        <table id="List-User">
            <?php $cat_cafe_tea = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'кофе-и-чай', // 	кофе-и-чай
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_cafe_tea = new WP_Query($cat_cafe_tea);
            ?>
            <tr>
                <th>Кофе и Чай</th>
            </tr>
            <?php if ($query_cafe_tea->have_posts()):while ($query_cafe_tea->have_posts()):$query_cafe_tea->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_cafe_tea_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cafe_tea[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif ?>
        </table>
        <table id="List-User">
            <?php $cat_beer = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'пиво', // 	пиво
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_beer = new WP_Query($cat_beer);
            ?>
            <tr>
                <th>Пиво</th>
            </tr>
            <?php if ($query_beer->have_posts()):while ($query_beer->have_posts()):$query_beer->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_beer_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_beer[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif ?>
        </table>
        <table id="List-User">
            <?php $cat_vodka = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'водка', // водка
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_vodka = new WP_Query($cat_vodka);
            ?>
            <tr>
                <th>Водка</th>
            </tr>
            <?php if ($query_vodka->have_posts()):while ($query_vodka->have_posts()):$query_vodka->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_vodka_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_vodka[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif ?>
        </table>
        <table id="List-User">
            <?php $cat_champagne = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'шампанское', // шампанское
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_champagne = new WP_Query($cat_champagne);
            ?>
            <tr>
                <th>Шампанское</th>
            </tr>
            <?php if ($query_champagne->have_posts()):while ($query_champagne->have_posts()):$query_champagne->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_champagne_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_champagne[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif ?>
        </table>
        <table id="List-User">
            <?php $cat_whiskey = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'виски', // виски
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_whiskey = new WP_Query($cat_whiskey);
            ?>
            <tr>
                <th>Виски</th>
            </tr>
            <?php if ($query_whiskey->have_posts()):while ($query_whiskey->have_posts()):$query_whiskey->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_whiskey_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_whiskey[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif ?>
        </table>
        <table id="List-User">
            <?php $cat_cognac = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'коньяк', // 	коньяк
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_cognac= new WP_Query($cat_cognac);
            ?>
            <tr>
                <th>Коньяк</th>
            </tr>
            <?php if ($query_cognac->have_posts()):while ($query_cognac->have_posts()):$query_cognac->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_cognac_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cognac[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif ?>
        </table>
        <table id="List-User">
            <?php $cat_wine = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'вино', // 	вино
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_wine= new WP_Query($cat_wine);
            ?>
            <tr>
                <th>Вино</th>
            </tr>
            <?php if ($query_wine->have_posts()):while ($query_wine->have_posts()):$query_wine->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_wine_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_wine[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif ?>
        </table>
    </div><!-- end class menu-choose-->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('input#livesearch').liveSearch({
                table: 'table#List-User'
            });

        });
    </script>
    <?php
    $day_start = get_post_meta($post->ID, 'day_start', true);
    $time_start = get_post_meta($post->ID, 'time_start', true);
    $day_end = get_post_meta($post->ID, 'day_end', true);
    $time_end = get_post($post->ID, 'time_end', true);
    wp_nonce_field('save_day_start_nonce', 'info_day_start_nonce');
    wp_nonce_field('save_time_start_nonce', 'info_time_start_nonce');
    wp_nonce_field('save_day_end_nonce', 'info_day_end_nonce');
    wp_nonce_field('save_time_end_nonce', 'info_time_end_nonce');
    ?>
    <div class="menu-time">
        <label for=""><strong>Дополнительная информация</strong></label>
        <table>
            <tr>
                <td>Старт</td>
                <td> <!--start #day_start -->
                    <select name="day_start" id="day_start">
                        <option value="пн" <?php selected('пн', get_post_meta($post->ID, 'day_start', true)); ?> >
                            Понедельник
                        </option>
                        <option value="вт" <?php selected('вт', get_post_meta($post->ID, 'day_start', true)); ?> >
                            Вторник
                        </option>
                        <option value="ср" <?php selected('ср', get_post_meta($post->ID, 'day_start', true)); ?> >
                            Среда
                        </option>
                        <option value="чт" <?php selected('чт', get_post_meta($post->ID, 'day_start', true)); ?> >
                            Четверг
                        </option>
                        <option value="пт" <?php selected('пт', get_post_meta($post->ID, 'day_start', true)); ?> >
                            Пятница
                        </option>
                        <option value="сб" <?php selected('сб', get_post_meta($post->ID, 'day_start', true)); ?> >
                            Суббота
                        </option>
                        <option value="вс" <?php selected('вс', get_post_meta($post->ID, 'day_start', true)); ?> >
                            Воскресенье
                        </option>
                    </select>
                </td>
                <!--end #day_start -->
                <td><!--start #time_start -->
                    <select name="time_start" id="time_start">
                        <?php for ($i = 0; $i < 25; $i++): ?>
                            <?php $value_start = $i . ':00' ?>
                            <option
                                value="<?php echo $value_start; ?>" <?php selected($value_start, get_post_meta($post->ID, 'time_start', true)); ?>><?php echo $value_start; ?></option>
                        <?php endfor; ?>
                    </select>
                </td>
                <!--end #time_start -->
                <td>Стоп</td>
                <td> <!--start #day_end -->
                    <select name="day_end" id="day_end">
                        <option value="пн" <?php selected('пн', get_post_meta($post->ID, 'day_end', true)); ?> >
                            Понедельник
                        </option>
                        <option value="вт" <?php selected('вт', get_post_meta($post->ID, 'day_end', true)); ?> >
                            Вторник
                        </option>
                        <option value="ср" <?php selected('ср', get_post_meta($post->ID, 'day_end', true)); ?> >Среда
                        </option>
                        <option value="чт" <?php selected('чт', get_post_meta($post->ID, 'day_end', true)); ?> >
                            Четверг
                        </option>
                        <option value="пт" <?php selected('пт', get_post_meta($post->ID, 'day_end', true)); ?> >
                            Пятница
                        </option>
                        <option value="сб" <?php selected('сб', get_post_meta($post->ID, 'day_end', true)); ?> >
                            Суббота
                        </option>
                        <option value="вс" <?php selected('вс', get_post_meta($post->ID, 'day_end', true)); ?> >
                            Воскресенье
                        </option>
                    </select>
                </td>
                <!--end #day_end -->
                <td><!--end #time_end -->
                    <select name="time_end" id="time_end">
                        <?php for ($i = 0; $i < 25; $i++): ?>
                            <?php $value_end = $i . ':00' ?>
                            <option
                                value="<?php echo $value_end; ?>" <?php selected($value_end, get_post_meta($post->ID, 'time_end', true)); ?>><?php echo $value_end; ?></option>
                        <?php endfor; ?>
                    </select>
                </td>
                <!--end #time_end -->
            </tr>
        </table>

    </div><!-- -->
    <?php


}

add_action('save_post', 'save_form_menu_output');
function save_form_menu_output($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    //save data choose_food
  /*  if (!wp_verify_nonce($_POST['info_choose_rice_pancake_nonce'], 'save_choose_rice_pancake_nonce')) {
        return;
    }*/
    if (isset($_POST['choose_rice_pancake_array']) && $_POST['choose_rice_pancake_array'] !== "") {
        $custom = $_POST['choose_rice_pancake_array'];
        $old_meta = get_post_meta($post_id, 'choose_rice_pancake', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_rice_pancake', $custom);
        } else {
            add_post_meta($post_id, 'choose_rice_pancake', $custom);
            //$old_meta = array(0502);

        }


    } else {
        $custom = $_POST['choose_rice_pancake_array'];
        delete_post_meta($post_id, 'choose_rice_pancake', $custom);
    }

    if (isset($_POST['choose_rice_fish_array']) && $_POST['choose_rice_fish_array'] !== "") {
        $custom = $_POST['choose_rice_fish_array'];
        $old_meta = get_post_meta($post_id, 'choose_rice_fish', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_rice_fish', $custom);
        } else {
            add_post_meta($post_id, 'choose_rice_fish', $custom);

        }


    } else {
        $custom = $_POST['choose_rice_fish_array'];
        delete_post_meta($post_id, 'choose_rice_fish', $custom);
    }
    if (isset($_POST['choose_salad_array']) && $_POST['choose_salad_array'] !== "") {
        $custom = $_POST['choose_salad_array'];
        $old_meta = get_post_meta($post_id, 'choose_salad', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_salad', $custom);
        } else {
            add_post_meta($post_id, 'choose_salad', $custom);

        }


    } else {
        $custom = $_POST['choose_salad_array'];
        delete_post_meta($post_id, 'choose_salad', $custom);
    }

    if (isset($_POST['choose_soup_array']) && $_POST['choose_soup_array'] !== "") {
        $custom = $_POST['choose_soup_array'];
        $old_meta = get_post_meta($post_id, 'choose_soup', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_soup', $custom);
        } else {
            add_post_meta($post_id, 'choose_soup', $custom);

        }


    } else {
        $custom = $_POST['choose_soup_array'];
        delete_post_meta($post_id, 'choose_soup', $custom);
    }

    if (isset($_POST['choose_fish_array']) && $_POST['choose_fish_array'] !== "") {
        $custom = $_POST['choose_fish_array'];
        $old_meta = get_post_meta($post_id, 'choose_fish', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_fish', $custom);
        } else {
            add_post_meta($post_id, 'choose_fish', $custom);

        }


    } else {
        $custom = $_POST['choose_fish_array'];
        delete_post_meta($post_id, 'choose_fish', $custom);
    }

    if (isset($_POST['choose_shrimp_array']) && $_POST['choose_shrimp_array'] !== "") {
        $custom = $_POST['choose_shrimp_array'];
        $old_meta = get_post_meta($post_id, 'choose_shrimp', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_shrimp', $custom);
        } else {
            add_post_meta($post_id, 'choose_shrimp', $custom);

        }


    } else {
        $custom = $_POST['choose_shrimp_array'];
        delete_post_meta($post_id, 'choose_shrimp', $custom);
    }

    if (isset($_POST['choose_frog_eel_array']) && $_POST['choose_frog_eel_array'] !== "") {
        $custom = $_POST['choose_frog_eel_array'];
        $old_meta = get_post_meta($post_id, 'choose_frog_eel', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_frog_eel', $custom);
        } else {
            add_post_meta($post_id, 'choose_frog_eel', $custom);

        }


    } else {
        $custom = $_POST['choose_frog_eel_array'];
        delete_post_meta($post_id, 'choose_frog_eel', $custom);
    }

    if (isset($_POST['choose_chicken_quail_array']) && $_POST['choose_chicken_quail_array'] !== "") {
        $custom = $_POST['choose_chicken_quail_array'];
        $old_meta = get_post_meta($post_id, 'choose_chicken_quail', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_chicken_quail', $custom);
        } else {
            add_post_meta($post_id, 'choose_chicken_quail', $custom);

        }


    } else {
        $custom = $_POST['choose_chicken_quail_array'];
        delete_post_meta($post_id, 'choose_chicken_quail', $custom);
    }

    if (isset($_POST['choose_duck_array']) && $_POST['choose_duck_array'] !== "") {
        $custom = $_POST['choose_duck_array'];
        $old_meta = get_post_meta($post_id, 'choose_duck', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_duck', $custom);
        } else {
            add_post_meta($post_id, 'choose_duck', $custom);

        }


    } else {
        $custom = $_POST['choose_duck_array'];
        delete_post_meta($post_id, 'choose_duck', $custom);
    }

    if (isset($_POST['choose_pork_beef_array']) && $_POST['choose_pork_beef_array'] !== "") {
        $custom = $_POST['choose_pork_beef_array'];
        $old_meta = get_post_meta($post_id, 'choose_pork_beef', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_pork_beef', $custom);
        } else {
            add_post_meta($post_id, 'choose_pork_beef', $custom);

        }


    } else {
        $custom = $_POST['choose_pork_beef_array'];
        delete_post_meta($post_id, 'choose_pork_beef', $custom);
    }

    if (isset($_POST['choose_beef_goat_array']) && $_POST['choose_beef_goat_array'] !== "") {
        $custom = $_POST['choose_beef_goat_array'];
        $old_meta = get_post_meta($post_id, 'choose_beef_goat', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_beef_goat', $custom);
        } else {
            add_post_meta($post_id, 'choose_beef_goat', $custom);

        }


    } else {
        $custom = $_POST['choose_beef_goat_array'];
        delete_post_meta($post_id, 'choose_beef_goat', $custom);
    }

    if (isset($_POST['choose_squid_array']) && $_POST['choose_squid_array'] !== "") {
        $custom = $_POST['choose_squid_array'];
        $old_meta = get_post_meta($post_id, 'choose_squid', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_squid', $custom);
        } else {
            add_post_meta($post_id, 'choose_squid', $custom);

        }


    } else {
        $custom = $_POST['choose_squid_array'];
        delete_post_meta($post_id, 'choose_squid', $custom);
    }

    if (isset($_POST['choose_rice_vermicelli_array']) && $_POST['choose_rice_vermicelli_array'] !== "") {
        $custom = $_POST['choose_rice_vermicelli_array'];
        $old_meta = get_post_meta($post_id, 'choose_rice_vermicelli', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_rice_vermicelli', $custom);
        } else {
            add_post_meta($post_id, 'choose_rice_vermicelli', $custom);

        }


    } else {
        $custom = $_POST['choose_rice_vermicelli_array'];
        delete_post_meta($post_id, 'choose_rice_vermicelli', $custom);
    }
    if (isset($_POST['choose_spinach_array']) && $_POST['choose_spinach_array'] !== "") {
        $custom = $_POST['choose_spinach_array'];
        $old_meta = get_post_meta($post_id, 'choose_spinach', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_spinach', $custom);
        } else {
            add_post_meta($post_id, 'choose_spinach', $custom);

        }


    } else {
        $custom = $_POST['choose_spinach_array'];
        delete_post_meta($post_id, 'choose_spinach', $custom);
    }
    if (isset($_POST['choose_snails_array']) && $_POST['choose_snails_array'] !== "") {
        $custom = $_POST['choose_snails_array'];
        $old_meta = get_post_meta($post_id, 'choose_snails', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_snails', $custom);
        } else {
            add_post_meta($post_id, 'choose_snails', $custom);

        }


    } else {
        $custom = $_POST['choose_snails_array'];
        delete_post_meta($post_id, 'choose_snails', $custom);
    }

    if (isset($_POST['choose_dessert_array']) && $_POST['choose_dessert_array'] !== "") {
        $custom = $_POST['choose_dessert_array'];
        $old_meta = get_post_meta($post_id, 'choose_dessert', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_dessert', $custom);
        } else {
            add_post_meta($post_id, 'choose_dessert', $custom);

        }


    } else {
        $custom = $_POST['choose_dessert_array'];
        delete_post_meta($post_id, 'choose_dessert', $custom);
    }
    if (isset($_POST['choose_gas_drink_array']) && $_POST['choose_gas_drink_array'] !== "") {
        $custom = $_POST['choose_gas_drink_array'];
        $old_meta = get_post_meta($post_id, 'choose_gas_drink', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_gas_drink', $custom);
        } else {
            add_post_meta($post_id, 'choose_gas_drink', $custom);

        }


    } else {
        $custom = $_POST['choose_gas_drink_array'];
        delete_post_meta($post_id, 'choose_gas_drink', $custom);
    }

    if (isset($_POST['choose_cafe_tea_array']) && $_POST['choose_cafe_tea_array'] !== "") {
        $custom = $_POST['choose_cafe_tea_array'];
        $old_meta = get_post_meta($post_id, 'choose_cafe_tea', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_cafe_tea', $custom);
        } else {
            add_post_meta($post_id, 'choose_cafe_tea', $custom);

        }


    } else {
        $custom = $_POST['choose_cafe_tea_array'];
        delete_post_meta($post_id, 'choose_cafe_tea', $custom);
    }

    if (isset($_POST['choose_beer_array']) && $_POST['choose_beer_array'] !== "") {
        $custom = $_POST['choose_beer_array'];
        $old_meta = get_post_meta($post_id, 'choose_beer', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_beer', $custom);
        } else {
            add_post_meta($post_id, 'choose_beer', $custom);

        }


    } else {
        $custom = $_POST['choose_beer_array'];
        delete_post_meta($post_id, 'choose_beer', $custom);
    }
    if (isset($_POST['choose_vodka_array']) && $_POST['choose_vodka_array'] !== "") {
        $custom = $_POST['choose_vodka_array'];
        $old_meta = get_post_meta($post_id, 'choose_vodka', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_vodka', $custom);
        } else {
            add_post_meta($post_id, 'choose_vodka', $custom);

        }


    } else {
        $custom = $_POST['choose_vodka_array'];
        delete_post_meta($post_id, 'choose_vodka', $custom);
    }
    if (isset($_POST['choose_champagne_array']) && $_POST['choose_champagne_array'] !== "") {
        $custom = $_POST['choose_champagne_array'];
        $old_meta = get_post_meta($post_id, 'choose_champagne', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_champagne', $custom);
        } else {
            add_post_meta($post_id, 'choose_champagne', $custom);

        }


    } else {
        $custom = $_POST['choose_champagne_array'];
        delete_post_meta($post_id, 'choose_champagne', $custom);
    }

    if (isset($_POST['choose_whiskey_array']) && $_POST['choose_whiskey_array'] !== "") {
        $custom = $_POST['choose_whiskey_array'];
        $old_meta = get_post_meta($post_id, 'choose_whiskey', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_whiskey', $custom);
        } else {
            add_post_meta($post_id, 'choose_whiskey', $custom);

        }


    } else {
        $custom = $_POST['choose_whiskey_array'];
        delete_post_meta($post_id, 'choose_whiskey', $custom);
    }

    if (isset($_POST['choose_cognac_array']) && $_POST['choose_cognac_array'] !== "") {
        $custom = $_POST['choose_cognac_array'];
        $old_meta = get_post_meta($post_id, 'choose_cognac', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_cognac', $custom);
        } else {
            add_post_meta($post_id, 'choose_cognac', $custom);

        }


    } else {
        $custom = $_POST['choose_cognac_array'];
        delete_post_meta($post_id, 'choose_cognac', $custom);
    }

    if (isset($_POST['choose_wine_array']) && $_POST['choose_wine_array'] !== "") {
        $custom = $_POST['choose_wine_array'];
        $old_meta = get_post_meta($post_id, 'choose_wine', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_wine', $custom);
        } else {
            add_post_meta($post_id, 'choose_wine', $custom);

        }


    } else {
        $custom = $_POST['choose_wine_array'];
        delete_post_meta($post_id, 'choose_wine', $custom);
    }


    //************ save data day_start *******************//
    if (!wp_verify_nonce($_POST['info_day_start_nonce'], 'save_day_start_nonce')) {
        return;
    }
    if (isset($_POST['day_start']) && $_POST['day_start'] !== "") {
        update_post_meta($post_id, 'day_start', $_POST['day_start']);
    }
    // save data day_end
    if (!wp_verify_nonce($_POST['info_day_end_nonce'], 'save_day_end_nonce')) {
        return;
    }
    if (isset($_POST['day_end']) && $_POST['day_end'] !== "") {
        update_post_meta($post_id, 'day_end', $_POST['day_end']);
    }
    // save data time_start
    if (!wp_verify_nonce($_POST['info_time_start_nonce'], 'save_time_start_nonce')) {
        return;
    }
    if (isset($_POST['time_start']) && $_POST['time_start'] !== "") {
        update_post_meta($post_id, 'time_start', $_POST['time_start']);
    }// save data time_end
    if (!wp_verify_nonce($_POST['info_time_end_nonce'], 'save_time_end_nonce')) {
        return;
    }
    if (isset($_POST['time_end']) && $_POST['time_end'] !== "") {
        update_post_meta($post_id, 'time_end', $_POST['time_end']);
    }

}

?>