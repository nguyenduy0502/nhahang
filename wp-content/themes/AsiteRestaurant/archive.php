<?php
/**
 * File Name: archive.php
 * Date: 26-06-2016
 * Time: 23:14
 * Description: File archive
 */
?>
<?php get_header();?>
<div class="new-page section">
    <div class="container">
        <div class="row">
            <div class="page-block clearfix">
                <div class="col-md-9">
                    <div class="page-content clearfix">
                        <div class="archive-food">
                            <?php if(have_posts()): ?>
                                <?php $cat=get_the_category();?>
                                <div class="archive-food-name">
                                    <h2><?php echo $cat[0]->name;?></h2>
                                </div>
                                <div class="archive-food-content">
                                    <?php while(have_posts()):the_post();?>
                                        <div class="afc-item">
                                            <?php if(has_post_thumbnail()): // check has post thumbnail?>
                                                <div class="afc-item-img">
                                                    <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title(); echo ' - '; bloginfo('name');?>" title="<?php the_title();?>">
                                                </div>
                                            <?php else: ?>
                                                <div class="afc-item-img">
                                                    <img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'?>" alt="<?php the_title(); echo ' - '; bloginfo('name');?>" title="<?php the_title();?>">
                                                </div>
                                            <?php endif; // end check?>
                                            <div class="afc-item-npr">
                                                <div class="afc-item-n"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php echo short_title('...',10);?></a></div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif;?>
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

                </div>
                <div class="col-md-3">
                    <div class="sidebar">
                        <?php get_template_part('includes/sidebar/left-food-sidebar'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>
