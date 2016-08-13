<?php
/**
 * File Name: single.php
 * Date: 26-06-2016
 * Time: 23:15
 * Description: single post
 */
?>
<?php get_header();?>
<div class="new-page section">
<div class="container">
<div class="row">
		<div class="page-block clearfix">
			<div class="col-md-9">
				<div class="page-content clearfix">
					<div class="single-page">
                        <?php if(have_posts()): while(have_posts()):the_post();?>
                            <?php $format = get_post_format() ?: 'standard'; // get type post?>
                            <?php if ($format == 'gallery') {
                                get_template_part('includes/post-format/gallery');  // get single post-format gallery

                            } else if ($format == 'standard') {
                                get_template_part('includes/post-format/standard');  // get single post-format gallery

                            }
                            else if ($format == 'video') {
                                get_template_part('includes/post-format/video');  // get single post-format gallery
                            }
                            ?>
							<?php get_template_part('includes/tags/google-tags');?>
                        <?php endwhile; endif; // end loop get content?>
					</div>
					<?php get_template_part('includes/relatedpost/cat_post');?>
                    <?php //comments_template();?>
				</div>

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