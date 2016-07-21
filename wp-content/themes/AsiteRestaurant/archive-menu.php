<?php
/**
 * File Name: archive-menu.php
 * Date: 26-06-2016
 * Time: 23:39
 * Description:
 */

echo 'This is a file archive menu';

if(have_posts()):while(have_posts()):the_post();
	echo "<br/>";
the_ID(); echo ': '; the_title();
	echo "<br/>";
	endwhile; endif;
?>