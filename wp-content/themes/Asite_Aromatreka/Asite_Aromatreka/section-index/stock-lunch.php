<?php global $asite_options;?>
<div class="header_widget_top">
    <div class="header_widget_top_left">
        <img src="<?php echo IMG_FOLDER.'/header_widget_head.png'?>">
    </div>
    <div class="header_widget_top_right">
        <p>Cейчас</p>
        <p>идёт</p>
        <p>акция</p>
        <!-- Modal window for discount -->
        <!-- Button trigger modal -->
        <a type="button" class="btn button" data-toggle="modal" data-target="#discount">Показать</a>
        <!-- END Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="discount" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Акция</h4>
                    </div>
                    <div class="modal-body">
                        <?php echo !empty($asite_options['option_stock_img']) ?
                            '<img src='.$asite_options['option_stock_img']['url'].' alt="">':'' ?>
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
        <!-- END Modal window for discount -->
    </div>
</div>