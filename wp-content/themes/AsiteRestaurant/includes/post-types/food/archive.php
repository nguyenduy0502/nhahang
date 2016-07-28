<?php
/**
 * File Name: archive-food.php
 * Date: 26-06-2016
 * Time: 23:17
 * Description: this is a file archive food
 */
?>
<div class="page-content clearfix">
    <div class="archive-food">
        <div class="archive-food-name">
            <h2>Список блюд</h2>
        </div>
        <div class="archive-food-content">
            <?php if(have_posts()):while(have_posts()):the_post();?>
            <div class="afc-item">
               <?php if(has_post_thumbnail()): // check has post thumbnail?>
                   <div class="afc-item-img">
                       <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title(); echo '|'; bloginfo('name');?>" title="<?php the_title();?>">
                   </div>
                    <?php else: ?>
                   <div class="afc-item-img">
                       <img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'?>" alt="<?php the_title(); echo '|'; bloginfo('name');?>" title="<?php the_title();?>">
                   </div>
                    <?php endif; // end check?>
                <div class="afc-item-npr">
                    <div class="afc-item-n"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php echo short_title('...',10);?></a></div>
                    <div class="afc-item-pr"><?php echo get_price_food($post->ID);?></div>
                </div>
                <div class="afc-item-consist"><?php echo get_post_meta($post->ID,'ingredient_food',true);?></div>
            </div>
                <?php get_template_part('includes/tags/google-tags'); // google tag SEO?>
            <?php endwhile; endif; ?>
        </div>
    </div>

    <ul class="paginate pag2 clearfix">
       <?php pagination();?>
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
