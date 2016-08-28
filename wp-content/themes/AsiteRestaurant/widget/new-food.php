<?php
/**
 * File Name: new-food.php
 * Date: 12-08-2016
 * Time: 14:23
 * Description: Widget new food
 */
add_action('widgets_init', 'new_food');
function new_food()
{
    register_widget('New_Food');
}

class New_Food extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'new_food',
            'New Food',
            array('description' => 'Widget new food in index')
        );
    }

    function form($instance)
    {
        $defaults = array(
            'count' => 5,
            'id' => 1
        );
        $list_terms = get_terms('cuisine'); // get list custom taxonomy
        $instance = wp_parse_args((array)$instance, $defaults); ?>
        <label for="<?php echo $this->get_field_id('count') ?>">Count: </label>
        <input type="text" class="widefat" id="<?php echo $this->get_field_id('count') ?>"
               name="<?php echo $this->get_field_name('count'); ?>" value="<?php echo esc_attr($instance['count']); ?>"
               style="width: 230px;">
        <br/>
        <label for="<?php echo $this->get_field_id('id') ?>">Category: </label>
        <select name="<?php echo $this->get_field_name('id') ?>" id="<?php echo $this->get_field_id('id') ?>">
            <?php foreach ($list_terms as $term): ?>
                <option
                    value="<?php echo $term->term_id ?>" <?php if ($term->term_id == $instance['id']) echo 'selected="selected"' ?>><?php echo $term->name; ?></option>
            <?php endforeach; // end loop
            ?>
        </select>
        <?php
    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['count'] = $new_instance['count'];
        $instance['id'] = $new_instance['id'];
        return $instance;

    }

    function widget($args, $instance)
    {
        extract($args);
        echo $args['before_widget']; ?>
        <?php
        $arr = array(
            'tax_query' => array(
                array(
                    'taxonomy' => 'cuisine',
                    'field' => 'id',
                    'terms' => $instance['id'], //get by id
                )),
            'posts_per_page' => $instance['count'], // get count
            'orderby'=>'rand'
        );
        $query = new WP_Query();
        $query->query($arr); ?>
        <div class=" owl-carousel">
            <?php if ($query->have_posts()):while ($query->have_posts()):$query->the_post(); ?>
                <?php $ingredient_food = get_post_meta(get_the_ID(), 'ingredient_food', true); ?>
                <div class="item-new-food">
                    <div class="item-new-food-info">
                        <div class="item-new-food-info-mid">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><p
                                    class="it-nf-name"><?php the_title() ?></p></a>

                            <p class="it-nf-price"><?php echo get_price_food(get_the_ID()); ?></p>

                            <p class="it-nf-desc"><?php echo $ingredient_food;  ?></p>
                        </div>
                    </div>

                    <?php if(has_post_thumbnail()):?>
                        <div class="item-new-food-image">
                            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php echo $ingredient_food;
                            echo " | ";
                            bloginfo('description'); ?>" title="<?php the_title(); ?>">
                        </div>
                    <?php else: ?>
                        <div class="item-new-food-image">
                            <img src="<?php echo TEMPLATE_FOLDER.'/img/logo.jpg'; ?>" alt="<?php echo $ingredient_food;
                            echo " | ";
                            bloginfo('description'); ?>" title="<?php the_title(); ?>">
                        </div>
                    <?php endif;?>
                </div>
            <?php endwhile; endif;
            wp_reset_query(); ?>
        </div>
        <?php echo $args['after_widget'];
    }

}

?>