<div class="section header">
	<?php if(is_home()):?>
		<?php get_template_part('includes/navigation/home-menu');?>
	<?php else: ?>
		<?php get_template_part('includes/navigation/second-menu');?>
	<?php endif; ?>
	<div class="quad">
		<p>Вьет Хауз</p>
		<p><i class="fa fa-coffee"></i></p>
		<p>Мы всегда рады Вам</p>
	</div>
	<div class="owl-carousel3 headslide">
		<?php global $asite_options; ?>
		<?php foreach($asite_options['option_slides'] as $slide):?>
		<div class="item-headslide">
			<div class="item-headslide-img">
				<img src="<?php echo $slide['image']?>" alt="<?php echo $slide['description']?>">
			</div>
		</div>
<?php endforeach; // end loop get image?>
	</div>

	<!-- .cd-slider-wrapper -->
	<!-- </div> -->
</div>