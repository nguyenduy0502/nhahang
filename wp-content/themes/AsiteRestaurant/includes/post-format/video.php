<?php
/**
 * File Name: video.php
 * Date: 04-08-2016
 * Time: 0:51
 * Description:Content post type video
 */
?>
<?php $cat=get_the_category(); ?>
<div class="single-page-name">
    <h2><?php the_title();?></h2>
</div>
<div class="spc-header">
        <?php echo get_post_meta($post->ID,'form_post',true);?>
    <div class="post-info">
        <a href="<?php the_permalink();?>" rel="bookmark"></a>
        <time class="entry-date published"
              datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>"><?php echo get_the_date('d-M-Y'); ?></time>
        <time class="updated"
              datetime="<?php the_modified_time('d-M-Y H:i:s'); ?>"><?php the_modified_time('d-M-Y'); ?></time>
        <a href="<?php echo get_category_link($cat[0]->term_id);?>" rel="category tag"><span><?php echo $cat[0]->name;?></span></a>
    </div><!-- -->
</div>
<div class="spc-content"><?php the_content();?></div>