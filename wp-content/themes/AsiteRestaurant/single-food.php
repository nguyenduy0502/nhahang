<?php
/**
 * File Name: single-food.php
 * Date: 22-06-2016
 * Time: 22:26
 * Description: Single custom post type=food
 */
?>
<?php
get_header();
echo 'file single food';
echo "<br/>";

if(have_posts()):while(have_posts()):the_post();

	echo'ID:'; the_ID();
	echo "<br/>";
	echo 'Title:'; the_title();
	echo "<br/>";
	echo 'price'; echo get_price_food($post->ID);
	echo "<br/>";
	echo 'Khối lượng'; echo get_weight_food($post->ID);
	echo "<br/>";
	echo 'recommend: '; echo get_post_meta($post->ID,'recommend_food',true);
	echo "<br/>";
	echo 'Thành phần: '; echo get_post_meta($post->ID,'ingredient_food',true);
	echo "<br/>";
	echo 'Chất béo: '; echo get_post_meta($post->ID,'fat_food',true);
	echo "<br/>";
	echo 'Calorie: '; echo get_post_meta($post->ID,'calorie_food',true);
	echo "<br/>";
	echo 'Số lượng: ';  echo get_quantity_food($post->ID);
	echo "<br/>";


endwhile; endif;
?>
