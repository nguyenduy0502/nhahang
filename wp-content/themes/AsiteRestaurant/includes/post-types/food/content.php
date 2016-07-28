<?php
/**
 * File Name: content-food.php
 * Date: 26-06-2016
 * Time: 23:17
 * Description: this is a file content food
 */
?>
<div class="col-md-9">
    <div class="page-content clearfix">
        <div class="single-food">
            <?php if(have_posts()): while(have_posts()):the_post();?>

                <?php if(has_post_thumbnail()): // check has post thumbnail?>
                    <div class="sf-images">
                        <a href="<?php the_permalink();?>" title="<?php the_title();?>"><img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); echo '|'; bloginfo('name');?>"></a>
                    </div>
                    <?php else: ?>
                    <div class="sf-images">
                        <a href="<?php the_permalink();?>" title="<?php the_title();?>"><img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'; ?>" alt="<?php the_title(); echo '|'; bloginfo('name');?>"></a>
                    </div>
                    <?php endif; // end check ?>
            <div class="sf-info">
                <h2><?php the_title();?></h2>
                <p class="price"><?php echo get_price_food($post->ID);?></p>
                <?php get_template_part('includes/social-navigator/fb-share');?>
                <p class="description">
                <ul>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Масса: <?php echo get_weight_food($post->ID);?></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Белки: <?php echo get_post_meta($post->ID,'protein_food',true);?></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Жиры: <?php echo get_post_meta($post->ID,'fat_food',true);?></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Калории: <?php echo get_post_meta($post->ID,'calorie_food',true);?></li>

                </ul>

                </p>
            </div>
            <div class="sf-description">
                <ul id="tabs">
                    <li><a href="#" name="tab1">Описание</a></li>
                    <li><a href="#" name="tab2">Комментарий</a></li>
                </ul>
                <div id="content">
                    <div id="tab1">
                        <h2>Описание блюды</h2>
                        <p><?php the_content();?></p>
                    </div>
                    <div id="tab2"><?php comments_template();?></div>

                </div>

            </div>
                <?php get_template_part('includes/tags/google-tags'); ?>
            <?php endwhile; endif; ?>
            <?php get_template_part('includes/relatedpost/cat_food');?>
            <?php //get_relatedpost_food();?>


        </div>
    </div>
</div>
