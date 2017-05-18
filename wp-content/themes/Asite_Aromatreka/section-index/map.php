<?php global $asite_options;?>
<div class="map">
    <div class="row">
        <div class="col-md-6 no-padding">
            <div id='map'>
            </div>
        </div>
        <div class="col-md-6 no-padding">
            <!-- Gallery -->
            <div class="gallery">
                <div class="owl-carousel">
                  <?php foreach ($asite_options['option_slides'] as $slide):?>
                    <div class="gallery-content">
                        <img src="<?php echo $slide['image']?>" alt="<?php echo $slide['description']?>">
                    </div>

                    <?php endforeach;?>
                </div>
            </div>
            <!-- END Gallery -->
        </div>
    </div>
</div>
