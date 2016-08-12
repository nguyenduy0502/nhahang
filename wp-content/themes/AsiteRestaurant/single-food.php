<?php
/**
 * File Name: single-food.php
 * Date: 22-06-2016
 * Time: 22:26
 * Description: Single custom post type=food
 */
?>
<?php
get_header();?>

<div class="new-page section">
<div class="container">
<div class="row">
		<div class="page-block clearfix">
			<?php get_template_part('includes/post-types/food/content'); // get file content food?>
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
