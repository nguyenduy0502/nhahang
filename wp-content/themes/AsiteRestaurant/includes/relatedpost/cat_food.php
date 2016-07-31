<?php
/**
 * File Name: cat_food.php
 * Date: 27-07-2016
 * Time: 22:26
 * Description: This is file related post for custom post food by category
 */
?>
<?php
// get the custom post type's taxonomy terms

$custom_taxterms = wp_get_object_terms( $post->ID, 'cuisine', array('fields' => 'ids') );
// arguments
$args = array(
    'post_type' => 'food',
    'post_status' => 'publish',
    'posts_per_page' => 3, // you may edit this number
    'orderby' => 'rand',
    'tax_query' => array(
        array(
            'taxonomy' => 'cuisine',
            'field' => 'id',
            'terms' => $custom_taxterms
        )
    ),
    'post__not_in' => array ($post->ID),
);
$related_items = new WP_Query( $args );
?>
<div class="sf-otherfood">
    <h2>Другие Блюды</h2>
    <div class="otherfood-list">
        <?php if($related_items->have_posts()):while($related_items->have_posts()):$related_items->the_post();?>
        <div class="of-item">
           <?php if(has_post_thumbnail()): // check has post thumbnails ?>
               <div class="of-img">
                   <img src="<?php the_post_thumbnail_url('medium');?>" alt="<?php the_title(); echo ' | '; bloginfo('name');?>">
               </div>
               <?php else: ?>
               <div class="of-img">
                   <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title()?>" title="<?php the_title();?>">
               </div>
                <?php endif; // end check?>
            <div class="of-text">
                <a href="<?php the_permalink();?>" title="<?php the_title();?>"><h3><?php the_title();?></h3></a>
                <p class="of-price"><?php echo get_price_food($post->ID);?></p><a href=""></a>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php wp_reset_postdata();?>