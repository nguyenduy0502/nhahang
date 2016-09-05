<?php global $asite_options; ?>
<?php if (!empty($asite_options['option_category_news']) && isset($asite_options['option_category_news'])): // check option_category_news?>
    <div class="news section" id="news">
        <div class="bamboo">
             <img src="<?php echo TEMPLATE_FOLDER . '/img/content/bamboo.png' ?>"
                 alt="<?php bloginfo('description'); ?>">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title news-title borl">
                        <?php if (!empty($asite_options['option_title_news']) && isset($asite_options['option_title_news'])): // check option_title_news?>
                            <h1><?php echo $asite_options['option_title_news']; ?></h1>
                        <?php endif; // end check option_title_news?>
                        <?php if (!empty($asite_options['option_desc_news']) && isset($asite_options['option_desc_news'])): // check option_desc_news?>
                            <h2><?php echo $asite_options['option_desc_news'] ?></h2>
                        <?php endif; // end check option_desc_news?>
                    </div>
                </div>
                <div class="col-md-10 col-sm-11 col-xs-12">
                    <?php
                    (!empty($asite_options['option_number_news']) && isset($asite_options['option_number_news'])) ? $number_post = $asite_options['option_number_news'] : $number_post = 3;
                    // set query get post
                    $agrs = array('
				        post_type' => 'post',
                        'posts_per_page' => $number_post,
                        'cat' => $asite_options['option_category_news']
                    );
                    $query = new WP_Query();
                    $query->query($agrs);
                    ?>
                    <?php if ($query->have_posts()):while ($query->have_posts()):$query->the_post(); ?>
                        <div class="article">
                            <?php if (has_post_thumbnail()): // check has post thumbnail?>
                                <div class="article-img alignleft">
                                    <a href="<?php the_permalink(); ?>"><img
                                            src="<?php the_post_thumbnail_url('thumbnail'); ?>"
                                            alt="<?php the_title(); ?>"></a>
                                </div>
                            <?php else: // else not has post thumbnail?>
                                <div class="article-img alignleft">
                                    <a href="<?php the_permalink(); ?>"><img
                                            src="<?php echo TEMPLATE_FOLDER . '/img/logo.jpg' ?>"
                                            alt="<?php the_title(); ?>"></a>
                                </div>
                            <?php endif; ?>
                            <div class="article-name"><h3><?php the_title(); ?></h3></div>
                            <div class="article-text align-text-left">
                                <h4><?php echo nguyenduy_excerpt(get_the_content(), 200); ?></h4>
                            </div>
                            <div class="article-date align-text-left"><h4><?php echo get_the_date('d-M-Y'); ?></h4>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="butt alignleft">Читать дальше></a>
                        </div>

                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; // end check ?>