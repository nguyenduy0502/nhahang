<?php
/**
 * File Name: meta-box-menu.php
 * Date: 23-06-2016
 * Time: 23:07
 * Description: Meta box menu show foods
 */
add_action('add_meta_boxes', 'metabox_menu');
function metabox_menu()
{
	add_meta_box('metabox_menu', 'Lựa chọn món ăn cho thực đơn', 'form_menu_output', 'menu');
}

function form_menu_output($post)
{

	$choose_food = array(get_post_meta($post->ID, 'choose_food', true));

	$choose_cat_53=array(get_post_meta($post->ID,'choose_cat_53',true));
	$choose_cat_55=array(get_post_meta($post->ID,'choose_cat_55',true));
	$choose_cat_50=array(get_post_meta($post->ID,'choose_cat_50',true));
	$choose_cat_52=array(get_post_meta($post->ID,'choose_cat_52',true));
	$choose_cat_51=array(get_post_meta($post->ID,'choose_cat_51',true));
	$choose_cat_54=array(get_post_meta($post->ID,'choose_cat_54',true));
	$choose_cat_56=array(get_post_meta($post->ID,'choose_cat_56',true));
	$choose_cat_57=array(get_post_meta($post->ID,'choose_cat_57',true));

	wp_nonce_field('save_choose_food_nonce', 'info_choose_food_nonce');
	wp_nonce_field('save_choose_cat_53_nonce', 'info_choose_cat_53_nonce');
	wp_nonce_field('save_choose_cat_55_nonce', 'info_choose_cat_55_nonce');
	wp_nonce_field('save_choose_cat_50_nonce', 'info_choose_cat_50_nonce');
	wp_nonce_field('save_choose_cat_52_nonce', 'info_choose_cat_52_nonce');
	wp_nonce_field('save_choose_cat_51_nonce', 'info_choose_cat_51_nonce');
	wp_nonce_field('save_choose_cat_54_nonce', 'info_choose_cat_54_nonce');
	wp_nonce_field('save_choose_cat_56_nonce', 'info_choose_cat_56_nonce');
	wp_nonce_field('save_choose_cat_57_nonce', 'info_choose_cat_57_nonce');
	if (empty($choose_cat_53[0])) {
		// set default data for array
		$choose_cat_53[0]=array(0502);
	}
	if (empty($choose_cat_55[0])) {
		// set default data for array
		$choose_cat_55[0]=array(0502);
	}
	if (empty($choose_cat_50[0])) {
		// set default data for array
		$choose_cat_50[0]=array(0502);
	}
	if (empty($choose_cat_52[0])) {
		// set default data for array
		$choose_cat_52[0]=array(0502);
	}
	if (empty($choose_cat_51[0])) {
		// set default data for array
		$choose_cat_51[0]=array(0502);
	}
	if (empty($choose_cat_54[0])) {
		// set default data for array
		$choose_cat_54[0]=array(0502);
	}
	if (empty($choose_cat_56[0])) {
		// set default data for array
		$choose_cat_54[0]=array(0502);
	}
	if (empty($choose_cat_57[0])) {
		// set default data for array
		$choose_cat_57[0]=array(0502);
	}



	?>
	<?php $args_cats = array('taxonomy' => 'cuisine'); // get category cuisine
	$cats = get_categories($args_cats)// set list categories
	?>
	<div class="menu-choose" style="">
		<table><!-- table Горячие Закуски -->
			<?php $cat_53 = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'cuisine',
						'field' => 'id',
						'terms' => '53', //Горячие Закуски
					))
			);
			$query_53 = new WP_Query($cat_53);
			?>
			<tr>
				<th>Горячие Закуски</th>
			</tr>
			<?php if ($query_53->have_posts()): while ($query_53->have_posts()):$query_53->the_post(); ?>
				<tr>
					<td><input type="checkbox" name="choose_cat_53_array[]"
					           value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_53[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
					</td>

				</tr>
				<?php wp_reset_query(); endwhile; endif; // end query for cat 53
			?>
		</table><!-- end table Горячие Закуски -->
		<table><!-- table Вегетарианские Блюда -->
			<?php $cat_55 = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'cuisine',
						'field' => 'id',
						'terms' => '55', //Вегетарианские Блюда
					))
			);
			$query_55 = new WP_Query($cat_55);
			?>
			<tr>
				<th>Вегетарианские Блюда</th>
			</tr>
			<?php if($query_55->have_posts()):while($query_55->have_posts()):$query_55->the_post();?>
				<tr>
					<td><input type="checkbox" name="choose_cat_55_array[]"
					           value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_55[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
					</td>

				</tr>
			<?php wp_reset_query(); endwhile; endif // end query for cat 55 ?>
		</table><!-- end table Вегетарианские Блюда -->
		<table><!-- table Салаты -->
			<?php $cat_50 = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'cuisine',
						'field' => 'id',
						'terms' => '50', //Салаты
					))
			);
			$query_50 = new WP_Query($cat_50);
			?>
			<tr>
				<th>Салаты</th>
			</tr>
			<?php if($query_50->have_posts()):while($query_50->have_posts()):$query_50->the_post();?>
				<tr>
					<td><input type="checkbox" name="choose_cat_50_array[]"
					           value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_50[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
					</td>

				</tr>
				<?php wp_reset_query(); endwhile; endif // end query for cat 50 ?>
		</table><!-- end table Салаты -->
		<table><!-- table Супы -->
			<?php $cat_52 = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'cuisine',
						'field' => 'id',
						'terms' => '52', //Супы
					))
			);
			$query_52 = new WP_Query($cat_52);
			?>
			<tr>
				<th>Супы</th>
			</tr>
			<?php if($query_52->have_posts()):while($query_52->have_posts()):$query_52->the_post();?>
				<tr>
					<td><input type="checkbox" name="choose_cat_52_array[]"
					           value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_52[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
					</td>

				</tr>
				<?php wp_reset_query(); endwhile; endif // end query for cat 52 ?>
		</table><!-- end table Супы -->
		<table><!-- table Холодные Закуски -->
			<?php $cat_51 = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'cuisine',
						'field' => 'id',
						'terms' => '51', //Холодные Закуски
					))
			);
			$query_51 = new WP_Query($cat_51);
			?>
			<tr>
				<th>Холодные Закуски</th>
			</tr>
			<?php if($query_51->have_posts()):while($query_51->have_posts()):$query_51->the_post();?>
				<tr>
					<td><input type="checkbox" name="choose_cat_51_array[]"
					           value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_51[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
					</td>

				</tr>
				<?php wp_reset_query(); endwhile; endif // end query for cat 51 ?>
		</table><!-- end table Холодные Закуски -->
		<table> <!-- table Основные Блюда -->
			<?php $cat_54 = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'cuisine',
						'field' => 'id',
						'terms' => '54', //Основные Блюда
					))
			);
			$query_54 = new WP_Query($cat_54);
			?>
			<tr>
				<th>Основные Блюдаи</th>
			</tr>
			<?php if($query_54->have_posts()):while($query_54->have_posts()):$query_54->the_post();?>
				<tr>
					<td><input type="checkbox" name="choose_cat_54_array[]"
					           value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_54[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
					</td>

				</tr>
				<?php wp_reset_query(); endwhile; endif // end query for cat 54 ?>
		</table> <!-- end table Основные Блюда -->
		<table> <!-- table Специальное Предложение -->
			<?php $cat_56 = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'cuisine',
						'field' => 'id',
						'terms' => '56', //Специальное Предложение
					))
			);
			$query_56 = new WP_Query($cat_56);
			?>
			<tr>
				<th>Специальное Предложение</th>
			</tr>
			<?php if($query_56->have_posts()):while($query_56->have_posts()):$query_56->the_post();?>
				<tr>
					<td><input type="checkbox" name="choose_cat_56_array[]"
					           value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_56[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
					</td>

				</tr>
				<?php wp_reset_query(); endwhile; endif // end query for cat 56 ?>
		</table> <!-- end table Специальное Предложение -->
		<table> <!-- table Напитки -->
			<?php $cat_57 = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'cuisine',
						'field' => 'id',
						'terms' => '57', //Напитки
					))
			);
			$query_57 = new WP_Query($cat_57);
			?>
			<tr>
				<th>Напитки</th>
			</tr>
			<?php if($query_57->have_posts()):while($query_57->have_posts()):$query_57->the_post();?>
				<tr>
					<td><input type="checkbox" name="choose_cat_57_array[]"
							   value="<?php the_ID() ?>" <?php echo (in_array(get_the_ID(), $choose_cat_57[0])) ? 'checked="checked"' : ''; ?>><?php the_title() ?>
					</td>

				</tr>
				<?php wp_reset_query(); endwhile; endif // end query for cat 57 ?>
		</table> <!-- end table Напитки -->
	</div><!-- end class menu-choose-->
	<?php


}

