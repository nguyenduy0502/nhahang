<?php
/**
 * File Name: searchform-food.php
 * Date: 28-07-2016
 * Time: 1:19
 * Description: Widget search form food
 */
add_action('widgets_init','searchform_food');
function searchform_food() {
    register_widget('Searchform_Food');
}
class Searchform_Food extends WP_Widget{
    function __construct()
    {
        parent::__construct(
            'searchform_food',
            'Search form food',
            array(
                'description' => 'Widget search form food'
            )
        );
    }
    function form($instance) {
        $defaults=array(
            'title'=>'Search'
        );
        $instance=wp_parse_args((array)$instance,$defaults);?>
        <label for="<?php echo $this->get_field_id('title') ?>">Title: </label>
        <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
               name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($instance['title']); ?>">
        <?php
    }
    function update($new_instance,$old_instance) {
        $instance=$old_instance;
        $instance['title']=$new_instance['title'];
        return $instance;
    }
    function widget($args,$instance) {
        extract($args);
        $title=$instance['title'];
        echo $args['before_widget'];?>

        <?php get_search_form();?>

      <?php  echo $args['after_widget'];
    }





}

?>