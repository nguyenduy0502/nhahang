<?php global $asite_options;?>
<!-- Section Map -->
<div class="gallery" id="gallery">
    <div class="row">
        <div class="col-md-12 no-padding">
            <!-- Gallery -->
            <div class="gallery-content">
                <div class="owl-carousel owl-theme" id="gallery-slider">
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
<!-- END Section Map -->
