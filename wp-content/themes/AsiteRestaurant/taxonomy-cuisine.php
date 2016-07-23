<?php
/**
 * File Name: taxonomy-cuisine.php
 * Date: 27-06-2016
 * Time: 23:34
 * Description:
 */
get_header();
echo 'this is a file cuisine';
if(have_posts()):while(have_posts()):the_post();
	echo "<br/>";
	echo '<a href="'.get_the_permalink().'" target="_blank">'.get_the_title().'</a>';
	echo "<br/>";
endwhile; endif;
?>