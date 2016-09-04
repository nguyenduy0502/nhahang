<?php
/**
 * File Name: options.php
 * Date: 28-08-2016
 * Time: 12:47
 * Description: Main options theme options
 */


/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if (!class_exists('Redux')) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "asite_options";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name' => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name' => $theme->get('Name'),
    // Name that appears at the top of your panel
    'display_version' => $theme->get('Version'),
    // Version that appears at the top of your panel
    'menu_type' => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu' => true,
    // Show the sections below the admin menu item or not
    'menu_title' => __('Asite Theme Options', 'asite'),
    'page_title' => __('Asite Theme Options', 'asite'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key' => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography' => true,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar' => true,
    // Show the panel pages on the admin bar
    'admin_bar_icon' => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority' => 50,
    // Choose an priority for the admin bar menu
    'global_variable' => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode' => true,
    // Show the time the page took to load, etc
    'update_notice' => true,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer' => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

    // OPTIONAL -> Give you extra features
    'page_priority' => null,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent' => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions' => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon' => '',
    // Specify a custom URL to an icon
    'last_tab' => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon' => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug' => 'asite_options',
    // Page slug used to denote the panel
    'save_defaults' => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show' => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark' => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export' => true,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time' => 60 * MINUTE_IN_SECONDS,
    'output' => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag' => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database' => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

    'use_cdn' => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    //'compiler'             => true,

    // HINTS
    'hints' => array(
        'icon' => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color' => 'lightgray',
        'icon_size' => 'normal',
        'tip_style' => array(
            'color' => 'light',
            'shadow' => true,
            'rounded' => false,
            'style' => '',
        ),
        'tip_position' => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect' => array(
            'show' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'mouseover',
            ),
            'hide' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'click mouseleave',
            ),
        ),
    )
);

// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
$args['admin_bar_links'][] = array(
    'id' => 'redux-docs',
    'href' => 'http://docs.reduxframework.com/',
    'title' => __('Documentation', 'redux-framework-demo'),
);

$args['admin_bar_links'][] = array(
    //'id'    => 'redux-support',
    'href' => 'https://github.com/ReduxFramework/redux-framework/issues',
    'title' => __('Support', 'redux-framework-demo'),
);

$args['admin_bar_links'][] = array(
    'id' => 'redux-extensions',
    'href' => 'reduxframework.com/extensions',
    'title' => __('Extensions', 'redux-framework-demo'),
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args['share_icons'][] = array(
    'url' => 'https://github.com/ReduxFramework/ReduxFramework',
    'title' => 'Visit us on GitHub',
    'icon' => 'el el-github'
    //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
);
$args['share_icons'][] = array(
    'url' => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
    'title' => 'Like us on Facebook',
    'icon' => 'el el-facebook'
);
$args['share_icons'][] = array(
    'url' => 'http://twitter.com/reduxframework',
    'title' => 'Follow us on Twitter',
    'icon' => 'el el-twitter'
);
$args['share_icons'][] = array(
    'url' => 'http://www.linkedin.com/company/redux-framework',
    'title' => 'Find us on LinkedIn',
    'icon' => 'el el-linkedin'
);

// Panel Intro text -> before the form
if (!isset($args['global_variable']) || $args['global_variable'] !== false) {
    if (!empty($args['global_variable'])) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace('-', '_', $args['opt_name']);
    }
    $args['intro_text'] = sprintf(__('<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo'), $v);
} else {
    $args['intro_text'] = __('<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo');
}

// Add content after the form.
$args['footer_text'] = __('<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo');

Redux::setArgs($opt_name, $args);

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */

