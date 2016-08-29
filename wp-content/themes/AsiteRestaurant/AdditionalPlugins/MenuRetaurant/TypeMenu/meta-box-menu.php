<?php
/**
 * File Name: meta-box-menu.php
 * Date: 23-06-2016
 * Time: 23:07
 * Description: Meta box menu show foods
 */
add_action('add_meta_boxes', 'metabox_menu');
function metabox_menu()
{
    add_meta_box('metabox_menu', 'Выбор блюд для меню', 'form_menu_output', 'menu');
}

function form_menu_output($post)
{

    $choose_food = array(get_post_meta($post->ID, 'choose_food', true));

    $choose_cat_53 = array(get_post_meta($post->ID, 'choose_cat_53', true));////Горячие Закуски
    $choose_cat_55 = array(get_post_meta($post->ID, 'choose_cat_55', true)); ////Вегетарианские Блюда
    $choose_cat_50 = array(get_post_meta($post->ID, 'choose_cat_50', true)); //Салаты
    $choose_cat_52 = array(get_post_meta($post->ID, 'choose_cat_52', true));//Супы
    $choose_cat_51 = array(get_post_meta($post->ID, 'choose_cat_51', true));////Холодные Закуски
    $choose_cat_54 = array(get_post_meta($post->ID, 'choose_cat_54', true)); //Основные Блюда
    $choose_cat_56 = array(get_post_meta($post->ID, 'choose_cat_56', true)); ////Специальное Предложение
    $choose_cat_57 = array(get_post_meta($post->ID, 'choose_cat_57', true));////Напитки
    $choose_cat_12 = array(get_post_meta($post->ID, 'choose_cat_12', true)); //десерты

    wp_nonce_field('save_choose_food_nonce', 'info_choose_food_nonce');
    wp_nonce_field('save_choose_cat_53_nonce', 'info_choose_cat_53_nonce');
    wp_nonce_field('save_choose_cat_55_nonce', 'info_choose_cat_55_nonce');
    wp_nonce_field('save_choose_cat_50_nonce', 'info_choose_cat_50_nonce');
    wp_nonce_field('save_choose_cat_52_nonce', 'info_choose_cat_52_nonce');
    wp_nonce_field('save_choose_cat_51_nonce', 'info_choose_cat_51_nonce');
    wp_nonce_field('save_choose_cat_54_nonce', 'info_choose_cat_54_nonce');
    wp_nonce_field('save_choose_cat_56_nonce', 'info_choose_cat_56_nonce');
    wp_nonce_field('save_choose_cat_57_nonce', 'info_choose_cat_57_nonce');
    wp_nonce_field('save_choose_cat_12_nonce', 'info_choose_cat_12_nonce');
    if (empty($choose_cat_53[0])) {
        // set default data for array
        $choose_cat_53[0] = array(0502);
    }
    if (empty($choose_cat_55[0])) {
        // set default data for array
        $choose_cat_55[0] = array(0502);
    }
    if (empty($choose_cat_50[0])) {
        // set default data for array
        $choose_cat_50[0] = array(0502);
    }
    if (empty($choose_cat_52[0])) {
        // set default data for array
        $choose_cat_52[0] = array(0502);
    }
    if (empty($choose_cat_51[0])) {
        // set default data for array
        $choose_cat_51[0] = array(0502);
    }
    if (empty($choose_cat_54[0])) {
        // set default data for array
        $choose_cat_54[0] = array(0502);
    }
    if (empty($choose_cat_56[0])) {
        // set default data for array
        $choose_cat_56[0] = array(0502);
    }
    if (empty($choose_cat_57[0])) {
        // set default data for array
        $choose_cat_57[0] = array(0502);
    }
    if (empty($choose_cat_12[0])) {
        // set default data for array
        $choose_cat_12[0] = array(0502);
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
                    <td><input type="checkbox" name="choose_cat_53_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_53[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
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
                    <td><input type="checkbox" name="choose_cat_55_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_55[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
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
                    <td><input type="checkbox" name="choose_cat_50_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_50[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
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
                    <td><input type="checkbox" name="choose_cat_52_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_52[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
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
                    <td><input type="checkbox" name="choose_cat_51_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_51[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
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
                    <td><input type="checkbox" name="choose_cat_54_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_54[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
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
                    <td><input type="checkbox" name="choose_cat_56_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_56[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
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
                    <td><input type="checkbox" name="choose_cat_57_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_57[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
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
                    <td><input type="checkbox" name="choose_cat_12_array[]"
                               value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_12[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
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
    if (!wp_verify_nonce($_POST['info_choose_cat_53_nonce'], 'save_choose_cat_53_nonce')) {
        return;
    }
    if (isset($_POST['choose_cat_53_array']) && $_POST['choose_cat_53_array'] !== "") {
        $custom = $_POST['choose_cat_53_array'];
        $old_meta = get_post_meta($post_id, 'choose_cat_53', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_cat_53', $custom);
        } else {
            add_post_meta($post_id, 'choose_cat_53', $custom);

        }


    }

    if (isset($_POST['choose_cat_55_array']) && $_POST['choose_cat_55_array'] !== "") {
        $custom = $_POST['choose_cat_53_array'];
        $old_meta = get_post_meta($post_id, 'choose_cat_55', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_cat_55', $custom);
        } else {
            add_post_meta($post_id, 'choose_cat_55', $custom);

        }


    }
    if (isset($_POST['choose_cat_50_array']) && $_POST['choose_cat_50_array'] !== "") {
        $custom = $_POST['choose_cat_50_array'];
        $old_meta = get_post_meta($post_id, 'choose_cat_50', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_cat_50', $custom);
        } else {
            add_post_meta($post_id, 'choose_cat_50', $custom);

        }


    }

    if (isset($_POST['choose_cat_52_array']) && $_POST['choose_cat_52_array'] !== "") {
        $custom = $_POST['choose_cat_52_array'];
        $old_meta = get_post_meta($post_id, 'choose_cat_52', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_cat_52', $custom);
        } else {
            add_post_meta($post_id, 'choose_cat_52', $custom);

        }


    }
    if (isset($_POST['choose_cat_51_array']) && $_POST['choose_cat_51_array'] !== "") {
        $custom = $_POST['choose_cat_51_array'];
        $old_meta = get_post_meta($post_id, 'choose_cat_51', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_cat_51', $custom);
        } else {
            add_post_meta($post_id, 'choose_cat_51', $custom);

        }


    }
    if (isset($_POST['choose_cat_54_array']) && $_POST['choose_cat_54_array'] !== "") {
        $custom = $_POST['choose_cat_54_array'];
        $old_meta = get_post_meta($post_id, 'choose_cat_54', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_cat_54', $custom);
        } else {
            add_post_meta($post_id, 'choose_cat_54', $custom);

        }


    }
    if (isset($_POST['choose_cat_56_array']) && $_POST['choose_cat_56_array'] !== "") {
        $custom = $_POST['choose_cat_56_array'];
        $old_meta = get_post_meta($post_id, 'choose_cat_56', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_cat_56', $custom);
        } else {
            add_post_meta($post_id, 'choose_cat_56', $custom);

        }


    }
    if (isset($_POST['choose_cat_57_array']) && $_POST['choose_cat_57_array'] !== "") {
        $custom = $_POST['choose_cat_57_array'];
        $old_meta = get_post_meta($post_id, 'choose_cat_57', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_cat_57', $custom);
        } else {
            add_post_meta($post_id, 'choose_cat_57', $custom);

        }


    }
    if (isset($_POST['choose_cat_12_array']) && $_POST['choose_cat_12_array'] !== "") {
        $custom = $_POST['choose_cat_12_array'];
        $old_meta = get_post_meta($post_id, 'choose_cat_12', true);
        // Update post meta
        if (!empty($old_meta)) {
            update_post_meta($post_id, 'choose_cat_12', $custom);
        } else {
            add_post_meta($post_id, 'choose_cat_12', $custom);

        }


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