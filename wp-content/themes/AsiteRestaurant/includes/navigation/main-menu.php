<?php global $asite_options;?>
<div class="section header">
	<?php if(is_home()):?>
		<?php get_template_part('includes/navigation/home-menu');?>
	<?php else: ?>
		<?php get_template_part('includes/navigation/second-menu');?>
	<?php endif; ?>
	<div class="quad">
		<?php if(!empty($asite_options['option_head_title']) && isset($asite_options['option_head_title'])):?>
		<p><?php echo $asite_options['option_head_title'];?></p>
		<?php endif; ?>
		<img src="http://localhost:8888/nhahang/wp-content/themes/AsiteRestaurant/template/viethouse/img/pho.png" alt="">
		<?php if(!empty($asite_options['option_head_desc']) && isset($asite_options['option_head_desc'])): ?>
		<p><?php echo $asite_options['option_head_desc']; ?></p>
		<?php endif; ?>
	</div>
	<div class="bubble">
<!-- 		<img src="http://localhost:8080/nhahang/wp-content/themes/AsiteRestaurant/template/viethouse/img/bubble3.png" alt=""> -->
<p><a href="#">Доставка</a></p>
	</div>
	<div class="owl-carousel3 headslide">
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