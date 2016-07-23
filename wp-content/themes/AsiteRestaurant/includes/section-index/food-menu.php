<div class="food-menu clearfix" id="food-menu">
	<div class="section-title food-menu-title">
		<h1>Menu</h1>
	</div>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<ul id="tabs">
			<li><a href="#" name="tab1">One</a></li>
			<li><a href="#" name="tab2">Two</a></li>
			<li><a href="#" name="tab3">Three</a></li>
			<li><a href="#" name="tab4">Four</a></li>    
		</ul>

		<div id="content"> 
			<div id="tab1">
				<table cellspacing='0'>
					<tbody>
					<?php
					$arr_food=get_post_meta(3855,'choose_food'); // get array food in page have id 3855
					$args_menu=array(
						'post__in'=>$arr_food[0],
						'post_type'=>'food'
					);
					;
					$query_menu= new WP_Query();
					$query_menu->query($args_menu);
					if($query_menu->have_posts()):while($query_menu->have_posts()):$query_menu->the_post(); ?>
					<tr>
						<td>
							<?php if(has_post_thumbnail()): // check has post thumbnails?>
								<div class="food">
									<img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" title="<?php the_title();?>">
								</div>
							<?php else: ?>
								<div class="food">
									<img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'; ?>" alt="<?php the_title();?>" title="<?php the_title();?>">
								</div>
							<?php endif; // end check ?>
						</td>
						<td><?php the_title();?></td>
						<td><?php the_terms($post->ID,'cuisine');?></td>
						<td><?php echo get_post_meta($post->ID,'ingredient_food',true);?></td>
						<td><?php echo get_price_food($post->ID);?></td>
						<td class="food-text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</td>

					</tr>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
					</tbody>
				</table>
			</div>
			<div id="tab2">
				<table cellspacing='0'>
					<tbody>
					<?php
					$arr_food=get_post_meta(3855,'choose_food'); // get array food in page have id 3855
					$args_menu=array(
						'post__in'=>$arr_food[0],
						'post_type'=>'food'
					);
					;
					$query_menu= new WP_Query();
					$query_menu->query($args_menu);
					if($query_menu->have_posts()):while($query_menu->have_posts()):$query_menu->the_post(); ?>
					<tr>
						<td>
							<?php if(has_post_thumbnail()): // check has post thumbnails?>
								<div class="food">
									<img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" title="<?php the_title();?>">
								</div>
							<?php else: ?>
								<div class="food">
									<img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'; ?>" alt="<?php the_title();?>" title="<?php the_title();?>">
								</div>
							<?php endif; // end check ?>
						</td>
						<td><?php the_title();?></td>
						<td><?php the_terms($post->ID,'cuisine');?></td>
						<td><?php echo get_post_meta($post->ID,'ingredient_food',true);?></td>
						<td><?php echo get_price_food($post->ID);?></td>
						<td class="food-text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</td>

					</tr>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
					</tbody>
				</table>
			</div>
			<div id="tab3">
				<table cellspacing='0'>
					<tbody>
					<?php
					$arr_food=get_post_meta(3855,'choose_food'); // get array food in page have id 3855
					$args_menu=array(
						'post__in'=>$arr_food[0],
						'post_type'=>'food'
					);
					;
					$query_menu= new WP_Query();
					$query_menu->query($args_menu);
					if($query_menu->have_posts()):while($query_menu->have_posts()):$query_menu->the_post(); ?>
					<tr>
						<td>
							<?php if(has_post_thumbnail()): // check has post thumbnails?>
								<div class="food">
									<img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" title="<?php the_title();?>">
								</div>
							<?php else: ?>
								<div class="food">
									<img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'; ?>" alt="<?php the_title();?>" title="<?php the_title();?>">
								</div>
							<?php endif; // end check ?>
						</td>
						<td><?php the_title();?></td>
						<td><?php the_terms($post->ID,'cuisine');?></td>
						<td><?php echo get_post_meta($post->ID,'ingredient_food',true);?></td>
						<td><?php echo get_price_food($post->ID);?></td>
						<td class="food-text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</td>

					</tr>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
					</tbody>
				</table>
			</div>
			<div id="tab4">
								<table cellspacing='0'>
					<tbody>
					<?php
					$arr_food=get_post_meta(3855,'choose_food'); // get array food in page have id 3855
					$args_menu=array(
						'post__in'=>$arr_food[0],
						'post_type'=>'food'
					);
					;
					$query_menu= new WP_Query();
					$query_menu->query($args_menu);
					if($query_menu->have_posts()):while($query_menu->have_posts()):$query_menu->the_post(); ?>
					<tr>
						<td>
							<?php if(has_post_thumbnail()): // check has post thumbnails?>
								<div class="food">
									<img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" title="<?php the_title();?>">
								</div>
							<?php else: ?>
								<div class="food">
									<img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'; ?>" alt="<?php the_title();?>" title="<?php the_title();?>">
								</div>
							<?php endif; // end check ?>
						</td>
						<td><?php the_title();?></td>
						<td><?php the_terms($post->ID,'cuisine');?></td>
						<td><?php echo get_post_meta($post->ID,'ingredient_food',true);?></td>
						<td><?php echo get_price_food($post->ID);?></td>
						<td class="food-text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</td>

					</tr>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-sm-12 col-xs-12">



	</div>
</div>