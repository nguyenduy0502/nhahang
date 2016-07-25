<div class="about-us" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-9 col-xs-7">
                <div class="about-us-text">
                    <?php
                    $args_about=array(
                        'pagename'=>'about-us' // get page have name about-us
                    );
                    $query_about=new WP_Query();
                    $query_about->query($args_about);
                    if($query_about->have_posts()):while($query_about->have_posts()):$query_about->the_post(); ?>
                        <a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php echo the_title('<h1>','</h1>');?></a>
                        <?php echo '<h3>'. nguyenduy_excerpt(get_the_content(),800).'</h3>';?>
                    <?php endwhile; /* end loop get post*/ endif;?>
                    <?php wp_reset_query(); // reset query ?>
                </div>
            </div>
            <div class="col-md-4 col-sm-3 col-xs-5">
                <?php // check sidebar hours. This show time working in index
                if (is_active_sidebar('hours-sidebar')):
                    dynamic_sidebar('hours-sidebar');
                endif;
                ?>
            </div>
        </div>
    </div>
</div>