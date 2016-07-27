<?php
/**
 * File Name: single-menu.php
 * Date: 26-06-2016
 * Time: 23:44
 * Description:
 */
get_header();?>

    <div class="new-page">
        <div class="container">
            <div class="row">
                <div class="page-block clearfix">
                    <div class="col-md-9">
                        <?php get_template_part('includes/post-types/menu/content'); ?>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">
                            <?php get_template_part('includes/sidebar/left-food-sidebar'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();?>