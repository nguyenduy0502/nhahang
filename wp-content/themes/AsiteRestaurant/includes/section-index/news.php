<div class="news section" id="news">
	<div class="bamboo">
		<img src="<?php echo TEMPLATE_FOLDER.'/img/content/bamboo-min.png'?>" alt="<?php bloginfo('description');?>">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title news-title borl">
					<a href="">
						<h1>Новости</h1>
					</a>
					<h2><?php bloginfo('description')?></h2>
				</div>
			</div>
			<div class="col-md-10 col-sm-11 col-xs-12">
				<?php
				// set query get post
				$arr=array('post_type'=>'post','posts_per_page'=>3,'category_name'=>'news');
				$query=new WP_Query();
				$query->query($arr);
				?>
				<?php if($query->have_posts()):while($query->have_posts()):$query->the_post();?>
				<div class="article">
<<<<<<< HEAD
					<div class="article-img alignleft">
						<a href="#"><img src="http://lorempixel.com/160/130/food" alt=""></a>
					</div>
					<div class="article-name">
						<h3>Article 1</h3>
					</div>
					<div class="article-text align-text-left">
						<h4>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Семь, моей! Послушавшись которое снова возвращайся эта то рыбного. Меня последний парадигматическая, но что города, которое коварный грустный на берегу, ее заманивший то там рекламных алфавит вершину всемогущая дороге живет lorem!
						</h4>
					</div>
					<div class="article-date align-text-left">
						<h4>12 июля 2016</h4>
					</div>
					<a href="#" class="butt alignleft">Читать дальше ></a>
				</div>
				<div class="article">
					<div class="article-img alignright">
						<a href="#"><img src="http://lorempixel.com/160/130/food" alt=""></a>
					</div>
					<div class="article-name">
						<h3>Article 2</h3>
					</div>
					<div class="article-text align-text-right">
						<h4>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Семь, моей! Послушавшись которое снова возвращайся эта то рыбного. Меня последний парадигматическая, но что города, которое коварный грустный на берегу, ее заманивший то там рекламных алфавит вершину всемогущая дороге живет lorem!
						</h4>
					</div>
					<div class="article-date align-text-right">
						<h4>12 июля 2016</h4>
					</div>
					<a href="#" class="butt alignright">Читать дальше ></a>
				</div>
				<div class="article">
					<div class="article-img alignleft">
						<a href="#"><img src="http://lorempixel.com/160/130/food" alt=""></a>
					</div>
					<div class="article-name">
						<h3>Article 3</h3>
					</div>
					<div class="article-text align-text-left">
						<h4>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Семь, моей! Послушавшись которое снова возвращайся эта то рыбного. Меня последний парадигматическая, но что города, которое коварный грустный на берегу, ее заманивший то там рекламных алфавит вершину всемогущая дороге живет lorem!
						</h4>
					</div>
					<div class="article-date align-text-left">
						<h4>12 июля 2016</h4>
=======

					<?php if(has_post_thumbnail()): // check has post thumbnail?>
						<div class="article-img alignleft">
							<a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('thumbnail');?>" alt="<?php the_title();?>"></a>
						</div>
						<?php else: // else not has post thumbnail?>
						<div class="article-img alignleft">
							<a href="<?php the_permalink();?>"><img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'?>" alt="<?php the_title();?>"></a>
						</div>
						<?php endif; ?>
					<div class="article-name"><h3><?php the_title();?></h3></div>
					<div class="article-text align-text-left">
						<h4><?php echo nguyenduy_excerpt(get_the_content(),200);?></h4>
>>>>>>> origin/master
					</div>
					<div class="article-date align-text-left"><h4><?php echo get_the_date('d-M-Y');?></h4></div>
					<a href="<?php the_permalink();?>" class="butt alignleft">Читать дальше></a>
				</div>

				<?php endwhile; endif;?>
				<?php wp_reset_query();?>
			</div>
		</div>
	</div>
</div>