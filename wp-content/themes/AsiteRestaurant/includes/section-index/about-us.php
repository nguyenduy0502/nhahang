<!-- <div class="about-us section" id="section1" data-anchor="about-us"> -->
<?php global $asite_options; ?>
<?php
if (!empty($asite_options['option_page_about_us']) && isset($asite_options['option_page_about_us'])):  // check value ?>
<div class="about-us section" id="about-us">
    <div class="container">

            <div class="row">
                <?php $id = $asite_options['option_page_about_us']; ?>
                <div class="section-title about-us-title">
                    <h1>О нас</h1>
                    <a href="<?php echo get_the_permalink($id); ?>" title="<?php echo get_the_title($id); ?>">
                        <h2><?php echo get_the_title($id); ?><h2>
                    </a>
                </div>
                <div class="row-about-us clearfix">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php if (!empty($asite_options['option_desc_about_us']) && isset($asite_options['option_desc_about_us'])): ?>
                            <div class="about-us-text">
                                <p><?php echo $asite_options['option_desc_about_us'] ?><br/></p>
                            </div>
                        <?php endif; // end check option description
                        ?>
                    </div>
                    <div class="border-line col-xs-8 col-xs-offset-2">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="au-fact clearfix">
                            <div class="col-md-4 col-xs-12">
                                <p>Время работы</p>
                                <?php if (!empty($asite_options['option_hours_work']) && isset($asite_options['option_hours_work'])): // check option hours work?>
                                    <i class="fa fa-coffee" aria-hidden="true"></i>
                                    <span><?php echo $asite_options['option_hours_work'];?></span>
                                <?php endif; // end check option hours work
                                ?>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <p>Средний чек</p>
                                <?php if(!empty($asite_options['option_ave_bill']) && isset($asite_options['option_ave_bill'])): // check option_ave_bill?>
                                <i class="fa fa-apple" aria-hidden="true"></i>
                                <span><?php echo $asite_options['option_ave_bill']; ?></span>
                                <?php endif; // end check option_ave_bill?>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <p>В нашем меню</p>
                                <?php if(!empty($asite_options['option_quantity_food']) && isset($asite_options['option_quantity_food'])):// check option_quantity_food?>
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                                <span><?php echo $asite_options['option_quantity_food'];?></span>
                                <?php endif; // end check option_quantity_food?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>
<?php endif; // end check value?>