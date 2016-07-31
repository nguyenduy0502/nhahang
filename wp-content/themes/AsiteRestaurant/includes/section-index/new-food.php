<div class="new-food" id="new-food">
	<div class="container">
		<div class="row">
			<div class="section-title food-title">
				<h1>Новые Блюда</h1>
			</div>
		</div>
		<div class="row">
			<div class=" owl-carousel">
				<?php $query=new WP_Query(array('post_type'=>'food','orderby'=>'rand'));?>
				<?php if($query->have_posts()):while($query->have_posts()):$query->the_post();?>
					<?php if(has_post_thumbnail()): // check has post thumbnails ?>
						<div class="item">
							<a href="#"><img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); echo ' | '; bloginfo('name');?>" title="<?php the_title();?>"></a>
							<h5><?php the_title()?></h5>
						</div>
						<?php else: ?>
						<div class="item">
							<a href="<?php the_permalink()?>" title="<?php the_title();?>"><img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'; ?>" alt="<?php the_title(); echo ' | '; bloginfo('name');?>" title="<?php the_title();?>"></a>
							<h5><?php the_title()?></h5>
						</div>
						<?php endif; // end check?>

				<?php endwhile; endif;?>
				<?php wp_reset_query();?>
			</div>
		</div>
	<!--	 <div class="row">
			<div class=" owl-carousel">
				<div class="item">
					<a href="#"><img src="http://lorempixel.com/130/130/food" alt=""></a>
					<h5>foodname</h5>
				</div>
				<div class="item">
					<a href="#"><img src="http://lorempixel.com/134/131/food" alt=""></a>
					<h5>foodname</h5>
				</div>
				<div class="item">
					<a href="#"><img src="http://lorempixel.com/137/131/food" alt=""></a>
					<h5>foodname</h5>
				</div>
				<div class="item">
					<a href="#"><img src="http://lorempixel.com/138/133/food" alt=""></a>
					<h5>foodname</h5>
				</div>
				<div class="item">
					<a href="#"><img src="http://lorempixel.com/139/134/food" alt=""></a>
					<h5>foodname</h5>
				</div>
				<div class="item">
					<a href="#"><img src="http://lorempixel.com/132/135/food" alt=""></a>
					<h5>foodname</h5>
				</div>
			</div>
		</div>
		<div class="row">
			<div class=" owl-carousel">
				<div class="item">
					<a href="#"><img src="http://lorempixel.com/130/130/food" alt=""></a>
					<h5>foodname</h5>
				</div>
				<div class="item">
					<a href="#"><img src="http://lorempixel.com/131/136/food" alt=""></a>
					<h5>foodname</h5>
				</div>
				<div class="item">
					<a href="#"><img src="http://lorempixel.com/132/137/food" alt=""></a>
					<h5>foodname</h5>
				</div>
				<div class="item">
					<a href="#"><img src="http://lorempixel.com/130/138/food" alt=""></a>
					<h5>foodname</h5>
				</div>
				<div class="item">
					<a href="#"><img src="http://lorempixel.com/130/139/food" alt=""></a>
					<h5>foodname</h5>
				</div>
				<div class="item">
					<a href="#"><img src="http://lorempixel.com/135/135/food" alt=""></a>
					<h5>foodname</h5>
				</div>
			</div>
		</div> -->
	</div>
</div>