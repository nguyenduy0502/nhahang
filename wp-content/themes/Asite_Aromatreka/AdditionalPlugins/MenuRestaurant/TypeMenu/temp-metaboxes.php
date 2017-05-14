<?php
/**
 * File Name: temp-metaboxes.php
 * Date: 28-06-2016
 * Time: 14:13
 * Description:
 */
add_action('add_meta_boxes', 'temp_metaboxes');
function temp_metaboxes()
{
	add_meta_box('metabox_menu', 'Testing', 'music_meta_box', 'menu');

}

function music_meta_box( $post )
{
	// Get post meta value using the key from our save function in the second paramater.
	$custom_meta = get_post_meta($post->ID, '_custom-meta-box', true);

	?>
	<input type="checkbox" name="custom-meta-box[]" value="huge" <?php echo (in_array('huge', $custom_meta)) ? 'checked="checked"' : ''; ?> />Huge
	<br>
	<input type="checkbox" name="custom-meta-box[]" value="house" <?php echo (in_array('house', $custom_meta)) ? 'checked="checked"' : ''; ?> />House
	<br>
	<input type="checkbox" name="custom-meta-box[]" value="techno" <?php echo (in_array('techno', $custom_meta)) ? 'checked="checked"' : ''; ?> />Techno<br>
	<?php
}
add_action( 'save_post', 'save_music_meta_box' );
function save_music_meta_box()
{

	global $post;
	// Get our form field
	if(isset( $_POST['custom-meta-box'] ))
	{
		$custom = $_POST['custom-meta-box'];
		$old_meta = get_post_meta($post->ID, '_custom-meta-box', true);
		// Update post meta
		if(!empty($old_meta)){
			update_post_meta($post->ID, '_custom-meta-box', $custom);
		} else {
			delete_post_meta($post->ID, '_custom-meta-box', $custom);

		}
	}
}
?>
