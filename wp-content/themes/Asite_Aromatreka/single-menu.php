<?php get_header(); ?>
	<!-- Section Menu -->
	<div class="menu-single">
		<div class="container">
			<?php if (have_posts()): ?>
			<div class="menu-title-aligner ">
				<h3 class="logo-menu-book-title" id="menu-book-title"><?php the_title(); ?></h3>
			</div>
			<section class="menu-book">
				<?php while (have_posts()): the_post(); ?>

					<?php
					$choose_rice_pancake = !empty(get_post_meta($post->ID, 'choose_rice_pancake', true)) ? get_post_meta($post->ID, 'choose_rice_pancake', true) : $choose_rice_pancake = array();
					$choose_rice_fish = !empty(get_post_meta($post->ID, 'choose_rice_fish', true)) ? get_post_meta($post->ID, 'choose_rice_fish', true) : $choose_rice_fish = array();
					$choose_salad = !empty(get_post_meta($post->ID, 'choose_salad', true)) ? get_post_meta($post->ID, 'choose_salad', true) : $choose_salad = array();
					$choose_soup = !empty(get_post_meta($post->ID, 'choose_soup', true)) ? get_post_meta($post->ID, 'choose_soup', true) : $choose_soup = array();
					$choose_fish = !empty(get_post_meta($post->ID, 'choose_fish', true)) ? get_post_meta($post->ID, 'choose_fish', true) : $choose_fish = array();
					$choose_shrimp = !empty(get_post_meta($post->ID, 'choose_shrimp', true)) ? get_post_meta($post->ID, 'choose_shrimp', true) : $choose_shrimp = array();
					$choose_frog_eel = !empty(get_post_meta($post->ID, 'choose_frog_eel', true)) ? get_post_meta($post->ID, 'choose_frog_eel', true) : $choose_frog_eel = array();
					$choose_chicken_quail = !empty(get_post_meta($post->ID, 'choose_chicken_quail', true)) ? get_post_meta($post->ID, 'choose_chicken_quail', true) : $choose_chicken_quail = array();
					$choose_duck = !empty(get_post_meta($post->ID, 'choose_duck', true)) ? get_post_meta($post->ID, 'choose_duck', true) : $choose_duck = array();
					$choose_pork_beef = !empty(get_post_meta($post->ID, 'choose_pork_beef', true)) ? get_post_meta($post->ID, 'choose_pork_beef', true) : $choose_pork_beef = array();
					$choose_beef_goat = !empty(get_post_meta($post->ID, 'choose_beef_goat', true)) ? get_post_meta($post->ID, 'choose_beef_goat', true) : $choose_beef_goat = array();
					$choose_squid = !empty(get_post_meta($post->ID, 'choose_squid', true)) ? get_post_meta($post->ID, 'choose_squid', true) : $choose_squid = array();
					$choose_spinach = !empty(get_post_meta($post->ID, 'choose_spinach', true)) ? get_post_meta($post->ID, 'choose_spinach', true) : $choose_spinach = array();
					$choose_snails = !empty(get_post_meta($post->ID, 'choose_snails', true)) ? get_post_meta($post->ID, 'choose_snails', true) : $choose_snails = array();
					$choose_dessert = !empty(get_post_meta($post->ID, 'choose_dessert', true)) ? get_post_meta($post->ID, 'choose_dessert', true) : $choose_dessert = array();
					$choose_gas_drink = !empty(get_post_meta($post->ID, 'choose_gas_drink', true)) ? get_post_meta($post->ID, 'choose_gas_drink', true) : $choose_gas_drink = array();
					$choose_cafe_tea = !empty(get_post_meta($post->ID, 'choose_cafe_tea', true)) ? get_post_meta($post->ID, 'choose_cafe_tea', true) : $choose_cafe_tea = array();
					$choose_beer = !empty(get_post_meta($post->ID, 'choose_beer', true)) ? get_post_meta($post->ID, 'choose_beer', true) : $choose_beer = array();
					$choose_vodka = !empty(get_post_meta($post->ID, 'choose_vodka', true)) ? get_post_meta($post->ID, 'choose_vodka', true) : $choose_vodka = array();
					$choose_champagne = !empty(get_post_meta($post->ID, 'choose_champagne', true)) ? get_post_meta($post->ID, 'choose_champagne', true) : $choose_champagne = array();
					$choose_whiskey = !empty(get_post_meta($post->ID, 'choose_whiskey', true)) ? get_post_meta($post->ID, 'choose_whiskey', true) : $choose_whiskey = array();
					$choose_cognac = !empty(get_post_meta($post->ID, 'choose_cognac', true)) ? get_post_meta($post->ID, 'choose_cognac', true) : $choose_cognac = array();
					$choose_wine = !empty(get_post_meta($post->ID, 'choose_wine', true)) ? get_post_meta($post->ID, 'choose_wine', true) : $choose_wine = array();
					$choose_rice_vermicelli = !empty(get_post_meta($post->ID, 'choose_rice_vermicelli', true)) ? get_post_meta($post->ID, 'choose_rice_vermicelli', true) : $choose_rice_vermicelli = array();
					$array_foods = array();

						$array_foods = array_merge($choose_rice_pancake, $choose_rice_fish, $choose_salad, $choose_soup, $choose_fish, $choose_shrimp, $choose_frog_eel, $choose_chicken_quail, $choose_duck,
							$choose_pork_beef, $choose_beef_goat, $choose_squid, $choose_spinach, $choose_snails, $choose_dessert, $choose_gas_drink, $choose_cafe_tea, $choose_beer, $choose_vodka,
							$choose_champagne, $choose_whiskey, $choose_cognac, $choose_wine, $choose_rice_vermicelli
						);


					//$array_foods = array_chunk($array_foods, 5);
					$len = count($array_foods);
					$firsthalf = array_slice($array_foods, 0, $len / 2);
					$secondhalf = array_slice($array_foods, $len / 2);
					?>
					<div class="dishtype-menu">
						<div class="dish-list">
							<div class="first-menu-column">
								<ul class="leaders">
									<?php for ($index = 0; $index < count($firsthalf); $index++): ?>
										<li class="product-item">
											<div class="product-name">
									<span class="product-line">
									<span class="ellipsis"><?php echo get_the_title($firsthalf[$index]); ?></span>
									<span class="product-price"><?php echo get_price_food($firsthalf[$index]); ?></span>
									</span>
											</div>
											<div
												class="product-description"><?php echo get_post_meta($firsthalf[$index], 'ingredient_food', true); ?></div>
										</li>
									<?php endfor; ?>
								</ul>
							</div>
							<div class="second-menu-column"></div>
							<div class="third-menu-column ts-clearfix">
								<ul class="leaders">
									<?php for ($index = 0; $index < count($secondhalf); $index++): ?>
										<li class="product-item">
											<div class="product-name">
									<span class="product-line">
									<span class="ellipsis"><?php echo get_the_title($secondhalf[$index]); ?></span>
									<span
										class="product-price"><?php echo get_price_food($secondhalf[$index]); ?></span>
									</span>
											</div>
											<div
												class="product-description"><?php echo get_post_meta($secondhalf[$index], 'ingredient_food', true); ?></div>
										</li>
									<?php endfor; ?>

							</div>
						</div>
					</div>
					<?php $url_thumbnail = get_the_post_thumbnail_url(); endwhile;
				endif; ?>
			</section>
		</div>
		<div class="menu-single-back">
			<?php if (empty($url_thumbnail)): ?>
				<img src="<?php echo IMG_FOLDER . '/food/_DSF4313.jpg' ?>" alt="<?php bloginfo('name') ?>">
			<?php else: ?>
				<img src="<?php echo $url_thumbnail ?>" alt="<?php bloginfo('name') ?>">

			<?php endif; ?>
		</div>
	</div>
	<!--END Section Menu -->
<?php get_footer(); ?>