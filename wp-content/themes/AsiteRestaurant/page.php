<?php
/**
 * File Name: page.php
 * Date: 22-07-2016
 * Time: 15:42
 * Description: Sample page
 */
?>
<?php get_header();?>
<div class="new-page section">
    <div class="container">
        <div class="row">
            <div class="page-block clearfix">
                <div class="col-md-9">
                    <div class="page-content clearfix">
                        <div class="single-page">
                            <?php if(have_posts()): while(have_posts()):the_post();?>
                                <?php $cat=get_the_category(); ?>
                                <div class="single-page-name">
                                    <h2><?php the_title();?></h2>
                                </div>
                                <div class="spc-header">
                                    <?php if(has_post_thumbnail()):?>
                                    <img src="<?php the_post_thumbnail_url('large');?>" alt="<?php the_title();?>" title="<?php the_title();?>">
                                    <?php endif; ?>
                                    <div class="post-info">
                                        <a href="<?php the_permalink();?>" rel="bookmark"></a>
                                        <time class="entry-date published"
                                              datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>"><?php echo get_the_date('d-M-Y'); ?></time>
                                        <time class="updated"
                                              datetime="<?php the_modified_time('d-M-Y H:i:s'); ?>"><?php the_modified_time('d-M-Y'); ?></time>
                                    </div>
                                </div>
                                <div class="spc-content"><?php the_content();?></div>
                                <?php get_template_part('includes/tags/google-tags');?>
                            <?php endwhile; endif; // end loop get content?>
                        </div>
                        <?php //get_template_part('includes/relatedpost/cat_post');?>
                        <?php //comments_template();?>
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
