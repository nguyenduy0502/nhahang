<?php global $asite_options; ?>
<div class="menu" id="menu">
    <div class="inner-top"></div>
    <div class="inner-middle">
        <div class="container">
            <!-- Tabs Nav -->
            <ul class="nav nav-tabs" role="tablist">
                <?php
                /*        $term = get_term_by('id', '53', 'cuisine');
                        echo $name = $term->name;*/
                for ($index = 1; $index < count($asite_options['option_new_food']) + 1; $index++):
                    $term = get_term_by('id', $asite_options['option_new_food'][$index - 1], 'cuisine');
                    $name = $term->name; ?>
                    <li role="presentation" <?php echo $index == 1 ? 'class="active"' : '' ?> >
                        <a href="<?php echo '#menu' . $index ?>" aria-controls="home" role="tab"
                           data-toggle="tab"><?php echo $name ?></a>
                    </li>
                <?php endfor; ?>
                <!--       <li role="presentation"><a href="#menu2"  class="active" aria-controls="profile" role="tab" data-toggle="tab">Menu 2</a>
                       </li>
                       <li role="presentation"><a href="#menu2" aria-controls="profile" role="tab" data-toggle="tab">Menu 2</a>
                       </li>
                       <li role="presentation"><a href="#menu2" aria-controls="profile" role="tab" data-toggle="tab">Menu 2</a>
                       </li>-->

            </ul>
            <!-- END Tabs Nav -->
            <!-- Tabs Contents -->
            <div class="tab-content">
                <?php for ($index = 1; $index < count($asite_options['option_new_food']) + 1; $index++): ?>

                    <div role="tabpanel" class="tab-pane fade in <?php echo $index == 1 ? 'active' : ''; ?>"
                         id="<?php echo 'menu' . $index ?>">
                        <?php
                        $args = array(
                            'post_type' => 'food',
                            'posts_per_page' => 8,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'cuisine',
                                    'terms' => $asite_options['option_new_food'][$index - 1],
                                    'field' => 'id'
                                )
                            ),
                            //'orderby' => $asite_options['option_order_food']
                        );
                        $query = new WP_Query();
                        $query->query($args);
                        ?>
                        <div class="owl-carousel">
                            <div class="menu-content" data-hash="menupage<?php echo $index ?>">
                                <div class="row">
                                    <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
                                        <?php
                                        $price = get_post_meta($post->ID, 'price_food', true);
                                        $description = get_post_meta($post->ID, 'ingredient_food', true)
                                        ?>
                                        <div class="col-md-3 col-sm-4 col-xs-6">
                                            <div class="menu-content-item">
                                                <div class="menu-content-item-img">
                                                    <?php if (has_post_thumbnail()): ?>
                                                        <img src="<?php echo get_the_post_thumbnail_url($post->ID,'large'); ?>"
                                                             alt="<?php echo get_the_title(); ?>"
                                                             title="<?php echo get_the_title(); ?>">

                                                    <?php else: ?>
                                                        <img
                                                            src="<?php echo IMG_FOLDER . '/menu-content-item-img.png' ?>"
                                                            alt="<?php echo get_the_title(); ?>"
                                                            title="<?php echo get_the_title(); ?>">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="menu-content-item-head">
                                                    <span><?php echo short_title('', 4) ?></span>
                                                </div>
                                                <div class="menu-content-item-subhead">
                                                    <span><?php echo $description; ?></span>
                                                </div>
                                                <div class="menu-content-item-price"><?php echo $price?> руб</div>
                                            </div>
                                        </div>

                                    <?php endwhile; endif; ?>
                                    <?php $args = null;
                                    $query = null;
                                    wp_reset_query();
                                    wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

            </div>
            <!-- END Tabs Contents -->
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
    <div class="inner-bot"></div>
</div>
