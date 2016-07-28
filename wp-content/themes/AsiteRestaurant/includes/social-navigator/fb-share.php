<?php
/**
 * File Name: fb-share.php
 * Date: 28-07-2016
 * Time: 17:01
 * Description:
 */
?>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=273681262992709";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="<?php the_permalink();?>" data-layout="button" data-action="like"
     data-size="small" data-show-faces="true" data-share="true"></div>
<div class="fb-send" data-href="<?php the_permalink();?>" data-size="small"></div>
