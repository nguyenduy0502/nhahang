<?php global $asite_options; ?>
<div class="menu" id="menu">
    <div class="inner-top">
    </div>
    <div class="inner-middle">
        <div class="container">
            <div class="menu-title-aligner ">
                <h3 class="logo-menu-book-title" id="menu-book-title">MENU</h3>
            </div>
            <div class="owl-carousel" id="menu-slider">
                <?php for ($index = 0;
                           $index < count($asite_options['option_new_food']);
                           $index++): ?>
                    <?php $term = get_term_by('id', $asite_options['option_new_food'][$index], 'cuisine'); ?>
                    <?php $counter = 1; ?>
                    <div class="item">
                        <section class="menu-book">
                            <div class="dishtype-menu">
                                <div class="menu-book-center"><h3
                                        class="food-type"><?php echo $name = $term->name; ?></h3>
                                    <hr class="under-food-type">
                                </div>
                                <div class="dish-list">
                                    <div class="first-menu-column">
                                        <ul class="leaders">
                                            <?php
                                            $first_args = array(
                                                'post_type' => 'food',
                                                'posts_per_page' => 5,
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'cuisine',
                                                        'terms' => $asite_options['option_new_food'][$index],
                                                        'field' => 'id'
                                                    )
                                                ),
                                                'orderby' => $asite_options['option_order_food']
                                            );
                                            $query = new WP_Query();
                                            $query->query($first_args);
                                            $post_ids = array();
                                            ?>
                                            <?php if ($query->have_posts()):
                                                while ($query->have_posts()): $query->the_post(); ?>
                                                    <li class="product-name">
                                                        <a class="product-line"
                                                           href="<?php the_permalink(); ?>"
                                                           data-img="<?php the_post_thumbnail_url('large') ?>">
                                                            <span class="ellipsis"><?php the_title(); ?></span>

                                                            <span
                                                                class="product-price"><?php echo get_price_food($post->ID) ?></span>
                                                        </a>
                                                    </li>
                                                    <li class="product-description"><?php echo get_ingredient_food($post->ID); ?></li>

                                                    <?php $post_ids[] = get_the_ID(); endwhile; endif;
                                            wp_reset_query(); ?>
                                        </ul>

                                    </div>
                                    <div class="second-menu-column"></div>
                                    <div class="third-menu-column ts-clearfix">
                                        <ul class="leaders">
                                            <?php
                                            $secon_args = array(
                                                'post_type' => 'food',
                                                'posts_per_page' => 5,
                                                'post__not_in' => $post_ids,
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'cuisine',
                                                        'terms' => $asite_options['option_new_food'][$index],
                                                        'field' => 'id'
                                                    )
                                                ),
                                                'orderby' => $asite_options['option_order_food']
                                            );
                                            $query = new WP_Query();
                                            $query->query($secon_args);
                                            ?>
                                            <?php if ($query->have_posts()):
                                                while ($query->have_posts()): $query->the_post(); ?>
                                                    <li class="product-name">
                                                        <a class="product-line"
                                                           href="<?php the_permalink(); ?>"
                                                           data-img="<?php the_post_thumbnail_url('large') ?>">
                                                            <span class="ellipsis"><?php the_title() ?></span>

                                                            <span
                                                                class="product-price"><?php echo get_price_food($post->ID) ?></span>
                                                        </a>
                                                    </li>
                                                    <li class="product-description"><?php echo get_ingredient_food($post->ID); ?></li>
                                                <?php endwhile; endif;
                                            wp_reset_query(); ?>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!-- <div class="bar-selector" style="opacity: 1;">
                                 <div class="bar left-bar clicked-bar">1</div>
                                 <div class="bar right-bar unclicked-bar">2</div>
                             </div>-->
                        </section>
                    </div>
                <?php endfor; ?>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Arrow down -->
                    <div class="arrow animated bounce infinite">
                        <a href="#map">
                            <img width="40" height="40" src="<?php echo IMG_FOLDER . '/arrowspurple.png' ?>">
                        </a>
                    </div>
                    <!-- END Arrow down -->
                </div>
            </div>
        </div>
    </div>
    <div class="inner-bot">
    </div>
</div>