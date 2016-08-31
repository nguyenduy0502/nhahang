<!-- <div class="contact-us section" id="section5" data-anchor="contact-us"> -->
<?php global $asite_options; // global variable theme option ?>
<div class="contact-us section" id="contact-us">
    <div class="gallery col-md-6">
        <?php get_template_part('includes/section-index/sub-contact/instagram')// get template instagram?>
        <?php get_template_part('includes/section-index/sub-contact/comments')// get template comments?>

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