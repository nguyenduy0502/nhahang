
<?php
/**
 * File Name: comments.php
 * Date: 31-08-2016
 * Time: 22:58
 * Description:
 */
?>
<?php global $asite_options;?>
<?php if(!empty($asite_options['option_number_cm']) && isset($asite_options['option_number_cm'])): // check option_number_cm?>
<div class="col-md-12">
    <div class="owl-carousel2 testimonial">
        <?
        !empty($asite_options['option_order_cm'])&&isset($asite_options['option_order_cm'])?$orderby=$asite_options['option_order_cm']:$orderby='comment_date_gmt';
        $args=array(
            'orderby'=>$orderby,
            'status'=>'approve',
            'number'=>$asite_options['option_number_cm']
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
<?php endif; // option_number_cm?>