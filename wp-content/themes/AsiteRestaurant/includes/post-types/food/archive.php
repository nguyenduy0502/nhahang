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
                <div class="afc-item-img">
                    <img src="<?php the_post_thumbnail_url()?>" alt="">
                </div>
                <div class="afc-item-npr">
                    <div class="afc-item-n"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></div>
                    <div class="afc-item-pr"><?php echo get_price_food($post->ID);?></div>
                </div>
                <div class="afc-item-consist"><?php echo get_post_meta($post->ID,'ingredient_food',true);?></div>
            </div>
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
