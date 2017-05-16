<?php get_header(); ?>
<?php global $asite_options; ?>
    <!-- Section Menu -->
    <div class="menu" id="menu">
        <div class="inner-top"></div>
        <div class="inner-middle">
            <div class="container">
                <div class="row text-center">
                    <?php
                    $args = array(
                        'posts_per_page'=>'-1',
                        'post_type' => 'menu',
                        'post__not_in' => $asite_options['option_business_cat']
                    );
                    $query = new WP_Query();
                    $query->query($args);
                    ?>
                    <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
                        <?php
                        $time_start = get_post_meta($post->ID, 'time_start', true);
                        $time_end = get_post_meta($post->ID, 'time_end', true);
                        $day_start = get_post_meta($post->ID, 'day_start', true);
                        $day_end = get_post_meta($post->ID, 'day_end', true);
                        ?>
                        <div class="col-md-12">
                            <div class="menu-archive">
                                <a href="<?php the_permalink(); ?>">
                                    <p class="text-head"><?php echo get_the_title(); ?></p>
                                </a>
                                <p>  <?php if ($time_start == '0:00' || $time_end == '$time_end'): ?>
                                        <?php echo 'Круглосуточно' ?>
                                    <?php else: ?>
                                        <?php echo $day_start; ?> - <?php echo $day_end; ?> - <?php echo $time_start; ?>–<?php echo $time_end; ?>
                                    <?php endif; ?></p>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
                <?php pagination();?>
            </div>
        </div>
        <div class="inner-bot">
        </div>
    </div>
    <!--END Section Menu -->
<?php get_footer(); ?>