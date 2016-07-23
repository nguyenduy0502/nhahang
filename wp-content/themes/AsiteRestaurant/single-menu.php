<?php
/**
 * File Name: single-menu.php
 * Date: 26-06-2016
 * Time: 23:44
 * Description:
 */
get_header();
echo 'This is a string test menu single';
$args=array(
	'post_type'=>'food',
	'post__in'=>get_post_meta($post->ID,'choose_food',true)
);
echo "<pre>";
print_r($args);
echo "<pre/>";

$query=new WP_Query();
$query->query($args);
if($query->have_posts()):while($query->have_posts()):$query->the_post();
	echo "<br/>";
	the_title();
	echo "<br/>";



	endwhile; endif;

?>