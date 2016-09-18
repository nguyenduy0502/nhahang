<?php
/**
 * File Name: archive.php
 * Date: 29-06-2016
 * Time: 0:36
 * Description:
 */
?>
<div class="page-content clearfix">

    <div class="archive-menu">
        <div class="archive-menu-content">
            <div class="archive-menu-name">
                <h2>Список Меню</h2>
            </div>
            <?php $query = new WP_Query(array('posts_per_page'=>'-1','post_type' => 'menu'));?>
            <?php if ($query->have_posts()):while ($query->have_posts()):$query->the_post(); ?>
                <?php
                $time_start=get_post_meta($post->ID,'time_start',true);
                $time_end=get_post_meta($post->ID,'time_end',true);
                $day_start=get_post_meta($post->ID,'day_start',true);
                $day_end=get_post_meta($post->ID,'day_end',true);


                ?>
                <div class="amc-item">
                    <div class="amc-item-npr">
                        <div class="amc-item-n"><a href="<?php the_permalink(); ?>"
                                                   title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
                        <div class="amc-item-pr">
                        <p>
                            

                            <?php if(empty($day_start)): ?>
                                <?php echo 'Круглосуточно'?>
                            <?php else: ?>
                                <?php echo $day_start; ?> - <?php echo $day_end; ?> <?php echo $time_start;?>–<?php echo $time_end;?>
                            <?php endif; ?>

                        </p>
                        </div>
                    </div>
                    <!-- <div class="amc-item-consist">
                         bỏ
                     </div> -->
                </div>
                <?php get_template_part('includes/tags/google-tags'); // google tag SEO?>
                <?php wp_reset_query();?>
            <?php endwhile; endif; ?>
        </div>
    </div>
    <ul class="paginate pag2 clearfix"><?php pagination(); ?></ul>
</div>
