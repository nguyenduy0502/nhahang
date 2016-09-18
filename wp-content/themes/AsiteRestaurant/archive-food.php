<?php
/**
 * File Name: archive-food.php
 * Date: 26-06-2016
 * Time: 23:18
 * Description: Archive custom post type food
 */
?>
<?php get_header();?>
<div class="new-page section">
<div class="container">
<div class="row">
		<div class="page-block clearfix">
			<div class="col-md-9">
				<?php get_template_part('includes/post-types/food/archive');?>
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