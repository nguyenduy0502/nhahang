<!-- <div class="new-food section" id="section2" data-anchor="new-food"> -->
<?php global $asite_options;?>
<?php if(!empty($asite_options['option_new_food']) && isset($asite_options['option_new_food'])): // check option_new_food?>
<div class="new-food section" id="new-food">
<div class="new-food-content">
            <div class="section-title">
                <h1>Наши</h1>
                <h2>Новые Блюды</h2>
            </div>
    <?php !empty($asite_options['option_order_food'])?$food_order=$asite_options['option_order_food']:$food_order='none'?>
    <?php $array_term=$asite_options['option_new_food']; ?>
    <?php $args_1 = array(
        'tax_query' => array(
            array(
                'taxonomy' => 'cuisine',
                'field' => 'id',
                'terms' => $array_term[0], //get by id
            )),
        'posts_per_page' => $asite_options['option_num_new_food'], // get count
        'orderby'=>$food_order
    );// set args 1
    $query_1=new WP_Query();
    $query_1->query($args_1);

    $args_2 = array(
        'tax_query' => array(
            array(
                'taxonomy' => 'cuisine',
                'field' => 'id',
                'terms' => $array_term[1], //get by id
            )),
        'posts_per_page' => $asite_options['option_num_new_food'], // get count
        'orderby'=>$food_order
    );// set args 2
    $query_2=new WP_Query();
    $query_2->query($args_2);
    ?>
    <?php $count_array=count($asite_options['option_new_food']); // get count array ?>
    <div class=" owl-carousel">
        <?php if ($query_1->have_posts()):while ($query_1->have_posts()):$query_1->the_post(); ?>
            <?php $ingredient_food = get_post_meta(get_the_ID(), 'ingredient_food', true); ?>
            <div class="item-new-food">
                <div class="item-new-food-info">
                    <div class="item-new-food-info-mid">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><p
                                class="it-nf-name"><?php the_title() ?></p></a>

                        <p class="it-nf-price"><?php echo get_price_food(get_the_ID()); ?></p>

                        <p class="it-nf-desc"><?php echo $ingredient_food;  ?></p>
                    </div>
                </div>

                <?php if(has_post_thumbnail()):?>
                    <div class="item-new-food-image">
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php echo $ingredient_food;
                        echo " | ";
                        bloginfo('description'); ?>" title="<?php the_title(); ?>">
                    </div>
                <?php else: ?>
                    <div class="item-new-food-image">
                        <img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'; ?>" alt="<?php echo $ingredient_food;
                        echo " | ";
                        bloginfo('description'); ?>" title="<?php the_title(); ?>">
                    </div>
                <?php endif;?>
            </div>
        <?php endwhile; endif;
        wp_reset_query(); ?>
    </div>
    <div class=" owl-carousel">
        <?php if ($query_2->have_posts()):while ($query_2->have_posts()):$query_2->the_post(); ?>
            <?php $ingredient_food = get_post_meta(get_the_ID(), 'ingredient_food', true); ?>
            <div class="item-new-food">
                <div class="item-new-food-info">
                    <div class="item-new-food-info-mid">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><p
                                class="it-nf-name"><?php the_title() ?></p></a>

                        <p class="it-nf-price"><?php echo get_price_food(get_the_ID()); ?></p>

                        <p class="it-nf-desc"><?php echo $ingredient_food;  ?></p>
                    </div>
                </div>

                <?php if(has_post_thumbnail()):?>
                    <div class="item-new-food-image">
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php echo $ingredient_food;
                        echo " | ";
                        bloginfo('description'); ?>" title="<?php the_title(); ?>">
                    </div>
                <?php else: ?>
                    <div class="item-new-food-image">
                        <img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'; ?>" alt="<?php echo $ingredient_food;
                        echo " | ";
                        bloginfo('description'); ?>" title="<?php the_title(); ?>">
                    </div>
                <?php endif;?>
            </div>
        <?php endwhile; endif;
        wp_reset_query(); ?>
    </div>
</div>
</div>
<?php endif; // end check option_new_food?>