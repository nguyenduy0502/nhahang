<?php get_header();?>


<?php get_template_part('includes/navigation/main-menu'); // get template main menu?>
<!--end header-->

<!--about-us-->
<?php get_template_part('includes/section-index/about-us');?>
<!--end about us-->

<!--news-->
<?php get_template_part('includes/section-index/news'); ?>
<!--end news-->

<!--new food-->
<?php get_template_part('includes/section-index/new-food');?>
</div>
<!--end new food-->

<!--food-menu-->
<?php get_template_part('includes/section-index/food-menu');?>
<!--end food-menu-->

<!--booking-->
<?php get_template_part('includes/section-index/booking');?>
<!--end booking-->

<!--contact us-->
<?php get_template_part('includes/section-index/contact-us');?>
<!--end contact us-->

<?php get_footer();?>