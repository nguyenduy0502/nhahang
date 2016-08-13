	<!-- <div class="header section clearfix" id="section0" data-anchor="main"> -->
	<div class="header section clearfix">
		<?php if(is_home()):?>
		<?php get_template_part('includes/navigation/home-menu');?>
		<?php else: ?>
		<?php get_template_part('includes/navigation/second-menu');?>
		<?php endif; ?>

		<div class="col-md-12 col-xs-12 col_centered vhmain">
			<div class="quad col_centered">
				<p>Вьет Хауз</p>
				<p><i class="fa fa-coffee"></i></p>
				<p>Мы всегда рады Вам</p>
			</div>
		</div>
	</div>