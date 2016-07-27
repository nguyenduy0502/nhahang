<?php
/**
 * File Name: archive.php
 * Date: 29-06-2016
 * Time: 0:36
 * Description:
 */
?>
<div class="page-content clearfix">

    <div class="archive-menu">

        <div class="archive-menu-name">
            <h2>Menu</h2>
        </div>
        <div class="archive-menu-content">
            <?php if(have_posts()):while(have_posts()):the_post();?>
            <div class="amc-item">
                <div class="amc-item-npr">
                    <div class="amc-item-n"><a href="">thong tin</a></div>
                    <div class="amc-item-pr">Giới thiệu qua về menu</div>
                </div>
                <div class="amc-item-consist">
                    bỏ
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>


</div>
