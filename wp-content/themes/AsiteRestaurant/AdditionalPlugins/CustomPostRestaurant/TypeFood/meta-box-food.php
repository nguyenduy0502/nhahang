<?php
/**
 * File Name: meta-box-food.php
 * Date: 22-06-2016
 * Time: 1:15
 * Description:
 */

add_action('add_meta_boxes', 'add_food_metaboxes');
function add_food_metaboxes()
{
	add_meta_box('add_food_metaboxes', 'Информация о еде', 'form_food_output', 'food');
}

function form_food_output($post)
{
	// create nonce save data
	$price_food = get_post_meta($post->ID, 'price_food', true);
	wp_nonce_field('save_price_food_nonce', 'info_price_food_nonce');
	$recommend_food = get_post_meta($post->ID, 'recommend_food', true);
	wp_nonce_field('save_recommend_food_nonce', 'info_recommend_food_nonce');
	$ingredient_food = get_post_meta($post->ID, 'ingredient_food', true);
	wp_nonce_field('save_ingredient_food_nonce', 'info_ingredient_food_nonce');
	$weight_food = get_post_meta($post->ID, 'weight_food', true);
	wp_nonce_field('save_weight_food_nonce', 'info_weight_food_nonce');
	$protein_food=get_post_meta($post->ID,'protein_food',true);
	wp_nonce_field('save_protein_food_nonce','info_protein_food_nonce');
	$fat_food=get_post_meta($post->ID,'fat_food',true);
	wp_nonce_field('save_fat_food_nonce','info_fat_food_nonce');
	$calorie_food=get_post_meta($post->ID,'calorie_food',true);
	wp_nonce_field('save_calorie_food_nonce','info_calorie_food_nonce');
	$quantity_food=get_post_meta($post->ID,'quantity_food',true);
	wp_nonce_field('save_quantity_food_nonce','info_quantity_food_nonce');
	$unit_food=get_post_meta($post->ID,'food_unit',true);
	wp_nonce_field('save_food_unit_nonce','info_food_unit_nonce');
	$stored_meta=get_post_meta($post->ID);

	?>
	<table class="info-food">
		<tr>
			<td>
				<label for="price_food"><?php echo __('Цена', 'asite') ?></label>
			</td>
			<td>
				<input type="text" id="price_food" name="price_food" placeholder="250" value="<?php echo esc_attr($price_food); ?>"/>
			</td>
		</tr>
		<tr>
			<td><label for="weight_food">Масса</label></td>
			<td><input type="text" id="weight_food" name="weight_food" placeholder="250" value="<?php echo esc_attr($weight_food); ?>"/></td>
			<td><label for="food_unit">Milliliter</label><input type="radio" name="food_unit" value="ml"<?php if(isset($stored_meta['food_unit'])) checked($stored_meta['food_unit'][0],'ml');?>></td>
			<td><label for="food_unit">Gram</label><input type="radio" name="food_unit" value="gram" <?php if(isset($stored_meta['food_unit'])) checked($stored_meta['food_unit'][0],'gram');?>></td>
		</tr>
		<tr>
			<td><label for="protein_food">Белки</label></td>
			<td><input type="text" id="protein_food" name="protein_food" placeholder="0.25" value="<?php echo esc_attr($protein_food);?>"></td>
		</tr>
		<tr>
			<td><label for="fat_food">Жиры</label></td>
			<td><input type="text" id="fat_food" name="fat_food" placeholder="5.25" value="<?php echo esc_attr($fat_food);?>"></td>
		</tr>
		<tr>
			<td><label for="calorie_food">Салории</label></td>
			<td><input type="text" id="calorie_food" name="calorie_food" placeholder="90.15" value="<?php echo esc_attr($calorie_food);?>"></td>
		</tr>
		<tr>
			<td><label for="quantity_food">Количество</label></td>
			<td><select name="quantity_food" id="quantity_food">
					<option value="select-null">---</option>
					<option value="select-3" <?php if(isset($stored_meta['quantity_food'])) selected($stored_meta['quantity_food'][0],'select-3')?>>3 Шт</option>
					<option value="select-4" <?php if(isset($stored_meta['quantity_food'])) selected($stored_meta['quantity_food'][0],'select-4')?>>4 Шт</option>
					<option value="select-5" <?php if(isset($stored_meta['quantity_food'])) selected($stored_meta['quantity_food'][0],'select-5')?>>5 Шт</option>
					<option value="select-10" <?php if(isset($stored_meta['quantity_food'])) selected($stored_meta['quantity_food'][0],'select-10')?>>10 Шт</option>
					<option value="select-15" <?php if(isset($stored_meta['quantity_food'])) selected($stored_meta['quantity_food'][0],'select-15')?>>15 Шт</option>
					<option value="select-20" <?php if(isset($stored_meta['quantity_food'])) selected($stored_meta['quantity_food'][0],'select-20')?>>20 Шт</option>
				</select></td>

		</tr>

		<tr>
			<td><label for="ingredient_food">Состав</label></td>
			<td><textarea id="ingredient_food" name="ingredient_food" placeholder="Говядина, лук .."><?php echo esc_attr($ingredient_food)?></textarea></td>
		</tr>

		<tr>
			<td><label for="recommend_food">Рекомендовать</label></td>
			<td><input type="checkbox" id="recommend_food" name="recommend_food" value="yes" <?php if(isset($stored_meta['recommend_food'])) checked($stored_meta['recommend_food'][0],'yes')?>/></td>

		</tr>
	</table>

	<?php
}
add_action('save_post', 'save_form_food_output');
function save_form_food_output($post_id)
{
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}
	// save data price_food
	if (!wp_verify_nonce($_POST['info_price_food_nonce'],'save_price_food_nonce')) {
		return;

	}
	if (isset($_POST['price_food']) && $_POST['price_food'] !== "") {
		update_post_meta($post_id,'price_food',$_POST['price_food']);
	}
	// save data recommend_food
	if (!wp_verify_nonce($_POST['info_recommend_food_nonce'], 'save_recommend_food_nonce')) {
		return;
	}
	if (isset($_POST['recommend_food']) && $_POST['recommend_food'] !== "") {
		update_post_meta($post_id,'recommend_food','yes');
	} else {
		update_post_meta($post_id,'recommend_food','no');
	}
	// save data ingredient_food
	if (!wp_verify_nonce($_POST['info_ingredient_food_nonce'],'save_ingredient_food_nonce')) {
		return;
	}
	if (isset($_POST['ingredient_food']) && $_POST['ingredient_food']!=="") {
		update_post_meta($post_id,'ingredient_food',$_POST['ingredient_food']);
	}
	//save data weight_food
	if (!wp_verify_nonce($_POST['info_weight_food_nonce'], 'save_weight_food_nonce')) {
		return;
	}
	if (isset($_POST['weight_food']) && $_POST['weight_food'] !== "") {
		update_post_meta($post_id,'weight_food',$_POST['weight_food']);
	}
	// save data protein_food
	if (!wp_verify_nonce($_POST['info_protein_food_nonce'], 'save_protein_food_nonce')) {
		return;
	}
	if (isset($_POST['protein_food']) && $_POST['protein_food'] !== "") {
		update_post_meta($post_id,'protein_food',$_POST['protein_food']);
	}
	// save data fat_food
	if (!wp_verify_nonce($_POST['info_fat_food_nonce'], 'save_fat_food_nonce')) {
		return;
	}
	if (isset($_POST['fat_food']) && $_POST['fat_food'] !== "") {
		update_post_meta($post_id,'fat_food',$_POST['fat_food']);
	}
	// save data calorie_food
	if (!wp_verify_nonce($_POST['info_calorie_food_nonce'], 'save_calorie_food_nonce')) {
		return;
	}
	if (isset($_POST['calorie_food']) && $_POST['calorie_food'] !== "") {
		update_post_meta($post_id,'calorie_food',$_POST['calorie_food']);
	}
	// save data quantity_food
	if (!wp_verify_nonce($_POST['info_quantity_food_nonce'], 'save_quantity_food_nonce')) {
		return;
	}
	if (isset($_POST['quantity_food']) && $_POST['quantity_food'] !== "") {
		update_post_meta($post_id,'quantity_food',$_POST['quantity_food']);
	}
	// save data food_unit
	if (!wp_verify_nonce($_POST['info_food_unit_nonce'], 'save_food_unit_nonce')) {
		return;
	}
	if (isset($_POST['food_unit']) && $_POST['food_unit'] !== "") {
		update_post_meta($post_id,'food_unit',$_POST['food_unit']);
	} else {
		update_post_meta($post_id,'recommend_food','');
	}
}
?>