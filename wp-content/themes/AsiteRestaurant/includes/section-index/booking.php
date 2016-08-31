<!-- <div class="booking section clearfix" id="section4" data-anchor="booking"> -->
<?php global $asite_options; ?>
<?php if (!empty($asite_options['option_booking']) && isset($asite_options['option_booking'])):// check option_booking?>
    <div class="booking section clearfix" id="booking">
        <div class="container">
            <div class="row">
                <div class="booking-info clearfix col-centered">
                    <div class="section-title">
                        <?php if (!empty($asite_options['option_booking_title']) && isset($asite_options['option_booking_title'])): ?>
                            <h1><?php echo $asite_options['option_booking_title']; ?></h1>
                        <?php endif; ?>
                        <?php if(!empty($asite_options['option_booking_desc']) && isset($asite_options['option_booking_desc'])):?>
                        <h2><?php echo $asite_options['option_booking_desc']; ?></h2>
        <?php endif; ?>
                    </div>
                    <?php //get_template_part('includes/sidebar/booking'); // get template booking?>
                    <?php echo rtb_print_booking_form(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; // end check option_booking?>