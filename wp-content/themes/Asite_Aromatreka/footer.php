<?php global $asite_options; ?>
<?php wp_footer(); ?>
<!-- Section Footer -->
<div class="footer">
    <div class="inner-top"></div>
    <div class="inner-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- Footer Address -->
                    <div class="footer_adress">
                        <div class="footer_adress_head">
                            Адрес:
                        </div>
                        <?php echo !empty($asite_options['option_contact_address']) ?
                            ' <div class="footer_adress_subhead">' . $asite_options['option_contact_address'] . '</div>' : '' ?>

                    </div>
                    <!-- END Footer Address -->
                </div>
                <div class="col-md-4">
                    <!-- Footer Contact -->
                    <div class="footer_contact">
                        <div class="footer_contact_head">
                            Телефон:
                        </div>
                        <div class="footer_contact_subhead">
                            <ul>
                                <?php echo !empty($asite_options['option_contact_phone_1']) ?
                                    '<li>' . $asite_options['option_contact_phone_1'] . '</li>' : '';
                                ?>
                                <?php echo !empty($asite_options['option_contact_phone_2']) ?
                                    '<li>' . $asite_options['option_contact_phone_2'] . '</li>' : '';
                                ?>
                                <?php echo !empty($asite_options['option_contact_phone_3']) ?
                                    '<li>' . $asite_options['option_contact_phone_3'] . '</li>' : '';
                                ?>

                            </ul>
                        </div>
                    </div>
                    <!-- END Footer Contact -->
                </div>
                <div class="col-md-4">
                    <!-- Footer Social -->
                    <div class="footer_social">
                        <?php echo !empty($asite_options['option_socail_fb']) ?
                            '<a href=' . $asite_options['option_socail_fb'] . '><img src=' . IMG_FOLDER . '/pink-social/004-social.png' . '></a>' : '' ?>

                        <?php echo !empty($asite_options['option_socail_insta']) ?
                            '<a href=' . $asite_options['option_socail_insta'] . '><img src=' . IMG_FOLDER . '/pink-social/003-instagram-logo.png' . '></a>' : '' ?>

                        <?php echo !empty($asite_options['option_socail_mail']) ?
                            '<a href=' . $asite_options['option_socail_mail'] . '><img src=' . IMG_FOLDER . '/pink-social/002-email.png' . '></a>' : '' ?>

                        <?php echo !empty($asite_options['option_socail_vk']) ?
                            '<a href=' . $asite_options['option_socail_vk'] . '><img src=' . IMG_FOLDER . '/pink-social/001-vk-social-logotype.png' . '></a>' : '' ?>

                    </div>
                    <!-- END Footer Social -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 no-padding">
                    <div id='map'></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Section Footer -->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK514w6GAGOtGhrTiIb_pXcxEr_33yts4&callback=initMap">
</script>
<script>
    function initMap() {
        var uluru = {lat: 55.762104, lng: 37.681231};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: uluru
        });

        var image = {
            url: './wp-content/themes/Asite_Aromatreka/template/dist/img/location.png',
            scaledSize: new google.maps.Size(50, 50), // scaled size
            origin: new google.maps.Point(0, 0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: image
        });
    }

</script>
</body>
</html>
