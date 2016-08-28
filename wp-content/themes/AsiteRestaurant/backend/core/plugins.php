<?php
/**
 * File Name: plugin.php
 * Date: 28-08-2016
 * Time: 12:28
 * Description:
 */
function asite_plugin_activation(){
    $plugins=array(
        // khai bao plugin can cai dat
        array(
            'name'=>'Redux Framework',
            'slug'=>'redux-framework',
            'required'=>true

        ),
    );
    // config TGM
    $configs=array(
        'menu' => 'asite_plugin_install',
        'has_notice' => true,
        'dismissable' => false,
        'is_automatic' => true
    );
    tgmpa( $plugins, $configs );

}
add_action('tgmpa_register','asite_plugin_activation')
?>