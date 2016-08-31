<?php
/**
 * File Name: cat_post.php
 * Date: 03-08-2016
 * Time: 23:50
 * Description: Get related post
 */
$categories = get_the_category($post->ID);
if ($categories): $category_ids = array();
    foreach ($categories as $individual_category) :
        $category_ids[] = $individual_category->term_id;
        $args = array(
            'category__in' => $category_ids,
            'post__not_in' => array($post->ID),
            'showposts' => 3, // Number post
            'ignore_sticky_posts' => 1,
            'orderby' => 'rand' // random
        );
        $my_query = new wp_query($args);
    endforeach;
    if ($my_query->have_posts()):
        if (is_single()):
            ?>
            <div class="page-bottom clearfix">
                <div class="col-md-12">
                    <h2>Возможно, Вас заинтересует:</h2>
                </div>
                <?php while ($my_query->have_posts()): $my_query->the_post(); ?>
                    <div class="col-md-4">
                        <div class="pb-otherpost">

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img
                                    src="<?php the_post_thumbnail_url('thumbnail') ?>" alt="<?php the_title(); ?>"
                                    title="<?php the_title(); ?>"></a>
                            <a href="<?php the_permalink(); ?>"
                               title="<?php the_title(); ?>"><?php the_title('<p>', '</p>'); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        <?php endif; endif; endif; ?>