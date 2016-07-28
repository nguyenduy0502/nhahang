<?php
/**
 * File Name: categories_food.php
 * Date: 28-07-2016
 * Time: 14:30
 * Description: Widget category type food
 */
add_action('widgets_init','categories_food');
function categories_food() {
    register_widget('Categories_Food');
}
class Categories_Food extends WP_Widget{
    function __construct() {
        parent::__construct(
          'categories_food',
        'Categories Food',
            array(
                'description'=>'Widget Categories Food'
            )

        );
    }
    function form($instance){
        $defaults = array(
            'title' => 'Categories',

        );
        $instance = wp_parse_args((array)$instance, $defaults); ?>
        <label for="<?php echo $this->get_field_id('title') ?>">Title: </label>
        <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
               name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($instance['title']); ?>">
        <?php

    }
    function update($new_instance, $old_instance){
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        return $instance;
    }
    function widget($args,$instance) {
        extract($args);
        $title=$instance['title'];
        echo $args['before_widget'];?>
        <?php $terms = get_terms('cuisine'); ?>
        <div class="category-list">
        <h2><?php echo $title; ?></h2>
        <ul id="nestedlist">
        <?php foreach ($terms as $term) {
            echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
        }?>
        </ul>
        </div>

        <?php echo $args['after_widget'];
    }
}
?>