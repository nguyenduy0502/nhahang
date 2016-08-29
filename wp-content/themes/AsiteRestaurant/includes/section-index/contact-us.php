<!-- <div class="contact-us section" id="section5" data-anchor="contact-us"> -->
<?php global $asite_options; // global variable theme option ?>
<div class="contact-us section" id="contact-us">
    <div class="gallery col-md-6">
        <div class="section-title">
            <h1>Что</h1>
            <h2>О нас думают</h2>
        </div>
        <div class="contact-us-background"></div>
        <div class="col-md-12">
            <div class="owl-carousel2 testimonial">
                <?php
                $args=array(
                    'orderby'=>'comment_date',
                    'status'=>'approve',
                    'number'=>10
                );
                $comments=get_comments($args);
                ?>
                <?php foreach($comments as $comment):?>
                <div class="item-testm">
                    <div class="item-testm-content">
                        <div class="item-testm-pers">
                            <div class="item-testm-pers-img">
                               <?php get_avatar($comment)?>
                            </div>
                        </div>
                        <div class="item-testm-text">
                            <blockquote><?php echo $comment->comment_content?><cite> - <?php echo $comment->comment_author;?></cite></blockquote>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
        $args=array(
            'post_type'=>'food',
            'orderby'=>'rand',
            'posts_per_page'=>4
        );
        $query=new WP_Query();
        $query->query($args);
        if($query->have_posts()):while($query->have_posts()):$query->the_post();
            $ingredient_food = get_post_meta($post->ID, 'ingredient_food', true);

            ?>
        <div class="col-md-6">
            <div class="ih-item square colored effect6 bottom_to_top"><a href="<?php the_permalink();?>">
                    <div class="img"><img src="<?php the_post_thumbnail_url('medium');?>"
                                           alt="<?php the_title();?>"></div>
                    <div class="info">
                        <h3><?php the_title();?></h3>

                        <p><?php echo $ingredient_food;?></p>
                    </div>
                </a></div>
        </div>
        <?php endwhile; endif; ?>

    </div>
    <div class="contact-us-info col-md-6">
        <div class="contact-us-content">
            <div class="section-title">
                <h1>Свяжитесь</h1>

                <h2>С нами</h2>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="contact-us-form">
                    <h2>Контакты</h2>
                    <?php if(!empty($asite_options['option_contact'])&& isset($asite_options['option_contact'])): // check option contact in theme option?>
                        <div class="form-group">
                            <?php echo do_shortcode($asite_options['option_contact']); ?>
                        </div>
                    <?php endif; // end check option_contact?>
                </div>
            </div>
            <?php if(!empty($asite_options['option_map']) && isset($asite_options['option_map'])): // check option on/off map in theme option ?>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="google-map">
                    <div class="map-header">
                        <?php if(!empty($asite_options['option_marker']) && isset($asite_options['option_marker'])): ?>
                        <div id="marker-content"><?php echo $asite_options['option_marker']?></div>
                    <?php else: ?>
                            <div id="marker-content">ул. Покровка, 14/2, стр 01</div>
                    <?php endif; // end check option_marker (text in marker)?>
                    </div>
                    <div id="map-canvas" class="location-map"></div>
                    <script type='text/javascript'>
                        /* <![CDATA[ */
                        var wpdata = {
                            "url": "http:\/\/viethousecafe.ru\/\/",
                            "td": "http:\/\/viethousecafe.ru\/wp-content\/themes\/AsiteRestaurant\/template\/viethouse\/img\/"
                        };
                        var geo = {"map": "1", "lat": "<?php echo $asite_options['option_lat']?>", "lon": "<?php echo $asite_options['option_lon']?>"};
                        var flickr = {"id": "52617155@N08", "limit": "15"};
                        var color = {"code": "#fc6f5c"};
                        /* ]]> */
                    </script>
                </div>
            </div>
            <?php endif; // end check option_map?>
        </div>
    </div>
    <a href="#" class="scrollup"> button</a>
</div>