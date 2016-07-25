<div class="food-menu clearfix" id="food-menu">

	<?php
	$arr_tab1=get_post_meta(3938,'choose_cat_53');
	$arr_tab2=get_post_meta(3938,'choose_cat_52');
	$arr_tab3=get_post_meta(3938,'choose_cat_50');
	$arr_tab4=get_post_meta(3938,'choose_cat_57');
	?>
	<div class="container">

	<div class="menu-food">
			<div class="food-menu-title">
		<h1>ВьетЛанч</h1>
	
		<ul id="tabs">
			<li><a href="#" name="tab1">Горячие Закуски</a></li>
			<li><a href="#" name="tab2">Суп</a></li>
			<li><a href="#" name="tab3">Салат</a></li>
			<li><a href="#" name="tab4">Напитки</a></li>
		</ul>
</div>
		<div id="content"> 
			<div id="tab1">
				<table cellspacing='0'>
					<tbody>
					<?php
					$args_tab1=array(
						'post__in'=>$arr_tab1[0],
						'post_type'=>'food'
					);
					$query_tab1= new WP_Query();
					$query_tab1->query($args_tab1);
					if($query_tab1->have_posts()):while($query_tab1->have_posts()):$query_tab1->the_post(); ?>
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
						<!--<td class="food-text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</td> -->

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
					$args_tab2=array(
						'post__in'=>$arr_tab2[0],
						'post_type'=>'food'
					);
					$query_tab2= new WP_Query();
					$query_tab2->query($args_tab2);
					if($query_tab2->have_posts()):while($query_tab2->have_posts()):$query_tab2->the_post(); ?>
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
						<!--<td class="food-text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</td> -->
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
					$args_tab3=array(
						'post__in'=>$arr_tab3[0],
						'post_type'=>'food'
					);
					$query_tab3= new WP_Query();
					$query_tab3->query($args_tab3);
					if($query_tab3->have_posts()):while($query_tab3->have_posts()):$query_tab3->the_post(); ?>
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
						<!--<td class="food-text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</td> -->

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
					$args_tab4=array(
						'post__in'=>$arr_tab4[0],
						'post_type'=>'food'
					);
					$query_tab3= new WP_Query();
					$query_tab3->query($args_tab4);
					if($query_tab3->have_posts()):while($query_tab3->have_posts()):$query_tab3->the_post(); ?>
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
						<!--<td class="food-text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</td> -->

					</tr>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>

</div>