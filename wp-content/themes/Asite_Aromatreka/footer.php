<?php global $asite_options; ?>
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
                                '<a href=' . $asite_options['option_socail_fb'] . '><img src=' . IMG_FOLDER . './pink-social/004-social.png' . '></a>' : '' ?>

                            <?php echo !empty($asite_options['option_socail_insta']) ?
                                '<a href=' . $asite_options['option_socail_insta'] . '><img src=' . IMG_FOLDER . './pink-social/003-instagram-logo.png' . '></a>' : '' ?>

                            <?php echo !empty($asite_options['option_socail_mail']) ?
                                '<a href=' . $asite_options['option_socail_mail'] . '><img src=' . IMG_FOLDER . './pink-social/002-email.png' . '></a>' : '' ?>

                            <?php echo !empty($asite_options['option_socail_vk']) ?
                                '<a href=' . $asite_options['option_socail_vk'] . '><img src=' . IMG_FOLDER . './pink-social/001-vk-social-logotype.png' . '></a>' : '' ?>

                        </div>
                        <!-- END Footer Social -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Section Footer -->

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYXNpdGVpdCIsImEiOiJjajJmNzh0YmYwNm0xMndvODRld2dtcjV6In0.tJtxkOARDLQwBeZtcqkPDw';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v10',
            center: [37.68037402521972, 55.76202860276379],
            zoom: 16
        });
        map.on('load', () = > {
            map.loadImage('./template/dist/img/location.png', (error, image) = > {
            if (error) throw error;
        map.addImage('cat', image);
        map.addLayer({
            "id": "points",
            "type": "symbol",
            "source": {
                "type": "geojson",
                "data": {
                    "type": "FeatureCollection",
                    "features": [{
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [37.68037402521972, 55.76202860276379]
                        }
                    }]
                }
            },
            "layout": {
                "icon-image": "cat",
                "icon-size": 0.25
            }
        });
        })
        ;
        })
        ;

    </script>
    </body>
    </html>
<?php wp_footer(); ?>