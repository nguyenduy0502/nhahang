<?php
/**
 * File Name: content.php
 * Date: 29-06-2016
 * Time: 0:36
 * Description:
 */
?>
<div class="page-content clearfix">

    <div class="archive-menu col-md-12">
        <?php if (have_posts()): ?>

        <div class="archive-menu-content">
        <div class="archive-menu-name">
            <h2><?php the_title(); ?></h2>
        </div>
            <?php while (have_posts()):the_post(); ?>
                <?php
               // get and set default value
                $choose_cat_53 = empty(get_post_meta($post->ID, 'choose_cat_53', true)) ? array(0) : get_post_meta($post->ID, 'choose_cat_53', true);
                $choose_cat_55 = empty(get_post_meta($post->ID, 'choose_cat_55', true)) ? array(0) : get_post_meta($post->ID, 'choose_cat_55', true);
                $choose_cat_50 = empty(get_post_meta($post->ID, 'choose_cat_50', true)) ? array(0) : get_post_meta($post->ID, 'choose_cat_50', true);
                $choose_cat_52 = empty(get_post_meta($post->ID, 'choose_cat_52', true)) ? array(0) : get_post_meta($post->ID, 'choose_cat_52', true);
                $choose_cat_51 = empty(get_post_meta($post->ID, 'choose_cat_51', true)) ? array(0) : get_post_meta($post->ID, 'choose_cat_51', true);
                $choose_cat_54 = empty(get_post_meta($post->ID, 'choose_cat_54', true)) ? array(0) : get_post_meta($post->ID, 'choose_cat_54', true);
                $choose_cat_56 = empty(get_post_meta($post->ID, 'choose_cat_56', true)) ? array(0) : get_post_meta($post->ID, 'choose_cat_56', true);
                $choose_cat_57 = empty(get_post_meta($post->ID, 'choose_cat_57', true)) ? array(0) : get_post_meta($post->ID, 'choose_cat_57', true);
                // merge array
                $array_food=array_merge($choose_cat_53,$choose_cat_55,$choose_cat_50,$choose_cat_52,$choose_cat_51,$choose_cat_54,$choose_cat_56,$choose_cat_57);
                ?>
            <?php endwhile; // end get value?>
            <?php $query = new WP_Query(array('post__in' => $array_food,'post_type' => 'food','orderby'=>'rand'));
            ?>
            <?php while ($query->have_posts()):$query->the_post(); ?>
                <div class="amc-item">
                    <div class="amc-item-npr">
                        <div class="amc-item-n"><a href="<?php the_permalink(); ?>"
                                                   title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </div>
                        <?php $ingredient_food = get_post_meta($post->ID, 'ingredient_food', true); ?>
                        <div class="amc-item-pr">
                            <p>
                                <?php echo nguyenduy_excerpt(get_post_meta($post->ID, 'ingredient_food', true), 110); ?>
                        </div>
                        </p>
                    </div>
                </div>
                <?php get_template_part('includes/tags/google-tags'); ?>
            <?php endwhile;
            endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <!-- <div class="rm-overlay"></div> -->
    </div>
</div>
