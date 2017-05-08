<?php
/**
 * File Name: booking-templates.php
 * Date: 16-09-2016
 * Time: 23:56
 * Description:
 * Template Name: Booking
 */
?>
<?php get_header();?>
<?php
$query=new WP_Query(
    array(
        'post_type'=>'rtb-booking'
    )
);
if(have_posts()):while(have_posts()):the_post();
the_content();
endwhile; endif;
echo $_POST['rtb-name'];
?>
<?php get_footer();?>
