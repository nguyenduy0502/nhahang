<?php
/**
 * File Name: meta-box.php
 * Date: 04-08-2016
 * Time: 0:58
 * Description:
 */
add_action('add_meta_boxes', 'metabox_post');
function metabox_post()
{
    add_meta_box('metabox_post', 'Meta box for post', 'form_post_output', 'post');
}
function form_post_output($post)
{
    $form_post = get_post_meta($post->ID, 'form_post', true);
    wp_nonce_field('save_form_post_nonce', 'info_form_post_nonce');
    ?>
    <table>
        <tr>
            <td><label for="form_post"><?php echo __('Video or Music ', 'nguyenduy'); ?></label></td>
            <td>
            <td><textarea style="width: 600px; height: 130px;" id="form_post" name="form_post"
                          placeholder="tag iframe"><?php echo esc_attr($form_post) ?></textarea></td>
            </td>
        </tr>
    </table>
    <?php
}
add_action('save_post','save_form_post_output');
function save_form_post_output($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!wp_verify_nonce($_POST['info_form_post_nonce'],'save_form_post_nonce')) {
        return;

    }
    if (isset($_POST['form_post']) && $_POST['form_post'] !== "") {
        update_post_meta($post_id,'form_post',$_POST['form_post']);
    }
}
?>