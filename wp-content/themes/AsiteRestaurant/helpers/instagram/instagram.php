<?php
function processURL($url)
{
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => 2
    ));
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
$id_users=12;
$access_token = '1591885187.44a5744.87e84a6f76394d60a2f19f8d9b53582a';
$tag = 'nguyenduy0502';
//$return = processURL('https://api.instagram.com/v1/tags/' . $tag . '/media/recent?access_token=' . $access_token);
$return = processURL('https://api.instagram.com/v1/users/'.$id_users.'/media/recent/?access_token=' . $access_token);
$decoded_results = json_decode($return, true);
foreach($decoded_results['data'] as $item){
    $image_link = $item['images']['thumbnail']['url'];
    echo '<img src="'.$image_link.'" />';
}
?>