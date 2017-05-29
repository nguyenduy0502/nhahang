<?php


$array_id = array(
    53, 52, 56, 50
);
echo "<pre>";
print_r($array_id);
echo "<pre/>";

for ($index = 0; $index < count($array_id); $index++):
    $args = array(
        'post_type' => 'food',
        'posts_per_page' => 8,
        'tax_query' => array(
          array(
              'taxonomy' => 'cuisine',
              'terms' => $array_id[$index],
              'field' => 'id'
          )
        ),
    );
    $query = new WP_Query();
    $query->query($args);
    echo "<pre>";
    print_r($args);
    echo "<pre/>";
    echo '---------------------';

    if ($query->have_posts()): while ($query->have_posts()):$query->the_post();

        echo '<br>';
        echo get_the_title();
        echo '<br/>';

    endwhile; endif;
    echo '------------------------';
    $args=null; $query=null; wp_reset_query(); wp_reset_postdata();
endfor;
?>