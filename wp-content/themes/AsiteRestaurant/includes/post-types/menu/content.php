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
                        <div class="amc-item-n"><a href="">ass</a></div>
                        <div class="amc-item-pr"><?php echo get_price_food($post->ID); ?></div>
                    </div>
                    <div class="amc-item-consist"><?php echo get_post_meta($post->ID,'ingredient_food',true); ?></div>
                </div>
            <?php endwhile;
            endif; ?>
            <?php wp_reset_query();?>
        </div>
    </div>


</div>
