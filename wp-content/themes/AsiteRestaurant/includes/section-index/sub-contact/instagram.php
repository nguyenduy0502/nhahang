<?php
/**
 * File Name: instagram.php
 * Date: 31-08-2016
 * Time: 22:10
 * Description: Show image from instagram
 */
global $asite_options;
$access_token = '1591885187.44a5744.87e84a6f76394d60a2f19f8d9b53582a';
?>
    <div class="section-title">
        <?php if(!empty($asite_options['option_title_gallery']) && isset($asite_options['option_title_gallery'])):?>
        <h1><?php echo $asite_options['option_title_gallery'];?></h1>
    <?php endif; // end check option_title_gallery?>
        <?php if(!empty($asite_options['option_desc_gallery']) && isset($asite_options['option_desc_gallery'])):?>
        <h2><?php echo $asite_options['option_desc_gallery'];?></h2>
    <?php endif; //option_desc_gallery?>
    </div>
    <div class="contact-us-background"></div>
<?php if(empty($asite_options['option_switch_insta'])): ?>
<?php /*==============================GET BY ID INSTAGRAM================================================*/?>
<?php if(!empty($asite_options['option_id_insta']) && isset($asite_options['option_id_insta'])): // check option_id_insta?>
    <?php
    $id_users=$asite_options['option_id_insta'];
    $return = processURL('https://api.instagram.com/v1/users/'.$id_users.'/media/recent/?access_token=' . $access_token);
    $decoded_results = json_decode($return, true);
    $count=0;
    ?>
    <?php foreach($decoded_results['data'] as $item):?>
<div class="col-md-6">
    <div class="ih-item square colored effect6 bottom_to_top"><a href="#">
            <div class="img"><img src="<?php echo $item['images']['standard_resolution']['url']?>"
                                  alt="test"></div>
            <div class="info">
                <h3><?php echo nguyenduy_excerpt($item['caption']['text'],100);?></h3>
                <p>#<?php //echo $item['tags'][0]?>viethousemoscow</p>
            </div>
        </a></div>
</div>

        <?php $count++; if($count==4) break; // get 4 images?>

        <?php endforeach; ?>
<?php endif; // end check for option_id_insta?>
<?php /*============================== END GET BY ID INSTAGRAM================================================*/?>
<?php else: ?>
<?php /*==============================GET BY HASHTAG================================================*/?>
<?php if(!empty($asite_options['option_tags_insta']) && isset($asite_options['option_tags_insta'])): // check option_tags_insta?>
    <?php
    $hashtag=$asite_options['option_tags_insta'];
    $return = processURL('https://api.instagram.com/v1/tags/' . $hashtag . '/media/recent?access_token=' . $access_token);
    $decoded_results = json_decode($return, true);
    $count=0;
    ?>
    <?php foreach($decoded_results['data'] as $item):?>
        <div class="col-md-6">
            <div class="ih-item square colored effect6 bottom_to_top"><a href="#">
                    <div class="img"><img src="<?php echo $item['images']['standard_resolution']['url']?>"
                                          alt="test"></div>
                    <div class="info">
                        <h3><?php echo nguyenduy_excerpt($item['caption']['text'],100);?></h3>
                        <p>#<?php echo $item['tags'][0];?></p>
                    </div>
                </a></div>
        </div>

        <?php $count++; if($count==4) break; // get 4 images?>

    <?php endforeach; ?>
<?php endif; // end check for option_tags_insta?>
<?php endif; ?>