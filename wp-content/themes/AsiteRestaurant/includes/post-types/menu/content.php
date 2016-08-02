<?php
/**
 * File Name: content.php
 * Date: 29-06-2016
 * Time: 0:36
 * Description:
 */
?>
<div class="page-content clearfix">

    <div class="archive-menu">
        <?php if (have_posts()): ?>
        <div class="archive-menu-name">
            <h2><?php the_title();?></h2>
        </div>
        <div class="archive-menu-content">
            <?php
            $arr_food=get_post_meta($post->ID,'choose_food',true);
            $args_query= array(
                'post_type'=>'food',
                'post__in'=>$arr_food,
                'orderby'=>'rand'
            );
            $query=new WP_Query($args_query);

            ?>
            <?php while ($query->have_posts()):$query->the_post(); ?>
                <div class="amc-item">
                    <div class="amc-item-npr">
                        <div class="amc-item-n"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a>
                        </div>
                        <?php $ingredient_food=get_post_meta($post->ID,'ingredient_food',true);?>
                        <div class="amc-item-pr">
                        <p>
                        <?php echo nguyenduy_excerpt(get_post_meta($post->ID,'ingredient_food',true),110);?></div>
                        </p>
                    </div>
                   <!-- <div class="amc-item-consist"></div> -->
                </div>
                <?php get_template_part('includes/tags/google-tags'); // google tag SEO?>
            <?php endwhile;
            endif; ?>
            <?php wp_reset_query();?>
        </div>
    </div>


</div>
