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
                <?php
                // get post meta
                $price_food = get_post_meta($post->ID, 'price_food', true);
                $recommend_food = get_post_meta($post->ID, 'recommend_food', true);
                $ingredient_food = get_post_meta($post->ID, 'ingredient_food', true);
                $weight_food = get_post_meta($post->ID, 'weight_food', true);
                $protein_food=get_post_meta($post->ID,'protein_food',true);
                $fat_food=get_post_meta($post->ID,'fat_food',true);
                $calorie_food=get_post_meta($post->ID,'calorie_food',true);
                $quantity_food=get_post_meta($post->ID,'quantity_food',true);
                ?>

                <?php if(has_post_thumbnail()): // check has post thumbnail?>
                    <div class="sf-images">
                        <a href="<?php the_permalink();?>" title="<?php the_title();?>"><img src="<?php the_post_thumbnail_url('large');?>" alt="<?php echo $ingredient_food; echo ' - '; bloginfo('name');?>"></a>
                    </div>
                    <?php else: ?>
                    <div class="sf-images">
                        <a href="<?php the_permalink();?>" title="<?php the_title();?>"><img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'; ?>" alt="<?php echo $ingredient_food; echo ' - '; bloginfo('name');?>"></a>
                    </div>
                    <?php endif; // end check ?>
            <div class="sf-info">
                <h2><?php the_title();?></h2>
                <p class="price">
                <?php echo (empty($price_food))? 'Безплатно': get_price_food($post->ID);?>
                </p>
                <?php get_template_part('includes/social-navigator/fb-share'); // get navigator fb ?>
                <p class="description">
                <ul>
                    <?php if(!empty(get_quantity_food($post->ID))): // check has quantity food?>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo get_quantity_food($post->ID); ?></li>
                    <?php else: ?>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Масса: <?php echo get_weight_food($post->ID); ?></li>
                    <?php endif; // end check ?>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Белки: <?php echo $protein_food; ?></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Жиры: <?php echo $fat_food;?></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Калории: <?php echo $calorie_food;?></li>

                </ul>

                </p>
            </div>
            <div class="sf-description">
                <ul id="tabs">
                    <li><a href="#" class="tab1">Описание</a></li>
                    <li><a href="#" class="tab2">Комментарий</a></li>
                </ul>
                <div id="content">
                    <div id="tab1">
                        <h2>Описание блюды</h2>
                        <?php if(has_post_thumbnail()): // check has post thumbnail ?>
                            <img src="<?php the_post_thumbnail_url('large')?>" alt="<?php echo get_post_meta($post->ID,'ingredient_food',true); ?>" title="<?php the_title();?>">

                        <?php else: ?>
                            <img src="<?php  echo TEMPLATE_FOLDER.'/img/logo.jpg';?>" alt="<?php echo get_post_meta($post->ID,'ingredient_food',true); ?>" title="<?php the_title();?>">

                        <?php endif; // end check?>
                        <p><?php the_content();?></p>
                        <i class="fa fa-coffee" aria-hidden="true"></i> Вьетнамская Кухня Вьет Хауз очень рад Вас приветствовать!
                    </div>
                    <div id="tab2"><?php comments_template();?></div>

                </div>

            </div>
                <?php get_template_part('includes/tags/google-tags'); // google tag SEO?>
            <?php endwhile; endif; ?>
            <?php get_template_part('includes/relatedpost/cat_food'); // get related post type food?>
            <?php //get_relatedpost_food();?>


        </div>
    </div>
</div>
