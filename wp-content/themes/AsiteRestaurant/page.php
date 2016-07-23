<?php
/**
 * File Name: page.php
 * Date: 22-07-2016
 * Time: 15:42
 * Description: Sample page
 */
?>
<?php get_header();?>
<?php if(have_posts()):while(have_posts()):the_post();

the_title();
the_content();

endwhile; endif; ?>
