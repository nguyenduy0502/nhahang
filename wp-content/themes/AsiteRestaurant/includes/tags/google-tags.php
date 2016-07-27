<?php
/**
 * File Name: google-tags.php
 * Date: 22-07-2016
 * Time: 18:39
 * Description: Google tags SEO
 */
?>
<div style="display: none">
    <h1 class="title entry-title updated"><?php the_title(); ?></h1>
    <span class="vcard author"><span class="fn"><?php bloginfo('name');?></span></span>
    <span class="post_date date updated"><?php the_time('j F,Y'); ?></span>
    <time class="entry-date published"
          datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>"><?php echo get_the_date('d-M-Y'); ?></time>
    <time class="updated"
          datetime="<?php the_modified_time('d-M-Y H:i:s'); ?>"><?php the_modified_time('d-M-Y'); ?></time>
</div>
