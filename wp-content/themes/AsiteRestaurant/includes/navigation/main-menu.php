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

		<img src="<?php echo TEMPLATE_FOLDER.'/img/pho.png'?>" alt="<?php bloginfo('description');?>">
		<?php if(!empty($asite_options['option_head_desc']) && isset($asite_options['option_head_desc'])): ?>
		<p><?php echo $asite_options['option_head_desc']; ?></p>
		<?php endif; ?>
	</div>
	<div class="arrow animated bounce">
		<a href=""><img width="40" height="40" alt="" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yOTMuNzUxLDQ1NS44NjhjLTIwLjE4MSwyMC4xNzktNTMuMTY1LDE5LjkxMy03My42NzMtMC41OTVsMCwwYy0yMC41MDgtMjAuNTA4LTIwLjc3My01My40OTMtMC41OTQtNzMuNjcyDQoJbDE4OS45OTktMTkwYzIwLjE3OC0yMC4xNzgsNTMuMTY0LTE5LjkxMyw3My42NzIsMC41OTVsMCwwYzIwLjUwOCwyMC41MDksMjAuNzcyLDUzLjQ5MiwwLjU5NSw3My42NzFMMjkzLjc1MSw0NTUuODY4eiIvPg0KPHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTIyMC4yNDksNDU1Ljg2OGMyMC4xOCwyMC4xNzksNTMuMTY0LDE5LjkxMyw3My42NzItMC41OTVsMCwwYzIwLjUwOS0yMC41MDgsMjAuNzc0LTUzLjQ5MywwLjU5Ni03My42NzINCglsLTE5MC0xOTBjLTIwLjE3OC0yMC4xNzgtNTMuMTY0LTE5LjkxMy03My42NzEsMC41OTVsMCwwYy0yMC41MDgsMjAuNTA5LTIwLjc3Miw1My40OTItMC41OTUsNzMuNjcxTDIyMC4yNDksNDU1Ljg2OHoiLz4NCjwvc3ZnPg0K" />
		</a>
	</div>
	<div class="bubble">
<!-- 		<img src="http://localhost:8080/nhahang/wp-content/themes/AsiteRestaurant/template/viethouse/img/bubble3.png" alt=""> -->
		<p><a href="http://www.delivery-club.ru/widget/VIETHOUSE/" target="_blank">Доставка</a></p>
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