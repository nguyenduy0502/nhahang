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

    $choose_hot_snack = array(get_post_meta($post->ID, 'choose_hot_snack', true));////hotSnack
    $choose_vegetarian = array(get_post_meta($post->ID, 'choose_vegetarian', true)); ////choose_vegetarian
    $choose_salad = array(get_post_meta($post->ID, 'choose_salad', true)); //choose_salad
    $choose_soup = array(get_post_meta($post->ID, 'choose_soup', true));//Soup
    $choose_cold_snack = array(get_post_meta($post->ID, 'choose_cold_snack', true));////choose_cold_snack
    $choose_main_dishes = array(get_post_meta($post->ID, 'choose_main_dishes', true)); //Main_dishes
    $choose_special_food = array(get_post_meta($post->ID, 'choose_special_food', true)); ////Special offer
    $choose_drink = array(get_post_meta($post->ID, 'choose_drink', true));////Drinks
    $choose_dessert = array(get_post_meta($post->ID, 'choose_dessert', true)); //Dessert


    wp_nonce_field('save_choose_food_nonce', 'info_choose_food_nonce');
    wp_nonce_field('save_choose_hot_snack_nonce', 'info_choose_hot_snack_nonce');
    wp_nonce_field('save_choose_vegetarian_nonce', 'info_choose_vegetarian_nonce');
    wp_nonce_field('save_choose_salad_nonce', 'info_choose_salad_nonce');
    wp_nonce_field('save_choose_soup_nonce', 'info_choose_soup_nonce');
    wp_nonce_field('save_choose_cold_snack_nonce', 'info_choose_cold_snack_nonce');
    wp_nonce_field('save_choose_main_dishes_nonce', 'info_choose_main_dishes_nonce');
    wp_nonce_field('save_choose_special_food_nonce', 'info_choose_special_food_nonce');
    wp_nonce_field('save_choose_drink_nonce', 'info_choose_drink_nonce');
    wp_nonce_field('save_choose_dessert_nonce', 'info_choose_dessert_nonce');
    if (empty($choose_hot_snack[0])) {
        // set default data for array
        $choose_hot_snack[0] = array(145123);
    }
    if (empty($choose_vegetarian[0])) {
        // set default data for array
        $choose_vegetarian[0] = array(145123);
    }
    if (empty($choose_salad[0])) {
        // set default data for array
        $choose_salad[0] = array(145123);
    }
    if (empty($choose_soup[0])) {
        // set default data for array
        $choose_soup[0] = array(145123);
    }
    if (empty($choose_cold_snack[0])) {
        // set default data for array
        $choose_cold_snack[0] = array(145123);
    }
    if (empty($choose_main_dishes[0])) {
        // set default data for array
        $choose_main_dishes[0] = array(145123);
    }
    if (empty($choose_special_food[0])) {
        // set default data for array
        $choose_special_food[0] = array(145123);
    }
    if (empty($choose_drink[0])) {
        // set default data for array
        $choose_drink[0] = array(145123);
    }
    if (empty($choose_dessert[0])) {
        // set default data for array
        $choose_dessert[0] = array(145123);
    }
    ?>
    <?php $args_cats = array('taxonomy' => 'cuisine'); // get category cuisine
    $cats = get_categories($args_cats)// set list categories
    ?>
    <input class="form-control" id="livesearch" placeholder="Поиск блюдо" type="text" style="width: 300px"/>
    <div class="menu-choose" style="">

        <table id="List-User"><!-- table Горячие Закуски -->
            <?php $cat_53 = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'горячие-закуски', //Горячие Закуски
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_53 = new WP_Query($cat_53);
            ?>
            <tr>
                <th>Горячие Закуски</th>
            </tr>
            <?php if ($query_53->have_posts()): while ($query_53->have_posts()):$query_53->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_hot_snack_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_hot_snack[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif; // end query for cat 53
            ?>
        </table>
        <!-- end table Горячие Закуски -->
        <table id="List-User"><!-- table Вегетарианские Блюда -->
            <?php $cat_55 = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'вегетарианские-блюда', //Вегетарианские Блюда
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_55 = new WP_Query($cat_55);
            ?>
            <tr>
                <th>Вегетарианские Блюда</th>
            </tr>
            <?php if ($query_55->have_posts()):while ($query_55->have_posts()):$query_55->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_vegetarian_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_vegetarian[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif // end query for cat 55
            ?>
        </table>
        <!-- end table Вегетарианские Блюда -->
        <table id="List-User"><!-- table Салаты -->
            <?php $cat_50 = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'салаты', //Салаты
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_50 = new WP_Query($cat_50);
            ?>
            <tr>
                <th>Салаты</th>
            </tr>
            <?php if ($query_50->have_posts()):while ($query_50->have_posts()):$query_50->the_post(); ?>
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
            <?php $cat_52 = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'супы', //Супы
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_52 = new WP_Query($cat_52);
            ?>
            <tr>
                <th>Супы</th>
            </tr>
            <?php if ($query_52->have_posts()):while ($query_52->have_posts()):$query_52->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_soup_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_soup[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif // end query for cat 52
            ?>
        </table>
        <!-- end table Супы -->
        <table id="List-User"><!-- table Холодные Закуски -->
            <?php $cat_51 = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'холодные-закуски', //Холодные Закуски
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_51 = new WP_Query($cat_51);
            ?>
            <tr>
                <th>Холодные Закуски</th>
            </tr>
            <?php if ($query_51->have_posts()):while ($query_51->have_posts()):$query_51->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_cold_snack_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cold_snack[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif // end query for cat 51
            ?>
        </table>
        <!-- end table Холодные Закуски -->
        <table id="List-User"> <!-- table Основные Блюда -->
            <?php $cat_54 = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'основные-блюда', //Основные Блюда
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_54 = new WP_Query($cat_54);
            ?>
            <tr>
                <th>Основные Блюдаи</th>
            </tr>
            <?php if ($query_54->have_posts()):while ($query_54->have_posts()):$query_54->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_main_dishes_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_main_dishes[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif // end query for cat 54
            ?>
        </table>
        <!-- end table Основные Блюда -->
        <table id="List-User"> <!-- table Специальное Предложение -->
            <?php $cat_56 = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'специальное-предложение', //Специальное Предложение
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_56 = new WP_Query($cat_56);
            ?>
            <tr>
                <th>Специальное Предложение</th>
            </tr>
            <?php if ($query_56->have_posts()):while ($query_56->have_posts()):$query_56->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_special_food_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_special_food[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>

                </tr>
                <?php wp_reset_query(); endwhile; endif // end query for cat 56
            ?>
        </table>
        <!-- end table Специальное Предложение -->
        <table id="List-User"> <!-- table Напитки -->
            <?php $cat_57 = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'напитки', //Напитки
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_57 = new WP_Query($cat_57);
            ?>
            <tr>
                <th>Напитки</th>
            </tr>
            <?php if ($query_57->have_posts()):while ($query_57->have_posts()):$query_57->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_drink_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_drink[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif // end query for cat 57
            ?>
        </table>
        <!-- end table Напитки -->
        <table id="List-User"> <!-- table десерты -->
            <?php $cat_12 = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cuisine',
                        'field' => 'slug',
                        'terms' => 'десерты', //десерты
                    )),
                'posts_per_page' => -1 // get all
            );
            $query_12 = new WP_Query($cat_12);
            ?>
            <tr>
                <th>Десерты</th>
            </tr>
            <?php if ($query_12->have_posts()):while ($query_12->have_posts()):$query_12->the_post(); ?>
                <tr>
                    <td><input type="checkbox" name="choose_dessert_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_dessert[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
                    </td>
                </tr>
                <?php wp_reset_query(); endwhile; endif // end query for cat 12
            ?>
        </table>
        <!-- end table десерты -->
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
    if (!wp_verify_nonce($_POST['info_choose_hot_snack_nonce'], 'save_choose_hot_snack_nonce')) {
        return;
    }
    if (isset($_POST['choose_hot_snack_array']) && $_POST['choose_hot_snack_array'] !== "") {
        $custom = $_POST['choose_hot_snack_array'];
        $old_meta = get_post_meta($post_id, 'choose_hot_snack', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_hot_snack', $custom);
        } else {
            add_post_meta($post_id, 'choose_hot_snack', $custom);
            //$old_meta = array(0502);

        }


    } else {
        $custom = $_POST['choose_hot_snack_array'];
        delete_post_meta($post_id, 'choose_hot_snack',$custom);
    }

    if (isset($_POST['choose_vegetarian_array']) && $_POST['choose_vegetarian_array'] !== "") {
        $custom = $_POST['choose_vegetarian_array'];
        $old_meta = get_post_meta($post_id, 'choose_vegetarian', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_vegetarian', $custom);
        } else {
            add_post_meta($post_id, 'choose_vegetarian', $custom);

        }


    }else {
        $custom = $_POST['choose_vegetarian_array'];
        delete_post_meta($post_id, 'choose_vegetarian',$custom);
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


    }else {
        $custom = $_POST['choose_salad_array'];
        delete_post_meta($post_id, 'choose_salad',$custom);
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


    }else {
        $custom = $_POST['choose_soup_array'];
        delete_post_meta($post_id, 'choose_soup',$custom);
    }

    if (isset($_POST['choose_cold_snack_array']) && $_POST['choose_cold_snack_array'] !== "") {
        $custom = $_POST['choose_cold_snack_array'];
        $old_meta = get_post_meta($post_id, 'choose_cold_snack', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_cold_snack', $custom);
        } else {
            add_post_meta($post_id, 'choose_cold_snack', $custom);

        }


    }else {
        $custom = $_POST['choose_cold_snack_array'];
        delete_post_meta($post_id, 'choose_cold_snack',$custom);
    }

    if (isset($_POST['choose_main_dishes_array']) && $_POST['choose_main_dishes_array'] !== "") {
        $custom = $_POST['choose_main_dishes_array'];
        $old_meta = get_post_meta($post_id, 'choose_main_dishes', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_main_dishes', $custom);
        } else {
            add_post_meta($post_id, 'choose_main_dishes', $custom);

        }


    }else {
        $custom = $_POST['choose_main_dishes_array'];
        delete_post_meta($post_id, 'choose_main_dishes',$custom);
    }

    if (isset($_POST['choose_special_food_array']) && $_POST['choose_special_food_array'] !== "") {
        $custom = $_POST['choose_special_food_array'];
        $old_meta = get_post_meta($post_id, 'choose_special_food', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_special_food', $custom);
        } else {
            add_post_meta($post_id, 'choose_special_food', $custom);

        }


    }else {
        $custom = $_POST['choose_special_food_array'];
        delete_post_meta($post_id, 'choose_special_food',$custom);
    }

    if (isset($_POST['choose_drink_array']) && $_POST['choose_drink_array'] !== "") {
        $custom = $_POST['choose_drink_array'];
        $old_meta = get_post_meta($post_id, 'choose_drink', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_drink', $custom);
        } else {
            add_post_meta($post_id, 'choose_drink', $custom);

        }


    }else {
        $custom = $_POST['choose_drink_array'];
        delete_post_meta($post_id, 'choose_drink',$custom);
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


    }else {
        $custom = $_POST['choose_dessert_array'];
        delete_post_meta($post_id, 'choose_dessert',$custom);
    }

    // save data day_start
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