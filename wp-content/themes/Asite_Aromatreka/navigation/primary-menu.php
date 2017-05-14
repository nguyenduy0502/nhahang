<?php global $asite_options; ?>
<div class="header_left">

    <!-- Header Menu -->
    <div class="header_menu">
        <ul>
            <li><a href="<?php echo home_url(); ?>">Главная</a></li>
            <li><a href="#menu">Меню</a></li>

            <!-- Modal window for reserve -->
            <!-- Button trigger modal -->
            <li><a type="button" class="btn" data-toggle="modal" data-target="#reserve">Забронировать</a>
            </li>
            <!-- END Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="reserve" tabindex="-1" role="dialog"
                 aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Забронировать</h4>
                        </div>
                        <div class="modal-body"><?php echo rtb_print_booking_form();?></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Modal -->
            <!-- END Modal window for reserve -->

            <!-- Modal window for comments -->
            <!-- Button trigger modal -->
            <li><a type="button" class="btn" data-toggle="modal" data-target="#comments">Отзывы</a>
            </li>
            <!-- END Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="comments" tabindex="-1" role="dialog"
                 aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Отзывы</h4>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Modal -->
            <!-- END Modal window for comments -->

            <!-- Modal window for contact -->
            <!-- Button trigger modal -->
            <li><a type="button" class="btn" data-toggle="modal" data-target="#contact">Контакт</a>
            </li>
            <!-- END Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="contact" tabindex="-1" role="dialog"
                 aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Контакт</h4>
                        </div>
                        <div class="modal-body">
                            <?php if (!empty($asite_options['option_contact_form'])): ?>
                            <?php echo do_shortcode($asite_options['option_contact_form'])?>
                            <?php else:?>
                            <p>
                                Адрес:
                                <?php echo !empty($asite_options['option_contact_address']) ? $asite_options['option_contact_address'] : '' ?>
                                Телефон:
                                <?php echo !empty($asite_options['option_contact_phone_1']) ? $asite_options['option_contact_phone_1'] : '' ?>
                                <?php echo !empty($asite_options['option_contact_phone_2']) ? $asite_options['option_contact_phone_2'] : '' ?>
                                <?php echo !empty($asite_options['option_contact_phone_3']) ? $asite_options['option_contact_phone_3'] : '' ?>

                            </p>
                            <?php endif;?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Modal -->
            <!-- END Modal window for contact -->
        </ul>
    </div>
    <!-- END Header Menu -->

    <!-- Header Social -->
    <div class="header_social">
        <a href="#"><img src="<?php echo IMG_FOLDER . '/social/004-facebook-logo-button.png' ?>"></a>
        <a href="#"><img src="<?php echo IMG_FOLDER . '/social/002-instagram-logo.png' ?>"></a>
        <a href="#"><img src="<?php echo IMG_FOLDER . '/social/001-email.png' ?>"></a>
        <a href="#"><img src="<?php echo IMG_FOLDER . '/social/003-vk-social-logotype.png' ?>"></a>
    </div>
    <!-- END Header Social -->

</div>