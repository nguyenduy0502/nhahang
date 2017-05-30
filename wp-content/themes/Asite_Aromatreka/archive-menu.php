<?php get_header(); ?>
    <!-- Section Menu -->
    <div class="menu-single">
        <div class="container">
            <div class="menu-title-aligner ">
                <h3 class="logo-menu-book-title" id="menu-book-title">Список меню</h3>
            </div>
            <section class="menu-book">
                <div class="dishtype-menu">
                    <div class="dish-list">
                        <div class="first-menu-column">
                            <?php $first_args = array(
                                'post_type' => 'menu',
                                'posts_per_page' => 5,
                                'orderby' => 'rand'
                            );
                            $query = new WP_Query();
                            $query->query($first_args);
                            $post_ids = array();
                            ?>
                            <ul class="leaders">
                                <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
                                    $time_start = get_post_meta($post->ID, 'time_start', true);
                                    $time_end = get_post_meta($post->ID, 'time_end', true);
                                    $day_start = get_post_meta($post->ID, 'day_start', true);
                                    $day_end = get_post_meta($post->ID, 'day_end', true);
                                    ?>
                                    <li class="product-item">
                                        <div class="product-name">
									<span class="product-line">
									<span class="ellipsis"><?php echo short_title('', 2) ?></span>
									<span
                                        class="product-price"><?php if ($time_start == '0:00' || $time_end == '$time_end'): ?>
                                            <?php echo 'Круглосуточно' ?>
                                        <?php else: ?>
                                            <?php echo $day_start; ?> - <?php echo $day_end; ?> - <?php echo $time_start; ?>–<?php echo $time_end; ?>
                                        <?php endif; ?></span>
									</span>
                                        </div>
                                        <div class="product-description"></div>
                                    </li>
                                    <?php $post_ids[] = get_the_ID(); endwhile; endif;
                                wp_reset_query(); ?>
                            </ul>
                        </div>
                        <div class="second-menu-column"></div>
                        <div class="third-menu-column ts-clearfix">
                            <?php
                            $secon_args = array(
                                'post_type' => 'menu',
                                'posts_per_page' => 5,
                                'post__not_in' => $post_ids,
                                'orderby' => 'rand'
                            );
                            $query = new WP_Query();
                            $query->query($secon_args);
                            ?>
                            <ul class="leaders">
                                <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
                                    $time_start = get_post_meta($post->ID, 'time_start', true);
                                    $time_end = get_post_meta($post->ID, 'time_end', true);
                                    $day_start = get_post_meta($post->ID, 'day_start', true);
                                    $day_end = get_post_meta($post->ID, 'day_end', true);
                                    ?>
                                    <li class="product-item">
                                        <div class="product-name">
									<span class="product-line">
									<span class="ellipsis"><?php echo short_title('', 2) ?></span>
									<span
                                        class="product-price"><?php if ($time_start == '0:00' || $time_end == '$time_end'): ?>
                                            <?php echo 'Круглосуточно' ?>
                                        <?php else: ?>
                                            <?php echo $day_start; ?> - <?php echo $day_end; ?> - <?php echo $time_start; ?>–<?php echo $time_end; ?>
                                        <?php endif; ?></span>
									</span>
                                        </div>
                                        <div class="product-description"></div>
                                    </li>
                                <?php endwhile; endif;
                                wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="menu-single-back">
            <img src="<?php echo IMG_FOLDER . '/food/_DSF4313.jpg' ?>" alt="<?php bloginfo('name')?>" >
        </div>
    </div>

    <!--END Section Menu -->
<?php get_footer(); ?>