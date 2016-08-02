<div class="food-menu clearfix" id="food-menu">

	<?php
	$arr_tab3=get_post_meta(3938,'choose_cat_53'); // Горячие Закуски
	$arr_tab1=get_post_meta(3938,'choose_cat_52'); // Суп
	$arr_tab2=get_post_meta(3938,'choose_cat_50'); // Салат
	$arr_tab4=get_post_meta(3938,'choose_cat_57'); //Напитки
	?>
	<div class="container">

	<div class="menu-food">
		<div class="food-menu-title">
			<a href="<?php echo get_the_permalink(3938)?>"><h1>ВьетЛанч - 350 руб</h1></a>
	
			<ul id="tabs">
				<li><a href="#" class="tab1"><h2>Суп</h2></a></li>
				<li><a href="#" class="tab2"><h2>Салат</h2></a></li>
				<li><a href="#" class="tab3"><h2>Горячее</h2></a></li>
				<li><a href="#" class="tab4"><h2>Напитки</h2></a></li>
			</ul>
		</div>
		<div id="content">
			<div id="tab1">
				<table>
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
										<img src="<?php the_post_thumbnail_url('medium');?>" alt="<?php the_title(); echo ' | '; bloginfo('name');?>" title="<?php the_title();?>">
									</div>
								<?php else: ?>
									<div class="food">
										<img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'; ?>" alt="<?php the_title(); echo ' | '; bloginfo('name');?>" title="<?php the_title();?>">
									</div>
								<?php endif; // end check ?>
							</td>
							<td><a href="<?php the_permalink()?>" title="<?php the_title();?>"><?php the_title();?></a></td>
							<td><?php the_terms($post->ID,'cuisine');?></td>
							<td><?php echo get_post_meta($post->ID,'ingredient_food',true);?></td>
							<!--<td class="food-text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</td> -->
						</tr>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
					</tbody>
				</table>
			</div>
			<div id="tab2">
				<table>
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
										<img src="<?php the_post_thumbnail_url('medium');?>" alt="<?php the_title(); echo ' | '; bloginfo('name');?>" title="<?php the_title();?>">
									</div>
								<?php else: ?>
									<div class="food">
										<img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'; ?>" alt="<?php the_title(); echo ' | '; bloginfo('name');?>" title="<?php the_title();?>">
									</div>
								<?php endif; // end check ?>
							</td>
							<td><a href="<?php the_permalink()?>" title="<?php the_title();?>"><?php the_title();?></a></td>
							<td><?php the_terms($post->ID,'cuisine');?></td>
							<td><?php echo get_post_meta($post->ID,'ingredient_food',true);?></td>
							<!--<td class="food-text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</td> -->

						</tr>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
					</tbody>
				</table>
			</div>
			<div id="tab3">
				<table>
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
									<img src="<?php the_post_thumbnail_url('medium');?>" alt="<?php the_title(); echo ' | '; bloginfo('name');?>" title="<?php the_title();?>">
								</div>
							<?php else: ?>
								<div class="food">
									<img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'; ?>" alt="<?php the_title(); echo ' | '; bloginfo('name');?>" title="<?php the_title();?>">
								</div>
							<?php endif; // end check ?>
						</td>
						<td><a href="<?php the_permalink()?>" title="<?php the_title();?>"><?php the_title();?></a></td>
						<td><?php the_terms($post->ID,'cuisine');?></td>
						<td><?php echo get_post_meta($post->ID,'ingredient_food',true);?></td>
						<!--<td class="food-text">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</td> -->

					</tr>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
					</tbody>
				</table>
			</div>
			<div id="tab4">
				<table>
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
									<img src="<?php the_post_thumbnail_url('medium');?>" alt="<?php the_title(); echo ' | '; bloginfo('name');?>" title="<?php the_title();?>">
								</div>
							<?php else: ?>
								<div class="food">
									<img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'; ?>" alt="<?php the_title(); echo ' | '; bloginfo('name');?>" title="<?php the_title();?>">
								</div>
							<?php endif; // end check ?>
						</td>
						<td><a href="<?php the_permalink()?>" title="<?php the_title();?>"><?php the_title();?></a></td>
						<td><?php the_terms($post->ID,'cuisine');?></td>
						<td><?php echo get_post_meta($post->ID,'ingredient_food',true);?></td>
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