add_action('save_post', 'save_form_menu_output');
function save_form_menu_output($post_id)
{
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}
	//save data choose_food
	if (!wp_verify_nonce($_POST['info_choose_cat_53_nonce'], 'save_choose_cat_53_nonce')) {
		return;
	}
	if (isset($_POST['choose_cat_53_array']) && $_POST['choose_cat_53_array'] !== "") {
		$custom = $_POST['choose_cat_53_array'];
		$old_meta = get_post_meta($post_id, 'choose_cat_53', true);
		// Update post meta
		if (!empty($old_meta)) {
			update_post_meta($post_id, 'choose_cat_53', $custom);
		} else {
			add_post_meta($post_id, 'choose_cat_53', $custom);

		}


	}

	if (isset($_POST['choose_cat_55_array']) && $_POST['choose_cat_55_array'] !== "") {
		$custom = $_POST['choose_cat_53_array'];
		$old_meta = get_post_meta($post_id, 'choose_cat_55', true);
		// Update post meta
		if (!empty($old_meta)) {
			update_post_meta($post_id, 'choose_cat_55', $custom);
		} else {
			add_post_meta($post_id, 'choose_cat_55', $custom);

		}


	}
	if (isset($_POST['choose_cat_50_array']) && $_POST['choose_cat_50_array'] !== "") {
		$custom = $_POST['choose_cat_50_array'];
		$old_meta = get_post_meta($post_id, 'choose_cat_50', true);
		// Update post meta
		if (!empty($old_meta)) {
			update_post_meta($post_id, 'choose_cat_50', $custom);
		} else {
			add_post_meta($post_id, 'choose_cat_50', $custom);

		}


	}

	if (isset($_POST['choose_cat_52_array']) && $_POST['choose_cat_52_array'] !== "") {
		$custom = $_POST['choose_cat_52_array'];
		$old_meta = get_post_meta($post_id, 'choose_cat_52', true);
		// Update post meta
		if (!empty($old_meta)) {
			update_post_meta($post_id, 'choose_cat_52', $custom);
		} else {
			add_post_meta($post_id, 'choose_cat_52', $custom);

		}


	}
	if (isset($_POST['choose_cat_51_array']) && $_POST['choose_cat_51_array'] !== "") {
		$custom = $_POST['choose_cat_51_array'];
		$old_meta = get_post_meta($post_id, 'choose_cat_51', true);
		// Update post meta
		if (!empty($old_meta)) {
			update_post_meta($post_id, 'choose_cat_51', $custom);
		} else {
			add_post_meta($post_id, 'choose_cat_51', $custom);

		}


	}
	if (isset($_POST['choose_cat_54_array']) && $_POST['choose_cat_54_array'] !== "") {
		$custom = $_POST['choose_cat_54_array'];
		$old_meta = get_post_meta($post_id, 'choose_cat_54', true);
		// Update post meta
		if (!empty($old_meta)) {
			update_post_meta($post_id, 'choose_cat_54', $custom);
		} else {
			add_post_meta($post_id, 'choose_cat_54', $custom);

		}


	}
	if (isset($_POST['choose_cat_56_array']) && $_POST['choose_cat_56_array'] !== "") {
		$custom = $_POST['choose_cat_56_array'];
		$old_meta = get_post_meta($post_id, 'choose_cat_56', true);
		// Update post meta
		if (!empty($old_meta)) {
			update_post_meta($post_id, 'choose_cat_56', $custom);
		} else {
			add_post_meta($post_id, 'choose_cat_56', $custom);

		}


	}
	if (isset($_POST['choose_cat_57_array']) && $_POST['choose_cat_57_array'] !== "") {
		$custom = $_POST['choose_cat_57_array'];
		$old_meta = get_post_meta($post_id, 'choose_cat_57', true);
		// Update post meta
		if (!empty($old_meta)) {
			update_post_meta($post_id, 'choose_cat_57', $custom);
		} else {
			add_post_meta($post_id, 'choose_cat_57', $custom);

		}


	}

}


?>