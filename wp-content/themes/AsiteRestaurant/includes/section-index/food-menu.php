<!-- <div class="food-menu section fp-auto-height clearfix" id="section3" data-anchor="food-menu"> -->
<div class="food-menu section clearfix" id="food-menu">

    <?php
    $arr = array(
        'post_type' => 'menu', // get post type
        'posts_per_page' => 1,
        'post_name__in' => ['вьетланч'] // name slug
    );
    $query = new WP_Query();
    $query->query($arr);
    if ($query->have_posts()): while ($query->have_posts()):$query->the_post();
        $post_id = $post->ID;

        $arr_tab1 = get_post_meta($post_id, 'choose_cat_52'); // Суп

        (!empty(get_post_meta($post_id, 'choose_cat_50',true)))? $arr_salad=get_post_meta($post_id, 'choose_cat_50',true):$arr_salad=array(0502);// Салат
        (!empty(get_post_meta($post_id, 'choose_cat_51',true)))? $arr_cold_food=get_post_meta($post_id, 'choose_cat_51',true):$arr_cold_food=array(0502); // Холодные Закуски
        $arr_tab2 = array_merge($arr_salad,$arr_cold_food);  // merge array Салат and Холодные Закуски

        (!empty(get_post_meta($post_id, 'choose_cat_53',true)))? $arr_snack=get_post_meta($post_id, 'choose_cat_53',true):$arr_snack=array(0502);//Горячие Закуски
        (!empty(get_post_meta($post_id, 'choose_cat_54',true)))? $arr_main_dishes=get_post_meta($post_id, 'choose_cat_54',true):$arr_main_dishes=array(0502);// Основные Блюда
        $arr_tab3 = array_merge($arr_snack,$arr_main_dishes); // merge array Закуски and  Основные Блюда

        (!empty(get_post_meta($post_id, 'choose_cat_57',true)))? $arr_drinks=get_post_meta($post_id, 'choose_cat_57',true):$arr_drinks=array(0502);//Напитки
        (!empty(get_post_meta($post_id, 'choose_cat_12',true)))? $arr_dessert=get_post_meta($post_id, 'choose_cat_12',true):$arr_dessert=array(0502);//десерты
        $arr_tab4 = array_merge($arr_drinks,$arr_dessert); // merge array десерты and Напитки

        $link_menu = get_permalink();
    endwhile; endif;
    wp_reset_query();
    ?>
    <div class="container">

        <div class="menu-food">
            <div class="section-title food-menu-title">
                <a href="<?php the_permalink($post_id); ?>" title="<?php echo get_the_title($post_id); ?>">
                    <h1><?php echo get_the_title($post_id); ?></h1></a>

                <h2>350 руб.</h2>
                <ul id="tabs">
                    <li><a href="#" class="tab1"><h2>Суп</h2></a></li>
                    <li><a href="#" class="tab2"><h2>Салат</h2></a></li>
                    <li><a href="#" class="tab3"><h2>Горячее</h2></a></li>
                    <li><a href="#" class="tab4"><h2>Напитки</h2></a></li>
                </ul>
            </div>
            <div id="content">
                <div id="tab1">
                    <table>
                        <tbody>
                        <?php
                        $args_tab1 = array(
                            'post__in' => $arr_tab1[0],
                            'post_type' => 'food'
                        );
                        $query_tab1 = new WP_Query();
                        $query_tab1->query($args_tab1);
                        if ($query_tab1->have_posts()):while ($query_tab1->have_posts()):$query_tab1->the_post(); ?>
                            <tr>
                                <td>
                                    <?php if (has_post_thumbnail()): // check has post thumbnails?>
                                        <div class="food">
                                            <img src="<?php the_post_thumbnail_url('medium'); ?>"
                                                 alt="<?php echo $ingredient_food = get_post_meta($post->ID, 'ingredient_food', true);
                                                 echo ' - ';
                                                 bloginfo('name'); ?>" title="<?php the_title(); ?>">
                                        </div>
                                    <?php else: ?>
                                        <div class="food">
                                            <img src="<?php echo TEMPLATE_FOLDER . '/img/logo.jpg'; ?>"
                                                 alt="<?php echo $ingredient_food = get_post_meta($post->ID, 'ingredient_food', true);
                                                 echo ' - ';
                                                 bloginfo('name'); ?>" title="<?php the_title(); ?>">
                                        </div>
                                    <?php endif; // end check
                                    ?>
                                </td>
                                <td><a href="<?php the_permalink() ?>"
                                       title="<?php the_title(); ?>"><?php the_title(); ?></a></td>
                                <td><?php the_terms($post->ID, 'cuisine'); ?></td>
                                <td><?php echo get_post_meta($post->ID, 'ingredient_food', true); ?></td>
                                <!--<td class="food-text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</td> -->
                            </tr>
                        <?php endwhile; endif; ?>
                        <?php wp_reset_query(); ?>
                        </tbody>
                    </table>
                </div>
                <div id="tab2">
                    <table>
                        <tbody>
                        <?php
                        $args_tab2 = array(
                            'post__in' => $arr_tab2,
                            'post_type' => 'food'
                        );
                        $query_tab2 = new WP_Query();
                        $query_tab2->query($args_tab2);
                        if ($query_tab2->have_posts()):while ($query_tab2->have_posts()):$query_tab2->the_post(); ?>
                            <tr>
                                <td>
                                    <?php if (has_post_thumbnail()): // check has post thumbnails?>
                                        <div class="food">
                                            <img src="<?php the_post_thumbnail_url('medium'); ?>"
                                                 alt="<?php echo $ingredient_food = get_post_meta($post->ID, 'ingredient_food', true);
                                                 echo ' - ';
                                                 bloginfo('name'); ?>" title="<?php the_title(); ?>">
                                        </div>
                                    <?php else: ?>
                                        <div class="food">
                                            <img src="<?php echo TEMPLATE_FOLDER . '/img/logo.jpg'; ?>"
                                                 alt="<?php echo $ingredient_food = get_post_meta($post->ID, 'ingredient_food', true);
                                                 echo ' - ';
                                                 bloginfo('name'); ?>" title="<?php the_title(); ?>">
                                        </div>
                                    <?php endif; // end check
                                    ?>
                                </td>
                                <td><a href="<?php the_permalink() ?>"
                                       title="<?php the_title(); ?>"><?php the_title(); ?></a></td>
                                <td><?php the_terms($post->ID, 'cuisine'); ?></td>
                                <td><?php echo get_post_meta($post->ID, 'ingredient_food', true); ?></td>
                                <!--<td class="food-text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</td> -->

                            </tr>
                        <?php endwhile; endif; ?>
                        <?php wp_reset_query(); ?>
                        </tbody>
                    </table>
                </div>
                <div id="tab3">
                    <table>
                        <tbody>
                        <?php
                        $args_tab3 = array(
                            'post__in' => $arr_tab3,
                            'post_type' => 'food'
                        );
                        $query_tab3 = new WP_Query();
                        $query_tab3->query($args_tab3);
                        if ($query_tab3->have_posts()):while ($query_tab3->have_posts()):$query_tab3->the_post(); ?>
                            <tr>
                                <td>
                                    <?php if (has_post_thumbnail()): // check has post thumbnails?>
                                        <div class="food">
                                            <img src="<?php the_post_thumbnail_url('medium'); ?>"
                                                 alt="<?php echo $ingredient_food = get_post_meta($post->ID, 'ingredient_food', true);
                                                 echo ' - ';
                                                 bloginfo('name'); ?>" title="<?php the_title(); ?>">
                                        </div>
                                    <?php else: ?>
                                        <div class="food">
                                            <img src="<?php echo TEMPLATE_FOLDER . '/img/logo.jpg'; ?>"
                                                 alt="<?php echo $ingredient_food = get_post_meta($post->ID, 'ingredient_food', true);
                                                 echo ' - ';
                                                 bloginfo('name'); ?>" title="<?php the_title(); ?>">
                                        </div>
                                    <?php endif; // end check
                                    ?>
                                </td>
                                <td><a href="<?php the_permalink() ?>"
                                       title="<?php the_title(); ?>"><?php the_title(); ?></a></td>
                                <td><?php the_terms($post->ID, 'cuisine'); ?></td>
                                <td><?php echo get_post_meta($post->ID, 'ingredient_food', true); ?></td>
                                <!--<td class="food-text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</td> -->

                            </tr>
                        <?php endwhile; endif; ?>
                        <?php wp_reset_query(); ?>
                        </tbody>
                    </table>
                </div>
                <div id="tab4">
                    <table>
                        <tbody>
                        <?php
                        $args_tab4 = array(
                            'post__in' => $arr_tab4,
                            'post_type' => 'food'
                        );
                        $query_tab3 = new WP_Query();
                        $query_tab3->query($args_tab4);
                        if ($query_tab3->have_posts()):while ($query_tab3->have_posts()):$query_tab3->the_post(); ?>
                            <tr>
                                <td>
                                    <?php if (has_post_thumbnail()): // check has post thumbnails?>
                                        <div class="food">
                                            <img src="<?php the_post_thumbnail_url('medium'); ?>"
                                                 alt="<?php echo $ingredient_food = get_post_meta($post->ID, 'ingredient_food', true);
                                                 echo ' - ';
                                                 bloginfo('name'); ?>" title="<?php the_title(); ?>">
                                        </div>
                                    <?php else: ?>
                                        <div class="food">
                                            <img src="<?php echo TEMPLATE_FOLDER . '/img/logo.jpg'; ?>"
                                                 alt="<?php echo $ingredient_food = get_post_meta($post->ID, 'ingredient_food', true);
                                                 echo ' - ';
                                                 bloginfo('name'); ?>" title="<?php the_title(); ?>">
                                        </div>
                                    <?php endif; // end check
                                    ?>
                                </td>
                                <td><a href="<?php the_permalink() ?>"
                                       title="<?php the_title(); ?>"><?php the_title(); ?></a></td>
                                <td><?php the_terms($post->ID, 'cuisine'); ?></td>
                                <td><?php echo get_post_meta($post->ID, 'ingredient_food', true); ?></td>
                                <!--<td class="food-text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</td> -->

                            </tr>
                        <?php endwhile; endif; ?>
                        <?php wp_reset_query(); ?>
                        </tbody>
                    </table>
                </div>
                <a href="<?php echo $link_menu; ?>" class="alignright butt">Ещё блюды ></a>
            </div>

        </div>
    </div>
</div>