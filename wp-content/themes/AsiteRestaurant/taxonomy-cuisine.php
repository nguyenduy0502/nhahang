<?php
/**
 * File Name: taxonomy-cuisine.php
 * Date: 27-06-2016
 * Time: 23:34
 * Description: This file taxonomy cuisine
 */
?>
<?php get_header(); ?>
<div class="new-page section">
    <div class="container">
        <div class="row">
            <div class="page-block clearfix">
                <div class="col-md-9">
                    <div class="page-content clearfix">
                        <div class="archive-food">
                            <?php if (have_posts()): ?>
                            <div class="archive-food-name">
                                <h2><?php the_terms($post->ID, 'cuisine'); ?></h2>
                            </div>
                            <div class="archive-food-content">
                                <?php while (have_posts()):the_post(); ?>
                                    <div class="afc-item">
                                        <?php if (has_post_thumbnail()): ?>
                                            <div class="afc-item-img">
                                                <img src="<?php the_post_thumbnail_url('large') ?>"
                                                     alt="<?php echo $ingredient_food = get_post_meta($post->ID, 'ingredient_food', true);;
                                                     echo ' - ';
                                                     bloginfo('name'); ?>" title="<?php the_title(); ?>">
                                            </div>
                                        <?php else: ?>
                                            <div class="afc-item-img">
                                                <img src="<?php echo TEMPLATE_FOLDER . '/img/logo.png' ?>"
                                                     alt="<?php echo $ingredient_food = get_post_meta($post->ID, 'ingredient_food', true);;
                                                     echo ' - ';
                                                     bloginfo('name'); ?>" title="<?php the_title(); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="afc-item-npr">
                                            <div class="afc-item-n"><a href="<?php the_permalink(); ?>"
                                                                       title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                            </div>
                                            <div class="afc-item-pr"><?php echo empty(get_post_meta($post->ID,'ingredient_food',true))? 'Безплатно' : get_price_food($post->ID); ?></div>
                                        </div>
                                        <div
                                            class="afc-item-consist"><?php echo get_post_meta($post->ID, 'ingredient_food', true); ?></div>
                                    </div>
                                <?php endwhile;
                                endif; ?>
                                <?php wp_reset_query();?>
                            </div>
                        </div>

                        <ul class="paginate pag2 clearfix">
                            <?php pagination(); ?>
                            <!--    <li class="single">Page 1 of 5</li>
                                <li><a href="#">prev</a></li>
                                <li class="current">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">next</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar">
                        <?php get_template_part('includes/sidebar/left-food-sidebar'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