$tabs = array(
    array(
        'id' => 'redux-help-tab-1',
        'title' => __('Theme Information 1', 'redux-framework-demo'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
    ),
    array(
        'id' => 'redux-help-tab-2',
        'title' => __('Theme Information 2', 'redux-framework-demo'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
    )
);
Redux::setHelpTab($opt_name, $tabs);

// Set the help sidebar
$content = __('<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo');
Redux::setHelpSidebar($opt_name, $content);


/*
 * <--- END HELP TABS
 */


/*
 *
 * ---> START SECTIONS
 *
 */

/*

    As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


 */

// -> START Basic Fields
/*===================================Slider Options================================= */

Redux::setSection($opt_name, array( // slides options
    'title' => __('Header', 'asite'),
    'desc' => __('', 'asite'),
    'icon' => 'el el-home',
    'fields' => array(
        array(
            'id' => 'option_slides',
            'type' => 'slides',
            'title' => __('Slider', 'asite'),
            'desc' => __('Slider', 'asite'),
            'placeholder' => array(
                'title' => __('This is a title', 'asite'),
                'description' => __('Description Here', 'asite'),
                'url' => __('Give us a link!', 'asite'),
            )
        ),
        array(// this is field description about us
            'id'=>'option_head_title',
            'type'=>'text',
            'title'=>__('Title Head','asite')
        ),
        array(// this is field description about us
            'id'=>'option_head_desc',
            'type'=>'text',
            'title'=>__('Description Head','asite')
        ),
    )
));
/*===================================About us================================= */
Redux::setSection($opt_name,array(
    'title'=>__('About Us','asite'),
    'desc'=>__('About Us', 'asite'),
    'icon'=>'el el-adult',
    'fields'=>array(
        array( // this is field about us
            'id'=>'option_page_about_us',
            'type'=>'select',
            'args'=>array('post_type'=>'page','posts_per_page'=>-1),
            'data'=>'page',
            'title'=>__('Page About Us','asite')
        ),
        array(// this is field description about us
            'id'=>'option_desc_about_us',
            'type'=>'textarea',
            'title'=>__('Description About Us','asite')
        ),
        array(// this is field hours work
            'id'=>'option_hours_work',
            'type'=>'text',
            'title'=>__('Hours Work','asite')
        ),
        array(//this is field average bill
            'id'=>'option_ave_bill',
            'type'=>'text',
            'title'=>__('Average bill','asite')
        ),
        array(//this is Quantity food
            'id'=>'option_quantity_food',
            'type'=>'text',
            'title'=>__('Quantity Food','asite')
        )

    )
));
/*===================================New food================================= */
Redux::setSection($opt_name,array(
    'title'=>__('New Food','asite'),
    'desc'=>__('','asite'),
    'icon'=>'el el-braille',
    'fields'=>array(
        array(
            'id'=>'option_new_food',
            'type'=>'select',
            'multi'=>true,
            'args' => array('taxonomies'=>'cuisine', 'args'=>array()),
            'data'=>'terms',
            'desc'=>'Should choose two categories',
            'hint'=>array(
                'content'=>__('Should choose two categories','asite')
            ),
            'title'=>__('Categories food','asite')
        ),
        array(
            'id'=>'option_num_new_food',
            'type'=>'text',
            'title'=>__('Number display','asite'),
            'validate' => 'numeric'
        ),
        array(
            'id'=>'option_order_food',
            'type'=>'select',
            'title'=>__('Order By','asite'),
            'options'=>array(
                'date'=>'Newest to oldest',
                'rand'=>'Random'
            )
        )

    )
));
/*===================================Lunch================================= */
Redux::setSection($opt_name,array(
    'title'=>__('Lunch','asite'),
    'desc'=>__('Lunch','asite'),
    'icon'=>'el el-check',
    'fields'=>array(
        array(// this is field choose lunch
            'id'=>'option_name_lunch',
            'type'=>'select',
            'args'=>array('post_type'=>'menu','posts_per_page'=>-1),
            'data'=>'posts',
            'title'=>__('Name Menu Lunch','asite')
        ),
        array(// this is field description menu
            'id'=>'option_desc_menu',
            'type'=>'text',
            'title'=>__('Description','asite'),
            'placeholder'=>'350 руб.',
            'hint'=>array(
                'content'=>'You can write price'
            )
        )

    )
));
/*===================================Booking================================= */
Redux::setSection($opt_name,array(
    'title'=>__('Booking','asite'),
    'desc'=>__('',''),
    'icon'=>'el el-address-book',
    'fields'=>array(
        array(
            'id'=>'option_booking_title',
            'type'=>'text',
            'desc'=>__('Title section booking','asite'),
            'title'=>__('Title section booking','asite')
        ),
        array(
            'id'=>'option_booking_desc',
            'type'=>'text',
            'desc'=>__('Description section booking','asite'),
            'title'=>__('Description section booking','asite')
        ),
        array(
            'id'=>'option_booking',
            'type'=>'switch',
            'desc'=>__('Enable/Disable section booking','asite'),
            'title'=>__('Enable/Disable Section booking','asite')
        )
    )
));
/*===================================News================================= */
Redux::setSection($opt_name,array(
    'title'=>__('News','asite'),
    'desc'=>__('','asite'),
    'icon'=>'el el-file-alt',
    'fields'=>array(
        array(
            'id'=>'option_title_news',
            'type'=>'text',
            'desc'=>__('Title section news','asite'),
            'title'=>__('Title section news','asite')
        ),
        array(
            'id'=>'option_desc_news',
            'title'=>__('Description section news','asite'),
            'type'=>'text',
            'desc'=>__('Description section news','asite'),
        ),
        array(
            'id'=>'option_category_news',
            'type'=>'select',
            'title'=>__('Category','asite'),
            'desc'=>__('Category of posts','asite'),
            'data'=>'categories'
        ),
        array(
            'id'=>'option_number_news',
            'type'=>'select',
            'title'=>__('Number of post','asite'),
            'hint'=>array(
                'content'=>__('Should choose two post','asite')
            ),
            'options'=>array(
                '1'=>__('1 post','asite'),
                '2'=>__('2 post','asite'),
                '3'=>__('3 post','asite')
            )
        )
    )
));
/*===================================Contact================================= */
Redux::setSection($opt_name, array( // Contact options
    'title' => __('Contact', 'asite'),
    'icon' => 'el el-phone-alt',
    'fields' => array(
        array(
            'id' => 'option_contact',
            'type' => 'text',
            'title' => __('Short Code Contact 7', 'asite'),
            'desc' => __('Short Code Contact 7', 'asite'),
            'placeholder' => '[contact-form-7 id="3893" title="Contact form"]',
            'hint' => array(
                'content' => 'You need install plugin contact form 7',
            )
        ),
        array(
            'id'=>'option_lat',
            'type'=>'text',
            'title'=>__('Latitude','asite'),
            'placeholder'=>'453453,1',
            'hint'=>array(
                'content'=>'Find latitude in http://www.latlong.net/'
            ),
            'validate' => 'numeric'
        ),
        array(
            'id'=>'option_lon',
            'type'=>'text',
            'title'=>__('Longitude','asite'),
            'placeholder'=>'553453,1',
            'hint'=>array(
                'content'=>'Find longitude in http://www.latlong.net/'
            ),
            'validate' => 'numeric'
        ),
        array(
            'id'=>'option_marker',
            'type'=>'textarea',
            'title'=>__('Text Map Marker','asite'),
            'placeholder'=>'ул. Покровка, 14/2, стр 01, Moscow',
        ),
        array(
            'id' => 'option_map',
            'type' => 'switch',
            'title' => __('Enable/Disable Map', 'asite'),

        )
    )

));
/*===================================Gallery================================= */
Redux::setSection($opt_name,array(
    'title'=>__('Gallery','asite'),
    'icon'=>'el el-picture',
    'fields'=>array(
        array(
            'id'=>'option_title_gallery',
            'type'=>'text',
            'desc'=>__('Title in section Gallery','asite'),
            'title'=>__('Title in section Gallery','asite')
        ),
        array(
            'id'=>'option_desc_gallery',
            'type'=>'text',
            'desc'=>__('Description in section Gallery','asite'),
            'title'=>__('Description in section Gallery','asite')
        ),
        array(
            'id'=>'option_id_insta',
            'type'=>'text',
            'desc'=>__('ID or Username instagram','asite'),
            'title'=>__('ID or Username instagram','asite'),
        ),
        array(
            'id'=>'option_tags_insta',
            'type'=>'text',
            'desc'=>__('Without #','asite'),
            'title'=>__('Hashtag','asite')
        ),
        array(
            'id'=>'option_switch_insta',
            'type'=>'switch',
            'desc'=>__('Enabled/Disabled hashtag','asite'),
            'title'=>__('Enabled/Disabled hashtag','asite')
        ),
        array(
            'id'=>'option_number_cm',
            'type'=>'text',
            'desc'=>__('Number display comments','asite'),
            'title'=>__('Number display comments','asite'),
            'validate' => 'numeric'
        ),
        array(
            'id'=>'option_order_cm',
            'type'=>'select',
            'title'=>__('Order by','asite'),
            'options'=>array(
                'comment_date'=>__('Newest to oldest'),
                'comment_content'=>__('Content','asite')
            )
        )


    )
));
 /*===================================Footer Information================================= */
Redux::setSection($opt_name, array(
    'title' => __('Footer', 'asite'),
    'desc' => __('Information in footer', 'asite'),
    'icon' => 'el el-share',
    'fields' => array(
        array( // this is field facebook
            'id' => 'option_fb',
            'type' => 'text',
            'title' => __('URL Facebook', 'asite'),
            'desc' => 'URL facebook',
            'placeholder' => 'http://facebook.com/asite.it'
        ),
        array( // this is field google plus
            'id' => 'option_gg',
            'type' => 'text',
            'title' => __('URL Google Plus', 'asite'),
            'desc' => 'URL Google Plus',
            'placeholder' => 'http://plus.google.com'
        ),
        array(// this is field youtube
            'id' => 'option_youtube',
            'type' => 'text',
            'title' => __('URL Youtube', 'asite'),
            'desc' => 'URL Youtube',
            'placeholder' => 'http://youtube.com/viethousecafe.ru'
        ),
        array( // this is field vk
            'id' => 'option_vk',
            'type' => 'text',
            'title' => __('URL VK', 'asite'),
            'desc' => 'URL VK',
            'placeholder' => 'http://vk.com/12345'

        ),
        array( // this is field instagram
            'id' => 'option_insta',
            'type' => 'text',
            'title' => __('URL Instagram', 'asite'),
            'desc' => 'URL instagram',
            'placeholder' => 'http://instagram.com/12345'

        ),
        array( // this is field address
            'id' => 'option_address',
            'type' => 'textarea',
            'title' => __('Address ', 'asite'),
            'desc' => 'Address',
            'placeholder' => 'Short description of address'


        )

    )
));





/*
 * <--- END SECTIONS
 */
?>